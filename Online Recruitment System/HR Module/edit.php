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
    <link rel="stylesheet" href="css/Update.css">
    <title>Form Edit</title>
  </head>
  <body>

<body style="background-image: url(images/library.jpg); background-size: cover; background-position: center;">
   <div class="container mt-5">
  
    <?php include('message.php');?>
    <div class ="row"> 
        <div class ="col-md-5">
            <div class ="card">
                <div class="card-header">
                    <h4>
                        Form Edit
                        <a href="dashboard.php" class = "btn btn-danger float-end">Back to Dashboard</a>
                    </h4>
                </div>
                <div class="card-body" >
                    
                <?php
                     if(isset($_GET['reference_id'])){

                       $reference_id= mysqli_real_escape_string($conn,$_GET['reference_id']);
                       $query = "SELECT * FROM employee_table WHERE reference_id = '$reference_id'";
                       $query_run=mysqli_query($conn,$query);
                       if(mysqli_num_rows($query_run)>0){
                        $reference_id = mysqli_fetch_array($query_run);
                        
                        ?>

                    <form action="editCode.php" method="POST">
                    <div class="mb-3">
                        <input type="hidden" name="reference_id" id="reference_id" value = "<?=$reference_id['reference_id'];?>" class="form-control">
                        <label >Student Number:
                        <input type="text" id= "student_number" name ="student_number" value = "<?=$reference_id['student_number'];?>"class="form-control" required>
                        </label>
                        
                    </div>
                    <div class="mb-3">
                        <input type="hidden" name="reference_id" id="reference_id" value = "<?=$reference_id['reference_id'];?>" class="form-control">
                        <label >Firstname:
                        <input type="text" id= "fname" name ="firstname" value = "<?=$reference_id['firstname'];?>"class="form-control" required>
                        </label>
                        
                    </div>

                    <div class="mb-3">
                        <label >Middlename:                         
                            <input type="text" id="mname" name ="middlename" value = "<?=$reference_id['middlename'];?>"class="form-control" ></label>
                       
                    </div>

                    <div class="mb-3">
                        <label >Lastname:
                        <input type="text" id="lname" name ="lastname" value = "<?=$reference_id['lastname'];?>"class="form-control" required>
                        </label>
                    </div>

                    <div class="mb-3">
                        <label >Email address:
                        <input type="email" id="email" name ="email" value = "<?=$reference_id['email'];?>"class="form-control" required></label>
                        
                    </div>

                    <div class="mb-3">
                        <label >Contact number:
                        <input type="tel" id="phone" name ="number" value = "<?=$reference_id['number'];?>"class="form-control" required></label>
                    </div>

                    <div class="mb-3">
                        <label >Address:
                        <input type="text" id="address" name ="address" value = "<?=$reference_id['address'];?>"class="form-control" required></label>
                    </div>


                    <div class="mb-3">
                        <label >Birthdate:
                        <input type="date" id="bday" name ="bday" value = "<?=$reference_id['bday'];?>"class="form-control" required></label>
                    </div>

                      <div class="mb-3">
                        <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="Select Gender" disabled selected>Please Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="rather_not_say">Rather not say</option>
            </select>
        </div>
                        <div class="mb-3">
                        <label >Date Hired:
                        <input type="date" id="date_hired" name ="date_hired" value = "<?=$reference_id['date_hired'];?>"class="form-control" ></label>
                    </div>

                    <div class="mb-3">
                        <label >Status:
                        <input type="text" id="status" name ="status" value = "<?=$reference_id['status'];?>"class="form-control" required></label>
                    </div>

                    <div class = "mb-3">
                        <button type="submit" name="update" class ="btn btn-primary float-end">Save Edit</button>
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
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>