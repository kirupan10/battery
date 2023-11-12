<?php
session_start();
if ($_SESSION["sign_in"] != true) {
    header("Location: sign-in.php");
    // xit;
} else {
    header("Location: dashboard.php");
}
