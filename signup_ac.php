<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password="root"; // Mysql password
$db_name="jobportal"; // Database name

//Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect to server");
mysql_select_db("$db_name")or die("cannot select DB");


DEFINE('DATABASE_USER', 'root');
DEFINE('DATABASE_PASSWORD','root');
DEFINE('DATABASE_HOST', 'localhost');
DEFINE('DATABASE_NAME', 'jobportal');


$dbc = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,DATABASE_NAME);
if (!$dbc) { trigger_error('Could not connect to MySQL: ' . mysqli_connect_error()); }


// Random confirmation code
$confirm_code=md5(uniqid(rand()));

//Capture post data here-----------------------------------------------------//
//Post array is empty or not
if(empty($_POST))
{
exit;
}	
 
$name= $_POST['email'];
$error=0;  
$emp="select ee_email from employees where ee_email = '$name' ";
$empresult = mysqli_query($dbc,$emp);
while(($row  = mysqli_fetch_array($empresult,MYSQLI_ASSOC))) 
 {
  if($row['ee_email']==$name)
  {
	  $error=1;
  }
 }
//echo $error;	  
if($error==0)
{	  
 // Upload and Rename File 
 if (isset($_POST['register']))
{
	$filename = $_FILES["file"]["name"];
	$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
	$file_ext = substr($filename, strripos($filename, '.')); // get file name
	$filesize = $_FILES["file"]["size"];
	$allowed_file_types = array('.doc','.docx','.rtf','.pdf');	
 
	if (in_array($file_ext,$allowed_file_types) && ($filesize < 200000))
	{	
		// Rename file
		$newfilename = $name . $file_ext;
		//$newfilename = md5($file_basename) . $file_ext;
		if (file_exists("uploads/" . $newfilename))
		{
			// file already exists error
		    //echo "You have already uploaded this file.";
		}
		else
		{		
			move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/" . $newfilename);
			//echo "File uploaded successfully.";		
		}
	}
	elseif (empty($file_basename))
	{	
		// file selection error
	//	echo "Please select a file to upload.";
	} 
	elseif ($filesize > 200000)
	{	
		// file size error
	//	echo "The file you are trying to upload is too large.";
	}
	else
	{
		// file type error
	//	echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
		unlink($_FILES["file"]["tmp_name"]);
	}
}
}
         $email=$_POST['email'];
		//echo "$email"; echo "<br>";
		
		$password=$_POST['password'];
		//echo "$password"; echo "<br>";
		
		$fname=$_POST['fname'];
		//echo "$fname"; echo "<br>";
		
		$lname=$_POST['lname'];
		//echo "$lname"; echo "<br>";
		
		$day=$_POST['day'];
		//echo "$day";
		
		$month=$_POST['month'];
		//echo "$month";
		
		$year=$_POST['year'];
		//echo "$year";
		
		$gender=$_POST['gender'];
		//echo "$gender"; echo "<br>";
		
		$country=$_POST['country'];
		//echo "$country"; echo "<br>";
		
		$city=$_POST['city'];
		//echo "$city"; echo "<br>";
		
		$education=$_POST['education'];
		//echo "$education";echo "<br>";
		
		$master=$_POST['master'];
		//echo "$master";echo "<br>";
		
		$mcode=$_POST['mcode'];
		//echo "$mcode";echo "<br>";
		
		$mnumber=$_POST['mnumber'];
		//echo "$mnumber";echo "<br>";
		
		$experience=$_POST['experience'];
		//echo "$experience";echo "<br>";
		
		$skills=$_POST['skills'];
		//echo "$skills";echo "<br>";
		
		$industry=$_POST['industry'];
		//echo "$industry";echo "<br>";
		
		$certification=$_POST['certification'];
		//echo "$certification";echo "<br>";
		
		
//move_uploaded_file($_FILES['resume']['tmp_name'],"uploads/".$_FILES['resume']['name']);
$path = "uploads/";

//$path = "uploads/".$_FILES["file"]["tmp_name"]

//echo "$path";
				

$q1="INSERT INTO temp_employees (ee_email,ee_password,ee_fname,ee_lname,ee_day,ee_month,ee_year,ee_gender,ee_country,ee_city,
ee_education,ee_master,ee_mcode,ee_mnumber,ee_experience,ee_skills,ee_industry,ee_certification,ee_path,confirm_code) VALUES
('$email','$password','$fname','$lname','$day','$month','$year','$gender','$country','$city','$education','$master','$mcode','$mnumber','$experience','$skills','$industry','$certification','$path','$confirm_code')";

//$result=mysql_query($sql
$result=  mysqli_query($dbc,$q1);
				   
//---------------------------------------------------------------------------//				   
// Insert data into database
//$sql="INSERT INTO temp_members_db(confirm_code, name, email, password, country)VALUES
//('$confirm_code', '$name', '$email', '$password', '$country')";
//$result=mysql_query($sql);

//if suceesfully inserted data into database, send confirmation link to email
if($result)
{
// ---------------- SEND MAIL FORM ----------------
$to       = $email;
$subject  = 'You confirmation link here';			 
$message="Your Comfirmation link \r\n";
$message.="Click on this link to activate your account \r\n";
$message.="http://jobscastle.com/confirmation.php?passkey=$confirm_code";
$headers  = 'From: sender@gmail.com' . "\r\n" .
            'Reply-To: sender@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();	
			
if($sentmail=mail($to, $subject, $message, $headers) )
    {//echo "Email has been sent to your Email ID...<br>";
	$display ="Your Confirmation link Has Been Sent To Your Email Address.";
	}
else 
{//echo "Sorry,Email sending failed.Please try again.<br>"; 
$display="Cannot send Confirmation link to your e-mail address";	
}
}


//if not found
else
{
//echo "Not found your email in our database";
}

// if your email succesfully sent
if($sentmail)  {//echo "Your Confirmation link Has Been Sent To Your Email Address.";
                $display ="Your Confirmation link Has Been Sent To Your Email Address.";
}
else           {//echo "Cannot send Confirmation link to your e-mail address";
				$display="Cannot send Confirmation link to your e-mail address";	
}

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Email has been sent</title>
<link rel="stylesheet" type="text/css" href="css/stylejobseeker.css" />
<link rel="stylesheet" type="text/css" href="js/style.js" />










  <link rel="stylesheet" type="text/css" href="lib/jquery.ad-gallery.css">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script type="text/javascript" src="lib/jquery.ad-gallery.js"></script>
 
  <script type="text/javascript">
  $(function() {
    $('img.image1').data('ad-desc', 'Whoa! This description is set through elm.data("ad-desc") instead of using the longdesc attribute.<br>And it contains <strong>H</strong>ow <strong>T</strong>o <strong>M</strong>eet <strong>L</strong>adies... <em>What?</em> That aint what HTML stands for? Man...');
    $('img.image1').data('ad-title', 'Title through $.data');
    $('img.image4').data('ad-desc', 'This image is wider than the wrapper, so it has been scaled down');
    $('img.image5').data('ad-desc', 'This image is higher than the wrapper, so it has been scaled down');
    var galleries = $('.ad-gallery').adGallery();

    
    $('#switch-effect').change(
      function() {
        galleries[0].settings.effect = $(this).val();
        return false;
      }
    );
    $('#toggle-slideshow').click(
      function() {
        galleries[0].slideshow.toggle();
        return false;
      }
    );
    $('#toggle-description').click(
      function() {
        if(!galleries[0].settings.description_wrapper) {
          galleries[0].settings.description_wrapper = $('#descriptions');
        } else {
          galleries[0].settings.description_wrapper = false;
        }
        return false;
      }
    );
  });
  </script>

  <style type="text/css">
  * {
	font-family: Arial, Helvetica, sans-serif;
	color: #333;
	line-height: normal;
  }
 
  h2 {
    margin-top: 1.2em;
    margin-bottom: 0;
    padding: 0;
    border-bottom: 1px dotted #dedede;
  }
  h3 {
    margin-top: 1.2em;
    margin-bottom: 0;
    padding: 0;
  }
  .example {
    border: 1px solid #CCC;
    background: #f2f2f2;
    padding: 10px;
  }
  ul {
    list-style-image:url(list-style.gif);
  }
  pre {
    font-family: "Lucida Console", "Courier New", Verdana;
    border: 1px solid #CCC;
    background: #f2f2f2;
    padding: 10px;
  }
  code {
    font-family: "Lucida Console", "Courier New", Verdana;
    margin: 0;
    padding: 0;
  }

  #gallery {
	background: #fff;
	padding-top: 0px;
	padding-right: 30px;
	padding-bottom: 0px;
	padding-left: 30px;
	width:1000px; margin:0 auto;
	
  }
  #descriptions {
    position: relative;
    height: 50px;
    background: #EEE;
    margin-top: 10px;
    width: 640px;
    padding: 10px;
    overflow: hidden;
  }
    #descriptions .ad-image-description {
      position: absolute;
    }
      #descriptions .ad-image-description .ad-description-title {
        display: block;
      }
  </style>
  
<style>
input[type=text]{ color:#ccc;}
input[type=text]:focus{ color:#71716f;}
  input.focus {
      border: 1px solid #F00;
    }
</style>
</head>

<body>
<div class="home_header_main">
  <div id="home_header">
    <div class="home_logo"><img src="images/jobs_castle_logo.png" width="180" /></div>
    <div class="home_header_right">
      <div class="home_right_topmenubar">
     <?php
	  include ('includes/top.inc.php');
	  ?>
     
      
      </div>
      <div class="home_menubar">
      <div class="home_socialmedia_icons">
      <ul>
      <li><a href="#"><img src="images/techno.png"  width="23" /></a></li>
            <li><a href="#"><img src="images/twitter.png" width="23" /></a></li>
            <li><a href="#"><img src="images/fb.png" width="23" /></a></li>
      <li><a href="#"><img src="images/in.png" width="23" /></a></li>
      

      
      </ul>
      </div>
      <div class="home_menubar_manu">
      <?php
	 include ('includes/menu.inc.php');
	 ?>
     
      </div>
      
      
      
      </div>
    </div>
  </div>
</div>
<div class="clear_both">&nbsp;</div>

<div class="login_banner_main">
<div id="login_banner_duplicat">
<div class="login_incorrect">

<!--Email has been send check your mail... -->
<?php
echo $display;
?>


</div>
<div class="login_div">
<style>
input[type=text]{ color:#ccc;}
input[type=text]:focus{ color:#71716f;}
  input.focus {
      border: 1px solid #F00;
    }
</style>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="35" class="login_box">Login</td>
  </tr>
  <tr>
    <td height="auto" style="padding-top:25px;">Email</td>
  </tr>
  <tr>
    <td height="auto" style="padding:0px;">
    <input type="text" value="Enter your email id" class="login_select"
     name="email" 
    onblur="if(value=='') value = 'Enter your email id'" 
    onfocus="if(value=='Enter your email id') value = ''"
 />    </td>
  </tr>
  <tr>
    <td height="auto" style="padding-top:25px;" >Password</td>
  </tr>
  <tr>
    <td height="auto"><input type="text" value="Password"
  class="login_select"
   name="Password" 
    onblur="if(value=='') value = 'Password'" 
    onfocus="if(value=='Password') value = ''"/></td>
  </tr>
  <tr>
    <td height="71"    ><input type="submit" value="Login" class="login_submit" /></td>
  </tr>
  <tr>
    <td height="50"><a href="#">Forgot Password</a> / <a href="#">Register Now</a></td>
  </tr>
</table>
</div>
</div>
</div>



<div id="container">
    


    <div id="gallery" class="ad-gallery">
      
      
      <div class="ad-nav">
        <div class="ad-thumbs">
          <ul class="ad-thumb-list">
            <li>
              <a href="#">
                <img src="images/thumbs/t1.jpg" class="image0">
              </a>
            </li>
           
           
           
           
           
            <li>
              <a href="#" id="t2">
                <img src="images/thumbs/t2.jpg" title="A title for 2.jpg" alt="This is a nice, and incredibly descriptive, description of the image 2.jpg" class="image6">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="images/thumbs/t3.jpg" title="A title for 3.jpg" alt="This is a nice, and incredibly descriptive, description of the image 3.jpg" class="image7">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="images/thumbs/t4.jpg" title="A title for 4.jpg" alt="This is a nice, and incredibly descriptive, description of the image 4.jpg" class="image8">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="images/thumbs/t5.jpg" title="A title for 5.jpg" alt="This is a nice, and incredibly descriptive, description of the image 5.jpg" class="image9">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="images/thumbs/t6.jpg" title="A title for 6.jpg" alt="This is a nice, and incredibly descriptive, description of the image 6.jpg" class="image10">
              </a>
            </li>
           <li>
              <a href="#">
                <img src="images/thumbs/t7.jpg" title="A title for 7.jpg" alt="This is a nice, and incredibly descriptive, description of the image 7.jpg" class="image11">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="images/thumbs/t8.jpg" title="A title for 8.jpg" alt="This is a nice, and incredibly descriptive, description of the image 8.jpg" class="image12">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="images/thumbs/t9.jpg" title="A title for 9.jpg" alt="This is a nice, and incredibly descriptive, description of the image 9.jpg" class="image13">
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    
</div>



<div class="clear_both">&nbsp;</div>


<div id="home_footer_main">
  <div id="home_footer">
    <div id="home_footer_slice_one"> <a href="#"><img src="images/jobs_castle_logo.png" width="100"  border="none"/></a> </div>
    <div id="home_footer_slice_two"> <span class="home_foote_span">Jobs Castle Links</span><br />
       <?php
	 include ('includes/footer.inc.php');
	 ?>
     
    <div id="home_footer_slice_five"> <span class="home_foote_span_second"><i>Free Speech:</i></span><br />
      <br />
      <span class="speech_number">8-800-845-4587, 8-800-845-8578</span> </div>
  </div>
</div>
</body>
</html>











