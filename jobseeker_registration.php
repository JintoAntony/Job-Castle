<?php session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Jobseeker Registration</title>
<link rel="stylesheet" type="text/css" href="css/stylejobseeker.css" />
<link rel="stylesheet" type="text/css" href="js/style.js" />

<!-- added for email check -->
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/settings.js" type="text/javascript"></script>


<SCRIPT type="text/javascript">
pic1 = new Image(16, 16); 
pic1.src = "images/loader.gif";
$(document).ready(function(){

$("#email").change(function() { 

var usr = $("#email").val();

if(usr.length >= 3)
{
$("#status").html('<img src="images/loader.gif" align="absmiddle">&nbsp;Checking availability...');

    $.ajax({  
    type: "POST",  
    url: "check.php",  
    data: "email="+ usr,  
    success: function(msg){  
   
   $("#status").ajaxComplete(function(event, request, settings){ 

	if(msg == 'OK')
	{ 
        $("#email").removeClass('object_error'); // if necessary
		$("#email").addClass("object_ok");
		$(this).html('&nbsp;<img src="images/accepted.png" align="absmiddle"> <font color="Green"> Email ID Available </font>  ');
	}  
	else  
	{  
		$("#email").removeClass('object_ok'); // if necessary
		$("#email").addClass("object_error");
		$(this).html(msg);
	}  
   
   });

 } 
   
  }); 

}
else
	{
	$("#status").html('<font color="red">The email should have at least <strong>3</strong> characters.</font>');
	$("#email").removeClass('object_ok'); // if necessary
	$("#email").addClass("object_error");
	}

});

});

//-->
</SCRIPT>

<style type="text/css">
body{
font-family:"Trebuchet MS";
font-size:12px;
}
.inn{
		float:left;
		font-size:14px;
		border:solid 1px #000000;
		width:143px;
		font-family:Arial, Helvetica, sans-serif;
		color:#0066CC;
		font-weight:bold;	
	}
</style>


<script type="text/javascript">


      $( function () {
        
  twitter.screenNameKeyUp();
  $('#user_screen_name').focus();

      });
    

</script>


<!-- -----------------------------------------  -->

  <link rel="stylesheet" type="text/css" href="lib/jquery.ad-gallery.css">
  <script type="text/javascript" src="js/1.7.2.jquery.min.js"></script>
  <script type="text/javascript" src="lib/jquery.ad-gallery.js"></script>
  <script src="js/validation_jobseeker.js" type="text/javascript"></script>
  
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
  
  
  
  
  <!-- Email-check jquery  
  
  <script type="text/javascript"> 
  
  jQuery(function($) {
	var val_holder;
	
	$("form input[name='register']").click(function() { // triggred click 
		
		/************** form validation **************/
		val_holder 		= 0;
		var fname 		= jQuery.trim($("form input[name='fname']").val()); // first name field
		var lname 		= jQuery.trim($("form input[name='lname']").val()); // last name field*/
		var email 		= jQuery.trim($("form input[name='email']").val()); // email field
		var email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/; // reg ex email check	
		
		if(fname == "") {
			$("span.fname_val").html("This field is empty.");
		val_holder = 1;
		} 
		if(lname == "") {
			$("span.lname_val").html("This field is empty.");
		val_holder = 1;
		}  
		if(email == "") {
			$("span.email_val").html("This field is empty.");
		val_holder = 1;
		}
		if(email != "") {
			if(!email_regex.test(email)){ // if invalid email
				$("span.email_val").html("Your email is invalid.");
				val_holder = 1;
			} 
		}
		if(val_holder == 1) {
			return false;
		}  
		val_holder = 0;
		/************** form validation end **************/
		
		/************** start: email exist function and etc. **************/
		$("span.loading").html("<img src='images/ajax_fb_loader.gif'>");
		$("span.validation").html("");
		
	//	var datastring = 'fname='+ fname +'&lname='+ lname +'&email='+ email; // get data in the form manual
		//var datastring = $('form#mainform').serialize(); // or use serialize

         var datastring ='&email='+ email;

		$.ajax({
					type: "POST", // type
					url: "check_email.php", // request file the 'check_email.php'
					data: datastring, // post the data
					success: function(responseText) { // get the response
						if(responseText == 1) { // if the response is 1
							$("span.email_val").html("<img src='images/invalid.png'> Email are already exist.");
							$("span.loading").html("");
						} else { // else blank response
							if(responseText == "") { 
								$("span.loading").html("<img src='images/correct.png'> You are registred.");
								$("span.validation").html("");
								$("form input[type='text']").val(''); // optional: empty the field after registration
							}
						}
					} // end success
		}); // ajax end
		/************** end: email exist function and etc. **************/
	}); // click end
}); // jquery end
 
 
 </script>

<!-------------------------------------- The end     -------------->
  
  
  
  
  
  
  
  

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
    
     <form  onsubmit="return validateForm();" action="signup_ac.php" method="post" name="jobseeker_registration" enctype="multipart/form-data">
    
    <div class="advanced_search_div">
      <img src="images/write.png" width="40" align="left" class="advanced_image" /><p><strong><span style="color:#2590c9;">Create your Profile Now</span></strong></p>
      <table width="100%" cellspacing="10" cellpadding="5">
       <tr>
    <td colspan="3"><span class="create_profile_span">Create Login Details</span></td>
    </tr>
  <tr>
  
    <td width="50%"><span class="advanced_star">&nbsp;&nbsp;&nbsp;*</span> Enter Your Email ID</td>
    <td width="4%">:</td>
    <td width="46%"><input type="text" placeholder="Enter Your Email ID"
    name="email" 
    onblur="if(value=='') value = 'Enter Your Email ID'" 
    onfocus="if(value=='Enter Your Email ID') value = ''" class="advanced_box" id="email" name="email" onkeyup="twitter.updateUrl(this.value)" />

	
	<div style="margin-top:10px;" id="status" >
	</div>

	</td>
    </tr>
   
   <!---
    <tr width="65%" align="left" valign="middle" ><input id="email"  type="text" name="email" onkeyup="twitter.updateUrl(this.value)" class="inn" />
       	</span>
		</tr>
        	
        <tr>
		</tr>

        <tr align="left" valign="bottom" height="20px">
		<div id="status">
		</div>
		</tr> 
   -->
   
   
   
   
   
   
   
   
   
   
   
   
  
  <tr>
    <td><span class="advanced_star">&nbsp;&nbsp;&nbsp;*</span> Create a Password</td>
    <td>:</td>
    <td><input type="password" placeholder="Password"
    name="password" 
    onblur="if(value=='') value = 'Password'" 
    onfocus="if(value=='Password') value = ''" class="advanced_box" id="password" name="password"/></td>
  </tr>
  
 

  
  
<tr>
    <td><span class="advanced_star">&nbsp;&nbsp;&nbsp;*</span> Confirm Password</td>
    <td>:</td>
    <td><input type="password" placeholder="Password"
    name="confirmpassword" 
    onblur="if(value=='') value = 'Password'" 
    onfocus="if(value=='Password') value = ''" class="advanced_box" id="confirmpassword" name="confirmpassword"/></td>
  </tr>
  
  <tr>
    <td colspan="3"><span class="create_profile_span">Your Personal Details</span></td>
    </tr>
  
  <tr>
    <td width="50%"><span class="advanced_star">&nbsp;&nbsp;&nbsp;*</span> First Name </td>
    <td width="4%">:</td>
    <td width="46%"><input type="text" placeholder="First Name"
    name="fname" 
    onblur="if(value=='') value = 'First Name'" 
    onfocus="if(value=='First Name') value = ''" class="advanced_box" id="fname" name="fname" onkeypress="return onKeyPressBlockNumbers(event);"/></td>
  </tr>
  
  <tr>
    <td width="50%"><span class="advanced_star">&nbsp;&nbsp;&nbsp;*</span> Last Name </td>
    <td width="4%">:</td>
    <td width="46%"><input type="text" placeholder="Last Name"
    name="lname" 
    onblur="if(value=='') value = 'Last Name'" 
    onfocus="if(value=='Last Name') value = ''" class="advanced_box" id="lname" name="lname" onkeypress="return onKeyPressBlockNumbers(event);"/></td>
  </tr>
  
  <tr>
    <td width="50%"><span class="advanced_star">&nbsp;&nbsp;&nbsp;*</span> Date of Birth</td>
    <td width="4%">:</td>
    <td width="46%"><input type="text" placeholder="dd"
    name="day" 
    onblur="if(value=='') value = 'dd'" 
    onfocus="if(value=='dd') value = ''"  class="date_of_birth_box" id="day" name="day" onkeypress="return onlyNumbers(event);" maxlength="2"/>
     &nbsp;
     <input type="text" placeholder="mm"
    name="month" 
    onblur="if(value=='') value = 'mm'" 
    onfocus="if(value=='mm') value = ''"  class="date_of_birth_box" id="month" name="month" onkeypress="return onlyNumbers(event);" maxlength="2"/>
    
    &nbsp;
 <input type="text" placeholder="dd"
    name="year" 
    onblur="if(value=='') value = 'Last Name'" 
    onfocus="if(value=='Last Name') value = ''"  class="date_of_birth_box" id="year" name="year" onkeypress="return onlyNumbers(event);" maxlength="4"/>
    </td>
  </tr>
  
  <tr>
    <td><span class="advanced_star">&nbsp;&nbsp;&nbsp;*</span> Gender</td>
    <td>:</td>
    <td>
    <input type="radio" name="gender" value="Male"> 
    Male &nbsp;&nbsp;&nbsp;
    <input type="radio" name="gender" value="Female"> Female</td>
  </tr>
  
  
   <tr>
    <td><span class="advanced_star">&nbsp;&nbsp;&nbsp;*</span> Nationality</td>
    <td>:</td>
    <td>
   
<select id="country" name="country" class="advanced_box_select">
<option value="" selected="selected">--Select--</option>
<option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Angola">Angola</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Botswana">Botswana</option>
<option value="Brazil">Brazil</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Colombia">Colombia</option>
<option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
<option value="Cuba">Cuba</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Greece">Greece</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Italy">Italy</option>
<option value="Ivory Coast">Ivory Coast</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Korea (North)">Korea (North)</option>
<option value="Korea (South)">Korea (South)</option>
<option value="Kuwait">Kuwait</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Namibia">Namibia</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Portugal">Portugal</option>
<option value="Qatar">Qatar</option>
<option value="Romania">Romania</option>
<option value="Russia">Russia</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Singapore">Singapore</option>
<option value="South Africa">South Africa</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Thailand">Thailand</option>
<option value="USA">USA</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United Kingdom (UK)">United Kingdom (UK)</option>
<option value="Uruguay">Uruguay</option>
<option value="Vietnam">Vietnam</option>
<option value="Greenland">Greenland</option>
<option value="Bhutan">Bhutan</option>
     </select>
    
    </td>
  </tr>
 
  <tr>
    <td><span class="advanced_star">&nbsp;&nbsp;&nbsp;*</span> Current City/Work Location</td>
    <td>:</td>
    <td><input type="text" placeholder="city"
    name="city" 
    onblur="if(value=='') value = 'city'" 
    onfocus="if(value=='city') value = ''" class="advanced_box" id="city" onkeypress="return onKeyPressBlockNumbers(event);"/></td>
  </tr>
  
  <tr>
    <td><span class="advanced_star">&nbsp;&nbsp;&nbsp;*</span> Your Basic Education</td>
    <td>:</td>
    <td>
    
    <select id="education" title="-Education-" name="education" class="advanced_box_select">
<option value="-1" label="Select">Select</option>
<option value="Not Pursuing Graduation" label="Not Pursuing Graduation">Not Pursuing Graduation</option>
<option value="B.A" label="B.A">B.A</option>
<option value="B.Arch" label="B.Arch">B.Arch</option>
<option value="BCA" label="BCA">BCA</option>
<option value="B.B.A" label="B.B.A">B.B.A</option>
<option value="B.Com" label="B.Com">B.Com</option>
<option value="B.Ed" label="B.Ed">B.Ed</option>
<option value="BDS" label="BDS">BDS</option>
<option value="BHM" label="BHM">BHM</option>
<option value="B.Pharma" label="B.Pharma">B.Pharma</option>
<option value="B.Sc" label="B.Sc">B.Sc</option>
<option value="B.Tech/B.E." label="B.Tech/B.E.">B.Tech/B.E.</option>
<option value="LLB" label="LLB">LLB</option>
<option value="MBBS" label="MBBS">MBBS</option>
<option value="Diploma" label="Diploma">Diploma</option>
<option value="BVSC" label="BVSC">BVSC</option>
<option value="Other" label="Other">Other</option>
</select>
    
  </td>
  </tr>
   
   <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Masters Degree</td>
    <td>:</td>
    <td>
    
<select id="master" title="-Education-" name="master" class="advanced_box_select">
<option value="-1" label="Select">Select</option>
<option value="CA" label="CA">CA</option>
<option value="CS" label="CS">CS</option>
<option value="ICWA" label="ICWA">ICWA</option>
<option value="Integrated PG" label="Integrated PG">Integrated PG</option>
<option value="LLM" label="LLM">LLM</option>
<option value="M.A" label="M.A">M.A</option>
<option value="M.A" label="M.Arch">M.Arch</option>
<option value="M.Com" label="M.Com">M.Com</option>
<option value="M.Ed" label="M.Ed">M.Ed</option>
<option value="M.Pharma" label="M.Pharma">M.Pharma</option>
<option value="M.Sc" label="M.Sc">M.Sc</option>
<option value="M.Tech" label="M.Tech">M.Tech</option>
<option value="MBA/PGDM" label="MBA/PGDM">MBA/PGDM</option>
<option value="MCA" label="MCA">MCA</option>
<option value="MS" label="MS">MS</option>
<option value="PG Diploma" label="PG Diploma">PG Diploma</option>
<option value="MVSC" label="MVSC">MVSC</option>
<option value="MCM" label="MCM">MCM</option>
<option value="Other" label="Other">Other</option>
<option value="None" label="None">None</option>
</select>
    
    </td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mobile Number</td>
    <td>&nbsp;</td>
    <td>+<input type="text"
    name="mcode" 
 class="mobile_box" name="mcode" id="mcode" onkeypress="return onlyNumbers(event);" maxlength="4"/>
     - <input type="text"
    name="mnumber" 
 class="mobile_number_box" name="mnumber" id="mnumber" onkeypress="return onlyNumbers(event);" maxlength="10" /></td>
  </tr>
   <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Telephone </td>
    <td>&nbsp;</td>
    <td>
 +<input type="text"
    name="tacode" 
 class="mobile_box" name="tccode" id="tccode" onkeypress="return onlyNumbers(event);" maxlength="7"/>
 +<input type="text"
    name="tccode" 
 class="land_code" name="tacode" id="tacode" onkeypress="return onlyNumbers(event);" maxlength="7"/>
     - <input type="text"
    name="tnumber" 
 class="land_number_box" name="tnumber" id="tnumber" onkeypress="return onlyNumbers(event);" maxlength="15"/></td>
  </tr>
   <tr>
    <td colspan="3"><span class="create_profile_span">Your Current Employment Details</span></td>
    </tr>
     <tr>
    <td><span class="advanced_star">&nbsp;&nbsp;&nbsp;*</span>&nbsp;Experience</td>
    <td>:</td>
    <td>
<select id="experience" title="-Experience-" name="experience" class="advanced_box_select">  
<option value="-1" label="Select">Select</option>  
<option value="0">Fresher</option>
<option value="1" label="1">1</option>
<option value="2" label="2">2</option>
<option value="3" label="3">3</option>
<option value="4" label="4">4</option>
<option value="5" label="5">5</option>
<option value="6" label="6">6</option>
<option value="7" label="7">7</option>
<option value="8" label="8">8</option>
<option value="9" label="9">9</option>
<option value="10" label="10">10</option>
<option value="10+" label="Above 10 Year">Above 10 Year</option>
    
</select>    
    
    </td>
  </tr>
  <tr>
  
    <td width="50%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your Skills</td>
    <td width="4%">:</td>
    <td width="46%">
    <textarea name="skills" rows="2" class="skills_box" id="skills"></textarea>
     </td>
  </tr>
   <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Which Industry does your company belong to</td>
    <td>:</td>
    <td><input type="text" placeholder="Sector"
    name="industry" 
    onblur="if(value=='') value = 'company name'" 
    onfocus="if(value=='city') value = ''" class="advanced_box" name="industry" id="industry"/></td>
  </tr>
  <tr>
  
    <td width="50%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Certification Courses</td>
    <td width="4%">:</td>
    <td width="46%">
    <textarea name="certification" cols="1" rows="2" class="skills_box"  id="certification"></textarea>
    
    
    
    </td>
  </tr>
    <tr>
    <td colspan="3"><span class="create_profile_span">Your Current Employment Details</span></td>
    </tr>
      <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Upload Your Resume Here</td>
    <td>:</td>
    <td><input type="file"    name="file" id="file" class="advanced_box" value="30000" /><br/>
	
 <span class="upload_text">Supported File Formats: doc,docx,pdf. Max.File size:300kb</span></td>
  </tr>
  
    <tr style="margin:0; padding:0;">  
    <td width="50%"></td>
    <td width="4%"></td>
    <td width="46%"><img src="captcha.php"/></td>
  </tr>  
    <tr  style="margin:0; padding:0;">  
    <td width="50%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter Security Code</td>
    <td width="4%">:</td>
    <td width="46%">
	<input type="text" name="code" /></td>
  </tr>
  
  
  
   <tr>
    <td colspan="3" style="text-align:center;"><input name="check" type="checkbox" style="text-align:center;" />     
     <span class="upload_text"> I have read and understood the Terms of Use and the Privacy Policy.</span></td>
    </tr>
   <tr>
    <td colspan="3" style="text-align:center;"> 
	
	

	
	
	
	
	
	
	
	
	
   
   <input type="submit" value="Register"  style="background:url(images/button.png) no-repeat; width:100px; height:25px; border:none; color:#fff;" />
    
   <!-- <a href="#"><img src="images/register.png" align="middle" class="advanced_search_img" border="none" /></a> 
   <input type="submit" name="register" value="" class="advanced_search_img" style="background:url(images/register.png) no-repeat; width:125px; height:26px; border:none;" onClick="ValidateRadio(this.form)"/>-->
    
    </td>
    </tr>
  <tr>
    <td colspan="3" style="text-align:center;">Fields marked with <span class="advanced_star">*</span> are required</td>
    </tr>
</table>
      </div>
  </div>
  
  
  <div class="search_main_div">
    <?php
      include ('includes/sidebar.inc.php');
      ?> 
    </div>
	
	
	
	
	
    </form>
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
