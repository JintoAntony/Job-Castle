<?php

DEFINE('DATABASE_USER', 'root');
DEFINE('DATABASE_PASSWORD','root');
DEFINE('DATABASE_HOST', 'localhost');
DEFINE('DATABASE_NAME', 'jobportal');

$dbc = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,DATABASE_NAME);

if (!$dbc) { trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());  }


$id=$_GET['er_id'];

$query = "select * from employers where er_id=$id";

$result = mysqli_query($dbc,$query);

$row = mysqli_fetch_array($result,MYSQLI_ASSOC)

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Employer Details</title>

<link rel="stylesheet" type="text/css" href="css/style.css" />
 <link href="css/bootstrap.css" rel="stylesheet">
 <link href="css/bootstrap-responsive.css" rel="stylesheet">

<style type="text/css">
.container{
	width: 100%;
	height: 100%;
	position: relative;
	text-align: center;
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

<div class="advanced_search_div" align="center">

<p>&nbsp;</p>
<p>&nbsp;</p>

<div style="width:900px;  margin:10px 0 0 10px; font-family:Arial; font-size:13px; border:2px solid rgba(147, 184, 189,0.8);" align="center">

    
    
    <table width="100%" height="auto" border="1" bordercolor="#5393b5" cellpadding="0" cellspacing="0">
  <tr>
    <td height="35" colspan="2" bgcolor="#5393b5">
    <span class="job_details_text" style="font-family:Tahoma, Geneva, sans-serif; font-size:18px; color:#CCC;">Employer Details</span>
    </td>
    </tr>
  
    <?php
  
  echo '<tr>
    <td width="27%" bgcolor="#e9e8e8" style="padding:7px;">Employer Id</td>
    <td width="73%" style="padding:7px;">'.$row['er_id'].'</td>
  </tr>
  
 <tr>
    <td width="27%" bgcolor="#e9e8e8" style="padding:7px;">Company Name</td>
    <td width="73%" style="padding:7px;">'.$row['er_company'].'</td>
  </tr>
  
  <tr>
    <td bgcolor="#e9e8e8" style="padding:7px;">Company Type</td>
    <td style="padding:7px;">'.$row['er_companytype'].'</td>
  </tr>
 
  <tr>
    <td bgcolor="#e9e8e8" style="padding:7px;">Sector</td>
    <td style="padding:7px; font-size:12px;">'.$row['er_sector'].'</td>
  </tr>
 
  <tr>
    <td bgcolor="#e9e8e8" style="padding:7px;">Category</td>
    <td style="padding:7px;">'.$row['er_category'].'</td>
  </tr>
  
  <tr>
    <td bgcolor="#e9e8e8" style="padding:7px;">Company Email Id</td>
    <td style="padding:7px;">'.$row['er_companyemail'].'</td>
  </tr>
 
  <tr>
    <td bgcolor="#e9e8e8" style="padding:7px;">Location</td>
    <td style="padding:7px;">'.$row['er_city'].'</td>
  </tr>
  
  <tr>
    <td bgcolor="#e9e8e8" style="padding:7px;">Address</td>
    <td style="padding:7px;">'.$row['er_address'].'<br>
	'.$row['er_state'].'</td>
  </tr>
 
  <tr>
    <td bgcolor="#e9e8e8" style="padding:7px;">Country</td>
    <td style="padding:7px;">'.$row['er_country'].'</td>
  </tr>
  
  <tr>
    <td bgcolor="#e9e8e8" style="padding:7px;">Website</td>
    <td style="padding:7px;">'.$row['er_website'].'</td>
  </tr>
 
  <tr>
    <td bgcolor="#e9e8e8" style="padding:7px;">Contact No</td>
    <td style="padding:7px;">'.$row['er_TCCode'].'-'.$row['er_TACode'].'-'.$row['er_TNumber'].'</td>
  </tr>
  
  <tr>
    <td bgcolor="#e9e8e8" style="padding:7px;">Name of the person to contact</td>
    <td style="padding:7px;">'.$row['er_title'].''.$row['er_fname'].' '.$row['er_lname'].'</td>
  </tr>
  
  <tr>
    <td bgcolor="#e9e8e8" style="padding:7px;">Designation</td>
    <td style="padding:7px;">'.$row['er_designation'].'</td>
  </tr>
  
  <tr>
    <td bgcolor="#e9e8e8" style="padding:7px;">Conatct Email Id</td>
    <td style="padding:7px;">'.$row['er_contactemail'].'</td>
  </tr>
  
  <tr>
    <td bgcolor="#e9e8e8" style="padding:7px;">Contact No</td>
    <td style="padding:7px;">'.$row['er_MCCode'].'-'.$row['er_MNumber'].'</td>
  </tr>'
  
?>

</table>

<a href="employer.php">
<input name="" type="submit" value="Back" class="applynow_button" /></a>
   
</div>
</div>   
</div>
</div>    

</body>
</html>