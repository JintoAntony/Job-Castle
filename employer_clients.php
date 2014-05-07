<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<link rel="icon" href="images/employer.png" type="image/x-icon">
    <link rel="shortcut icon" href="images/employer.png" type="image/x-icon" />
    
    
    
<title>Employer Clients</title>
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
<div id="home_content_main">
<div id="employee_banner_reg">
<div class="employee_login_div_reg">
<div class="employee_login">
<div class="employee_clients">
<img src="images/clients.png" style="margin-bottom:20px;"  align="left"/><br />
<span style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color:#2699d6; font-size:17px;">Our Clients</span>
<table width="100%" cellspacing="0" cellpadding="15">
       <tr>
    <td style="border-top:1px solid #e7e7e7;"><a href="#"><img src="images/thumbs/t1.jpg" style="margin:5px 15px 0 0;" width="139" height="74" align="left"  border="none"/></a>In every area of endeavour, from hospitality services to real estate development to travel and tours, each individual company strives for excellence. Excellence that delights the customer and ushers the growth of the the entire Regency Group.
Thus moulding a corporate image that is as solid as earth, as brilliant as fire, as vital as air, and as invigorating as water. In every area of endeavour, from hospitality services to real estate development to travel and tours, each individual company strives for excellence. Excellence that delights the customer and ushers the growth of the the entire Regency Group.
Thus moulding a corporate image that is as solid as earth, as brilliant as fire, as vital as air, and as invigorating as water.In every area of endeavour, from hospitality services to real estate development to travel and tours, each individual company strives for excellence. Excellence that delights the customer and ushers the growth of the the entire Regency Group.
Thus moulding a corporate image that is as solid as earth, as brilliant as fire, as vital as air, and as invigorating as water.</td>
    </tr>
  <tr>
  
    <td height="33"  style="border-top:1px solid #e7e7e7;"><a href="#"><img src="images/thumbs/t2.jpg" style="margin:5px 15px 0 0;" width="139" height="74" align="left"  /></a>In every area of endeavour, from hospitality services to real estate development to travel and tours, each individual company strives for excellence. Excellence that delights the customer and ushers the growth of the the entire Regency Group.
Thus moulding a corporate image that is as solid as earth, as brilliant as fire, as vital as air, and as invigorating as water. In every area of endeavour, from hospitality services to real estate development to travel and tours, each individual company strives for excellence. Excellence that delights the customer and ushers the growth of the the entire Regency Group.
Thus moulding a corporate image that is as solid as earth, as brilliant as fire, as vital as air, and as invigorating as water.In every area of endeavour, from hospitality services to real estate development to travel and tours, each individual company strives for excellence. Excellence that delights the customer and ushers the growth of the the entire Regency Group.
Thus moulding a corporate image that is as solid as earth, as brilliant as fire, as vital as air, and as invigorating as water.</td>
    </tr>

  <tr>
    <td  style="border-top:1px solid #e7e7e7;"><a href="#"><img src="images/thumbs/t3.jpg" style="margin:5px 15px 0 0;" width="139" height="74" align="left"  /></a>In every area of endeavour, from hospitality services to real estate development to travel and tours, each individual company strives for excellence. Excellence that delights the customer and ushers the growth of the the entire Regency Group.
Thus moulding a corporate image that is as solid as earth, as brilliant as fire, as vital as air, and as invigorating as water. In every area of endeavour, from hospitality services to real estate development to travel and tours, each individual company strives for excellence. Excellence that delights the customer and ushers the growth of the the entire Regency Group.
Thus moulding a corporate image that is as solid as earth, as brilliant as fire, as vital as air, and as invigorating as water.In every area of endeavour, from hospitality services to real estate development to travel and tours, each individual company strives for excellence. Excellence that delights the customer and ushers the growth of the the entire Regency Group.
Thus moulding a corporate image that is as solid as earth, as brilliant as fire, as vital as air, and as invigorating as water.</td>
    </tr>
    <tr>
    <td style="border-top:1px solid #e7e7e7;"><a href="#"><img src="images/thumbs/t4.jpg" style="margin:5px 15px 0 0;" width="139" height="74" align="left" /></a>In every area of endeavour, from hospitality services to real estate development to travel and tours, each individual company strives for excellence. Excellence that delights the customer and ushers the growth of the the entire Regency Group.
Thus moulding a corporate image that is as solid as earth, as brilliant as fire, as vital as air, and as invigorating as water. In every area of endeavour, from hospitality services to real estate development to travel and tours, each individual company strives for excellence. Excellence that delights the customer and ushers the growth of the the entire Regency Group.
Thus moulding a corporate image that is as solid as earth, as brilliant as fire, as vital as air, and as invigorating as water.In every area of endeavour, from hospitality services to real estate development to travel and tours, each individual company strives for excellence. Excellence that delights the customer and ushers the growth of the the entire Regency Group.
Thus moulding a corporate image that is as solid as earth, as brilliant as fire, as vital as air, and as invigorating as water.</td>
    </tr>
   <tr>
     
     <td style="border-top:1px solid #e7e7e7;"><img src="images/thumbs/t5.jpg" style="margin:5px 15px 0 0;" width="139" height="74" align="left"  />In every area of endeavour, from hospitality services to real estate development to travel and tours, each individual company strives for excellence. Excellence that delights the customer and ushers the growth of the the entire Regency Group.
Thus moulding a corporate image that is as solid as earth, as brilliant as fire, as vital as air, and as invigorating as water. In every area of endeavour, from hospitality services to real estate development to travel and tours, each individual company strives for excellence. Excellence that delights the customer and ushers the growth of the the entire Regency Group.
Thus moulding a corporate image that is as solid as earth, as brilliant as fire, as vital as air, and as invigorating as water.In every area of endeavour, from hospitality services to real estate development to travel and tours, each individual company strives for excellence. Excellence that delights the customer and ushers the growth of the the entire Regency Group.
Thus moulding a corporate image that is as solid as earth, as brilliant as fire, as vital as air, and as invigorating as water.</td>
     </tr>
   <tr>
     
     <td style="border-top:1px solid #e7e7e7;"><img src="images/thumbs/t6.jpg" style="margin:5px 15px 0 0;" width="139" height="74" align="left" />In every area of endeavour, from hospitality services to real estate development to travel and tours, each individual company strives for excellence. Excellence that delights the customer and ushers the growth of the the entire Regency Group.
Thus moulding a corporate image that is as solid as earth, as brilliant as fire, as vital as air, and as invigorating as water. In every area of endeavour, from hospitality services to real estate development to travel and tours, each individual company strives for excellence. Excellence that delights the customer and ushers the growth of the the entire Regency Group.
Thus moulding a corporate image that is as solid as earth, as brilliant as fire, as vital as air, and as invigorating as water.In every area of endeavour, from hospitality services to real estate development to travel and tours, each individual company strives for excellence. Excellence that delights the customer and ushers the growth of the the entire Regency Group.
Thus moulding a corporate image that is as solid as earth, as brilliant as fire, as vital as air, and as invigorating as water.</td>
   </tr>
  
    <tr>
      <td style="border-top:1px solid #e7e7e7;"><img src="images/thumbs/t7.jpg" style="margin:5px 15px 0 0;" width="139" height="74" align="left" />In every area of endeavour, from hospitality services to real estate development to travel and tours, each individual company strives for excellence. Excellence that delights the customer and ushers the growth of the the entire Regency Group.
Thus moulding a corporate image that is as solid as earth, as brilliant as fire, as vital as air, and as invigorating as water. In every area of endeavour, from hospitality services to real estate development to travel and tours, each individual company strives for excellence. Excellence that delights the customer and ushers the growth of the the entire Regency Group.
Thus moulding a corporate image that is as solid as earth, as brilliant as fire, as vital as air, and as invigorating as water.In every area of endeavour, from hospitality services to real estate development to travel and tours, each individual company strives for excellence. Excellence that delights the customer and ushers the growth of the the entire Regency Group.
Thus moulding a corporate image that is as solid as earth, as brilliant as fire, as vital as air, and as invigorating as water.</td>
    </tr>
        <tr>
      <td style="border-top:1px solid #e7e7e7;"><img src="images/thumbs/t8.jpg" style="margin:5px 15px 0 0;" width="139" height="74" align="left"  />In every area of endeavour, from hospitality services to real estate development to travel and tours, each individual company strives for excellence. Excellence that delights the customer and ushers the growth of the the entire Regency Group.
Thus moulding a corporate image that is as solid as earth, as brilliant as fire, as vital as air, and as invigorating as water. In every area of endeavour, from hospitality services to real estate development to travel and tours, each individual company strives for excellence. Excellence that delights the customer and ushers the growth of the the entire Regency Group.
Thus moulding a corporate image that is as solid as earth, as brilliant as fire, as vital as air, and as invigorating as water.In every area of endeavour, from hospitality services to real estate development to travel and tours, each individual company strives for excellence. Excellence that delights the customer and ushers the growth of the the entire Regency Group.
Thus moulding a corporate image that is as solid as earth, as brilliant as fire, as vital as air, and as invigorating as water.</td>
    </tr>
</table>


</div>
</div>
</div>
<div></div>

</div></div>
<div class="clear_both">&nbsp;</div>
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
<div id="home_footer_main"></div>
</body>
</html>
