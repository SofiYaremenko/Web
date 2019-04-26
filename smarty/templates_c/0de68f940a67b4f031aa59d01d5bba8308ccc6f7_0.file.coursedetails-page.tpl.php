<?php
/* Smarty version 3.1.33, created on 2019-04-26 12:14:42
  from 'C:\wamp64\www\Web\smarty\templates\coursedetails-page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cc2f632a8d165_32532951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0de68f940a67b4f031aa59d01d5bba8308ccc6f7' => 
    array (
      0 => 'C:\\wamp64\\www\\Web\\smarty\\templates\\coursedetails-page.tpl',
      1 => 1556280834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc2f632a8d165_32532951 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
            <img src='<?php echo $_smarty_tpl->tpl_vars['course']->value->getImg();?>
' alt="Card image cap" width="100%">
            
          </div>
          <div class="col-8">
            <h2 class="title"><?php echo $_smarty_tpl->tpl_vars['course']->value->getTitle();?>
</h2>
            <h3 class="main-price"><?php echo $_smarty_tpl->tpl_vars['course']->value->getHoursAmount();?>
</h3>
            <div class="row">
              <p class="card-body"  ><?php echo $_smarty_tpl->tpl_vars['course']->value->getDescription();?>

              </p>
            </div>
            
            <div class="row pull-right">

                <a href="forum.php" class="btn btn-primary">Forum</a>
               <a href="coursedetails-page.html" class="btn btn-primary">Add to my courses</a>
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
        <?php echo '<script'; ?>
>
          document.write(new Date().getFullYear())
        <?php echo '</script'; ?>
>, made with <i class="material-icons">favorite</i> 
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <?php echo '<script'; ?>
 src="../assets/js/core/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="../assets/js/core/popper.min.js" type="text/javascript"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="../assets/js/plugins/moment.min.js"><?php echo '</script'; ?>
>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <?php echo '<script'; ?>
 src="../assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"><?php echo '</script'; ?>
>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <?php echo '<script'; ?>
 src="../assets/js/plugins/nouislider.min.js" type="text/javascript"><?php echo '</script'; ?>
>
  <!--  Google Maps Plugin    -->
  <?php echo '<script'; ?>
 src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"><?php echo '</script'; ?>
>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <?php echo '<script'; ?>
 src="../assets/js/material-kit.js?v=2.0.5" type="text/javascript"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
