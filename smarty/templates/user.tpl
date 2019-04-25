<!doctype html>
<html>
<head>
    <meta lang="{$lang}" />
    <title> {$title} </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    {$header}
    {$content}
</body>
</html>




{foreach from=$myArray item=user}
<div class="profile-content">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile">
              <div class="avatar">
                <img src="{$user.getImg()}" alt="Circle Image" class="img-raised rounded-circle img-fluid">
              </div>
              <div class="name">
                <h3 class="title">{$user.getFirstName()+$user.getLastName()}</h3>
                <h6>Designer</h6>
                <p>{user.getEmail()}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="description text-center">
          <p>{$user.getAboutUser()}</p>
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
{/foreach}