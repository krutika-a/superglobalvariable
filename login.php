<?php
error_reporting(0); 

// print_r($_POST);
// echo "user Name-".$_POST["username"]."<br>";
// echo "password-".$_POST["password"]."<br>";

/*
if(isset($_POST) && $_POST["login"]=="LOGIN"){

    //validations in php
            if($_POST["username"] == ""){
                    echo "Please enter user name";
            }else if($_POST["password"] == ""){
                echo "Please enter password";
            }else{


                if($_POST["username"]=="krutika" && $_POST["password"]=="123456")
                {
                header('location:welcome.php');

                //    echo " you can login <br>";
                    
                }
                else 
                {
                    echo "username or password incorrect";
                }
        }


}

*/


if(isset($_POST) && $_POST["login"]=="LOGIN"){

    $error = false;
    //validations in php
            if($_POST["username"] == ""){
                 $error = true;
                 echo "Please enter user name <br>";
            }
            
            
            if($_POST["password"] == ""){
                $error = true;
                echo "Please enter password<br>";
            }
            
            
            if($error == false){

// echo "<br> checking <br>";
                if($_POST["username"]=="krutika" && $_POST["password"]=="123456")
                {
                header('location:welcome.php');

                //    echo " you can login <br>";
                    
                }
                else 
                {
                    echo "username or password incorrect";
                }
        }else{
            // echo "error occured";   
        }


}
?>


<html>
    <form method="post" action="">
User name: <input type="text" name="username" value="<?php echo $_POST["username"]; ?>"><br><br>
Password: <input type="password" name="password"><br><br>
<button name="login" value="LOGIN">LOGIN</button>
</html>