<?php

session_start();
unset($_SESSION['cb_user_id']);
unset($_SESSION['cb_Name']);
unset($_SESSION['cb_Email']);
unset($_SESSION['cb_Mobile']);
header("Location: home2.php");
?> 
