<?php
	require_once('smarty/Smarty.class.php');
	require_once('courseDAO.php');
	$smarty = new Smarty();
    $smarty->template_dir = "smarty/templates";
    $smarty->compile_dir = "smarty/templates_c";
    
    $smarty->assign("lang","ua");
    $smarty->assign("title","Courses");
    courseDAO::eagerInit();
    $courses = courseDAO::getCourses();
    $content = "";

    $smarty->assign("myArray",$courses);

    $smarty->display("courses.tpl");

?>