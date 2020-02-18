<?php 
include_once "DBconnection.php";

$errors = array();

//check if submit button is clicked
if(isset($_POST['submit'])){


    //apart from  the HTML5 "required" feature, the following password mismatch error is anticipated.
        if ($_POST['password'] != $_POST['confirmPassword']) {
            array_push($errors, "The two passwords do not match!");
        }
    
        //if there are no errors, add user to the database
        if (count($errors) == 0) {
        //create values to pick the values entered
        $userID = mysqli_real_escape_string($conn, $_POST['userID']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $user_level = mysqli_real_escape_string($conn, $_POST['user_level']);

        //encrypt the password
        $password = md5($_POST['password']);
        $department = mysqli_real_escape_string($conn, $_POST['department']);
        //create sql to save the collected details
        $sql = "INSERT INTO user_registration(userID,username,user_level,password,department) VALUES($userID,'$username','$user_level','$password','$department')";
        //execute the sql query
        mysqli_query($conn,$sql);
        //refer user back to user_registration.php
        header("location:user_registration.php");
   }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user_registration.php</title>
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
                <li role="presentation" class="active"><a href="#"><b>USER REGISTRATION</b></a></li>
                <li role="presentation"><a href="course_registration.php"><b>COURSES REGISTRATION</b></a></li>
                <li role="presentation"><a href="units_registration.php"><b>UNITS REGISTRATION</b></a></li>
                <li role="presentation"><a href="student_admission.php"><b>STUDENT ADMISSION</b></a></li>
                <li role="presentation"><a href="result_entry.php"><b>RESULT ENTRY</b></a></li>
                </ul>
        </div>
    </div>
</nav>
    <div class="container">
    <div class="panel panel-default" style=" width: 60% !important;display: table;margin:auto;position: relative;">
    <div class="panel-heading">
        <h3 class="panel-title">Register Users</h3></div>
    <div class="panel-body">
        <form role="form" class="form-container" action="user_registration.php" method="POST" enctype="multipart/form-data" autocomplete="off">
            <!-- Display validation errors here -->
            <?php if (count($errors)>0): ?>
                <div class="form-group ValidationError">
                    <?php foreach ($errors as $error) :?>
                        <p><?php echo "$error"; ?></p>
                    <?php endforeach ?>
                </div>
            <?php endif ?>

            <div class="form-group">
                <label>User ID:</label>
                <input type="text" class="form-control" name="userID" />
            </div>
            <div class="form-group">
                <label>Username:</label>
                <input type="text" class="form-control" name="username" />
            </div>
            <div class="form-group">
                <label>User Level:</label>
                <input type="text" class="form-control" name="user_level" />
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" class="form-control" name="password" />
            </div>
            <div class="form-group">
                <label>confirmPassword:</label>
                <input type="password" class="form-control" name="confirmPassword" />
            </div>
            <div class="form-group">
                <label>Department:</label>
                <input type="text" class="form-control" name="department" />
            </div>
            <div class="row form-group">
                <div class="col-sm-4">
                    <input type="reset" class="btn btn-default btn-block" name="Refresh" value="Refresh"/>
                </div>
                <div class="col-sm-4">
                    <input type="submit" name="submit" class="btn btn-default btn-block" value="Submit" />
                </div>
                <div class="col-sm-4">
                    <input type="submit" name="view" class="btn btn-default btn-block" value="View Users" />
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