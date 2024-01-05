<?php

session_start();
error_reporting(0);
if ($_SESSION['FPO_Registration_ID'] == '') {
    header("Location: fpo-login.php");
}
include "connection.php";
$id = $_GET['filename'];
$delete = "DELETE FROM `farmers` WHERE FileName='$id'";
$execute = mysqli_query($db,$delete);
if($execute == TRUE)
{
    echo "<script>alert('Successfully Deleted.')</script>";
    echo "<script>window.location.href='farmer-files.php'</script>";
}
else
{
    echo "<script>alert('Sorry Can't Delete, Try Again.')</script>";
}
?>