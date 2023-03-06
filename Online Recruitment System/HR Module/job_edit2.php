<?php
session_start();
require 'mainConnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>



  
</head>
<body>

<?php
include 'cdn_bootstrap.php';
//EDIT CODE
  
if(isset($_POST['job_update'])){
    $job_id = $_POST['job_id'];
    $job_title = $_POST['job_title'];
    $job_desc = $_POST['job_desc'];

    $result = "UPDATE job_vacancy SET
    job_title='$job_title',
    job_desc='$job_desc'
    WHERE job_id = '$job_id'";

    if(mysqli_query($conn,$result)){
        echo "<script>
        Swal.fire({
          title: 'Successfully Edited!',
          icon: 'success',
          confirmButtonText: 'OK'
        }).then(() => {
          window.location.href = 'job_vacancy.php';
        });
      </script>";
    
      }else{
        echo "<script>
                  Swal.fire({
                    title: 'Job Not Edited',
                    icon: 'error',
                    confirmButtonText: 'OK'
                  }).then(() => {
                    window.location.href = 'dataTable.php';
                  });
                </script>";
      }
    
}
  

// Close database connection
$conn->close();

?>
  
</body>
</html>




















