<?php
//Student_registration\database\data.php
include 'navbar.php';
include  '../database/data.php';
include 'validation.php';
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


<!-- Slider start -->
<div class="slider">

  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://davmandi.in/File/146/Slider_077e3c01-da78-4dd7-a7f6-e399989c498d_Investiture%20ceremony%20Senior%20Wing.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://s3mn.mnimgs.com/img/shared/school/455781/images/verified/455781.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://davmandi.in/File/146/building.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </button>
</div>
</div>

<!-- Slider end  -->

<!-- Colums-Form start -->
<div class="forms">
  <div class="container">
    <div class="row">
      <div class="col">

      <!-- Form start -->
      <form  method="post" id="frm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])  ?>" class="stdform">
        <div class="form-group">
          <!-- <label for="exampleInputName">Name</label> -->
          Name
          <input type="text" class="form-control" name="name" maxlength="100" minlength="4">
          <span><?php echo $nameErr; ?></span>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" class="form-control" id="" aria-describedby="" name="email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          <span><?php echo $emailErr; ?></span>
        </div>
        <div class="form-group">
          <label for="exampleInputContact">Contact</label>
          <input type="tel" class="form-control" id="" aria-describedby="" name="contact">
          <span><?php echo $contactErr ?></span>
        </div>
        <div class="form-group">
          <label for="exampleInputAddress">Address</label>
          <input type="text" class="form-control" id="" aria-describedby="" name="address">
          <span><?php echo $addressErr; ?></span>
        </div>
        <div class="form-group">
        <label for="exampleInputClasss">Class</label>
        <input type="number" class="form-control" id="" aria-describedby="" name="class" max="12" min="1">
        <span><?php echo $classErr; ?></span>
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
        <span><?php echo $genderErr; ?></span>
        <br><br>
          <!-- gender -->
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <!-- Form end -->
    </div>  
    <!-- colume2 start-->
    <img src="https://0.academia-photos.com/attachment_thumbnails/80411266/mini_magick20220207-4720-1u0uayx.png?1644228739" class="img-fluid" alt="...">
    <!-- colume2 end-->
  </div>
</div>

<!-- footer Start -->

  <center>
  <footer>
    <p>This webpage is develop and design by : Harsh Dhiman<br>
      <a href="https://www.linkedin.com/in/er-harsh-dhiman-377058190/">linkedin</a></p>
    </footer>
  </center>

<!-- footer End -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script>
      jQuery('#frm').validate({
        rules:
        {
          name:"required",
          email:"required",
          contact:{
            required:true,
            minlength:10,
            maxlength:10
          },
          address:"required",
          class:"required",
        },
        messages:{
          name:"enter your name",
          email:"enter your email",
          contact:{
            required:"enter your contact details",
            minlength:"minimum length will we 10",
            maxlength:"out of bond"
          },
          address:"enter your address",
          class:"enter your class",
        }
    })
    </script>
  </body>
</html>