<?php
session_start();
unset($_SESSION['BBZUID']);
unset($_SESSION['BBZBID']);
unset($_SESSION['redirect_url']);
header("Location:index.php");
?>