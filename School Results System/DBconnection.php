<?php 
//if session is set: if not run this
if(!isset($_SESSION)){
    session_start();
}

//create a connection to the database, use this OOP method
$conn = new mysqli('localhost','root','','school_management_system');
//check if connection works, if not print an error message
if(!$conn){
    die("Connection Error!!!");
}

?>
