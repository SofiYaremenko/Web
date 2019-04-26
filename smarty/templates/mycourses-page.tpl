<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title> My Courses </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-kit.css?v=2.0.5" rel="stylesheet" />

</head>

<body class="profile-page sidebar-collapse">
  <nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg" color-on-scroll="100">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="template.html"> Courses 4 You </a>
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
            <a class="nav-link" href="courses.php">
               <i class="material-icons">apps</i>Courses
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">
               About Us
            </a>
          </li>
          {$header}
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
  <div class="main main-raised">
      <div class="container">
        <div class="section">
        <div class="row">
        
		{foreach from=$myArray item=course}
    <!--<form method="post" action="coursedetails.php">-->
        <div class="card">
          
          <div class="card-header card-header-text card-header-primary">
            <div class="card-text">
              <h4 class="card-title">{$course->getTitle()}</h4>
               <input name="id" type="hidden" value="{$course->getId()}">
            </div>
          </div>
          <div class="card-body">
            <div class="row">
            <div class="col-4">
            <img src='{$course->getImg()}' alt="Card image cap" width="100%">
          </div>
          <div class="col-8">
             <div class="row">
            <p class="card-text"  >{$course->getDescription()}</p>
            </div>
           
            <div class="row mycourse " >
              <form method="post" action="coursedetails.php">
                 <input name="id" type="hidden" value="{$course->getId()}">
                 <button type="submit" class="btn btn-primary">Course Details</button>
                 </form>
               <!--<a href="forum.php" class="btn btn-primary">Forum</a>-->
               <form method="post" action="forum.php">
                   <input name="id" type="hidden" value="{$course->getId()}">
                      <button type="submit" class="btn btn-primary">Forum</button>
                  </form>
            </div>
          </div>

              </div>

          </div>

        </div>
        <!--</form>-->
		{/foreach}
        
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