<?php //session_start();


DEFINE('DATABASE_USER', 'root');
DEFINE('DATABASE_PASSWORD','root');
DEFINE('DATABASE_HOST', 'localhost');
DEFINE('DATABASE_NAME', 'jobportal');


$dbc = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,DATABASE_NAME);
if (!$dbc) { trigger_error('Could not connect to MySQL: ' . mysqli_connect_error()); }


//$email=$_POST['email'];

$fname=$_POST['fname'];

$lname=$_POST['lname'];

$day=$_POST['day'];

$month=$_POST['month'];

$year=$_POST['year'];

$gender=$_POST['gender'];

$country=$_POST['country'];

$city=$_POST['city'];

$education=$_POST['education'];

$master=$_POST['master'];

$mcode=$_POST['mcode'];

$mnumber=$_POST['mnumber'];

$experience=$_POST['experience'];

$skills=$_POST['skills'];

$industry=$_POST['sector'];

$certification=$_POST['certification'];


/*$query="update employees set ee_email='$email',ee_fname='$fname',ee_lname='$lname',ee_day='$day',ee_month='$month',ee_year='$year',ee_country='$country',
        ee_city='$city',ee_education='$education',ee_master='$master',ee_mcode='$mcode',ee_mnumber='$mnumber',ee_experience='$experience',ee_skills='$skills''
		ee_industry='$industry',ee_certification='$certification' where ee_email='dilde08@gmail.com'";
$result=  mysqli_query($dbc,$query);*/


$query1="update employees set ee_fname='$fname',ee_lname='$lname',ee_day='$day',ee_month='$month',ee_year='$year',ee_country='$country',
         ee_city='$city',ee_education='$education',ee_master='$master',ee_mcode='$mcode',ee_mnumber='$mnumber',ee_experience='$experience',ee_skills='$skills',
		 ee_industry='$industry',ee_certification='$certification'  where ee_email='jinto1729@gmail.com'";
$result1=  mysqli_query($dbc,$query1);


if($result1)
{ header("location:jobseeker_profile.php"); }
else
{ echo "Not Updated,try again"; }


//header("location:resume_details.php");


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Process_Update_Resume</title>
</head>
<body>
</body>
</html>