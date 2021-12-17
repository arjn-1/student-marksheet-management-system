<?php

session_start();//here continuing the previous started session
session_destroy();//destroy the session
header("location: login.php");//reddirect to login page
exit;
?>