<?php

DEFINE('DATABASE_USER', 'root');
DEFINE('DATABASE_PASSWORD','root');
DEFINE('DATABASE_HOST', 'localhost');
DEFINE('DATABASE_NAME', 'jobportal');

$dbc = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,DATABASE_NAME);

if (!$dbc) { trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());  }


$apply=$_GET['er_id'];
echo $apply;
$query1 = "select number,downloads from validity";
$result1 = mysqli_query($dbc,$query1);
$row = mysqli_fetch_array($result1,MYSQLI_ASSOC);

$no=$row['number'];
$downloads=$row['downloads'];

$query2 = "select er_active from employers";
		$result2 = mysqli_query($dbc,$query2);
         if($result2){ 
          if(mysqli_affected_rows($dbc)!=0){
          while($row1 = mysqli_fetch_array($result2,MYSQLI_ASSOC)){
          $active=$row1['er_active'];
		  if($active==1)
		     {$active='Active';}
		  else
		     {$active='Not Active';}	
		  }
		  }
		 }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Change Employer settings</title>

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
<script type="text/javascript">
var status1 = document.getElementById('status');
</script>


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

<p>&nbsp;</p>
<p>&nbsp;</p>

<div style="width:900px;  margin:10px 0 0 10px; font-family:Arial; font-size:13px; border:2px solid rgba(147, 184, 189,0.8);" align="center">

<table width="100%" cellspacing="15" cellpadding="5" align="center">

<div style=" font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif; font-size:32px; font-weight:bold; background-color:#F3F1F2; color:rgb(6, 106, 117)" align="left">Change Settings:</div>

<tr>
<td width="50%"></td>
<td width="50%"></td>
</tr>


<?php 
echo '
<form action="process_employer_update.php?er_id='.$apply.'" method="post" name="update">
';
?>

<?php
echo
'

<tr>
<td><span style=" font-family:Times New Roman, Times, serif; font-size:20px; color:#C33;  float:right;">Status:</span></td>

<td>

<select name="status" id="status" class="advanced_box_select">
<option value="1">Active</option>
<option value="0">Not Active</option>
</select> <br />
<span style="font-family:MS Serif,New York,serif; font-size:16px; color:#0066CC;">Present Status:- '.$active.'</span></td></tr>
<tr>
<td><span style=" font-family:Times New Roman, Times, serif; font-size:20px; color:#C33;  float:right;">No.of Jobs:</span></td>
<td>
<input type="text" placeholder:"Enter No.of Jobs"
    name="jobs" class="advanced_box" ><br />
  <span style="font-family:MS Serif, New York, serif; font-size:16px; color:#0066CC;">Present Status:-'.$no.'</span> 
    </td></tr>
<tr>
<td><span style=" font-family:Times New Roman, Times, serif; font-size:20px; color:#C33;  float:right;">Downloads: </span></td>


<td><input type="text" placeholder:"Enter No.of Downloads"
    name="downloads" class="advanced_box" >
    <br />
<span style="font-family:MS Serif, New York, serif; font-size:16px; color:#0066CC;">Present Status:-'.$downloads.' </span></td></tr>
<p>&nbsp;</p>


<!--<a href="employer_update.html"><input type="button" value="Update" name="update"/></a>-->
<tr>
    <td>&nbsp;</td>
    <td><input type="submit" value="Update" name="update" style="color:#06F; width:60px; height:30px; font-size:14px; font-family:Courier New, Courier, monospace;"/></a></td>
  </tr>';
  ?>

</form>
</table>
</div>
</div>
</body>
</html>
