<?php
echo json_encode(['status' => 'success', 'message' => 'LED is on']);

// $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 17 out");

// if (isset($_GET['on'])) {
//         $gpio_on = shell_exec("/usr/local/bin/gpio -g write 17 1");
//         echo json_encode(['status' => 'success', 'message' => 'LED is on']);
// } else if (isset($_GET['off'])) {
//         $gpio_off = shell_exec("/usr/local/bin/gpio -g write 17 0");
//         echo json_encode(['status' => 'success', 'message' => 'LED is off']);
// } else {
//         echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
// }
