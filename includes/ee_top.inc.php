

<?php 
if((!isset($_SESSION['employer'])) )
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
//This Code not needed


//code for taking employer ID form the session variable and database
/*

DEFINE('DATABASE_USER', 'joca1983_castle');
DEFINE('DATABASE_PASSWORD','castle123');
DEFINE('DATABASE_HOST', 'localhost');
DEFINE('DATABASE_NAME', 'joca1983_jobportal');

$dbc = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,DATABASE_NAME);

//mysql_select_db("jobportal",$link) or die("can not select database");

//$id=$_SESSION['eeid'];

$query = "select ee_fname from employees where ee_id =15 ";           //'".$_SESSION['eeid']."'
$result = mysqli_query($dbc,$query);

if(mysqli_affected_rows($dbc)!=0)
{    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
		  {    
		  $name=$row['ee_fname'];		
		  }
}

if(isset($_SESSION['jobseeker']))
	{
	echo '
	<ul>
        <li><a href="#"> Welcome '.$name.' </a>&nbsp;I&nbsp;&nbsp;
        <li> <a href="#">Jobseeker</a>&nbsp;&nbsp;I&nbsp;&nbsp;
        <li> <a href="logout.php">Logout</a></li>
      </ul>
	';	
	}
	*/
?>


<?php 

//code for taking employer ID form the session variable and database


if(isset($_SESSION['employer']))
	{
	echo '
	<ul>
        <li><a href="#">Welcome</a>&nbsp;I&nbsp;&nbsp;  
        <li> <a href="#">Employer</a>&nbsp;&nbsp;I&nbsp;&nbsp;
        <li> <a href="logout2.php">Logout</a></li>
      </ul>
	';	
    }
?>	
	

	

