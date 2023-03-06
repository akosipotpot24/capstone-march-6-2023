<?php
session_start();
require 'mainConnect.php';
//username and email

//logout cod
if(isset($_GET['logout'])){
    // unset all session variables
    session_unset();
    // destroy the session
    session_destroy();
    header("Location: login.php");
    exit;}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src ="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
     <script defer src="https://code.jquery.com/jquery-3.5.1.js"></script>
     <script defer src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
     <script defer src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="main.css">


	<title>AdminHub</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">AOE</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="dataTable.php">
					<i class='bx bx-group' ></i>
					<span class="text">Application</span>
				</a>
			</li>
			<li>
				<a href="job_vacancy.php">
					<i class='bx bx-briefcase-alt-2' ></i>
					<span class="text">Job Vacancy</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Create Status</span>
				</a>
			</li>
      <br>
      <br>
      <br>
			<li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Audit Trails</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				  <a class="logout" href="?logout=true"><i class='bx bxs-log-out'></i>Logout</a>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
      <div class="user-account-interface">
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Welcome! <?php echo $_SESSION['firstname']; echo " "; echo $_SESSION['lastname']; ?></h1>
					 <ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul> 
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Generate Report</span>
				</a>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>10</h3>
						<p>Open Position</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3><?php 
						    $query = "SELECT COUNT(*) FROM applicant_info WHERE status = 'new' ";
                                   $result = mysqli_query($conn, $query);
								   $row = mysqli_fetch_array($result);
								   echo $row[0];?>
								   </h3>
						<p>New Applicants</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3><?php 
						    $query = "SELECT COUNT(*) FROM applicant_info";
                                   $result = mysqli_query($conn, $query);
								   $row = mysqli_fetch_array($result);
								   echo $row[0];?></h3>
						<p>Total applicants</p>
					</span>
				</li>
			</ul>


<div class="container mt-5">
    <?php include ('message.php')?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div id="title-header" class="card-header">
                    <h4 id="title-header">APPLICANT INFORMATION
                            
                    </h4>
                </div>
                <div class="card-body">
                <table class="table" id = "mytable">
                    <thead>
                      <tr>
                        <th> Reference No.</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        
                        <th>Status</th>
                        <th>Date Apply</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                       $query = "SELECT * FROM applicant_info WHERE status = 'New'";
                       $query_run= mysqli_query($conn,$query);
                       if(mysqli_num_rows($query_run)>0){
                        foreach($query_run as $applicant_info){
                          ?>
                          <tr>
                       
                            <td><?= $applicant_info['reference_no'];?></td>
                            <td><?= $applicant_info['firstname'];?></td>
                            <td><?= $applicant_info['lastname'];?></td>
                            
                            <td><?= $applicant_info['status'];?></td>
                            <td><?= $applicant_info['date_apply'];?></td>
                            
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
<br>
<br>

			
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
	<script src="show.js"></script>
</body>
</html>