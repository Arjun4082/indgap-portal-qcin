<?php

session_start();
unset($_SESSION['Cluster_Registration_ID']);
unset($_SESSION['CEmail']);
header("Location: index.php");
?> 
