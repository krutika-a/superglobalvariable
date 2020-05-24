    <?php
    session_start();
error_reporting(0);
if($_POST["submit"] && $_POST["submit"]=="Login")
{

if($_POST["username"]=="kruti" && $_POST["password"]=="7385")
{
 
$_SESSION["name"]=$_POST["username"];
header("Location:callcookie.php");
}
else
{
 echo "Username & password is incorrect";

}
}else
{
    echo error;
}
?>
<html>
    <head>
</head>
<form method="POST">
<input type="text" autocomplete="off"  name="username" value="<?php echo $_POST["username"];?>"/><br>
<input type="password" name="password"><br>
<input type="submit" name="submit" value="Login">
</form>
</html>