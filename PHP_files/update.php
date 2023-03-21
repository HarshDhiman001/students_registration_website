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
  include '../database/data.php';
$id=$_GET['updateid'];
$sql = "SELECT * FROM `data`";
  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_assoc($result);
  $name = $row['name'];
  $email = $row['email'];
  $contact = $row['contact'];
  $address = $row['address'];
  $class = $row['class'];
  $gender = $row['gender'];
  $sql="UPDATE`data`SET`name`='$name',`email`='$email',`contact`='$contact',`address`='$address',`class`='$class',`gender`='gender'
  WHERE `data`.`id` = $id";
if($result)
{
  echo "updated successfully";
}
}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="/Student_registration /css/styles.css">
  
    <title>Student Registration Form</title>
  </head>
  <body>
      <form  method="post" action="">
        <div class="form-group">
          <label for="exampleInputName">Name</label>
          <input type="text" class="form-control" name="name" maxlength="100" 
          value = <?php echo $name; ?> >
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" 
          aria-describedby="emailHelp" name="email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputContact">Contact</label>
          <input type="tel" class="form-control" id="exampleInputEmail1" 
          aria-describedby="emailHelp" name="contact">
        </div>
        <div class="form-group">
          <label for="exampleInputAddress">Address</label>
          <input type="address" class="form-control" id="exampleInputEmail1" 
          aria-describedby="emailHelp" name="address">
        </div>
        <div class="form-group">
        <label for="exampleInputClasss">Class</label>
        <input type="number" class="form-control" id="exampleInputEmail1" 
        aria-describedby="emailHelp" name="class" max="12" min="1">
        </div>
        <!-- gender -->
        <div class="form-group">
          <label for="exampleInputClasss">Gender</label>
          
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="Male">
            <label class="form-check-label" for="exampleRadios1">
              Male
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="Female">
            <label class="form-check-label" for="exampleRadios2">
              Female
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="exampleRadios3" value="Other" >
            <label class="form-check-label" for="exampleRadios3">
              Other
            </label>
          </div>
        </div>
        <br><br>
          <!-- gender -->
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
      </body>
</html>