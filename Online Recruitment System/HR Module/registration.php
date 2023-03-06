
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="accRegistration.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  
</head>
<body>

<?php include('cdn_bootstrap.php') ?>

 
<body>
    <div class="container">
        <form method ="post">
            <h1 class="title">Please Register your Account</h1>

           
<div class="row">
<center>
  <div class="col-lg-4">
  <input type="text" class="form-control" name="firstname" id="userName" placeholder = "Enter first name e.g Juan" required>        
</div>
<br>
<div class="col-lg-4">
  <input type="text" class="form-control" name="lastname" id="userLastName" placeholder = "Enter last name e.g Dela Cruz" required>
</div>
<br>
<div class=" col-lg-4">
    <input type="email" class="form-control" name="email" id="email1" placeholder="Enter email e.g juan@gmail.com" required>
</div>


</div>  
 <br>
 </center>

 
<div class="row">
<center>
  <div class="col-lg-4">
<input type="password" class="form-control pass" name="password" id="password" placeholder = "Password" required>
</div>
<br>
  <div class="col-lg-4">
  <input type="password" class="form-control "name="confirmPass" id="confirmPass" placeholder = "Confirm Password" required>
</div>
</center>
</div>
<br>
<br>
          <center>
                <button type="submit" class="btn btn-success btn-block" target="_blank">Sign Up</button>
                <br>
                <a href="login.php" style="color:black; font-size:13px;">Already have account</a>
</center>
        </form>
         <br>
    <br>
    </div>
   
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmPass = $_POST["confirmPass"];

  if ($password != $confirmPass) {
    echo '<script>
            Swal.fire({
              title: "Error",
              text: "Password does not match the confirm password",
              icon: "error",
              confirmButtonText: "OK"
            });
          </script>';
          exit;
  } 
    $sql = "INSERT INTO registration_table (firstname, lastname, email, password)
    VALUES ('$firstname','$lastname','$email', '$password')";
    if ($conn->query($sql) === TRUE) {
      echo "<script>
  Swal.fire({
    title: 'Success!',
    text: 'Record successfully created!',
    icon: 'success',
    confirmButtonText: 'OK'
  }).then(function () {
    window.location = 'login.php';
  });
  </script>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }






$conn->close();


?>

</body>
</html>
