<?php
session_start();
error_reporting(0);


include("include/connection.php");
$statusId  = $_GET['ClusterActive'];
$Update = "UPDATE `cluster_registration` SET Account_Status='Active' WHERE Cluster_Registration_ID = '$statusId'";
$Execute = mysqli_query($db,$Update);
if($Execute == TRUE)
{
    echo "<script>alert('Status Changed')</script>";
    echo '<script>window.location.href ="cluster_accounts.php"</script>';
}
else
{
    echo "<script>alert('Status not Changed')</script>";
    echo '<script>window.location.href ="cluster_accounts.php"</script>';
}
?>