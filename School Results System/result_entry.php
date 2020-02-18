<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>course_registration</title>
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
                <li role="presentation"><a href="#"><b>COURSES REGISTRATION</b></a></li>
                <li role="presentation"><a href="units_registration.php"><b>UNITS REGISTRATION</b></a></li>
                <li role="presentation"><a href="student_admission.php"><b>STUDENT ADMISSION</b></a></li>
                <li role="presentation" class="active"><a href="result_entry.php"><b>RESULT ENTRY</b></a></li>
            </ul>
        </div>
    </div>
</nav>
 <div class="container">
        <div class="panel panel-default" style=" width: 60% !important;display: table;margin:auto;position: relative;">
            <div class="panel-heading">
                <h3 class="panel-title">Result Entry</h3></div>
            <div class="panel-body">
                <div class="row justify-content-center">
                    <form role="form" class="form-container" action="course_registration.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <div class="form-group">
                        <label>Admission Number:</label>
                        <input type="text" class="form-control" name="course_code" required="required" />
                    </div>
                    <div class="form-group">
                        <label>Student Name:</label>
                        <input type="text" class="form-control" name="course_name" required="required" />
                    </div>
                    <div class="form-group">
                        <label>Course:</label>
                        <input type="text" class="form-control" name="course_code" required="required" />
                    </div>
                    <div class="form-group">
                        <label>Unit Code:</label>
                        <input type="text" class="form-control" name="year_offered" required="required" />
                    </div>
                    <div class="form-group">
                        <label>Marks:</label>
                        <input type="text" class="form-control" name="year_offered" required="required" />
                    </div>
                    <div class="form-group">
                        <label>Grade:</label>
                        <input type="text" class="form-control" name="year_offered" required="required" />
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-6">
                            <input type="submit" name="submit" class="btn btn-default btn-block" value="Submit" />
                        </div>
                        <div class="col-sm-6">
                            <input type="submit" name="view" class="btn btn-default btn-block" value="View Report" />
                        </div>
                    </div>
                </form> 
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>