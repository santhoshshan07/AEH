<?php
include("config/config.php");
// include("register.php");
session_start();

if(isset($_GET['submit']))
{
    if(isset($_GET['uname']) && isset($_GET['password'])){
        $uname = $_GET['uname'];
        $password = $_GET['password'];
        
            $sql = mysqli_query($mysqli, "SELECT * FROM user WHERE uname = '{$uname}' AND  password = '{$password}'");
            if(mysqli_num_rows($sql) > 0)
            {
                    $row = mysqli_fetch_assoc($sql);
                
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['uname'] = $row['uname'];
                    // header("Location:dashboard.php?uname=".$uname);
                    header("Location:dashboard.php?uname=".$uname);
                    exit();                
            }
            else
            {
            echo "Username or Password is incorrect";
            }  
    }
}
?>