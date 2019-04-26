<?php

require_once('../smarty/Smarty.class.php');
require_once('forumDAO.php');
$smarty = new Smarty();
$smarty->template_dir = "../smarty/templates";
$smarty->compile_dir = "../smarty/templates_c";
$smarty->assign("title","Forum");

forumDAO::eagerInit();
$comments = forumDAO::getComments();
$content = "";
$smarty->assign("myArray",$comments);
$smarty->display("forum.tpl");
