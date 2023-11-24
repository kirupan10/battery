<?php
require_once 'assets/firebase/init.php'; // Initialize Firebase
$users = $database->getReference('fromnode')->getValue();
if ($users) {
    foreach ($users as $id => $user) {
        //echo "<li>{$user['isgate']}</li>";
        if ($user['isgate'] != 1 || $user['isgate'] != 1){
        
                header("location: ./");
            
            
        }
    }
}
