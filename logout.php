<?php

session_start();
unset($_SESSION['FPO_Registration_ID']);
unset($_SESSION['Email']);
header("Location: index.php");
?> 
