<?php
session_start();
include_once('assets/inactive.php');
$_SESSION['last_activity'] = time();
session_destroy();
header('location:.');
