
<?php
session_start();
include("config/config.php");

if(!isset($_SESSION['id']) || !isset($_SESSION['uname']))
{
    header("Location: login.php");
    exit();
}

if(isset($_SESSION['uname'])){
    // $id = $_SESSION['uname'];
    $query = "SELECT * FROM user WHERE uname='{$_SESSION['uname']}'" ;
    $result = $mysqli->query($query);
    while($row=$result->fetch_assoc()){
        $uname = $row['uname'];
        $email = $row['email'];
        $phnumber = $row['phnumber'];
        $password = $row['password'];
    }
}
?>
    <!DOCTYPE html>
    <html>
    <head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            
            /* height:100vh;
      display:flex;
      justify-content:center;
      align-items:center; */
        }
        table {
  border-collapse: collapse;
  width: 100%;
  max-width: 800px;
  margin: auto;
  background-color: #fff;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #4CAF50;
  color: white;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

        h1 {
            font-size: 36px;
            color: #333;
            text-align: center;
            margin-top: 50px;
        }
        p {
            font-size: 18px;
            color: #666;
            text-align: center;
            margin-top: 20px;
        }
        a {
            display: block;
            margin-top: 50px;
            text-align: center;
            font-size: 24px;
            color: #4CAF50;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
    </head>
    
    <body>
        <h1>Welcome <?php echo $_SESSION['uname']; ?></h1>
        <p>You are now logged in to your account.</p>
        <table class="my-table">
  <tr>
    <th>User Name</th>
    <th>Email</th>
    <th>Phone Number</th>
    <th>Password</th>
  </tr>
  <tr>
    <td><?php echo $_SESSION['uname']; ?></td>
    <td><?php echo $email; ?></td>
    <td><?php echo $phnumber; ?></td>
    <td><?php echo $password; ?></td>
  </tr>
</table>

        <a href='logout.php'>Logout</a>
    </body>
    </html>

