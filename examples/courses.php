<?php
	require_once('../smarty/Smarty.class.php');
	require_once('courseDAO.php');
        session_start();
	$smarty = new Smarty();
    $smarty->template_dir = "../smarty/templates";
    $smarty->compile_dir = "../smarty/templates_c";
    
    $smarty->assign("lang","ua");
    $smarty->assign("title","Courses");
    courseDAO::eagerInit();
    $courses = courseDAO::getCourses();
    $content = "";
    $header = "";

    if($_SESSION["loggedin"] == true)
    {

          $header .= '<li class="dropdown nav-item">
            <a href="#profile" class="profile-photo dropdown-toggle nav-link" data-toggle="dropdown">
              <div class="profile-photo-small"> <img src='. $_SESSION["img"].'alt="Circle Image" class="img-raised rounded-circle img-fluid"></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="profile-page.php" class="dropdown-item">Me</a>
              <a href="mycourses-page.html" class="dropdown-item">My Courses</a>
              <a href="logout.php" class="dropdown-item">Sign out</a>
            </div>
          </li>';
    }
    else
    {
      $header.=  '<li class="nav-item"> <a href="login-page.html" class="nav-link"> Log in </a> </li>';
    }

    $smarty->assign("myArray",$courses);
    $smarty->assign("header",$header);
    $smarty->display("courses.tpl");

?>