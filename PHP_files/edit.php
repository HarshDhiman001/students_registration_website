<?php
include 'navbar.php';
include  '../database/data.php';
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
    $id=$_GET['id'];
    $sql="UPDATE`data`SET`name`='$name',`email`='$email',`contact`='$contact',`address`='$address',`class`='$class',`gender`='$gender'
    WHERE`data`.`id`=$id";
    // $sql = "SELECT * FROM `data`";
    $result=mysqli_query($con,$sql);
    // $row=mysqli_fetch_assoc($result);
    // $name = $row['name'];
    // $email = $row['email'];
    // $contact = $row['contact'];
    // $contact = $row['contact'];
    // $address = $row['address'];
    // $class = $row['class'];
    // $gender = $row['gender'];

    if($result)
    {
    echo '<div class="p-3 mb-2 bg-primary text-white">Updated SUccessfully</div>';
    }
}
}
$id=$_GET['id'];
$sql = "SELECT * FROM `data` WHERE id=$id";
$result=mysqli_query($con,$sql);
{
    while($row=mysqli_fetch_assoc($result))
    {
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $contact = $row['contact'];
        $address = $row['address'];
        $class = $row['class'];
        $gender = $row['gender'];
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/Student_registration/css/styles.css">

    <title>All Students</title>
  </head>
  <body>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<form  method="post" action="" class="stdform">
        <div class="form-group">
          <label for="exampleInputName">Name</label>
          <input type="text" class="form-control" name="name" maxlength="100" minlength="4" value=<?php echo $name?>>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value=<?php echo $email?>>
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputContact">Contact</label>
          <input type="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="contact" value=<?php echo $contact?>>
        </div>
        <div class="form-group">
          <label for="exampleInputAddress">Address</label>
          <input type="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="address" value=<?php echo $address?>>
        </div>
        <div class="form-group">
        <label for="exampleInputClasss">Class</label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="class" max="12" min="1" value=<?php echo $class?>>
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
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  <tbody>

  </tbody>
</table>
</div>
</body>
</html>