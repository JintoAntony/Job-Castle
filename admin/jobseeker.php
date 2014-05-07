<?php

DEFINE('DATABASE_USER', 'root');
DEFINE('DATABASE_PASSWORD','root');
DEFINE('DATABASE_HOST', 'localhost');
DEFINE('DATABASE_NAME', 'jobportal');


$dbc = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,DATABASE_NAME);

if (!$dbc) { trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());  }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Jobseeker Change</title>

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

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>



<div id="reg_maindiv">

<div class="container">

<div class="advanced_search_div" align="center">

<div style="width:900px; height:auto; margin:10px 0 0 35px; font-family:Arial; font-size:13px; border:1px solid rgba(147, 184, 189,0.8);">
      <table width="100%" cellpadding="5" cellspacing="0" style="text-align:left;">
      <div style=" font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif; font-size:32px; font-weight:bold; background-color:#F3F1F2; color:rgb(6, 106, 117)" align="left">Jobseekers Details:</div>
       <p>&nbsp;</p>
       
        <tr style="background:#FFFFFF;">
          <td width="15%"  style="border-right:none; border-bottom:1px solid rgba(147, 184, 189,0.8);">Jobseeker ID</td>
          <td width="25%" style="border-bottom:1px solid rgba(147, 184, 189,0.8);; border-right:none;" align="center">Name</td>
          <td width="30%" style="border-bottom:1px solid rgba(147, 184, 189,0.8);; border-right:none;" align="center">Details</td>
          <td width="30%" style="border-bottom:1px solid rgba(147, 184, 189,0.8);" align="center">Delete</td>
        </tr>
     <?php
	   $query = "select ee_id,ee_fname from employees";
		$result = mysqli_query($dbc,$query);
		if($result){ 
          if(mysqli_affected_rows($dbc)!=0){
          while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
		echo
        '<tr>
          <td style="color:#B30000; border-right:none; border-bottom:1px solid rgba(147, 184, 189,0.8);">'.$row['ee_id'].'
          </td>
          
          <td style="border-bottom:1px solid rgba(147, 184, 189,0.8); border-right:none;" align="center">
            <span style="color:#CC0099; font-size:14px;"><strong>'.$row['ee_fname'].'</strong></span><br />
          </td>
          
          <td style="border-bottom:1px solid rgba(147, 184, 189,0.8);" align="center">
            <a href="jobseeker_details.php?ee_id='.$row['ee_id'].'"><input type="button" value="Details" name="jobseeker_details" id="jobseeker_details" /></a>
          </td>
          
          <td style="border-bottom:1px solid rgba(147, 184, 189,0.8);" align="center">
              <a href="process_jobseeker_delete.php?ee_id='.$row['ee_id'].'"><input type="button" value="Delete" name="jobseeker_delete" id="jobseeker_delete" /></a>
          </td>
        </tr>';
		  }
		  }
		}
		  
     ?>   
    </table>
</div>
</div>
</div>
</div>
</body>
</html>














<!--<div style="width:750px; height:auto; margin:10px 0 0 35px; font-family:Arial; font-size:13px;">
      <table width="100%" cellpadding="5" cellspacing="0">
        <tr style="background:#F7F7F7;">
          <td width="15%"  style="border-right:none; border-bottom:none;">Jobseeker ID</td>
          <td width="25%" style="border-bottom:none; border-right:none;">Name</td>
          <td width="30%" style="border-bottom:none;">Details</td>
          <td width="30%" style="border-bottom:none;">Delete</td>
        </tr>
        <tr onmouseover="this.style.backgroundColor='#81b3cd';return true;" onmouseout="this.style.backgroundColor='#EEE';return true;">
          <td style="color:#B30000; border-right:none; border-bottom:none;">111111</td>
          <td style="border-bottom:none; border-right:none;"><span style="color:#CC0099; font-size:14px;"><strong>xxxxxxxxxx</strong></span><br /></td>
          <td>
            <a href="jobseeker_details.html"><input type="button" value="Details" name="jobseeker_details" id="jobseeker_details" /></a></td>
        <td>
        <a href="jobseeker_delete.html"><input type="button" value="Delete" name="jobseeker_delete" id="jobseeker_delete" /></a>
        </td>
        </tr>
        
        <tr onmouseover="this.style.backgroundColor='#81b3cd';return true;" onmouseout="this.style.backgroundColor='#EEE';return true;">
          <td style="color:#B30000; border-right:none;">22222</td>
          <td  style="border-right:none;" ><span style="color:#CC0099; font-size:14px;"><strong>xxxxxxxxxx</strong></span><br /></td>
          <td>
            <a href="jobseeker_details.html"><input type="button" value="Details" name="jobseeker_details" id="jobseeker_details" /></a></td>
         <td>
         <a href="jobseeker_delete.html"><input type="button" value="Delete" name="jobseeker_delete" id="jobseeker_delete" /></a>
         </td>
        </tr>
      </table>
    </div>-->
    


