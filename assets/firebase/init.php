<?php
require 'vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory())
    ->withDatabaseUri('https://battery-serving-station-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();
?>
