<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title> Course </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-kit.css?v=2.0.5" rel="stylesheet" />

</head>

<body class="product-page sidebar-collapse">
  <nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg" color-on-scroll="100">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="../template.html"> Courses 4 You </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="../courses.php">
               <i class="material-icons">apps</i>Courses
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../about.html">
               About Us
            </a>
          </li>
          <li class="dropdown nav-item">
            <a href="#profile" class="profile-photo dropdown-toggle nav-link" data-toggle="dropdown">
              <div class="profile-photo-small">
                <img src="../assets/img/faces/christian.jpg" alt="Circle Image" class="rounded-circle img-fluid">
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="profile-page.php" class="dropdown-item">Me</a>
              <a href="mycourses-page.html" class="dropdown-item">My Courses</a>
              <a href="../logout.php" class="dropdown-item">Sign out</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('../assets/img/city-profile.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h2 class="title">My Courses</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="section">
    <div class="container">
      <div class="main main-raised main-product">
        <div class="row">
          <div class="col-4">
            <img src='{$course->getImg()}' alt="Card image cap" width="100%">
            
          </div>
          <div class="col-8">
            <h2 class="title">{$course->getTitle()}</h2>
            <h3 class="main-price">{$course->getHoursAmount()}</h3>
            <div class="row">
              <p class="card-body"  >{$course->getDescription()}
              </p>
            </div>
            
            <div class="row pull-right">

               <form method="post" action="enroll.php">
      <input name="id" type="hidden" value="{$course->getId()}" >

                <a href="forum.php" class="btn btn-primary">Forum</a>
               <button type="submit" class="btn btn-primary">Add to my courses</a>
         </form>
            </div>
          </div>
        </div>
      </div>
      <div class="features text-center">
        <div class="row">
          <h3 class="title">Intro</h3>
        </div>
        <div class=" text-left">
          <p><a href="lesson-page.html" >Lesson 1</a></p>
          <p><a href="#" >Lesson 2</a></p>
        </div>
         <div class="row">
          <h3 class="title">Part 1</h3>
        </div>
        <div class=" text-left">
          <p><a href="#" >Lesson 1</a></p>
         <p> <a href="#" >Lesson 2</a></p>
          <p><a href="#" >Lesson 3</a></p>
        </div>
      </div>
      
    </div>
  </div>
  <footer class="footer">
    <div class="container">
      <nav class="float-left">
      </nav>
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> 
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-kit.js?v=2.0.5" type="text/javascript"></script>
</body>

</html>