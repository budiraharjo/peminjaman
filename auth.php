<?php session_start(); ?> 
<?php
if(!isset($_SESSION["username"])){
echo '<script type="text/javascript">
alert("Anda harus login untuk mengakses halaman ini ..!");
location="login.php";</script>';
exit(); }
?>