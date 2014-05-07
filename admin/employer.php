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
<title>Employer Change</title>

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

<div style="width:900px; height:auto; margin:10px 0 0 35px; font-family:Arial; font-size:13px; border:1px solid rgba(147, 184, 189,0.8);" align="center">
      <table width="100%" cellpadding="5" cellspacing="0" align="center">
      <div style=" font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif; font-size:32px; font-weight:bold; background-color:#F3F1F2; color:rgb(6, 106, 117)" align="left">Employers Management:</div>
       <p>&nbsp;</p>
        <tr style="background:#FFFFFF;">
          <td width="13%"  style="border-right:1px solid rgba(147, 184, 189,0.8); border-bottom:1px solid rgba(147, 184, 189,0.8);" align="center">Employer-Id</td>
          <td width="13%" style="border-bottom:1px solid rgba(147, 184, 189,0.8); border-right:1px solid rgba(147, 184, 189,0.8);" align="center">Status</td>
          <td width="25%" style="border-bottom:1px solid rgba(147, 184, 189,0.8);"></td>
          <td width="25%" style="border-bottom:1px solid rgba(147, 184, 189,0.8);" align="center">Controls</td>
          <td width="24%" style="border-bottom:1px solid rgba(147, 184, 189,0.8);"></td>
        </tr>
    <!--    <tr  onmouseover="this.style.backgroundColor='#81b3cd';return true;" onmouseout="this.style.backgroundColor='#EEE';return true;"> -->
     <?php
	    
		$query = "select er_company,er_id,er_active from employers";
		$result = mysqli_query($dbc,$query);
         if($result){ 
          if(mysqli_affected_rows($dbc)!=0){
          while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
          $active=$row['er_active'];
		  if($active==1)
		     {$active='Active';}
		  else
		     {$active='Not Active';}	 
		echo'<tr>
          <td style="color:#B30000; border-right:none; border-bottom:1px solid rgba(147, 184, 189,0.8);; font-size:15px;" align="center">'.$row['er_id'].'</td>
		            		  
          <td style="border-bottom:1px solid rgba(147, 184, 189,0.8); border-right:none;" align="center"><br />
		  <span style="color:#3F318B; font-size:15px;"><strong>'.$row['er_company'].'-'.$active.'</strong>
		  </span>
		  <br />
       
	<td style="border-bottom:1px solid rgba(147, 184, 189,0.8);" align="center">          
	        
		<a href="employer_settings.php?er_id='.$row['er_id'].'" style="text-decoration:none;"> <input type="button" value="Settings" name="emp_change" id="emp_change" > </a></td>
		  
		  <td style="border-bottom:1px solid rgba(147, 184, 189,0.8);" align="center"> <a href="process_employer_delete.php?er_id='.$row['er_id'].'" style="text-decoration:none;"> <input type="button" value="Delete" name="emp_delete" id="emp_delete" /> </a></td>
		  
		<td style="border-bottom:1px solid rgba(147, 184, 189,0.8);" align="center"> <a href="employer_details.php?er_id='.$row['er_id'].'" style="text-decoration:none;"> <input type="button" value="Details" name="emp_details" id="emp_details" /> </a> </td>
		  
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
