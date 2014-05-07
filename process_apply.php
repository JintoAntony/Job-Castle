<?php session_start();


//$_SESSION['email']=$row['ee_email'];
//$_SESSION['eeid']=$row['ee_id'];
//$_SESSION['category']='jobseeker';
//$_SESSION['status']=1;
//$_SESSION['jobseeker']=1;

$ee_id=$_SESSION['eeid'];


DEFINE('DATABASE_USER', 'root');
DEFINE('DATABASE_PASSWORD','root');
DEFINE('DATABASE_HOST', 'localhost');
DEFINE('DATABASE_NAME', 'jobportal');

$dbc = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,DATABASE_NAME);
if (!$dbc) { trigger_error('Could not connect to MySQL: ' . mysqli_connect_error()); }

$jid=$_GET['jid'];



$query1 = "select a_ee_id from applicants where a_j_id='$jid' and a_ee_id='$ee_id'";
$value1 = mysqli_query($dbc,$query1);
$row1 = mysqli_fetch_array($value1,MYSQLI_ASSOC);
$eeid=$row1['a_ee_id'];

if($eeid==$ee_id)
{
//echo "You are already applied";
$applied=0;
//url passing
header("location:process_applied.php?applied=$applied");
}


else
{
$query2 = "select j_id,j_er_id from jobs where j_id='$jid'";
$result = mysqli_query($dbc,$query2);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$j_erid=$row['j_er_id'];
//echo $jid;
//echo $j_erid;
$q="INSERT INTO applicants (a_ee_id, a_j_id, a_er_id) VALUES('$ee_id','$jid','$j_erid')";
$result1=mysqli_query($dbc,$q);
if($result1)
{
//echo "Applied";
$applied=1;
//url passing

header("location:process_applied.php?applied=$applied");

//echo "Hello";

}
else
{ 
//echo "Not Applied,try again"; 
$applied=2;
//url passsing
//echo "Hai";
header("location:process_applied.php?applied$applied");
}
}

?>