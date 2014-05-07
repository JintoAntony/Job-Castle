<?php session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<link rel="icon" href="images/employer.png" type="image/x-icon">
    <link rel="shortcut icon" href="images/employer.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="css/style2.css" />
    
    
    
<title>Employer Login</title>
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
	color:#000000;
}
input[type=text]:focus{ color:#000;}
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
<div id="employee_login_banner_main">
  <div class="employee_login_banner">

<div class="login_div">
 <form name="employer_login" action="process_employer_login.php" method="post" >
<table width="264" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="254" height="28" class="login_box">Employer Login</td>
  </tr>
  <tr>
    <td height="auto" style="padding-top:10px;">Email</td>
  </tr>
  <tr>
    <td height="auto" style="padding:0px;">
    <input type="text" placeholder="username" class="login_select"
     name="email"  id="email"
    onblur="if(value=='') value = ''" 
    onfocus="if(value=='') value = ''"/>    </td>
  </tr>
  <tr>
    <td height="auto" style="padding-top:10px;" >Password</td>
  </tr>
  <tr>
    <td height="auto"><input type="password" value="password"
  class="login_select"
   name="password" 
    onblur="if(value=='') value = 'Password'" 
    onfocus="if(value=='Password') value = ''"/></td>
  </tr>
    <tr>
    <td height="auto" style="padding-top:8px; font-size:11px;" ><input type="checkbox" />Keep me logged in until I logout.</td>
  </tr>
  <tr>
    <td height="37"    ><input type="submit" value="Login" class="login_submit" /></td>
  </tr>
    <tr>
    <td height="30"    ><a href="#">Forgot Password</a> / <a href="#">Register Now</a></td>
  </tr>
  <tr>
    <td height="auto">
   By logging in you are accepting the<br><span style="color:#cc0000;">
Terms and conditions</span></td>
  </tr>
</table>
</form>

</div>

  <div class="em_banner_right_div">
  <div class="em_ban_right_one">
<a href="#"><img src="images/view-our.png" border="none" onmouseover="this.src='images/view-our-mouse.png'" onmouseout="this.src='images/view-our.png'" /></a>
</div>
<div class="em_ban_right_two">
<a href="#"><img src="images/submit-resume.png" style="float:left;" border="none" /></a>
<a href="#"><img src="images/submit-job.png" style="float:right;" border="none" /></a>
</div>
</div>

</div>

</div>
<div id="employee_content">
  <div class="employee_content_left">
<div class="employee_content_left_divone"><strong>Featured Clients </strong></div>
  <div class="employee_content_left_divtwo">
  
  
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
              <a href="#">
                <img src="images/thumbs/t2.jpg" class="image0">
              </a>
            </li>
              <li>
              <a href="#">
                <img src="images/thumbs/t3.jpg" class="image0">
              </a>
            </li>
              <li>
              <a href="#">
                <img src="images/thumbs/t4.jpg" class="image0">
              </a>
            </li>
              <li>
              <a href="#">
                <img src="images/thumbs/t5.jpg" class="image0">
              </a>
            </li>

          </ul>
        </div>
      </div>
    </div>
    
</div>
  
  
  
  </div>
</div>
<div class="employee_content_right">
<div class="employee_content_right_divone"><strong>Not a Member</strong> Yet?</div>
<div class="employee_content_right_divtwo">
<h1>Benefits for members</h1>
<div class="round_ticker">
  <h3>Post Jobs &amp; get the right professionals</h3>
  <p>Put your vacancies in front of right hotel professionals..</p>
</div>
<div class="round_ticker">
  <h3>Search &amp; filter CV&rsquo;s</h3>
  <p>Search &amp; filter CV&rsquo;s by different criteria.</p>
</div>
<div class="round_ticker">
  <h3>Resume search</h3>
  <p>Get access to resume database instantly.</p>
</div>
<div class="round_ticker">
  <h3>CV Review</h3>
  <p>You can see the number of CV&rsquo;s received for each job that you have posted.</p>
</div>


</div>
</div>
</div>
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
</div></body>
</html>
