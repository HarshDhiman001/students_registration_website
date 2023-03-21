<?php
$nameErr = $emailErr = $contactErr = $addressErr = $classErr = $genderErr = "";
$name = $email = $contact = $address = $class = $gender = "";

if($_SERVER['REQUEST_METHOD']=='POST')
{
  if(empty($_POST['name']))
  {
    $nameErr = "*Please enter your name";
  }
  elseif(empty($_POST['email']))
  {
    $emailErr = "*Please enter your email";
  }
  elseif(empty($_POST['contact']))
  {
    $contactErr = "*Please enter your contact"; 
  }
  elseif(empty($_POST['address']))
  {
    $addressErr ="*Please enter your address";
  }
  elseif(empty($_POST['class']))
  {
    $classErr = "*Please enter your class";
  }
  elseif(empty($_POST['gender']))
  {
    $genderErr = "*Please enter your gender";
  }
  else{
    include 'else.php';
$sql = "INSERT INTO data (name,email,contact,address,class,gender) 
VALUES('$name','$email','$contact','$address','$class','$gender')";
if($con->query($sql)==true)
{
  echo ("data entered successfully");
}
else
{
  echo ("re-try");
}
$con->close();
function input_data($data)
{
$data = trim($data);
$data = stripcslashes($data);
$data = htmlspecialchars($data);
}
  }
}
?>