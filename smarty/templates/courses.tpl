<!doctype html>
<html lang="en">

<head>
  <title>Courses</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-kit.css?v=2.0.5" rel="stylesheet" />
</head>

<body>
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
          <li class="nav-item">
            <a href="examples/login-page.html" class="nav-link">
              Log in
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('assets/img/profile_city.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand text-center">
            <h1>Your title here</h1>
            <h3 class="title text-center">Subtitle</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <h2 class="title">Available courses</h2>
      </div>
      <div class="container-fluid" id="all-courses-filter">
            <div id="filter-panel" class=" filter-panel">
                <div class="  panel panel-default ">
                    <div class="panel-body">
                        <form class="form-inline" role="form">
                            <div class="form-group filter">
                                <label class="filter-col" for="pref-filterby" style="margin-right:30px; font-size:14px">Filter by:</label>
                                <select id="pref-filterby"  style="margin-right:50px; font-size:14px" class="form-control" >
                                    <option>All</option>
                                    <option>Web Development</option>
                                    <option>Game Development</option>
                                </select>
                            </div> <!-- form group [order by] -->

                            <div class="form-group filter">
                                <label class="filter-col" style="margin-right:30px; font-size: 14px" for="pref-by-languages"  >Language:</label>
                                <select id="pref-by-languages" style="margin-right:50px; font-size: 14px" class="form-control">
                                    <option>All   </option>
                                    <option>English   </option>
                                    <option>Russian   </option>
                                </select>
                            </div> <!-- form group [order by] -->
                            <div class=" filter ">
                                <!--<label class="filter-col" style="margin-right:30px;" for="pref-search">Search:</label>-->
                                <input type="text" class="form-control" id="pref-search" placeholder="Search.." style="padding-top: 2px;">
                            </div><!-- form group [search] -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
      <div class="row">
        {foreach from=$myArray item=course}
<div class="col-md-6">
      <div class="card">
          <img class="card-img-top" src="{$course->getImg()}" alt="Card image cap">
          <div class="card-header card-header-text card-header-primary">
            <div class="card-text">
              <h4 class="card-title">{$course->getTitle()}</h4>
            </div>
          </div>
          <div class="card-body">
              <p class="card-text">{$course->getDescription()}</p>
    <a href="#" class="btn btn-primary btn-round">Go to course</a>
          </div>
      </div>
</div>
{/foreach}
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
  <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="./assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/material-kit.js?v=2.0.5" type="text/javascript"></script>
</body>

</html>