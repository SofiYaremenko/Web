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
    <link href="../assets/css/material-kit.css?v=2.0.5" rel="stylesheet" />
    {*<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">*}


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
                <li class="nav-item">
                    <a href="examples/login-page.html" class="nav-link">
                        Log in
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="page-header header-filter" data-parallax="true" style="background-image: url('../assets/img/city-profile.jpg')">

</div>
<div class="main main-raised">
    <div class="container">
        <div class="section">
         <div class="row">
            {foreach from=$myArray item=comment}
             <div class="container">
                 <div class="card">
                 <div class="row">
                <div class="col4">
                    <div class="thumbnail">
                        <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                    </div><!-- /thumbnail -->
                </div><!-- /col-sm-1 -->

                <div class="col8">
                    <div class="card-body">
                        <div class="card-title">
                            <strong>{$comment->getUserId()}</strong> <span class="text-muted">commented {$comment->getDatetime()}</span>
                        </div>
                        <div class="card-text">
                            {$comment->getComment()}
                        </div><!-- /panel-body -->
                    </div><!-- /panel panel-default -->
                </div><!-- /col-sm-5 -->
             </div0
                 </div>
             </div>
            {/foreach}
         </div>
        </div>
    </div>
        <div class="card">
    <table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
        <tr>
            <form name="form1" method="post" action="add_comment.php">
                <td>
                    <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                        <input name="id" type="hidden" value="{$course->getId()}">   
                        <tr>
                            <td valign="top"><strong>New Comment</strong></td>
                            <td valign="top">:</td>
                            <td><textarea name="a_answer" cols="45" rows="3" id="a_answer"></textarea>
                                <input type="submit" name="Submit" value="Submit"
                            </td>
                        </tr>
                    </table>
                </td>
            </form>
        </tr>
    </table>
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
    <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="../assets/js/plugins/moment.min.js"></script>
    <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="./assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/material-kit.js?v=2.0.5" type="text/javascript"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>

</html>