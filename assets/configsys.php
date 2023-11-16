<?php
$_SESSION['last_activity'] = time();
require_once 'assets/firebase/init.php'; // Initialize Firebase
include_once('assets/inactive.php');

$gatestatus = $database->getReference('fromnode')->getValue();
     
foreach($gatestatus as $gate) {
         
    if(($user['isgate'] != 1)) {
        header("location: sysclose.php");
        die();
    }else{
        header("location: dashboard.php");
    }
}
?>