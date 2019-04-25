<?php
    require_once('../smarty/Smarty.class.php');
    require_once('profileDAO.php');
    session_start();
    $smarty = new Smarty();
    $smarty->template_dir = "../smarty/templates";
    $smarty->compile_dir = "../smarty/templates_c";
    $lang = "en";
    $title = "Profile";
    $smarty->assign("lang",$lang);
    $smarty->assign("title",$title);
    profileDAO::logInit();
    $user = profileDAO::getlogUser();
    $desc = "";
    $avatar = "";
    $name = "";
    $email = "";
    $ses_email = $_SESSION['email'];

    
    if ($user->getEmail() == $ses_email)
    {
        //<p>christian.louboutin@gmail.com</p>
        $email .="<p>". $user->getEmail()."</p>";
        //<h3 class="title">Christian Louboutin</h3> 
        $name .='<h3 class="title">'. $user->getFirstName() . ' ' .  $user->getLastName(). '</h3>';
        //echo $name;
        //<img src="../assets/img/basic-bear-avatar.png" alt="Circle Image" class="img-raised rounded-circle img-fluid"> 
        $avatar .= '<img src=' . $user->getImg(). 'alt="Circle Image" class="img-raised rounded-circle img-fluid">';
        $desc .="<p>". $user->getAboutUser()."</p>";
    } 


    $smarty->assign("email",$email);
    $smarty->assign("name",$name);
    $smarty->assign("avatar",$avatar);
    $smarty->assign("desc",$desc);
    $smarty->display("../smarty/templates/user.tpl");