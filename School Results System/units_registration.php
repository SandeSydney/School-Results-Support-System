<?php 
include_once "DBconnection.php";

//confirm if the submit button has been pressed
if(isset($_POST['submit'])){

    //create variables that shall store the values keyed in
    $unit_code = mysqli_real_escape_string($conn, $_POST['unit_code']);
    $unit_name = mysqli_real_escape_string($conn, $_POST['unit_name']);
    $course_code = mysqli_real_escape_string($conn, $_POST['course_code']);
    $year_offered = mysqli_real_escape_string($conn, $_POST['year_offered']);
    $semester_offered = mysqli_real_escape_string($conn, $_POST['semester_offered']);

    //write sql to save input data
    $sql = "INSERT INTO units_registration(unit_code,unit_name,course_code,year_offered,semester_offered) VALUES('$unit_code', '$unit_name', $course_code, $year_offered, $semester_offered)";

    //execute the sql
    mysqli_query($conn, $sql);
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>units_registration</title>
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
                <li role="presentation" class="active"><a href="#"><b>UNITS REGISTRATION</b></a></li>
                <li role="presentation"><a href="student_admission.php"><b>STUDENT ADMISSION</b></a></li>
                <li role="presentation"><a href="result_entry.php"><b>RESULT ENTRY</b></a></li>
            </ul>
        </div>
    </div>
</nav>
    <div class="container">
        <div class="panel panel-default" style=" width: 60% !important;display: table;margin:auto;position: relative;">
            <div class="panel-heading">
                <h3 class="panel-title">Units Registration</h3></div>
            <div class="panel-body">
                <form role="form" class="form-container" action="units_registration.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <div class="form-group">
                        <label>Unit Code:</label>
                        <input type="text" class="form-control" name="unit_code" required="required" />
                    </div>
                    <div class="form-group">
                        <label>Unit Name:</label>
                        <input type="text" class="form-control" name="unit_name" required="required" />
                    </div>
                    <div class="form-group">
                        <label>Course Code:</label>
                        <input type="text" class="form-control" name="course_code" required="required" />
                    </div>
                    <div class="form-group">
                        <label>Year Offered:</label>
                        <input type="text" class="form-control" name="year_offered" required="required" />
                    </div>
                    <div class="form-group">
                        <label>Semester Offered:</label>
                        <input type="text" class="form-control" name="semester_offered" required="required" />
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-4">
                            <input type="reset" class="btn btn-default btn-block" name="Refresh" value="Refresh"/>
                        </div>
                        <div class="col-sm-4">
                            <input type="submit" name="submit" class="btn btn-default btn-block" value="Submit" />
                        </div>
                        <div class="col-sm-4">
                            <input type="submit" name="view" class="btn btn-default btn-block" value="View Units" />
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>