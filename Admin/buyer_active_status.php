<?php
session_start();


error_reporting(0);
include("include/connection.php");
$statusId  = $_GET['BuyerActive'];
$Update = "UPDATE `buyer_registration` SET Account_Status='Active' WHERE Buyer_Registration_ID = '$statusId'";
$Execute = mysqli_query($db,$Update);
if($Execute == TRUE)
{
    echo "<script>alert('Status Changed')</script>";
    echo '<script>window.location.href ="buyer_accounts.php"</script>';
}
else
{
    echo "<script>alert('Status not Changed')</script>";
    echo '<script>window.location.href ="buyer_accounts.php"</script>';
}
?>