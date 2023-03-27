
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    background-color:whitesmoke;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    height:100vh;
      display:flex;
      justify-content:center;
      align-items:center;
}
body {
  background-color: whitesmoke;
  overflow: hidden;
}

form {
    background-color: #fff;
    width: 400px;
    margin: 0 auto;
    padding: 30px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0px 3px 3px #ccc;
    overflow: hidden;
}

p {
    margin: 0;
    padding: 0;
}

input[type="text"], input[type="password"] {
    display: block;
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: green;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #3e8e41;
}

a {
    color: black;
}

a:hover {
    text-decoration: underline;
}
    </style>
</head>
<body>
    <form action="login22.php" method="POST">
        <p>Username :</p> <input type="text" name="uname" > <br>
        <p>Password :</p> <input type="password" name="password" > <br><br>
        <input type="submit" name="submit" value="LOGIN"> <br><br>
        <p>Don't you have an account? <a href="index.php">REGISTER</a></p>
    </form>

    

</body>
</html>