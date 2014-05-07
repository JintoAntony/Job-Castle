<?php session_start();
//Mysql Connecting parameters here.
$link=mysql_connect("localhost","root","root") or die("can not connect");
	mysql_select_db("jobportal",$link) or die("can not select database");

DEFINE('DATABASE_USER', 'root');
DEFINE('DATABASE_PASSWORD','root');
DEFINE('DATABASE_HOST', 'localhost');
DEFINE('DATABASE_NAME', 'jobportal');


$dbc = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,DATABASE_NAME);
if (!$dbc) { trigger_error('Could not connect to MySQL: ' . mysqli_connect_error()); }
//Post array is empty or not
if(empty($_POST))
{
exit;
}
$company=$_POST['company'];
//echo "$company";
$companytype=$_POST['companytype'];
//echo "$companytype";
$sector=$_POST['sector'];
//echo "$sector";
$category=$_POST['category'];
//echo "$category";
$companyemail=$_POST['companyemail'];
//echo "$companyemail";
$password=$_POST['password'];
//echo "$password";
$address=$_POST['address'];
//echo "$address";
$city=$_POST['city'];
//echo "$city";
$state=$_POST['state'];
//echo "$state";
$country=$_POST['country'];
//echo "$country";
$website=$_POST['website'];
//echo "$website";
$TCCode=$_POST['TCCode'];
//echo "$TCCode";
$TACode=$_POST['TACode'];
//echo "$TACode";
$TNumber=$_POST['TNumber'];
//echo "$TNumber";
$title=$_POST['title'];
//echo "$title";
$fname=$_POST['fname'];
//echo "$fname";
$lname=$_POST['lname'];
//echo "$lname";
$designation=$_POST['designation'];
//echo "$designation";
$contactemail=$_POST['contactemail'];
//echo "$contactemail";
$MCCode=$_POST['MCCode'];
//echo "$MCCode";
$MNumber=$_POST['MNumber'];
//echo "$MNumber";
$plan=$_POST['plan'];

//echo $plan; 

$q="INSERT INTO employers (er_company,er_companytype,er_sector,er_category,er_companyemail,er_password,er_address,
er_city,er_state,er_country,er_website,er_TCCode,er_TACode,er_TNumber,er_title,er_fname,er_lname,er_designation,er_contactemail,er_MCCode,
er_MNumber,er_active) VALUES('$company','$companytype','$sector','$category','$companyemail','$password','$address','$city','$state','$country',
'$website','$TCCode','$TACode','$TNumber','$title','$fname','$lname','$designation','$contactemail','$MCCode','$MNumber',0)";

//$result1=mysql_query($q,$link)or die("wrong query");
$result1=mysqli_query($dbc,$q)or die("wrong query");
mysqli_close($dbc);


if($result1)
  { 
        $todays_date = date("Y-m-d");

//echo $plan;
//Fetch employer ID

//DEFINE('DATABASE_USER', 'root');
//DEFINE('DATABASE_PASSWORD','root');
//DEFINE('DATABASE_HOST', 'localhost');
//DEFINE('DATABASE_NAME', 'jobportal');
$dbc = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,DATABASE_NAME);
if (!$dbc) { trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());  }


$emp="select er_id from employers where er_companyemail = '$companyemail' ";
$empresult = mysqli_query($dbc,$emp);
$row  = mysqli_fetch_array($empresult,MYSQLI_ASSOC);
$employer_id=$row['er_id'];
//echo $employer_id;
//


if($plan=="Trial")
   {
	   $no_of_jobs='1';
	   $validity='10';
	   $downloads='1';
   
   $q="INSERT INTO validity (employer_id,plan,number,validity1,downloads,validity2) VALUES('$employer_id','$plan','$no_of_jobs','$validity','$downloads','$todays_date')";
   
   mysql_query($q,$link)or die("wrong query");
   mysql_close($link);

  // echo "Query inserted";
   }

else if($plan=="1 Job")
    {
	   $no_of_jobs='1';
	   $validity='30';
	   $downloads='10';
		
	   $q="INSERT INTO validity (employer_id,plan,number,validity1,downloads,validity2) VALUES('$employer_id','$plan','$no_of_jobs','$validity','$downloads','$todays_date')";
	   
	   mysql_query($q,$link)or die("wrong query");
       mysql_close($link);

	//	echo "Query inserted";
	}

else if($plan=="3 Job")
    {
		$no_of_jobs='3';
	   $validity='30';
	   $downloads='10';
		
		$q="INSERT INTO validity (employer_id,plan,number,validity1,downloads,validity2) VALUES('$employer_id','$plan','$no_of_jobs','$validity','$downloads','$todays_date')";
		mysql_query($q,$link)or die("wrong query");
       mysql_close($link);
	//	echo "Query inserted";
	}
	
else if($plan=="5 Job")
    {
		$no_of_jobs='5';
	   $validity='30';
	   $downloads='20';
	
	$q="INSERT INTO validity (employer_id,plan,number,validity1,downloads,validity2) VALUES('$employer_id','$plan','$no_of_jobs','$validity','$downloads','$todays_date')";
	mysql_query($q,$link)or die("wrong query");
       mysql_close($link);
//	echo "Query inserted";	
	}     
  
  else if($plan=="Unlimited")
    {
		$no_of_jobs='10';
	   $validity='30';
	   $downloads='30';
	
	$q="INSERT INTO validity (employer_id,plan,number,validity1,downloads,validity2) VALUES('$employer_id','$plan','$no_of_jobs','$validity','$downloads','$todays_date')";

	mysql_query($q,$link)or die("wrong query");
    mysql_close($link);
//	echo "Query inserted";	
	}     
   
  }

//back to this page
//header("location:employer_registration.html");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<link rel="icon" href="images/employer.png" type="image/x-icon">
    <link rel="shortcut icon" href="images/employer.png" type="image/x-icon" />
    
    
    
<title>Employer</title>
<link rel="stylesheet" type="text/css" href="css/style-employer.css" />


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
  
</head>
<style>
input[type=text]{
	color:#f2eeee;
}
input[type=text]:focus{ color:#fff;}
  input.focus {
      border: 1px solid #F00;
    }
</style>
<style>
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
	padding-top: 0px;
	padding-right: 30px;
	padding-bottom: 0px;
	padding-left: 30px;
	width:425px;
	margin-top: 0;
	margin-right: auto;
	margin-bottom: 0;
	margin-left: auto;
  }
  #descriptions {
    position: relative;
    height: 50px;
    background: #EEE;
    margin-top: 10px;
    width: 470px;
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
  

<body>

<div class="home_header_main">
  <div id="home_header">
    <div class="home_logo"><img src="images/jobs_castle_logo.png" width="180" /></div>
    <div class="home_header_right">
      <div class="home_right_topmenubar">
      
	     <?php
	include ('includes/ee_top.inc.php');
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
	include ('includes/ee_menu.inc.php');
	?>
	  
	
	
	
	
      </div>
      
      
      
      </div>
    </div>
  </div>
</div>

<div class="em_reg_ban_main">
  <div id="employee_banner_reg">
<div class="employee_login_div_reg">
<div class="employee_login">
<div class="employee_register" style="background:url(images/reg-bg.png) repeat;"><br />
  <table width="100%" height="233" border="0" cellpadding="10" cellspacing="5">
    <tr>
            <td height="178" colspan="3" style="text-align:center; color:#5393b5; font-family:Tahoma, Geneva, sans-serif; font-size:15px;">Your registartion process has been completed. And admin will aprove your account. </td>
    </tr>
    <tr>
      <td style="text-align:center; color:#5393b5; font-family:Tahoma, Geneva, sans-serif; font-size:15px;"><a href="employer_home.php" style="color:#5393b5; text-decoration:underline;">Goto Home Page Click Here!</a></td>
    </tr>
  </table>
</div>
</div>
</div>
<div></div>

</div></div>







<div id="home_navigator"></div>
<div id="home_footer_main">
  <div id="home_footer">
    <div id="home_footer_slice_one"> <a href="#"><img src="images/jobs_castle_logo.png" width="100"  border="none"/></a> </div>
    <div id="home_footer_slice_two"> <span class="home_foote_span">Jobs Castle Links</span><br />
      <?php
	include ('includes/ee_footer.inc.php');
	?>  
    <div id="home_footer_slice_five"> <span class="home_foote_span_second"><i>Free Speech:</i></span><br />
      <br />
      <span class="speech_number">8-800-845-4587, 8-800-845-8578</span> </div>
  </div>
</div>
</body>
</html>



