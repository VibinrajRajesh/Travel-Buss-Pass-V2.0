<?php
session_start();

session_unset();
session_destroy();

header("location: http://localhost/Travel%20Buss%20Pass/login.php");
exit;
?>