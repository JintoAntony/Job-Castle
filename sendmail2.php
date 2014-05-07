<?php

$name=$_POST['name'];
//echo $name;
$email=$_POST['email'];
//echo $email;
$sub=$_POST['subject'];
//echo $phone;
$msg=$_POST['message'];
//echo $message;


// Insert data into database
//$sql="INSERT INTO temp_members_db(confirm_code, name, email, password, country)VALUES('$confirm_code', '$name', '$email', '$password', '$country')";
//$result=mysql_query($sql);
// if suceesfully inserted data into database, send confirmation link to email
//if($result)
//{
// ---------------- SEND MAIL FORM ----------------


$to       ="rammohan8303@gmail.com";
$subject  = 'Message from Jobcastle.com';			 
$message='Name :'.$name."\n".'|| Email Id:'." ".$email."\n".'||  Subject:'.$sub."\n".'||   Message :'.$msg;
//$message.="Click on this link to activate your account \r\n";
//$message.="http://localhost/Add ons/Email verification/confirmation.php?passkey=$confirm_code";

$headers  = 'From: '.$email.'' . "\r\n" .
            'Reply-To: '.$email.'' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();	
			
			
//if($sentmail=
mail($to, $subject, $message, $headers);

header('location:employer_home.php');



//)
//echo "Email has been sent to your Email ID...<br>";
//else  echo "Sorry,Email sending failed.Please try again.<br>";	
//}  if not found
//else {echo "Not found your email in our database";}
// if your email succesfully sent
//if($sentmail)
//{echo "Your Confirmation link Has Been Sent To Your Email Address.";}
//else  {echo "Cannot send Confirmation link to your e-mail address";}

?>