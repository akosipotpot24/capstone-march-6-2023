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
    <link rel="stylesheet" href="css/viewForm.css">
    <title>Employee Details</title>
  </head>
  <body>

  <div class="container">

  <div class="card-body" >
                    
                    <?php
                         if(isset($_GET['reference_no'])){
    
                           $applicant= mysqli_real_escape_string($conn,$_GET['reference_no']);
                           $query = "SELECT * FROM applicant_info WHERE reference_no = '$applicant'";
                           $query_run=mysqli_query($conn,$query);
                           if(mysqli_num_rows($query_run)>0){
                            $applicant = mysqli_fetch_array($query_run);
                            ?>
                            <br>
<div class="row" style="max-width: 90%; margin: 0 auto;"> 
      
      
<legend><b>PERSONAL INFORMATION <a href="dataTable.php" class = "btn btn-danger float-end">back</a></b></legend>
 
           <div class="col-lg-4">
           <label  for="status"><b>Status:</b> <p class="form"><?=$applicant['status'];?></p></label>
           </div>
           <div class="col-lg-4">
           <label  for="date_apply"><b>Date Apply:</b> <p class="form"><?=$applicant['date_apply'];?></p></label>
           </div>

        <!--row 1-->   <div class="row">
<br>
  <div class="col-lg-4  ">
    <label  for="firstname"><b>Firstname:</b> <p class = "form"><?=$applicant['firstname'];?></p></label>
                </div>
  <br>
    <div class="col-lg-4">
      <label for="middlename"><B>Middle Name: </B><p class="form"><?=$applicant['middlename'];?></p></label>
    </div>
   
  <br>
    <div class=" col-lg-4">
      <label for="lastname"><b>lastname: </b><p class="form"><?=$applicant['lastname'];?></p></label>
    </div>
  </div>
            </div>  

            <br>
          <!--row 2-->   <div class="row">
            <div class="row" style="max-width: 90%; margin: 0 auto;"> 
    <div class="col-lg-4">
    <label for="bplace"><b>Birthplace: </b><p class="form"><?=$applicant['birthplace'];?></p></label>       
    </div>
  <br>
  <div class="col-lg-3">
  <label for="bdate"><b>Birhdate: </b><p class="form"><?=$applicant['birthdate'];?></p></label>
</div>
<br>
<div class="col-lg-2">
<label for="age"><b>age:</b> <p class="form"><?=$applicant['age'];?></p></label>
</div>
    <div class="col-lg-1">
    <label for="gender"><b>gender: </b><p class="form"><?=$applicant['gender'];?></p></label>
  </div>
  </div>
   </div>
<br>
             <!--row 3-->   <div class="row">
             <div class="row" style="max-width: 90%; margin: 0 auto;"> 
    <div class="col-lg-4">
    <label for="email"><b>Email Address: </b><p class="form"><?=$applicant['emails'];?></p></label>       
    </div>
  <br>
  <div class="col-lg-4">
  <label for="phone"><b>Contact Number: </b><p class="form"><?=$applicant['phone'];?></p></label>
</div>
<br>

    <div class="col-lg-4">
    <label for="civil"><b>Civil Status:</b> <p class="form"><?=$applicant['civil_status'];?></p></label>
  </div>
  </div>
   </div>
<br>


  <!--row 4-->  <div class="row" style="max-width: 90%; margin: 0 auto;"> <!--row 4-->
       <legend><b>ADDRESS:</b></legend>
       
      <div class="col-lg-2">
      <label for="state"><b>State:</b> <p class="form"><?=$applicant['state'];?></p></label>
                           </div>
      <br>
      <div class="col-lg-2">
      <label for="city"><b>City:</b> <p class="form"><?=$applicant['city'];?></p></label>
      </div>
      <br>
      <div class="col-lg-3">
      <label for="state"><b>Barangay:</b> <p class="form"><?=$applicant['baranggay'];?></p></label>
      </div>
      <br>
      <div class="col-lg-3">
      <label for="street"><b>Street:</b> <p class="form"><?=$applicant['street'];?></p></label>
      </div>
      <br>
      <div class="col-lg-2">
      <label for="postal"><b>Postal Code:</b> <p class="form"><?=$applicant['postal'];?></p></label>
      </div>

   </div>
   <br>




 <!--row 5-->  <div class="row" style="max-width: 90%; margin: 0 auto;"> <!--row 5-->
       <legend><b>Parent / Guardian:</b></legend>
       <div class="col-lg-4">
       <label for="f_name"><b>Father's Name:</b> <p class="form"><?=$applicant['f_name'];?></p></label>
       </div>
       <div class="col-lg-4">
       <label for="f_occu"><b>Father's occupation:</b> <p class="form"><?=$applicant['f_occu'];?></p></label>
       </div>
       </div>
      

       <div class="row" style="max-width: 90%; margin: 0 auto;"> <!--row 6-->
       <div class="col-lg-4">
        <label for="m_name"><b>Mother's Name:</b> <p class="form"><?=$applicant['m_name'];?></p></label>
       </div>
       <div class="col-lg-4">
       <label for="m_occu"><b>Mother's occupation:</b> <p class="form"><?=$applicant['m_occu'];?></p></label>
       </div>
       <div class="col-lg-4">

       </div>
       </div>
<br>

        <!--row 7-->  <div class="row" style="max-width: 90%; margin: 0 auto;"> <!--row 7-->
        <legend><b>College:</b></legend>
       <div class="col-lg-4">
       <label for="c_name"><b>College Name:</b> <p class="form"><?=$applicant['c_name'];?></p></label>
       </div>
       <div class="col-lg-4">
       <label for="c_program"><b>Study Program:</b> <p class="form"><?=$applicant['c_program'];?></p></label>
       </div>
       <div class="col-lg-4">
       <label for="c_year"><b>Year graduated:</b> <p class="form" pattern="\d{2}/\d{2}/\d{4}"><?=$applicant['c_year'];?></p></label>
       </div>
      </div>

<br>


       <!--row 8-->  <div class="row" style="max-width: 90%; margin: 0 auto;"> <!--row 8-->
       <legend><b>Senior High:</b></legend>
       <div class="col-lg-4">
       <label for="s_name"><b>Senior High School Name::</b> <p class="form"><?=$applicant['s_name'];?></p></label>
       </div>
       <div class="col-lg-4">
       <label for="s_program"><b>Study Program:</b> <p class="form"><?=$applicant['s_program'];?></p></label>
       </div>
       <div class="col-lg-4">
       <label for="s_year"><b>Year graduated:</b> <p class="form"><?=$applicant['s_year'];?></p></label>
       </div>
       </div>
       <br>




        <!--row 9-->  <div class="row" style="max-width: 90%; margin: 0 auto;"> <!--row 9-->
        <legend><b>High school:</b></legend>
       <div class="col-lg-4">
       <label for="h_name"><b>High school Name:</b> <p class="form"><?=$applicant['h_name'];?></p></label>
       </div>
       
       <div class="col-lg-4">
       <label for="h_year"><b>Year graduated:</b> <p class="form"><?=$applicant['h_year'];?></p></label>
       </div>
       </div>
       <br>

             <!--row 10-->  <div class="row" style="max-width: 90%; margin: 0 auto;"> <!--row 10-->
             <legend><b>Elementary:</b></legend>
       <div class="col-lg-4">
       <label for="e_name"><b>Elementary Name:</b> <p class="form"><?=$applicant['e_name'];?></p></label>
       </div>
       
       <div class="col-lg-4">
       <label for="e_year"><b>Year graduated:</b> <p class="form"><?=$applicant['e_year'];?></p></label>
       </div>
       </div>
<br>

    <!--row 11-->   <div class="row" style="max-width: 90%; margin: 0 auto;"> <!--row 11-->
          <legend><b>Work Experience:</b></legend>
          <br>
          <br>
          <legend><b>First work</b></legend>
          <div class="col-lg-4">
       <label for="compname1"><b>Company Name::</b> <p class="form"><?=$applicant['compname1'];?></p></label>
       </div>

       <div class="col-lg-4">
       <label for="compadd1"><b>Company Address::</b> <p class="form"><?=$applicant['compadd1'];?></p></label>
       </div>
       <div class="col-lg-4">
       <label for="position1"><b>Position:</b> <p class="form"><?=$applicant['position1'];?></p></label>
       </div>
       
     <!--row 12-->  <div class="col-lg-4"><!--row 12-->
       <label for="date_started1"><b>Date Started:</b> <p class="form"><?=$applicant['date_started1'];?></p></label>
       </div>
       <div class="col-lg-4">
       <label for="date_ended1"><b>Date Ended:</b> <p class="form"><?=$applicant['date_ended1'];?></p></label>
       </div>
       </div>


        <!--row 13-->   <div class="row" style="max-width: 90%; margin: 0 auto;"> <!--row 13-->

          <legend><b>Second work</b></legend>
          <div class="col-lg-4">
       <label for="compname2"><b>Company Name::</b> <p class="form"><?=$applicant['compname2'];?></p></label>
       </div>

       <div class="col-lg-4">
       <label for="compadd2"><b>Company Address::</b> <p class="form"><?=$applicant['compadd2'];?></p></label>
       </div>
       <div class="col-lg-4">
       <label for="position2"><b>Position:</b> <p class="form"><?=$applicant['position2'];?></p></label>
       </div>
       
     <!--row 14-->  <div class="col-lg-4"><!--row 14-->
       <label for="date_started2"><b>Date Started:</b> <p class="form"><?=$applicant['date_started2'];?></p></label>
       </div>
       <div class="col-lg-4">
       <label for="date_ended2"><b>Date Ended:</b> <p class="form"><?=$applicant['date_ended2'];?></p></label>
       </div>
       </div>



        <!--row 15-->   <div class="row" style="max-width: 90%; margin: 0 auto;"> <!--row 15-->

          <legend><b>Third work</b></legend>
          <div class="col-lg-4">
       <label for="compname3"><b>Company Name::</b> <p class="form"><?=$applicant['compname3'];?></p></label>
       </div>

       <div class="col-lg-4">
       <label for="compadd3"><b>Company Address::</b> <p class="form"><?=$applicant['compadd3'];?></p></label>
       </div>
       <div class="col-lg-4">
       <label for="position3"><b>Position:</b> <p class="form"><?=$applicant['position3'];?></p></label>
       </div>
       
     <!--row 16-->  <div class="col-lg-4"><!--row 16-->
       <label for="date_started3"><b>Date Started:</b> <p class="form"><?=$applicant['date_started3'];?></p></label>
       </div>
       <div class="col-lg-4">
       <label for="date_ended3"><b>Date Ended:</b> <p class="form"><?=$applicant['date_ended3'];?></p></label>
       </div>
       </div>

       <br>


        <!--row 17-->   <div class="row" style="max-width: 90%; margin: 0 auto;"> <!--row 17-->


          <legend><b>Character Reference</b></legend>
          <div class="col-lg-4">
       <label for="email_ref"><b>Name:</b> <p class="form"><?=$applicant['email_ref'];?></p></label>
       </div>

       <div class="col-lg-4">
       <label for="compadd1"><b>Contact number:</b> <p class="form"><?=$applicant['phone_ref'];?></p></label>
       </div>
       <div class="col-lg-4">
       <label for="position1"><b>Occupation:</b> <p class="form"><?=$applicant['occu_ref'];?></p></label>
       </div>


                        <?php
                           }
                           else{
                            echo "No record found!";
                           }
                         }
                         
                    ?>
                    </div>

  </div>
    <h1></h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
  </body>
</html> 