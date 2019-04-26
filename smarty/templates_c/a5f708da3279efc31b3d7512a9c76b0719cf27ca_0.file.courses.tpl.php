<?php
/* Smarty version 3.1.33, created on 2019-04-26 12:33:27
  from 'C:\wamp64\www\Web\smarty\templates\courses.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cc2fa977fdb48_54993639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5f708da3279efc31b3d7512a9c76b0719cf27ca' => 
    array (
      0 => 'C:\\wamp64\\www\\Web\\smarty\\templates\\courses.tpl',
      1 => 1556282004,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc2fa977fdb48_54993639 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
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
  <link href="../assets/css/material-kit.css?v=2.0.5" rel="stylesheet" />
</head>

<body class="profile-page">
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
          <?php echo $_smarty_tpl->tpl_vars['header']->value;?>

        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('../assets/img/profile_city.jpg')">
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
                        <form class="form-inline" role="form" method="post" action="courses.php">
                            <div class="form-group filter">
                                <label class="filter-col" for="pref-filterby" style="margin-right:30px; font-size:14px">Filter by:</label>
                                <select name="select"  id="pref-filterby"  style="margin-right:50px; font-size:14px" class="form-control" >
                                    <option value="all" >All</option>

                                    <option value="databases" >Databases</option>>
                                    <option value="web development" >Web Development</option>
                                    <option value="programming languages" >Programming Languages</option>
                                    <option value="game development" >Game Development</option>
                                    <option value="mobile apps" >Mobile Apps</option>
                                    
                                    <option value="software engineering" >Software Engineering</option>
                                </select>
                                <input  class="btn" type="submit" name="submit" value="filter">
                            </div> <!-- form group [order by] -->

                          
                        </form>
                    </div>
                </div>
            </div>
        </div>
      <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['myArray']->value, 'course');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['course']->value) {
?>

<div class="col-md-6">

            <form method="post" action="coursedetails.php">
      <div class="card">
          <img class="card-img-top" src="<?php echo $_smarty_tpl->tpl_vars['course']->value->getImg();?>
" alt="Card image cap">
          <div class="card-header card-header-text card-header-primary">
            <div class="card-text">
              <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['course']->value->getTitle();?>
</h4>
               <input name="id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['course']->value->getId();?>
">
            </div>
          </div>
          <div class="card-body">
              <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['course']->value->getDescription();?>
</p>
    <button type="submit" class="btn btn-primary">Course Details</button>
          </div>
      </div>
</div>
</form>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
