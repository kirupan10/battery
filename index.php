<?php 
session_start();
if($_SESSION["sign_in"] != true){
    header("Location: sign-in");
    xit;
}else{
    header("Location: dashboard");
}
?>
