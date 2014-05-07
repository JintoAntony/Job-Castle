<?php session_start();

// Include database connection settings

//DEFINE('DATABASE_USER', 'root');
//DEFINE('DATABASE_PASSWORD','root');
//DEFINE('DATABASE_HOST', 'localhost');
//DEFINE('DATABASE_NAME', 'jobportal');

//$dbc = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,DATABASE_NAME);
//if (!$dbc) { trigger_error('Could not connect to MySQL: ' . mysqli_connect_error()); }


$link=mysql_connect("localhost","root","root")or die("can not connect");
	mysql_select_db("jobportal",$link) or die("can not select database");


// Retrieve username and password from database according to user's input
//$login = mysql_query("SELECT * FROM admin WHERE (username = '" .$_POST['username']. "') and (password = '" .$_POST['password']. "')");

$q="SELECT * FROM admin WHERE (username = '" .$_POST['username']. "') and (password = '" .$_POST['password']. "')";
$login=mysql_query($q,$link) or die("wrong query");
$row = mysql_fetch_assoc($login);

if(!empty($row))
	{
		if($_POST['password']==$row['password'])
		{
			//login
			$_SESSION['username']=$_POST['username'];
			header('Location: home.php');
		}
		else
		{
	    //echo "Wrong Password";
		header("location:index.php");
		}
	}
	else
	{
	//	echo "No Such User";
	}
//echo $_POST['username'];
//echo $_POST['password'];
// Check username and password match

//$result = mysql_query($login);
//$num_rows = mysql_num_rows($login) or die(mysql_error());
//echo mysql_num_rows($login;


//Chanhe  it -----------------------------------------------------------------------------------------//

//if (mysql_num_rows($login)==1) {
	
//if (!$login) {
  // Set username session variable
//$_SESSION['username'] = $_POST['username'];
  // Jump to secured page
//header('Location: home.php');
//}
//else {
// Jump to login page
//header('Location: index.php');
//}

?>