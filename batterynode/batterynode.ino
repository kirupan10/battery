int sw = 14;// door sensor //D5
int IR = 12;//slot ir  //D6
int Gate = 5;// ind led //D1
int alert_led = 4;  //D2

void setup() {
  pinMode(sw, INPUT);
  pinMode(IR, INPUT);
  pinMode(alert_led, OUTPUT);
  pinMode(Gate, OUTPUT);

  Serial.begin(9600);
}

int gt = 0;

int irs = 0;
void loop() {
  //digitalWrite(led, digitalRead(sw));

  if (Recive() == "A0") {
    digitalWrite(Gate, 1);
    delay(500);
    digitalWrite(Gate, 0);
  }

  if (digitalRead(IR) && irs == 0) {
    Serial.println("IR_detect");
    irs = 1;
  } else if (!digitalRead(IR) && irs == 1) {
    Serial.println("IR_detect_not");
    irs = 0;
  }


  // if (digitalRead(IR) && digitalRead(sw)) {
  //   digitalWrite(alert_led, 1);
  // } else {
  //   digitalWrite(alert_led, 0);
  // }

  digitalWrite(alert_led, (digitalRead(IR) && digitalRead(sw)));
}


String Recive() {
  char buffer[20] = "";
  if (Serial.available() > 0) {
    Serial.readBytesUntil('\n', buffer, 20);
  }
  return buffer;
}