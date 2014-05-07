<?php

// This is a sample code in case you wish to check the email from a mysql db table

if(isSet($_POST['email']))
{
$email = $_POST['email'];


//Database connection fileds
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "root";
$mysql_database = "jobportal";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");


$sql_check = mysql_query("SELECT ee_email FROM employees WHERE ee_email='$email'");

if(mysql_num_rows($sql_check))
{
echo '<div style="color:red; "> <b> '.$email.'</b>is already registered.</style>';
}
else
{
echo 'OK';
}

}

?>