<?php session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Jobseeker Profile</title>
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
    font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, Arial, sans-serif;
    color: #333;
    line-height: 140%;
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

<div class="home_banner_main_search">
  <div id="home_banner_search">
<div id="reg_maindiv">
  <div class="reg_left">
    <div class="advanced_search_div">
      <img src="images/write.png" width="40" align="left" class="advanced_image" />
      <p><strong>Profile Snapshot</strong></p>
      <table width="100%" cellspacing="10" cellpadding="5">
  <tr>
    <td height="20" colspan="3"><span class="create_profile_span">Personal Details</span></td>
     </tr>
     <tr>
    <td colspan="3"></td>
    </tr>
 
 <?php
 
 //$_SESSION['email']=$row['ee_email'];
//$_SESSION['eeid']=$row['ee_id'];
//$_SESSION['category']='jobseeker';
//$_SESSION['status']=1;
//$_SESSION['jobseeker']=1;

$ee_id=$_SESSION['eeid'];

//DEFINE('DATABASE_USER', 'root');
//DEFINE('DATABASE_PASSWORD','root');
//DEFINE('DATABASE_HOST', 'localhost');
//DEFINE('DATABASE_NAME', 'jobportal');

$dbc = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,DATABASE_NAME);

if (!$dbc) {trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());}
//$apply=$_GET['jid'];
$query = "select * from employees where ee_id=$ee_id";
$result = mysqli_query($dbc,$query);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

  echo 
  '<tr>
    <td width="33%" height="33">&nbsp;&nbsp;Name</td>
    <td width="2%">:</td>
    <td width="65%">&nbsp;&nbsp;'.$row['ee_fname'].' '.$row['ee_lname'].'</td>
  </tr>

  <tr>
    <td>&nbsp;&nbsp;Gender</td>
    <td>:</td>
  
    <td width="65%">&nbsp;&nbsp; '.$row['ee_gender'].'</td>
  </tr>
    <tr>
    <td>&nbsp;&nbsp;Date of Birth</td>
    <td>:</td>
    <td>&nbsp;&nbsp;'.$row['ee_day'].'-'.$row['ee_month'].'-'.$row['ee_year'].'</td>
  </tr>
   <tr>
     
     <td width="33%">&nbsp;&nbsp;Nationality</td>
     <td width="2%">:</td>
     <td width="65%">&nbsp;&nbsp;'.$row['ee_country'].'</td>
   </tr>
    <tr>
     
     <td width="33%">&nbsp;&nbsp;Current City or Location</td>
     <td width="2%">:</td>
     <td width="65%">&nbsp;&nbsp;'.$row['ee_city'].'</td>
   </tr>
    <tr>
     
     <td width="33%">&nbsp;&nbsp;Mobile Number</td>
     <td width="2%">:</td>
     <td width="65%">&nbsp;&nbsp;+'.$row['ee_mcode'].'-'.$row['ee_mnumber'].'</td>
   </tr>
    <tr>
     
     <td width="33%">&nbsp;&nbsp;Experience</td>
     <td width="2%">:</td>
     <td width="65%">&nbsp;&nbsp;'.$row['ee_experience'].'</td>
   </tr>
    <tr>
     
     <td width="33%">&nbsp;&nbsp;Key Skills</td>
     <td width="2%">:</td>
     <td width="65%">&nbsp;&nbsp;'.$row['ee_skills'].'</td>
   </tr>
    <tr>
     
     <td width="33%">&nbsp;&nbsp;Industry</td>
     <td width="2%">:</td>
     <td width="65%">&nbsp;&nbsp;'.$row['ee_industry'].'</td>
   </tr>
    <tr>
     
     <td colspan="3"><hr />&nbsp;&nbsp;<span class="create_profile_span">Education</span></td>
     </tr>
    <tr>
     
     <td width="33%">&nbsp;&nbsp;Basic Qualification</td>
     <td width="2%">:</td>
     <td width="65%">&nbsp;&nbsp;'.$row['ee_education'].'</td>
   </tr>
    <tr>
     
     <td width="33%">&nbsp;&nbsp;Masters Degree</td>
     <td width="2%">:</td>
     <td width="65%">&nbsp;&nbsp;'.$row['ee_master'].'</td>
   </tr> <tr>
     
     <td width="33%">&nbsp;&nbsp;Certification Courses</td>
     <td width="2%">:</td>
     <td width="65%">&nbsp;&nbsp;'.$row['ee_certification'].'</td>
   </tr>
   <tr>
     
     <td colspan="3"></td>
	 
	 </tr>
	 
	 <tr>
     
     <td height="26" colspan="3" align="center">
   
     <a href="update_resume.php?eeid='.$row['ee_id'].'"><img src="images/buttonu.png" /></a>
     </td></tr>'
   ?>
   <!-- <tr>
     
     <td colspan="3"><hr />&nbsp;&nbsp;
       <span class="create_profile_span">Resume</span></td>
     </tr>
     <tr>
     
     <td colspan="3">&nbsp;&nbsp;
 To upload your latest resume <a href="#" style="color:#06C;">click here</a>
</td>
     </tr>
	 
    <tr>
     
     <td height="26" colspan="3" align="center"><input type="submit" value="Edit Resume"  style="width:98px; background:url(images/button.png) no-repeat; color:#fff; border:
     none; height:25px;"/></td>
  </tr>-->
</table>

    </div>
  </div>
  <div class="search_main_div">
    <table width="100%" class="search_table"  cellpadding="5">
      <tr>
        <td  onmouseover="this.style.backgroundColor='#fff';return true;" onmouseout="this.style.backgroundColor='#EEE';return true;" background-color:"#fff">FEATURED EMPLOYER</td>
      </tr>
      <tr>
        <td>- - -</td>
      </tr>
    </table>
    <table width="100%" cellpadding="5" class="search_table" style="margin-top:20px;">
      <tr>
        <td  onmouseover="this.style.backgroundColor='#fff';return true;" onmouseout="this.style.backgroundColor='#EEE';return true;" background-color:"#fff">LATEST JOBS</td>
      </tr>
      <tr>
        <td>- - -</td>
      </tr>
    </table>
    
    
  </div>
</div></div></div>


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
