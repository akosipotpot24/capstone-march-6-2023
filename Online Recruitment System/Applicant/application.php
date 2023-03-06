<?php
require 'mainConnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicant Form</title>
    <link rel="stylesheet" href="appform.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <script src="birthday.js" defer></script>
    <script src="validation.js" defer></script>
    <script src="test.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include Bootstrap CSS and JS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/XpZ4y3RSKB8kSk" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <body>
    <header>
        <img src="aoe.png" class="logo" />
        <div class="comDetails">
          <p class="compName">
            Academy of Operation Excellence and Services Inc.
          </p>
        </div>
      </header>

  <form class="needs-validation" novalidate action="applicationConnect.php" method="post">
 

 <!-- PERSONAL INFORMATION ROW -->

 <div class="row" style="max-width: 90%; margin: 0 auto;"> 
      <legend>Personal Information</legend>
      <div class="col-lg-4">
      <label for="firstname">First Name:</label>
      <input type="text" class="form-control" name="fname" id="userName" placeholder="Enter first name e.g Juan" required>
      <div class="invalid-feedback">Please enter your firstname! </div>
      
    </div>
  <br>
  <div class="col-lg-4">
      <label for="middlename">Middle Name:</label>
      <input type="text" class="form-control" name="mname" id="userLastName" placeholder="Enter middle name e.g Reyes">
    </div>
    <div class="col-lg-4">
      <label for="lastname">Last Name:</label>
      <input type="text" class="form-control" name="lname" id="email1" placeholder="Enter last name e.g Dela Cruz" required>
      <div class="invalid-feedback">Please enter your last name</div>
    </div>
  </div>
  <br>
  <br>
  <!-- BIRTHDAYS -->
 <div class="row" style="max-width: 90%; margin: 0 auto;"> 
    <div class="col-lg-4">
      <label for="birthplace">Birthplace:</label>
      <input type="text" class="form-control" name="bplace" id="bplace" placeholder = "Enter birthplace" required>  
      <div class="invalid-feedback">Please enter your birthplace</div>      
    </div>
  <br>
  <div class="col-lg-3">
  <label for="Birthdate">Birthdate:</label>
  <input type="date" class="form-control" name="birthdate" id="birthdate" placeholder="Enter birthdate" required>
  <div class="invalid-feedback">Please enter your birthdate</div>
  
</div>
<br>
<div class="col-lg-2">
  <label for="Age">Age:</label>
  <input type="text" class="form-control" name="age" id="age" placeholder="Age" readonly>
  <div id="age-feedback" class="invalid-feedback">You must be at least 18 years old.</div>
</div>
    <div class="col-lg-3">
          <label for="gender">Gender:</label>
              <select class="form-control" id="gender" name="gender"  required>
              <option value="" disabled selected>Please Select a Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
              </select>
              <div class="invalid-feedback">Please enter your gender</div>
        </div>
  </div>
 <br>
 <br>
 <div class="row" style="max-width: 90%; margin: 0 auto;"> <!--GENDER-->
        
        <div class="col-lg-4">
          <label for="emails">Email:</label>
              <input class="form-control" type="email" id="emails" name="emails" placeholder="name@gmail.com" required/>
              <div class="invalid-feedback">Please enter your email</div>
        </div>
        <div class="col-lg-4">
          <label for="number">Contact Number:</label>
              <input class="form-control" type="tel" id="phone" name="phone" placeholder="Enter Contact Number e.g 0912-345-6789" pattern="[0-9]{11}" required/>
              <div class="invalid-feedback">Please enter your Contact Number</div>
            </div>
         <div class="col-lg-4">
          <label for="status">Civil Status:</label>
              <select class="form-control" id="civil-status" name="civil" required>
                <option value="" disabled selected>Please Select Civil Status</option>
                <option value="single">Single</option>
                <option value="married">Married</option>
                <option value="widowed">Widowed</option>
                <option value="divorced">Divorced</option>
              </select>
              <div class="invalid-feedback">Please enter your Civil Status</div>
        </div>
        </div>
        <br> 
        <br> 

 <div class="row" style="max-width: 90%; margin: 0 auto;"> <!--row 4-->
       <legend>Address</legend>
       <div class="col-lg-2">
          <label for="province/state">Province/State:</label>
              <input class="form-control" type="text" id="province" name="province" placeholder="Enter Province/State" required/>
              <div class="invalid-feedback">Please enter your Province / State</div>
        </div>
        <div class="col-lg-2">
          <label for="city">City:</label>
              <input class="form-control" type="text" id="city" name="city" placeholder="Enter City" required/>
              <div class="invalid-feedback">Please enter your City</div>
        </div>
        <div class="col-lg-3">
          <label for="baranggay">Baranggay:</label>
          <input class="form-control" type="text" id="baranggay" name="baranggay" placeholder="Enter Baranggay" required/>
          <div class="invalid-feedback">Please enter your Baranggay</div>
        </div>
        <div class="col-lg-3">
          <label for="address">Street Address:</label>
              <input class="form-control" type="text" id="street-address" name="street" placeholder="Enter Street Address" required/>
              <div class="invalid-feedback">Please enter your Address</div>
        </div>
        <div class="col-lg-2">
          <label for="postal">Enter Postal Code:</label>
              <input class="form-control" type="tel" id="postal-code" name="postal" placeholder="Enter Postal Code" required/>
              <div class="invalid-feedback">Please enter your Postal Code</div>
        </div>
       
  </div>
        
        <br> 
       <div class="row" style="max-width: 90%; margin: 0 auto;">  <!--row 6-->
         <legend>Parent / Guardian</legend>
        <div class="col-lg-4">
          <label for="father">Father's Full Name:</label>
              <input class="form-control" type="text" id="father-name" name="father" placeholder="Enter Father's Name" />
        </div>
        <div class="col-lg-4">
          <label for="fatherOccupation">Father Occupation:</label>
              <input class="form-control" type="text"id="f_occu"name="f_occu" placeholder="Enter Father's Occupation" />
        </div>
           </div>
        <br> 
        <br> 
        <div class="row" style="max-width: 90%; margin: 0 auto;"> <!--row 7-->
        <div class="col-lg-4">
                 <label for="mother">Mother's Full Name:</label>
              <input class="form-control" type="text" id="mother-name" placeholder="Enter Mother's Name" name="mother" />
        </div>
        <div class="col-lg-4">
           <label for="motherOccupation">Mother Occupation:</label>
              <input class="form-control" type="text" id="m_occu" name="m_occu" placeholder="Enter Mother's Occupation" />
        </div>
        </div>
        <br>
        <br>
        <div class="row" style="max-width: 90%; margin: 0 auto;"> 
        <legend>College:</legend>
        <div class="col-lg-4">
          <label for="collegeName">College School Name:</label>
          <input class="form-control" type="text" id="cname" name="cname" placeholder="Enter College School Name" />
        </div>
        <div class="col-lg-4">
          <label for="program">Study Program:</label>
          <input class="form-control" type="text" id="cprogram" name="cprogram" placeholder = "Enter Study Program" />
        </div>
        <div class="col-lg-2">
          <label for="year">Year Graduated:</label>
          <input class="form-control" type="date" id="cyear" name="cyear" placeholder="Enter Year Graduated"pattern="\d{2}/\d{2}/\d{4}" />
        </div>
        </div>
        <br> 
        <br> 
    <div class="row" style="max-width: 90%; margin: 0 auto;"> 
        <legend>Senior High School:</legend>
        <div class="col-lg-4">
          <label for="collegeName">Senior High School Name:</label>
          <input class="form-control" type="text" id="school-name" name="sname" placeholder="Enter Senior High School Name" />
        </div>
        <div class="col-lg-4">
          <label for="program">Study Program:</label>
          <input class="form-control" type="text" id="study-program" name="sprogram" placeholder="Enter Study Program" />
        </div>
        <div class="col-lg-2">
          <label for="year">Year Graduated:</label>
          <input class="form-control" type="date" id="year-graduated" name="syear" placeholder="Enter Year Grasuated" />
        </div>
          
        </div>
        <br>
         <div class="row" style="max-width: 90%; margin: 0 auto;"> 
        <legend>HighSchool:</legend>
       
        <div class="col-lg-4">
        <label for="collegeName">School Name:</label>  
          <input class ="form-control"type="text" id="school-name" name="hname" placeholder="Enter School name" />
        </div>
        <div class="col-lg-2">
          <label for="program">Year Graduated:</label>  
          <input  class ="form-control" type="date" id="year-graduated" name="hyear" placeholder="Enter Year Graduated" />
        </div>
  
        </div>
        <br>
         <div class="row" style="max-width: 90%; margin: 0 auto;"> 
          <legend>Elementary:</legend>
        <div class="col-lg-4">
        <label for="school-name">School Name:</label>
          <input  class ="form-control"type="text" id="school-name" name="ename" placeholder = "Enter Name of School"/>
        </div>
        <div class="col-lg-2">
          <label for="year-graduated">Year Graduated:</label>
          <input class ="form-control" type="date" id="year-graduated" name="eyear" />
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
            <input type="text" name="company_name1" id="name" class="form-control" placeholder="Enter Company Name">
          </div>
           <div class="col-lg-4">
            <label>Company Address:</label>
            <input type="text" name="company_address1" id="address" class="form-control" placeholder="Enter Company Address">
          </div>
          <div class="col-lg-4" style="margin-bottom:2%;">
            <label>Position:</label>
            <input type="text" name="position1" id="position1" class="form-control" placeholder="Enter Position">
          </div>
          <div class="col-lg-2">
            <label>Date Started:</label>
            <input type="date" name="work_date_start1" id="work_start" class="form-control">
          </div>
          <div class="col-lg-2">
            <label>Date Ended:</label>
            <input type="date" name="date_ended1" id="work_end" class="form-control">
          </div>
        </div>
        <br>
        <div class="row" style="max-width: 90%; margin: 0 auto;"> 
          <legend>Second Work</legend>
     <div class="col-lg-4">
            <label>Company Name:</label>
            <input type="text" name="company_name2" id="name" class="form-control" placeholder="Enter Company Name">
          </div>
           <div class="col-lg-4">
            <label>Company Address:</label>
            <input type="text" name="company_address2" id="address" class="form-control" placeholder="Enter Company Address">
          </div>
          <div class="col-lg-4" style="margin-bottom:2%;">
            <label>Position:</label>
            <input type="text" name="position2" id="position" class="form-control" placeholder="Enter Position">
          </div>
          <div class="col-lg-2">
            <label>Date Started:</label>
            <input type="date" name="work_date_start2" id="work_start" class="form-control">
          </div>
          <div class="col-lg-2">
            <label>Date Ended:</label>
            <input type="date" name="date_ended2" id="work_end" class="form-control">
          </div>
        </div>
        <br>
          <div class="row" style="max-width: 90%; margin: 0 auto;"> 
          <legend>Third Work</legend>
          <div class="col-lg-4">
            <label>Company Name:</label>
            <input type="text" name="company_name3" id="name" class="form-control" placeholder="Enter Company Name">
          </div>
           <div class="col-lg-4">
            <label>Company Address:</label>
            <input type="text" name="company_address3" id="address" class="form-control" placeholder="Enter Company Address">
          </div>
          <div class="col-lg-4" style="margin-bottom:2%;">
            <label>Position:</label>
            <input type="text" name="position3" id="position" class="form-control" placeholder="Enter Position">
          </div>
          <div class="col-lg-2">
            <label>Date Started:</label>
            <input type="date" name="work_date_start3" id="work_start" class="form-control">
          </div>
          <div class="col-lg-2">
            <label>Date Ended:</label>
            <input type="date" name="date_ended3" id="work_end" class="form-control">
          </div>
        </div>
        <br>
        <br>
     <div class="row" style="max-width: 90%; margin: 0 auto;"> 
            <legend>Character Reference</legend>
            <div class="col-lg-4">
            <label for="email">First name:</label>
            <input class="form-control" type="text" name="cfname" id="email" placeholder="Enter Firstname e.g juan">
          </div>
          <div class="col-lg-4">
            <label for="email">Last name:</label>
            <input class="form-control" type="text" name="clname" id="email" placeholder="Enter Last name e.g dela cruz">
            <br>
          </div>
           <div class="col-lg-4">
            <label for="email">Email:</label>
            <input class="form-control" type="email" name="email_ref" id="email" placeholder="Enter Email e.g juan@gmail.com">
          </div>
           <div class="col-lg-4">
            <label for="number">Contact Number:</label>
            <input class="form-control" type="tel" name="phone_ref" id="email" placeholder="Enter Contact Number e.g 0912-345-6789">
          </div>
           <div class="col-lg-4" style="margin-bottom:5%;">
            <label for="occupation">Occupation:</label>
            <input class="form-control" type="text" name="occu_ref" id="email" placeholder="Enter Occupation">
          </div>
    
  

   
</div>
<div class="row"  style="max-width: 90%; margin: 0 auto;">
<div class="row ">
<div class="col-lg-4">
  <label for="cv">Upload Resume Here:</label>
  <input accept=".pdf,.doc,.docx" style="background:#ECEFF1; padding:8px  15px; border-radius:50px;" type="file" class="form-control-file" id="cv" name="cv_file"
    required
    onchange="if(this.files[0].size > 5242880){this.setCustomValidity('File size must be less than 5 MB');}else{this.setCustomValidity('');}"
    >
  <div class="invalid-feedback">Please upload a resume</div>
  <div class="valid-feedback">Resume uploaded successfully</div>
  <div class="invalid-feedback">File size must be less than 5 MB</div>
</div>

</div>
         <div class="row"> 

    <div class="col-lg-4">
      <p style="margin-top: 3%;">
        I hereby certify that all details provided are true and correct to my knowledge. False information may lead to cancellation of application and/or termination of employment.
      </p>
      <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        I Agree 
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
    
  </div>

  <div class="row"> 
    <div class="col-lg-4">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Submit
        </button>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
            </div> 
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="save" id="modalSubmit" value="Submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>

</div>
</div>
  
</form>

<script>
    // Get the birthdate input field and age output field
    var birthdateField = document.getElementById("birthdate");
    var ageField = document.getElementById("age");

    // Add event listener to the birthdate field
    birthdateField.addEventListener("change", function() {
        // Calculate the age from the birthdate
        var today = new Date();
        var birthdate = new Date(birthdateField.value);
        var age = today.getFullYear() - birthdate.getFullYear();
        var monthDiff = today.getMonth() - birthdate.getMonth();
        if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthdate.getDate())) {
            age--;
        }
        // Set the age output field
        ageField.value = age;
        // Check if the age is at least 18
        if (age < 18) {
            // Display an error message
            document.getElementById("age-feedback").style.display = "block";
            // Disable the submit button
            document.querySelector("button[name='save']").disabled = true;
        } else {
            // Hide the error message
            document.getElementById("age-feedback").style.display = "none";
            // Enable the submit button
            document.querySelector("button[name='save']").disabled = false;
        }
    });
    

    // when the form is submitted
$('#exampleModal form').on('submit', function (e) {
    e.preventDefault(); // prevent the default form submit action

    // check if all fields are filled in
    var allFieldsFilledIn = true;
    $('#exampleModal input').each(function() {
        if ($(this).val() === '') {
            allFieldsFilledIn = false;
            return false; // exit the loop early
        }
    });

   
});

</script>

</body>
</html>