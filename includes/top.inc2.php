<?php 
//DEFINE('DATABASE_USER', 'joca1983_castle');
//DEFINE('DATABASE_PASSWORD','castle123');
//DEFINE('DATABASE_HOST', 'localhost');
//DEFINE('DATABASE_NAME', 'joca1983_jobportal');
if((!isset($_SESSION['jobseeker']) ) )
    {  
	echo '
	<ul>
        <li><a href="#">Welcome</a>&nbsp;I&nbsp;&nbsp;
        <li> <a href="#">Jobseeker</a>&nbsp;&nbsp;I&nbsp;&nbsp;
        <li> <a href="#">Employer</a></li>
      </ul>
	';
	}
?>
<?php
if(isset($_SESSION['jobseeker']))
	{
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="root"; // Mysql password
$db_name="jobportal"; // Database name
//Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect to server");
mysql_select_db("$db_name")or die("cannot select DB");
//code for taking employer ID form the session variable and database
//DEFINE('DATABASE_USER', 'root');
//DEFINE('DATABASE_PASSWORD','root');
//DEFINE('DATABASE_HOST', 'localhost');
//DEFINE('DATABASE_NAME', 'jobportal');

$dbc = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,DATABASE_NAME);
if (!$dbc) { trigger_error('Could not connect to MySQL: ' . mysqli_connect_error()); }

//mysql_select_db("jobportal",$link) or die("can not select database");

$id=$_SESSION['eeid'];

$query = "select ee_fname from employees where ee_id =$id ";           //'".$_SESSION['eeid']."'
$result = mysqli_query($dbc,$query);

if($result)//mysqli_affected_rows($dbc)!=0)
{    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
		  {		  $name=$row['ee_fname'];
		  }
}


/*
$sql1="select ee_fname from employees where ee_id =$id ";
$result1=mysql_query($sql1);
if($result1)
{
while($rows=mysql_fetch_array($result1))
{
$name=$rows['ee_fname'];
}
}
*/

   echo '
	<ul>
        <li><a href="#"> Welcome '.$name.' </a>&nbsp;I&nbsp;&nbsp;
        <li> <a href="#">Jobseeker</a>&nbsp;&nbsp;I&nbsp;&nbsp;
        <li> <a href="logout.php">Logout</a></li>
      </ul>
	';	
	}

?>

	

	

