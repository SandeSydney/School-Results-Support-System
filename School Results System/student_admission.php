<?php 
include_once "DBconnection.php";

//check if submit button is clicked
if (isset($_POST['submit'])){
   $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
   $middle_name = mysqli_real_escape_string($conn, $_POST['middle_name']);
   $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
   $registration_number = mysqli_real_escape_string($conn, $_POST['registration_number']);
   $course = mysqli_real_escape_string($conn, $_POST['course']);
   $year_of_study = mysqli_real_escape_string($conn, $_POST['year_of_study']);
   $date_of_birth = mysqli_real_escape_string($conn, $_POST['date_of_birth']);
   $gender = mysqli_real_escape_string($conn, $_POST['gender']);
   $residence = mysqli_real_escape_string($conn, $_POST['residence']);


   //create variable that stores sql query to the database
   $sql = "INSERT INTO student_admission(first_name,middle_name,last_name,registration_number,course,year_of_study,date_of_birth,gender,residence) VALUES('$first_name','$middle_name','$last_name','$registration_number','$course',$year_of_study,'$date_of_birth','$gender','$residence')";

   //execute the sql query
   mysqli_query($conn,$sql);

}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student_admission.php</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="background:#DCDCDC !important;">
    <nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        </div>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav navbar-right">
                <li role="presentation"><a href="index.php">HOME</a></li>
                <li role="presentation"><a href="user_registration.php"><b>USER REGISTRATION</b></a></li>
                <li role="presentation"><a href="course_registration.php"><b>COURSES REGISTRATION</b></a></li>
                <li role="presentation"><a href="units_registration.php"><b>UNITS REGISTRATION</b></a></li>
                <li role="presentation" class="active"><a href="#"><b>STUDENT ADMISSION</b></a></li>
                <li role="presentation"><a href="result_entry.php"><b>RESULT ENTRY</b></a></li>               
            </ul>
        </div>
    </div>
</nav>
    <div class="container">
        <div class="panel panel-default" style=" width: 60% !important;display: table;margin:auto;position: relative;">
    <div class="panel-heading">
        <h3 class="panel-title">Student Admission Panel</h3></div>
    <div class="panel-body"><span> </span>
        <form role="form" class="form-container" action="student_admission.php" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="form-group">
                <label>First Name:</label>
                <input type="text" class="form-control" name="first_name" />
            </div>
            <div class="form-group">
                <label>Middle Name:</label>
                <input type="text" class="form-control" name="middle_name" />
            </div>
            <div class="form-group">
                <label>Last Name:</label>
                <input type="text" class="form-control" name="last_name" />
            </div>
            <div class="form-group">
                <label>Registration Number:</label>
                <input type="text" class="form-control" name="registration_number" />
            </div>
            <div class="form-group">
                <label>Course:</label>
                <input type="text" class="form-control" name="course" />
            </div>
            <div class="form-group">
                <label>Year Of Study:</label>
                <input type="text" class="form-control" name="year_of_study" />
            </div>
            <div class="form-group">
                <label>Date Of Birth:</label>
                <input type="text" class="form-control" name="date_of_birth" />
            </div>
            <div class="form-group">
                <label>Gender:</label>
                <input type="text" class="form-control" name="gender" />
            </div>
            <div class="form-group">
                <label>Residence:</label>
                <input type="text" class="form-control" name="residence" />
            </div>
            <div class="row form-group">
                <div class="col-sm-4">
                    <input type="reset" name="reset" class="btn btn-default btn-block" value="Refresh" />
                </div>
                <div class="col-sm-4">
                    <input type="submit" class="btn btn-default btn-block" value="Submit" name="submit" />
                </div>
                <div class="col-sm-4">
                    <input type="submit" name="view" class="btn btn-default btn-block" value="View Students" />
            </div>
        </form>
    </div>
</div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>