<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<link rel="icon" href="images/employer.png" type="image/x-icon">
    <link rel="shortcut icon" href="images/employer.png" type="image/x-icon" />
    
    
    
<title>Employer Contact</title>
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
<div class="employee_register" style="background:url(images/reg-bg.png) repeat;">
<img src="images/contact.png" style="margin-bottom:20px;"  align="left"/><br />
<span style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color:#2699d6; font-size:17px;">Contact</span>
<table width="100%" cellspacing="10" cellpadding="5">

  <tr>
  
    <td width="34%"><span class="advanced_star">&nbsp;&nbsp;&nbsp;</span><span class="em_reg_star">*</span> Name</td>
    <td width="2%">:</td>
    <td width="64%"><input type="text" value="Name"
    name="jobtitle2" 
    onblur="if(value=='') value = 'Name'" 
    onfocus="if(value=='Name') value = ''" class="em_reg_box" /></td>
  </tr>
  <tr>
    <td><span class="advanced_star">&nbsp;&nbsp;&nbsp;</span><span class="em_reg_star">*</span> Email ID</td>
    <td>:</td>
    <td><input type="text" value="Email id"
    name="jobtitle3" 
    onblur="if(value=='') value = 'Email id'" 
    onfocus="if(value=='Email id') value = ''" class="em_reg_box" /></td>
  </tr>
    <tr>
    <td><span class="advanced_star">&nbsp;&nbsp;&nbsp;</span><span class="em_reg_star">*</span> Subject</td>
    <td>:</td>
    <td><input type="text" value="Subject"
    name="jobtitle" 
    onblur="if(value=='') value = 'Subject'" 
    onfocus="if(value=='Subject') value = ''" class="em_reg_box" /></td>
  </tr>

   <tr>
  
    <td width="34%"><span class="advanced_star">&nbsp;&nbsp;&nbsp;</span><span class="em_reg_star">*</span> Message </td>
    <td width="2%">:</td>
    <td width="64%"><textarea name="textarea" cols="" rows="" class="em_address"></textarea></td>
  </tr>
 
 
    <td colspan="3" style="text-align:center;"><input type="submit" value="Submit"  style="background:url(images/button.png) no-repeat; width:100px; height:25px; border:none; color:#fff;" /></td>
    </tr>
  <tr>
    <td colspan="3" style="text-align:center;">Fields marked with <span class="em_reg_star">*</span> are required</td>
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
