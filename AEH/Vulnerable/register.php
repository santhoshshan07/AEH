<?php 
include("config/config.php");
if(isset($_GET['submit']))
{
    $uname=$_GET['uname'];
    $email=$_GET['email'];
    $phnumber=$_GET['phnumber'];
    $password=$_GET['password'];

    $result= mysqli_query($mysqli, "INSERT INTO user VALUES ('', '$uname', '$email', '$phnumber', '$password')");
    if($result)
    {
        echo "Registration has been done successfully. You can login now <br>";
        // echo "<a href='login.php'>LOGIN</a>";
        header("Location:login.php");
    }
    else
    {
        echo "Something went wrong";
    }
}
?>