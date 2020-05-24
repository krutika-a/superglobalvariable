<?php
//print_r($_POST);
// echo "user Name-".$_POST["username"]."<br>";
// echo "password-".$_POST["password"]."<br>";

if($_POST["username"]=="krutika" && $_POST["password"]=="123456")
{
header('location:welcome.php');

//    echo " you can login <br>";
    
}
else 
{
    echo "username or password incorrect";
}

?>