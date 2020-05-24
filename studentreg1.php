<?php
// print_r($_POST);

echo "The name of this user is ".$_POST["name"]."<br>";

echo "The E-mail of this user is ".$_POST["email"]."<br>";

echo "The Gender of this user is ".$_POST["gender"]."<br>";

echo "The Hobbies of this user is ".implode(", ",$_POST["hobbies"])."<br>";

echo "The Address of this user is ".$_POST["address"]."<br>";

echo "The City of this user is ".$_POST["city"]."<br>";

//echo "The Image of this user is ".$_POST["image"];

echo "The submit of this user is ".$_POST["sumbit"]."<br>"
;


?>
