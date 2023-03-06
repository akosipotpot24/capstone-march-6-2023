<?php
session_start();
require 'mainConnect.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Form Edit</title>
  </head>

<body>
   <div class="container mt-5">
  
    <?php include('message.php');?>
    <div class ="row"> 
        <div class ="col-md-5">
            <div class ="card">
                <div class="card-header">
                    <h4>
                        Form Edit
                        <a href="job_vacancy.php" class = "btn btn-danger float-end">Back to Job Vacancy</a>
                    </h4>
                </div>
                <div class="card-body" >
                <?php
                     if(isset($_GET['job_id'])){

                       $job_id= mysqli_real_escape_string($conn,$_GET['job_id']);
                       $query = "SELECT * FROM job_vacancy WHERE job_id = '$job_id'";
                       $query_run=mysqli_query($conn,$query);
                       if(mysqli_num_rows($query_run)>0){
                        $job_id = mysqli_fetch_array($query_run);
                        ?>

                    <form action="job_edit2.php" method="POST">
                    <div class="mb-3">
                        <input type="hidden" name="job_id" id="job_id" value = "<?=$job_id['job_id'];?>" class="form-control">
                        <label >Job Title:
                        <input type="text"  name ="job_title" value = "<?=$job_id['job_title'];?>"class="form-control" >
                        </label>
                        
                    </div>
                    <div class="mb-3">
                        <label >Job Description:
                        <textarea type="text" name="job_desc" class="form-control"><?= $job_id['job_desc'] ?></textarea>
                        </label>
                        
                    </div>
                    <div class = "mb-3">
                        <button type="submit" name="job_update" class ="btn btn-primary float-end">Save Edit</button>
                    </div>
                       </form>
                    <?php
                       }
                       else{
                        echo "no record found";
                       }
                       
                     }
                    
                ?>

                </div>
            </div>
        </div>
     </div>
                    </body>
                    </html>