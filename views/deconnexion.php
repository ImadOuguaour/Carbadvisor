<?php
$url = $_SERVER['DOCUMENT_ROOT'].'/Carbadvisor/index.php';
session_start();
session_destroy();
header('Location: ../index.php');
exit();
?>