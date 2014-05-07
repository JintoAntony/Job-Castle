<?php
// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
header('Location: index.php');
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Home</title>

<link rel="stylesheet" type="text/css" href="css/style.css" />
 <link href="css/bootstrap.css" rel="stylesheet">
 <link href="css/bootstrap-responsive.css" rel="stylesheet">
<style type="text/css">
.container{
	width: 100%;
	height: 100%;
	position: relative;
}
</style>
</head>
<body>

<!-- --------------------------------------------------------------------------- -->
  <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
		  
          <a class="brand" href="#">Admin Panel</a>
          <div class="nav-collapse collapse">
        <!--    <p class="navbar-text pull-right">
              Logged in as <a href="#" class="navbar-link">Username</a>
            </p> -->
            <ul class="nav">
              <li class="active"><a href="home.php">Home</a></li>
              <li><a href="employer.php">Employer Management</a></li>
              <li><a href="jobseeker.php">Jobseeker management</a></li>
              <li><a href="">About Us</a><li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <!-- ------------------------------------------------------------ -->



<div id="reg_maindiv">

<div class="container">
<!--<a href="employer.php"><input type="button" value="Employer" name="employer" id="employer" /></a> 
<a href="jobseeker.html"><input type="button" value="Job Seeker" name="jobseeker" id="jobseeker" /></a> -->

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

<div id="reg_left">

<div id="login" style="left:300px;" align="center"><br /><br />

<a href="employer.php"><div style="font-family:'Times New Roman', Times, serif; font-size:21px">Employer Management</div></a></div>

</div>



<div id="reg_left">

<div id="login" align="center"><br /><br /> 

<a href="jobseeker.php"><div style="font-family:'Times New Roman', Times, serif; font-size:21px">Jobseeker Management</div></a> </div>

</div>


</div>
</div>
</body>
</html>
