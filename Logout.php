<?php
session_start();
unset($_SESSION["login"]);
unset($_SESSION["username"]);
unset($_SESSION["orderID"]);
unset($_SESSION["check"]);
session_destroy();
header("Location:./Login.php");
?>