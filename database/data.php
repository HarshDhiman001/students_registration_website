<!-- Path :- /student_registration/database/data.php -->

<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "students";

$con = mysqli_connect($server,$username,$password,$dbname);

if(!$con)
{
  die("Not Connected");
}

?>