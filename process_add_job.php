<?php session_start();



//$_SESSION['email']=$row['er_companyemail'];
//$_SESSION['category']='employer';
//$_SESSION['status']=1;
//$_SESSION['employer']=1;

//fetch employer status active or not
$employer_id= $_SESSION['erid'];


DEFINE('DATABASE_USER', 'root');
DEFINE('DATABASE_PASSWORD','root');
DEFINE('DATABASE_HOST', 'localhost');
DEFINE('DATABASE_NAME', 'jobportal');

$dbc = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,DATABASE_NAME);
if (!$dbc) { trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());  }
  
//update no.of jobs -1 
 

/*$val1="select er_active from employers where employer_id = '$employer_id'";
$valresult1 = mysqli_query($dbc,$val1);
$row = mysqli_fetch_array($valresult1,MYSQLI_ASSOC);

if($row['er_active']==1)

{*/

$val="select number from validity where employer_id = '$employer_id' ";
$valresult = mysqli_query($dbc,$val);
$row1 = mysqli_fetch_array($valresult,MYSQLI_ASSOC);

if ($row1['number'] == 0)
{
//echo "not possible";

$add=2;

}   
else
{
$emp="select er_active,er_company from employers where er_id = '$employer_id' ";
$empresult = mysqli_query($dbc,$emp);
$row  = mysqli_fetch_array($empresult,MYSQLI_ASSOC);
$active=$row['er_active'];
$company1=$row['er_company'];
//echo $active;
//echo $row['er_company'];

if($active)
{
$link=mysql_connect("localhost","root","root")or die("can not connect");
mysql_select_db("jobportal",$link) or die("can not select database");

$company=$_POST['company'];
//echo $company;
$category=$_POST['category'];
//echo $category;
$sector=$_POST['sector'];
//echo $sector;
$title=$_POST['title'];
//echo $title;
$salary=$_POST['salary'];
//echo $salary;
$type=$_POST['type'];
//echo $type;
$city=$_POST['city'];
//echo $city;
$country=$_POST['country'];
//echo $country;
$experience=$_POST['experience'];
//echo $experience;
$vacancy=$_POST['vacancy'];
//echo $vacancy;
$description=$_POST['description'];
//echo $description;
$todays_date = date("Y-m-d");
//echo $todays_date;

$q="INSERT INTO jobs (j_er_id,j_category,j_owner_name,
j_title,j_hours,j_salary,j_date,j_sector,j_type,
j_country,j_vacancy,j_company,j_experience,j_description,
j_city,j_active) 
    VALUES('$employer_id','$category','$company1','$title','0','$salary','$todays_date','$sector',
	'$type','$country','$vacancy','$company','$experience','$description','$city','0')";
	
 mysql_query($q,$link)or die("wrong query");


$number=$row1['number'] - 1;  
$query2="update validity set number='$number' where employer_id='$employer_id'";
$result2=  mysqli_query($dbc,$query2);
   
mysqli_close($dbc);   
mysql_close($link); 

$add=1;

   }
   
  else
  
  {
	  
	$add=0;
	  
  }
   
   
}





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
    setTimeout(function() {
      galleries[0].addImage("images/thumbs/t7.jpg", "images/7.jpg");
    }, 1000);
    setTimeout(function() {
      galleries[0].addImage("images/thumbs/t8.jpg", "images/8.jpg");
    }, 2000);
    setTimeout(function() {
      galleries[0].addImage("images/thumbs/t9.jpg", "images/9.jpg");
    }, 3000);
    setTimeout(function() {
      galleries[0].removeImage(1);
    }, 4000);
    
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
            <td height="178" colspan="3" style="text-align:center; color:#5393b5; font-family:Tahoma, Geneva, sans-serif; font-size:15px;">
              
             <?php 
              if($add==1)
			    { 
                  echo "New Job Successfully added";
				}
			  else if($add==0)
			    { 
                  echo "You can add job only after the admin's approval...";
				}	
				
			  else if($add==2)
			    { 
                  echo "No.of Jobs exceed...";
				}	
			  ?>              
            </td>
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
