<?php
/* Smarty version 3.1.33, created on 2019-04-26 07:37:09
  from 'C:\wamp64\www\Web\smarty\templates\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cc2b5254da2b8_54263451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4de219c72ba486714c005596b9077cd716f81f2' => 
    array (
      0 => 'C:\\wamp64\\www\\Web\\smarty\\templates\\user.tpl',
      1 => 1556264189,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc2b5254da2b8_54263451 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>
<head>
    <meta lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" />
    <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 </title>
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
                <?php echo $_smarty_tpl->tpl_vars['avatarnavbar']->value;?>

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
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('../assets/img/city-profile.jpg');"></div>
    <div class="main main-raised">
    <div class="profile-content">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile">
              <div class="avatar">


              <?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>

                <!-- <img src="../assets/img/basic-bear-avatar.png" alt="Circle Image" class="img-raised rounded-circle img-fluid"> -->
              </div>
              <div class="name">
                <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

                <!--<h3 class="title">Christian Louboutin</h3> -->
                <?php echo $_smarty_tpl->tpl_vars['email']->value;?>

                <!--<p>christian.louboutin@gmail.com</p> -->
              </div>
            </div>
          </div>
        </div>
        <div class="description text-center">
          <?php echo $_smarty_tpl->tpl_vars['desc']->value;?>

          <!--<p>An artist of considerable range, Chet Faker &#x2014; the name taken by Melbourne-raised, Brooklyn-based Nick Murphy &#x2014; writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. </p> -->
          <br>
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
              <a href="mycourses-page.html" class="btn btn-primary btn-lg" role="button">My courses</a>
            </div>
          </div>
        </div>
        
          <br>
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
  <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
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
