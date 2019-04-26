<?php
  require_once('../smarty/Smarty.class.php');
  require_once('courseDAO.php');
//   session_start();
if(isset($_POST['submit'])) {


  $smarty = new Smarty();
    $smarty->template_dir = "../smarty/templates";
    $smarty->compile_dir = "../smarty/templates_c";


//    courseDAO::eagerInit($_GET($type), $lang);
//courseDAO::eagerInit($sql);
//    $courses = courseDAO::getCourses();
//    $content = "";
    $header = "";



    if($_SESSION["loggedin"] == true)
    {

          $header .= '<li class="dropdown nav-item">
            <a href="#profile" class="profile-photo dropdown-toggle nav-link" data-toggle="dropdown">
              <div class="profile-photo-small"> <img src='. $_SESSION['img'].'alt="Circle Image" class="img-raised rounded-circle img-fluid"></div>
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



    if($_POST['select']=='databases') {
        $sql = "SELECT * FROM courses WHERE fk_category = 1";
        $smarty->assign("databases","selected");
    }
    elseif($_POST['select']=='web development'){
        $sql = "SELECT * FROM courses WHERE fk_category = 2";
        $smarty->assign("wd","selected");
    }
    elseif($_POST['select']=='programming languages'){
        $sql = "SELECT * FROM courses WHERE fk_category = 3";
        $smarty->assign("pl","selected");
    }
    elseif($_POST['select']=='game development'){
        $sql = "SELECT * FROM courses WHERE fk_category = 4";
        $smarty->assign("gd","selected");
    }
    elseif($_POST['select']=='mobile apps'){
        $sql = "SELECT * FROM courses WHERE fk_category = 5";
        $smarty->assign("ma","selected");
    }
    elseif($_POST['select']=='software engineering'){
        $sql = "SELECT * FROM courses WHERE fk_category = 6";
        $smarty->assign("se","selected");
    }
    else{
        $sql = "SELECT * FROM courses";
    }
    //$results = mysqli_query($dblink, $sql) or die (mysqli_error());
    courseDAO::eagerInit($sql);
    $courses = courseDAO::getCourses();

}


    $smarty->assign("myArray",$courses);
    $smarty->assign("header",$header);



    $smarty->display("courses.tpl");

?>