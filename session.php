<?php
session_start();
if(isset($_POST["submit"]) && $_POST["submit"]=="LOGIN")
{
   
if($_POST["username"]=="krutika" && $_POST["password"]=="123456")
{

    $_SESSION["name"]=$_POST["username"];
    header('Location: Welcome.php');
}
else
{
    echo "invalid username & password ";
}
}else{

    echo "errer";
}
?>
<html>
    <head>

    </head>
    <form method="POST">
    
    <input type="text" autocomplete="off" name="username" value="<?php echo $_POST["username"]; ?>"/>
    <input type="password" name="password" value="<?php echo $_POST["password"]; ?>" />
    <input type="submit" name="submit" value="LOGIN"/>
    </form>
</html>