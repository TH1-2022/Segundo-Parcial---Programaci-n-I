<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['complete_name']);
session_destroy();
echo "<script>alert('Se cerro la session correctamente.');window.location='../index.php';</script>";
exit;
