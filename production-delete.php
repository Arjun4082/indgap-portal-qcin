<?php

session_start();
error_reporting(0);
if ($_SESSION['FPO_Registration_ID'] == '') {
    header("Location: fpo-login.php");
}
include "connection.php";
$Production_ID  = $_GET['id'];
$query = mysqli_query($db, "UPDATE `production` SET DeletedStatus='1' where Production_ID ='$Production_ID' AND  FPO_Registration_ID = '$_SESSION[FPO_Registration_ID]'");
if ($query) {
    header("Location:view-production.php?msg=successd");
} else {
    header("Location:view-production.php?msg=faild");
} ?>