<?php
include 'navbar.php';
include  '../database/data.php';

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
<style>
  a {
    color: #ffffff;
    text-decoration: none;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}
</style>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
  </body>
</html>
<div class="container">
<table class="table table-light">
  <thead>
    <tr>
      <th scope="col">s.no</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">contact</th>
      <th scope="col">address</th>
      <th scope="col">class</th>
      <th scope="col">gender</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
      <th scope="col">View</th>
    </tr>
  </thead>
  <tbody>
<?php
$sql = "SELECT * FROM `data`";
$result=mysqli_query($con,$sql);
{
    foreach($result as $row)
    {
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $contact = $row['contact'];
        $address = $row['address'];
        $class = $row['class'];
        $gender = $row['gender'];
        echo    
        '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$contact.'</td>
        <td>'.$address.'</td>
        <td>'.$class.'</td>
        <td>'.$gender.'</td>
        <td>
    <button class="btn btn-primary" type="submit"><a href="edit.php?id='.$id.'">Update</a></button>
    </td>
    <td>
    <button class="btn btn-primary" type = "submit"><a href="delete.php?deleteid='.$id.'" >delete</a></button>
    </td>
    </tr>';
    }
}
?>
  </tbody>
</table>
</body>
</html>