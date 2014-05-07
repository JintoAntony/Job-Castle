<?php session_start();

ob_start();

DEFINE('DATABASE_USER', 'root');
DEFINE('DATABASE_PASSWORD','root');
DEFINE('DATABASE_HOST', 'localhost');
DEFINE('DATABASE_NAME', 'jobportal');

$dbc = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,DATABASE_NAME);
if (!$dbc) { trigger_error('Could not connect to MySQL: ' . mysqli_connect_error()); }

$id=$_GET['er_id'];
//echo "$id";

$status=$_POST['status'];
//echo "$status";

$jobs=$_POST['jobs'];
//echo "$jobs";

$downloads=$_POST['downloads'];
echo "$downloads";
/*
$query = "UPDATE er_status,er_ FROM employers WHERE er_id='$id'";
$result = mysqli_query($dbc,$query);
if($result)
{ header("location:home.php"); }
else
{ echo "Cannot delete this empoyer"; }

*/
$query1="update employers set er_active='$status' where er_id='$id'";
$result1=  mysqli_query($dbc,$query1);
echo "$result1";
if($result1)
{
$query2="update validity set number='$jobs',downloads='$downloads' where employer_id='$id'";
$result2=  mysqli_query($dbc,$query2);

if($result2)
{ header("location:home.php");
 }

else
{ echo "Not Updated,try again 2"; }

}
else
{ echo "Not Updated,try again 1"; }
 

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Process_Employer_Update_</title>
</head>
<body>
</body>
</html>
