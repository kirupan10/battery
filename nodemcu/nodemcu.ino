
#include <Arduino.h>
#if defined(ESP32)
#include <WiFi.h>
#elif defined(ESP8266)
#include <ESP8266WiFi.h>
#endif
#include <Firebase_ESP_Client.h>

//Provide the token generation process info.
#include "addons/TokenHelper.h"
//Provide the RTDB payload printing info and other helper functions.
#include "addons/RTDBHelper.h"

// Insert your network credentials
#define WIFI_SSID "Redmi8"
#define WIFI_PASSWORD "12341234"

// Insert Firebase project API Key
#define API_KEY "AIzaSyDIohXgNNi7bUVynBkuv1yhd05Iwx6OXTE"

// Insert RTDB URLefine the RTDB URL */
#define DATABASE_URL "https://battery-serving-station-default-rtdb.firebaseio.com/"

//Define Firebase Data object
FirebaseData fbdo;

FirebaseAuth auth;
FirebaseConfig config;

unsigned long sendDataPrevMillis = 0;
int count = 0;
int intValue = 0;
int saveVal = 0;
bool signupOK = false;
int nodeno = 1;


//pins

int sw = 14;        // door sensor //D5
int IR = 12;        //slot ir  //D6
int Gate = 5;       // ind led //D1
int alert_led = 4;  //D2

int gt = 0;
int irs = 0;

void setup() {

  //pins
  pinMode(sw, INPUT);
  pinMode(IR, INPUT);
  pinMode(alert_led, OUTPUT);
  pinMode(Gate, OUTPUT);

  Serial.begin(115200);
  WiFi.begin(WIFI_SSID, WIFI_PASSWORD);
  Serial.print("Connecting to Wi-Fi");
  while (WiFi.status() != WL_CONNECTED) {
    Serial.print(".");
    delay(300);
  }
  Serial.println();
  Serial.print("Connected with IP: ");
  Serial.println(WiFi.localIP());
  Serial.println();

  /* Assign the api key (required) */
  config.api_key = API_KEY;

  /* Assign the RTDB URL (required) */
  config.database_url = DATABASE_URL;

  /* Sign up */
  if (Firebase.signUp(&config, &auth, "", "")) {
    Serial.println("ok");
    signupOK = true;
  } else {
    Serial.printf("%s\n", config.signer.signupError.message.c_str());
  }

  /* Assign the callback function for the long running token generation task */
  config.token_status_callback = tokenStatusCallback;  //see addons/TokenHelper.h

  Firebase.begin(&config, &auth);
  Firebase.reconnectWiFi(true);
}

void loop() {
  if (Firebase.ready() && signupOK && (millis() - sendDataPrevMillis > 5000 || sendDataPrevMillis == 0)) {
    sendDataPrevMillis = millis();
    // Write an Int number on the database path test/int
    Firebase.RTDB.setInt(&fbdo, "fromnode/node1/soc", random(0, 50));
    Firebase.RTDB.setInt(&fbdo, "fromnode/node1/soh", random(80, 100));
    Firebase.RTDB.setInt(&fbdo, "fromnode/node1/temp", random(27, 34));
    Firebase.RTDB.setInt(&fbdo, "fromnode/node1/charge", random(0, 100));

    if (digitalRead(IR) && irs == 0) {
      Serial.println("IR_detect");
      irs = 1;
    } else if (!digitalRead(IR) && irs == 1) {
      Serial.println("IR_detect_not");
      irs = 0;
    }
    Firebase.RTDB.setInt(&fbdo, "fromnode/node1/status", irs);

    if (digitalRead(sw) && gt == 0) {
      Serial.println("Door open");
      gt = 1;
    } else if (!digitalRead(sw) && gt == 1) {
      Serial.println("Door Close");
      gt = 0;
    }
    Firebase.RTDB.setInt(&fbdo, "fromnode/node1/isgate", gt);

    if (Firebase.RTDB.getInt(&fbdo, "fromnode/node1/gate")) {
      if (fbdo.dataType() == "int") {
        intValue = fbdo.intData();
        if (intValue == 1) {
          digitalWrite(Gate, 1);
          Serial.println("Gate Open");
        } else {
          digitalWrite(Gate, 0);
          Serial.println("Gate Close");
        }
      }
    }
  } else {
    Serial.println(fbdo.errorReason());
  }

  // if (Firebase.RTDB.setInt(&fbdo, "fromnode/int", count)){
  //   Serial.println("PASSED");
  //   Serial.println("PATH: " + fbdo.dataPath());
  //   Serial.println("TYPE: " + fbdo.dataType());
  // }
  // else {
  //   Serial.println("FAILED");
  //   Serial.println("REASON: " + fbdo.errorReason());
  // }
  // count++;

  // // Write an Float number on the database path test/float
  // if (Firebase.RTDB.setFloat(&fbdo, "test/float", 0.01 + random(0,100))){
  //   Serial.println("PASSED");
  //   Serial.println("PATH: " + fbdo.dataPath());
  //   Serial.println("TYPE: " + fbdo.dataType());
  // }
  // else {
  //   Serial.println("FAILED");
  //   Serial.println("REASON: " + fbdo.errorReason());
  // }
}