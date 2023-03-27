<?php
include("config/config.php");
session_start();

if(isset($_POST['submit']))
{
    if(isset($_POST['uname']) && isset($_POST['password'])){
        $uname = htmlspecialchars($_POST['uname']);
        $password = htmlspecialchars($_POST['password']);

        $stmt = mysqli_prepare($mysqli, "SELECT * FROM user WHERE uname = ? AND password = ?");
        mysqli_stmt_bind_param($stmt, "ss", $uname, $password);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if(mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_assoc($result);
        
            $_SESSION['id'] = $row['id'];
            $_SESSION['uname'] = $row['uname'];
            header("Location:dashboard.php");
            exit();                
        }
        else
        {
            echo "Username or Password is incorrect";
        }  
    }
}
?>
