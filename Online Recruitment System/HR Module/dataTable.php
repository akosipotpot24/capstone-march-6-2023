<?php
session_start();
require 'mainConnect.php';
//username and email
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Management</title>
  <link rel="stylesheet" href="css/head.css">
  <link rel="stylesheet" href="css/dashboard.css">
  <link href ="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" relstyle ="stylesheet">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!--Boxicons-NPM-->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<!--DATA TABLESSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
     <script defer src="https://code.jquery.com/jquery-3.5.1.js"></script>
     <script defer src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
     <script defer src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
      <script src="user.js" defer></script>
     <!--DATA TABLESSS-->
</head>



<body>
  <body>

  <div class="container mt-5">
    <?php include ('message.php')?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div id="title-header" class="card-header">
                    <h4 id="title-header">STUDENT INFORMATION
                            <a href="superAdminDashboard.php"class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                <table class="table" id = "mytable">
                    <thead>
                      <tr>
                        <th> Reference No.</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Date Apply</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                       $query = "SELECT * FROM applicant_info";
                       $query_run= mysqli_query($conn,$query);
                       if(mysqli_num_rows($query_run)>0){
                        foreach($query_run as $applicant_info){
                          ?>
                          <tr>
                       
                            <td><?= $applicant_info['reference_no'];?></td>
                            <td><?= $applicant_info['firstname'];?></td>
                            <td><?= $applicant_info['lastname'];?></td>
                            <td><?= $applicant_info['emails'];?></td>
                            <td><?= $applicant_info['status'];?></td>
                            <td><?= $applicant_info['date_apply'];?></td>
                            <td>
                              <a href="viewButton.php?reference_no=<?=$applicant_info['reference_no'];?>" style = "height: 31px; " class="btn btn-primary">View</a>
                              <a href="editButton.php?reference_no=<?=$applicant_info['reference_no'];?>" class="btn btn-success btn-sm">Edit</a>
                              <form action="dataTable.php" method="POST" class="d-inline">
                              <button type ="submit" name="delete" value="<?=$applicant_info['reference_no']; ?>"class ="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this record?');">Delete</button>
                              </form>
                            </td>
                          </tr>
                          <?php
                        }
                       }
                       else{
                          echo "<h5>No Record Found</h5>";
                       }
                      ?>
                     
                    </tbody>
                  </table>
                  <script src="https://code.jquery.com/jquery-3.6.3.min.js" 
                          integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" 
                          crossorigin="anonymous"></script>


                  <script src ="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
                  <script>
                  $(document).ready (function(){
                    $('.table').DataTable();

                  });
                  </script>
            
                </div>
            </div>
        </div>
    </div>
  </div>


  <main class="contentbody">

  </main>



 <!--Boxicons-Script-->
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

 <!--Bootstrap-JS-requisites-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
          integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
          crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" 
          integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" 
          crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" 
          integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" 
          crossorigin="anonymous"></script>

     <!-- Include SweetAlert 2 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.2/dist/sweetalert2.min.css">

<!-- Include SweetAlert 2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.2/dist/sweetalert2.all.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  



<!-- Delete Code here -->
<?php
require 'mainConnect.php';

if(isset($_POST['delete'])){
    $reference_no  = mysqli_real_escape_string($conn, $_POST['delete']);
    $query = "DELETE FROM applicant_info WHERE reference_no = '$reference_no' ";
    $query_run = mysqli_query($conn,$query);
    if($query_run){
       echo "<script>
              Swal.fire({
                title: 'Successfully Deleted!',
                icon: 'success',
                confirmButtonText: 'OK'
              }).then(() => {
                window.location.href = 'dataTable.php';
              });
            </script>";
    }
    else{
       echo "<script>
              Swal.fire({
                title: 'Applicant Not Deleted',
                icon: 'error',
                confirmButtonText: 'OK'
              }).then(() => {
                window.location.href = 'dataTable.php';
              });
            </script>";
    }
}


if(isset($_POST['update'])){
  $reference_no = $_POST['reference_no'];
  $firstname = $_POST['fname'];
  $middlename = $_POST['mname'];
  $lastname = $_POST['lname'];
  $bplace = $_POST['bplace'];
  $bdate = $_POST['birthdate'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $civil = $_POST['civil'];
  $province = $_POST['province'];
  $city = $_POST['city'];
  $baranggay = $_POST['baranggay'];
  $street = $_POST['street'];
  $postal = $_POST['postal'];
  $father_name = $_POST['father'];
  $father_occu = $_POST['f_occu'];
  $mother_name = $_POST['mother'];
  $mother_occu = $_POST['m-occu'];
  
  $college_name = $_POST['cname'];
  $collegeprogram = $_POST['cprogram'];
  $colleg_graduated = $_POST['cyear'];

  $senior_name = $_POST['sname'];
  $senior_program = $_POST['sprogram'];
  $senior_graduated = $_POST['syear'];

  $high_name = $_POST['hname'];
  $high_graduated = $_POST['hyear'];

  $elem_name = $_POST['ename'];
  $elem_graduated = $_POST['eyear'];

  $firstExpName = $_POST['company_name1'];
  $firstExpAdd = $_POST['company_address1'];
  $firstposition = $_POST['position1'];
  $firstdate_start = $_POST['work_date_start1'];
  $firstdate_end = $_POST['date_ended1'];

  $secondExpName = $_POST['company_name2'];
  $secondExpAdd = $_POST['company_address2'];
  $secondposition = $_POST['position2'];
  $seconddate_start = $_POST['work_date_start2'];
  $seconddate_end = $_POST['date_ended2'];

  $thirdExpName = $_POST['company_name3'];
  $thirdExpAdd = $_POST['company_address3'];
  $thirdposition = $_POST['position3'];
  $thirddate_start = $_POST['work_date_start3'];
  $thirddate_end = $_POST['date_ended3'];

  $email_ref = $_POST['email_ref'];
  $phone_ref = $_POST['phone_ref'];
  $occu_ref = $_POST['occu_ref'];


  $status = $_POST['status'];


  $query = "UPDATE applicant_info SET
   firstname='$firstname',
   middlename='$middlename',
   lastname='$lastname',
   birthplace='$bplace',
   birthdate='$bdate',
   age='$age',
   gender='$gender',
   email='$email',
   phone='$phone',
   civil_status='$civil',
   state='$province',
   city='$city',
   baranggay='$baranggay',
   street='$street',
   postal='$postal',
   f_name='$father_name',
   f_occu='$father_occu',
   m_name='$mother_name',
   m_occu='$mother_occu',

   c_name='$college_name',
   c_program='$collegeprogram',
   c_year='$colleg_graduated',

   s_name='$senior_name',
   s_program='$senior_program',
   s_year='$senior_graduated',

   h_name='$high_name',
   h_year='$high_graduated',

   e_name='$elem_name',
   e_year='$elem_graduated',

   compname1='$firstExpName',
   compadd1='$firstExpAdd',
   position1='$firstposition',
   date_started1='$firstdate_start',
   date_ended1='$firstdate_end',

   compname2='$secondExpName',
   compadd2='$secondExpAdd',
   position2='$secondposition',
   date_started2='$seconddate_start',
   date_ended2='$seconddate_end',

   compname3='$thirdExpName',
   compadd3='$thirdExpAdd',
   position3='$thirdposition',
   date_started3='$thirddate_start',
   date_ended3='$thirddate_end',

   email_ref='$email_ref',
   phone_ref='$phone_ref',
   occu_ref='$occu_ref',

    status='$status' 
    WHERE reference_no = '$reference_no'";





  if(mysqli_query($conn,$query)){
    echo "<script>
    Swal.fire({
      title: 'Successfully Edited!',
      icon: 'success',
      confirmButtonText: 'OK'
    }).then(() => {
      window.location.href = 'dataTable.php';
    });
  </script>";

  }else{
    echo "<script>
              Swal.fire({
                title: 'Applicant Not Edited',
                icon: 'error',
                confirmButtonText: 'OK'
              }).then(() => {
                window.location.href = 'dataTable.php';
              });
            </script>";
  }
}

?>




</body>

</html>