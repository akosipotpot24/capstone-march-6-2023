<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="loginPage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>
<?php include('cdn_bootstrap.php') ?>
    <div class="container">
        <form action="login.php"method ="post">
            <h1 class="title">Login your Account</h1>
            <br>
            <br>
            <div class="row">
               <center>
              <div class="col-sm-2">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
              </div>
              <br>
              <div class="col-sm-2">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
              </div>
            </div>
            <br>
                </center>
                <div class="row">
                  <center>
                  <button type="submit" class="btn btn-success btn-block" target="_blank">Login</button>
                  <br>
                  <br>
                   <p 
          style="color: black; 
          font-size: 10px; 
          font-family: 'Roboto', sans-serif;
          ">No Account?
          <span><a href="registration.php" style = "
          color: black;
          transition: color 0.1s ease;" 
          onmouseover="this.style.color='blue'"
          onmouseout="this.style.color='black'"
          >Create One!</a></span></p>
                  </center>
                </div>
               
           
       
        </form>
    </div>
 
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $email = $_POST["email"];
    $pass = $_POST["password"];

    $sql = "SELECT email,password, firstname, lastname FROM registration_table WHERE email='$email' and password='$pass'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
// Fetch the data from the result
$row = mysqli_fetch_assoc($result);
// Assign the email to the $_SESSION['email']
$_SESSION['email'] = $row['email'];
$_SESSION['firstname'] = $row['firstname'];
$_SESSION['lastname'] = $row['lastname'];
 echo "<script>
  Swal.fire({
    title: 'Welcome, " . $row['firstname'] . " " . $row['lastname'] . "!',
    text: 'You have successfully logged in.',
    icon: 'success',
    confirmButtonText: 'OK'
  }).then(function () {
    window.location = 'superAdminDashboard.php';
  });
  </script>";
} else {
  echo "<script>
  Swal.fire({
    title: 'Error',
    text: 'Email and password do not match',
    icon: 'error',
    confirmButtonText: 'OK'
  });
  </script>";
}

}

mysqli_close($conn);
?>
</body>
</html>