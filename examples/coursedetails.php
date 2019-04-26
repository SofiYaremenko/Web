<?php

	require_once('../smarty/Smarty.class.php');
	require_once('courseDAO.php');
	require_once('DBHelper.php');
	
	$smarty = new Smarty();
    $smarty->template_dir = "../smarty/templates";
    $smarty->compile_dir = "../smarty/templates_c";
    
    $smarty->assign("lang","ua");
    $smarty->assign("title","Courses");
    
    $content = "";
	
	if (isset($_POST['id'])) 
	$id = htmlentities($_POST['id']);
	
	$course;
	
	$pdo = new DBHelper();
        $pdo->connect();
		
       $sqlQuery = "SELECT * FROM courses WHERE id='$id'";
        foreach($pdo->query($sqlQuery) as $row) {
            $id = $row["id"];
            $title = $row["title"];
            $description = $row["about"];
			$img = $row["img_course"];
			$category = $row["fk_category"];
			$lang = $row["fk_lang"];
			$hoursAmount = $row["hours"];
            $course = new Course($id, $title, $description, $img, $category, $lang, $hoursAmount);
        }
        $pdo->disconnect();

    $smarty->assign("course",$course);

    $smarty->display("coursedetails-page.tpl");
?>