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

<body>
   <div class="container mt-5">
  
    <?php include('message.php');?>
    <div class ="row"> 
        <div class ="col-md-15">
            <div class ="card">
                <div class="card-header">
                    <h4>
                        Form Edit
                        <a href="dataTable.php" class = "btn btn-danger float-end">Back to Dashboard</a>
                    </h4>
                </div>
                <div class="card-body" >
                    
                <?php
                     if(isset($_GET['reference_no'])){

                       $reference_no= mysqli_real_escape_string($conn,$_GET['reference_no']);
                       $query = "SELECT * FROM applicant_info WHERE reference_no = '$reference_no'";
                       $query_run=mysqli_query($conn,$query);
                       if(mysqli_num_rows($query_run)>0){
                        $reference_no = mysqli_fetch_array($query_run);
                        
                        ?>

                    <form action="dataTable.php" method="POST">
                    <div class="row" style="max-width: 90%; margin: 0 auto;"> 
                    <div class="mb-3">
                        <input type="hidden" name="reference_no" id="reference_no" value = "<?=$reference_no['reference_no'];?>" class="form-control">
                        </label>      
                    </div>
                    
      <legend><b>Personal Information</b></legend>
      <div class="col-lg-4"></div>
            <div class="row">
            <label >Status:
              
                <select class="form-control" id="status" name="status">
  <option value="secret"disabled selected><?php echo $reference_no['status']?></option>
  <option value="new" <?php if ($reference_no['status'] === 'New') { echo 'selected'; } ?>>New</option>
  <option value="ggcas" <?php if ($reference_no['status'] === 'For GGC asseesment') { echo 'selected'; } ?>>For GGC asseesment</option>
  <option value="ggcad" <?php if ($reference_no['status'] === 'GGC asseesment done(waiting feedback)') { echo 'selected'; } ?>>GGC asseesment done(waiting feedback)</option>
  <option value="ffi" <?php if ($reference_no['status'] === 'For final interview') { echo 'selected'; } ?>>For final interview</option>
  <option value="ffid" <?php if ($reference_no['status'] === 'For final interview done(waiting feedback)') { echo 'selected'; } ?>>For final interview done(waiting feedback)</option>
  <option value="ldt" <?php if ($reference_no['status'] === 'Waiting for LDT result') { echo 'selected'; } ?>>Waiting for LDT result</option>
  <option value="wfd" <?php if ($reference_no['status'] === 'Waiting for deployment') { echo 'selected'; } ?>>Waiting for deployment</option>
</select>
</label> 
            </div>
            <br>
          
            
    <div class="col-lg-4  ">
      <br>
      
      <label for="firstname">First Name:</label>
      <input type="text" class="form-control" name="fname" id="userName" value = "<?=$reference_no['firstname'];?>"  readonly >        
    </div>
  <br>
    <div class="col-lg-4">
      <br>
      <label for="middlename">Middle Name:</label>
      <input type="text" class="form-control" name="mname" id="userLastName" value = "<?=$reference_no['middlename'];?>"  readonly>
    </div>
  <br>
    <div class=" col-lg-4">
      <br>
      <label for="lastname">Last Name:</label>
      <input type="text" class="form-control" name="lname" id="email1" value = "<?=$reference_no['lastname'];?>"  readonly>
    </div>
  </div>
  <br>
  <br>
  <!-- BIRTHDAYS -->
 <div class="row" style="max-width: 90%; margin: 0 auto;"> 
    <div class="col-lg-4">
      <label for="birthplace">Birthplace:</label>
      <input type="text" class="form-control" name="bplace" id="bplace" value = "<?=$reference_no['birthplace'];?>"  readonly>        
    </div>
  <br>
  <div class="col-lg-3">
  <label for="Birthdate">Birthdate:</label>
  <input type="date" class="form-control" name="birthdate" id="birthdate" value = "<?=$reference_no['birthdate'];?>" readonly>
</div>
<br>
<div class="col-lg-2">
  <label for="Age">Age:</label>
  <input type="text" class="form-control" name="age" id="age" placeholder="Age" value = "<?=$reference_no['age'];?>" class="form-control" readonly>
</div>
    <div class="col-lg-3">
    <label for="gender">Gender:</label>
    <select class="form-control" id="gender" name="gender" readonly>
  <option value="secret"disabled selected><?php echo $reference_no['gender']?></option >
  <option value="male" <?php if ($reference_no['gender'] === 'Male') { echo 'selected'; } ?>>Male</option>
  <option value="female" <?php if ($reference_no['gender'] === 'Female') { echo 'selected'; } ?>>Female</option>
  <option value="other" <?php if ($reference_no['gender'] === 'Other') { echo 'selected'; } ?>>Other</option>
</select>
        </div>
  </div>
 <br>
 <br>
 <div class="row" style="max-width: 90%; margin: 0 auto;"> 
        
        <div class="col-lg-4">
          <label for="email">Email:</label>
              <input class="form-control"type="email"id="emailAdd"name="email"value = "<?=$reference_no['email'];?>" readonly/>
        </div>
        <div class="col-lg-4">
          <label for="number">Contact Number:</label>
              <input class="form-control" type="tel" id="phone" name="phone" value = "<?=$reference_no['phone'];?>" pattern="[0-9]{11}" readonly/>
        </div>
        <div class="col-lg-4">
  <label for="status">Civil Status:</label>
  <select class="form-control" id="civil-status" name="civil" readonly>
  <option value="secret"disabled selected><?php echo $reference_no['civil_status']?></option>
    <option value="single" <?php if($reference_no['civil_status'] === 'Single') {echo 'selected';} ?>>Single</option>
    <option value="married" <?php if($reference_no['civil_status'] === 'Married') {echo 'selected';} ?>>Married</option>
    <option value="widowed" <?php if($reference_no['civil_status'] === 'Widowed') { echo 'selected';}?>>Widowed</option>
    <option value="divorced" <?php if($reference_no['civil_status'] === 'Divorced') {echo 'selected'; }?>>Divorced</option>
  </select>
</div>

        </div>
        <br> 
        <br> 

 <div class="row" style="max-width: 90%; margin: 0 auto;"> 
       <legend>Address</legend>
       <div class="col-lg-2">
          <label for="province/state">Province/State:</label>
              <input class="form-control" type="text" id="province" name="province" value = "<?=$reference_no['state'];?>" readonly/>
        </div>
        <div class="col-lg-2">
          <label for="city">City:</label>
              <input class="form-control" type="text" id="city" name="city" value = "<?=$reference_no['city'];?>" readonly/>
        </div>
        <div class="col-lg-3">
          <label for="baranggay">Baranggay:</label>
          <input class="form-control" type="text" id="baranggay" name="baranggay" value = "<?=$reference_no['baranggay'];?>" readonly/>
        </div>
        <div class="col-lg-3">
          <label for="address">Street Address:</label>
              <input class="form-control" type="text" id="street-address" name="street" value = "<?=$reference_no['street'];?>" readonly/>
        </div>
        <div class="col-lg-2">
          <label for="postal">Enter Postal Code:</label>
              <input class="form-control" type="tel" id="postal-code" name="postal" value = "<?=$reference_no['postal'];?>" readonly/>
        </div>
       
  </div>
        
        <br> 
       <div class="row" style="max-width: 90%; margin: 0 auto;">  
         <legend>Parent / Guardian</legend>
        <div class="col-lg-4">
          <label for="father">Father's Full Name:</label>
              <input class="form-control" type="text" id="father-name" name="father"value = "<?=$reference_no['f_name'];?>" readonly/>
        </div>
        <div class="col-lg-4">
          <label for="fatherOccupation">Father Occupation:</label>
              <input class="form-control" type="text"id="f_occu"name="f_occu" value = "<?=$reference_no['f_occu'];?>"readonly/>
        </div>
           </div>
        <br> 
        <br> 
        <div class="row" style="max-width: 90%; margin: 0 auto;"> <!--row 7-->
        <div class="col-lg-4">
                 <label for="mother">Mother's Full Name:</label>
              <input class="form-control" type="text" id="mother-name" value = "<?=$reference_no['m_name'];?>" name="mother" readonly/>
        </div>
        <div class="col-lg-4">
           <label for="motherOccupation">Mother Occupation:</label>
              <input class="form-control" type="text" id="m_occu" name="m-occu" value = "<?=$reference_no['m_occu'];?>"readonly/>
        </div>
        </div>
        <br>
        <br>
        <div class="row" style="max-width: 90%; margin: 0 auto;"> 
        <legend>College:</legend>
        <div class="col-lg-4">
          <label for="collegeName">College Name:</label>
          <input class="form-control" type="text" id="cname" name="cname" value = "<?=$reference_no['c_name'];?>" readonly/>
        </div>
        <div class="col-lg-4">
          <label for="program">Study Program:</label>
          <input class="form-control" type="text" id="cprogram" name="cprogram" value = "<?=$reference_no['c_program'];?>" readonly/>
        </div>
        <div class="col-lg-2">
          <label for="year">Year Graduated:</label>
          <input class="form-control" type="date" id="cyear" name="cyear" value = "<?=$reference_no['c_year'];?>" readonly/>
        </div>
        </div>
        <br> 
        <br> 
    <div class="row" style="max-width: 90%; margin: 0 auto;"> 
        <legend>Senior High School:</legend>
        <div class="col-lg-4">
          <label for="collegeName">Senior High School Name:</label>
          <input class="form-control" type="text" id="school-name" name="sname" value = "<?=$reference_no['s_name'];?>"readonly/>
        </div>
        <div class="col-lg-4">
          <label for="program">Study Program:</label>
          <input class="form-control" type="text" id="study-program" name="sprogram" value = "<?=$reference_no['s_program'];?>" readonly/>
        </div>
        <div class="col-lg-2">
          <label for="year">Year Graduated:</label>
          <input class="form-control" type="date" id="year-graduated" name="syear" value = "<?=$reference_no['s_year'];?>"readonly/>
        </div>
          
        </div>
        <br>
         <div class="row" style="max-width: 90%; margin: 0 auto;"> 
        <legend>HighSchool:</legend>
       
        <div class="col-lg-4">
        <label for="collegeName">College Name:</label>  
          <input class ="form-control"type="text" id="school-name" name="hname" value = "<?=$reference_no['h_name'];?>"readonly/>
        </div>
        <div class="col-lg-2">
          <label for="program">Year Graduated:</label>  
          <input  class ="form-control" type="date" id="year-graduated" name="hyear"value = "<?=$reference_no['h_year'];?>" readonly/>
        </div>
  
        </div>
        <br>
         <div class="row" style="max-width: 90%; margin: 0 auto;"> 
          <legend>Elementary:</legend>
        <div class="col-lg-4">
        <label for="school-name">School Name:</label>
          <input  class ="form-control"type="text" id="school-name" name="ename" value = "<?=$reference_no['e_name'];?>"readonly/>
        </div>
        <div class="col-lg-2">
          <label for="year-graduated">Year Graduated:</label>
          <input class ="form-control" type="date" id="year-graduated" name="eyear" value = "<?=$reference_no['e_year'];?>" readonly/>
        </div>
        
        </div>
        <br>
        <br>
       <div class="row" style="max-width: 90%; margin: 0 auto;"> 
          <legend>Work Experience</legend>
          <br>
          <br>
          <legend>First work</legend>
             <div class="col-lg-4">
            <label>Company Name:</label>
            <input type="text" name="company_name1" id="name" class="form-control" value = "<?=$reference_no['compname1'];?>" readonly>
          </div>
           <div class="col-lg-4">
            <label>Company Address:</label>
            <input type="text" name="company_address1" id="address" class="form-control" value = "<?=$reference_no['compadd1'];?>"readonly>
          </div>
          <div class="col-lg-4" style="margin-bottom:2%;">
            <label>Position:</label>
            <input type="text" name="position1" id="position1" class="form-control" value = "<?=$reference_no['position1'];?>">
          </div>
          <div class="col-lg-2">
            <label>Date Started:</label>
            <input type="date" name="work_date_start1" id="work_start" class="form-control" value = "<?=$reference_no['date_started1'];?>"readonly>
          </div>
          <div class="col-lg-2">
            <label>Date Ended:</label>
            <input type="date" name="date_ended1" id="work_end"class="form-control"  value = "<?=$reference_no['date_ended1'];?>"readonly>
          </div>
        </div>
        <br>
        <div class="row" style="max-width: 90%; margin: 0 auto;"> 
          <legend>Second Work</legend>
          <div class="col-lg-4">
          <label>Company Name:</label>
            <input type="text" name="company_name2" id="name" class="form-control" value = "<?=$reference_no['compname2'];?>"readonly>
          </div>
           <div class="col-lg-4">
            <label>Company Address:</label>
            <input type="text" name="company_address2" id="address" class="form-control" value = "<?=$reference_no['compadd2'];?>"readonly>
          </div>
          <div class="col-lg-4" style="margin-bottom:2%;">
            <label>Position:</label>
            <input type="text" name="position2" id="position2" class="form-control" value = "<?=$reference_no['position2'];?>"readonly>
          </div>
          <div class="col-lg-4">
            <label>Date Started:</label>
            <input type="date" name="work_date_start2" id="work_start"class="form-control"  value = "<?=$reference_no['date_started2'];?>"readonly>
          </div>
          <div class="col-lg-2">
            <label>Date Ended:</label>
            <input type="date" name="date_ended2" id="work_end" class="form-control" value = "<?=$reference_no['date_ended2'];?>"readonly>
          </div>
        </div>
        <br>
          <div class="row" style="max-width: 90%; margin: 0 auto;"> 
          <legend>Third Work</legend>
          <div class="col-lg-4">
          <label>Company Name:</label>
            <input type="text" name="company_name3" id="name" class="form-control" value = "<?=$reference_no['compname3'];?>"readonly>
          </div>
           <div class="col-lg-4">
            <label>Company Address:</label>
            <input type="text" name="company_address3" id="address" class="form-control" value = "<?=$reference_no['compadd3'];?>"readonly>
          </div>
          <div class="col-lg-4" style="margin-bottom:2%;">
            <label>Position:</label>
            <input type="text" name="position3" id="position3" class="form-control" value = "<?=$reference_no['position3'];?>"readonly>
          </div>
          <div class="col-lg-2">
            <label>Date Started:</label>
            <input type="date" name="work_date_start3" id="work_start"class="form-control" value = "<?=$reference_no['date_started3'];?>"readonly>
          </div>
          <div class="col-lg-2">
            <label>Date Ended:</label>
            <input type="date" name="date_ended3" id="work_end" class="form-control" value = "<?=$reference_no['date_ended3'];?>"readonly>
          </div>
        </div>
        <br>
        <br>
     <div class="row" style="max-width: 90%; margin: 0 auto;"> 
            <legend>Character Reference</legend>
            <div class="col-lg-4">
            <label for="email">First name:</label>
            <input class="form-control" type="text  " name="rfname" id="rfname" value = "<?=$reference_no['email_ref'];?>"readonly>
          </div>
          <div class="col-lg-4">
            <label for="email">Last name:</label>
            <input class="form-control" type="text  " name="rlname" id="rlname" value = "<?=$reference_no['email_ref'];?>"readonly>
          </div>
           <div class="col-lg-4">
            <label for="email">Email address:</label>
            <input class="form-control" type="text  " name="email_ref" id="email" value = "<?=$reference_no['email_ref'];?>"readonly> <br>
          </div>
           <div class="col-lg-4">
            <label for="number">Contact Number:</label>
            <input class="form-control" type="tel" name="phone_ref" id="email" value = "<?=$reference_no['phone_ref'];?>"readonly>
          </div>
           <div class="col-lg-4" style="margin-bottom:5%;">
            <label for="occupation">Occupation:</label>
            <input class="form-control" type="text" name="occu_ref" id="email" value = "<?=$reference_no['occu_ref'];?>"readonly>
          </div>
           <div class="col-lg-4" style="margin-bottom:5%;">
            
   
<br>
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