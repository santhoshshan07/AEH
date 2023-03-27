<?php
include("config/config.php");
if(isset($_POST['submit']))
{
    $uname = mysqli_real_escape_string($mysqli, $_POST['uname']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $phnumber = mysqli_real_escape_string($mysqli, $_POST['phnumber']);
    $password = mysqli_real_escape_string($mysqli, $_POST['password']);

    // sanitize the input
    $uname = htmlspecialchars($uname, ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    $phnumber = htmlspecialchars($phnumber, ENT_QUOTES, 'UTF-8');
    $password = htmlspecialchars($password, ENT_QUOTES, 'UTF-8');

    // prepare the statement
    $stmt = $mysqli->prepare("INSERT INTO user (uname, email, phnumber, password) VALUES (?, ?, ?, ?)");

    // bind parameters
    $stmt->bind_param("ssss", $uname, $email, $phnumber, $password);

    // execute the statement
    $result = $stmt->execute();

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
