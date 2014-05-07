<?php
DEFINE('DATABASE_USER', 'root');
DEFINE('DATABASE_PASSWORD','root');
DEFINE('DATABASE_HOST', 'localhost');
DEFINE('DATABASE_NAME', 'jobportal');

$dbc = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,DATABASE_NAME);

if (!$dbc) { trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());  }

$apply=$_GET['jid'];
$query = "select * from jobs where j_id=$apply";
$result = mysqli_query($dbc,$query);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Job Details</title>
<link rel="stylesheet" type="text/css" href="css/stylejobseeker.css" />
</head>

<body>
<div id="detail_header"><img src="images/jobs_castle_logo.png" width="150" align="left" />
<input name="" type="submit"  class="close_button" value="Close"/>
</div>
<div id="details_body">
<table width="100%" height="auto" border="1" bordercolor="#5393b5" cellpadding="0" cellspacing="0">
  <tr>
    <td height="35" colspan="2" bgcolor="#5393b5"><span class="job_details_text">JOB DETAILS</span></td>
    </tr>
  <tr>
    <td width="60%" height="auto">
    <div class="left_details">
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  
  <?php
  
  echo '<tr>
    <td width="27%" bgcolor="#e9e8e8" style="padding:7px;">Company Name</td>
    <td width="73%" style="padding:7px;">'.$row['j_company'].'
  </tr>
  
  <tr>
    <td bgcolor="#e9e8e8" style="padding:7px;">Posted Date</td>
    <td style="padding:7px;">'.$row['j_date'].'</td>
  </tr>
  <tr>
    <td bgcolor="#e9e8e8" style="padding:7px;">Job-Title</td>
    <td style="padding:7px; font-size:12px;">'.$row['j_title'].'</td>
  </tr>
  <tr>
    <td bgcolor="#e9e8e8" style="padding:7px;">No. of Vacancy</td>
    <td style="padding:7px;">'.$row['j_vacancy'].'</td>
  </tr>
  <tr>
    <td bgcolor="#e9e8e8" style="padding:7px;">Experience</td>
    <td style="padding:7px;">Minimum:'.$row['j_experience'].'</td>
  </tr>
  <tr>
    <td bgcolor="#e9e8e8" style="padding:7px;">Location</td>
    <td style="padding:7px;">'.$row['j_city'].'</td>
  </tr>
  <tr>
    <td bgcolor="#e9e8e8" style="padding:7px;">Job Type</td>
    <td style="padding:7px;">'.$row['j_type'].'</td>
  </tr>
  <tr>
    <td bgcolor="#e9e8e8" style="padding:7px;">Company Sector</td>
    <td style="padding:7px;">'.$row['j_sector'].'</td>
  </tr>
  <tr>
    <td bgcolor="#e9e8e8" style="padding:7px;">Working Hours</td>
    <td style="padding:7px;">'.$row['j_hours'].'</td>
  </tr>
  <tr>
    <td bgcolor="#e9e8e8" style="padding:7px;">Salary Offered</td>
    <td style="padding:7px;">'.$row['j_salary'].'</td>
  </tr>
  <tr>
    <td bgcolor="#e9e8e8" style="padding:7px;">Last Date of Application</td>
    <td style="padding:7px;">Content.....................................</td>
  </tr>
  <tr>
    <td bgcolor="#e9e8e8" style="padding:7px;">Job Description</td>
    <td style="padding:7px;">'.$row['j_description'].'</td>
  </tr>';
  
echo '<tr>  <td style="padding:7px;"> </td>
    
<td ><a href="process_apply.php?jid='.$row['j_id'].'" style="text-decoration:none; color:#000; border:none;"><img src="images/apply.png" /></a></td> 

 
   
 <!--  <td style="padding:7px;" >
    <input type="submit" name="" value="Share" class="share"/>
    </td> -->
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFFFF" style="padding:7px;"><span class="disclaimer"><strong>Disclaimer:</strong> <em>There is a sincere effort to provide correct information on this site. Since the requirements / information relating to job is posted directly by the job-provider / employer; details of the offers, employment terms and other relevant and necessary information are to be verified by the jobseeker prior to accepting the offers. Jobcaslte.com shall have neither responsibility nor liability as far as the bonafide of the job offers posted / published.</em></span></td>
    </tr>'
	?>
</table>

    
    </div>
    
    
    
    </td>
    <td width="19%"><div class="rigt_details">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td bgcolor="#183884" style="padding:7px; color:#fff;">OTHER JOBS</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" style="padding:7px;">---</td>
  </tr>
</table>
</div></td>
  </tr>
</table>



</div>
</body>
</html>
