<?php 
session_start();

print_r($_SESSION);
?>

Welcome

user name is <?php
echo $_SESSION["name"]
?>