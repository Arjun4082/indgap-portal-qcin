<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['name']);


echo"<script>window.location.href = 'index.php'</script>";
?>