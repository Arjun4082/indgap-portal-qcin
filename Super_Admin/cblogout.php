<?php


session_start();
unset($_SESSION['super_admin_id']);
unset($_SESSION['super_email']);
header("Location: index.php");
// session_destroy();
// echo"<script>window.location.href = 'index.php'</script>";
?>