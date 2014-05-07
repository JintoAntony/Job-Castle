<?php session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<link rel="icon" href="images/employer.png" type="image/x-icon">
    <link rel="shortcut icon" href="images/employer.png" type="image/x-icon" />
    
    
    
<title>Employer Registration</title>
<link rel="stylesheet" type="text/css" href="css/style-employer.css" />


  <link rel="stylesheet" type="text/css" href="lib/jquery.ad-gallery.css">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script type="text/javascript" src="lib/jquery.ad-gallery.js"></script>
  
  <script type="text/javascript" src="js/validation_employer.js"
  
  
  
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


<form onsubmit="return validateForm();" action="process_employer_registration.php" method="post" name="employer_registration" enctype="multipart/form-data">

<div class="employee_register">
<img src="images/1377172085_mail-new.png" style="margin-bottom:20px;"  align="left"/><br /><span style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color:#2699d6; font-size:17px;">New Employer Registration</span>
<table width="100%" cellspacing="10" cellpadding="5">
     <tr>
       <td height="20" colspan="3"><span class="em_head_one">Create Your Account</span></td>
     </tr>
  <tr>
       <tr>
    <td colspan="3"></td>
    </tr>
  <tr>
  
    <td width="38%"><span class="em_reg_star">*</span> Company Name</td>
    <td width="3%">:</td>
    <td width="59%"><input type="text" placeholder="Company Name"
    name="company" 
    onblur="if(value=='') value = 'Company Name'" 
    onfocus="if(value=='Company Name') value = ''" class="em_reg_box" /></td>
  </tr>

  <tr>
    <td><span class="em_reg_star">*</span> Type</td>
    <td>:</td>
    <td>
    <input type="radio" name="companytype" value="Company"/>
    Company&nbsp;
    <input type="radio" name="companytype" value="Recruitment Agency"/>
    Recruitment Agency</td>
  </tr>
    <tr>
    <td><span class="em_reg_star">*</span> Sector</td>
    <td>:</td>
    <td>
    
    <select id="sector" class="em_reg_box_select" title="Search with Industry" name="sector">
                    <option selected="" value="">- Select an Industry -</option>
                    <option value="Accessories/Apparel/Fashion Design">Accessories/Apparel/Fashion Design</option>
                    <option value="Accounting/Consulting/Taxation">Accounting/Consulting/Taxation</option>
                    <option value="Advertising/Event Management/PR">Advertising/Event Management/PR</option>
                    <option value="Agriculture/Dairy Technology">Agriculture/Dairy Technology</option>
                    <option value="Airlines/Hotel/Hospitality/Travel/Tourism/Restaurants">Airlines/Hotel/Hospitality/Travel/Tourism/Restaurants</option>
                    <option value="Animation / Gaming">Animation / Gaming</option>
                    <option value="Architectural Services/ Interior Designing">Architectural Services/ Interior Designing</option>
                    <option value="Auto Ancillary/Automobiles/Components">Auto Ancillary/Automobiles/Components</option>
                    <option value="Banking/Financial Services/Stockbroking/Securities">Banking/Financial Services/Stockbroking/Securities</option>
                    <option value="Banking/FinancialServices/Broking">Banking/FinancialServices/Broking</option>
                    <option value="Biotechnology/Pharmaceutical/Clinical Research">Biotechnology/Pharmaceutical/Clinical Research</option>
                    <option value="Cement/Construction/Engineering/Metals/Steel/Iron">Cement/Construction/Engineering/Metals/Steel/Iron</option>
                    <option value="Ceramics/Sanitaryware">Ceramics/Sanitaryware</option>
                    <option value="Chemicals/Petro Chemicals/Plastics">Chemicals/Petro Chemicals/Plastics</option>
                    <option value="Computer Hardware/Networking">Computer Hardware/Networking</option>
                    <option value="Consumer FMCG/Foods/Beverages">Consumer FMCG/Foods/Beverages</option>
                    <option value="Consumer FMCG/Foods/Beverages">Consumer Goods - Durables</option>
                    <option value="Courier/Freight/Transportation/Warehousing">Courier/Freight/Transportation/Warehousing</option>
                    <option value="CRM/ IT Enabled Services/BPO">CRM/ IT Enabled Services/BPO</option>
                    <option value="Education/Training/Teaching">Education/Training/Teaching</option>
                    <option value="Electricals/Switchgears">Electricals/Switchgears</option>
                    <option value="Employment Firms/Recruitment Services Firms">Employment Firms/Recruitment Services Firms</option>
                    <option value="Entertainment/Media/Publishing/Dotcom">Entertainment/Media/Publishing/Dotcom</option>
                    <option value="Fertilizers/Pesticides">Fertilizers/Pesticides</option>
                    <option value="Gems and Jewellery">Gems and Jewellery</option>
                    <option value="Government/Defence">Government/Defence</option>
                    <option value="Healthcare/Medicine">Healthcare/Medicine</option>
                    <option value="Insurance">Insurance</option>
                    <option value="KPO/Research/Analytics">KPO/Research/Analytics</option>
                    <option value="Law/Legal Firms">Law/Legal Firms</option>
                    <option value="Machinery/Equipment Manufacturing/Industrial Products">Machinery/Equipment Manufacturing/Industrial Products</option>
                    <option value="Mining">Mining</option>
                    <option value="NGO/Social Services">NGO/Social Services</option>
                    <option value="Office Automation">Office Automation</option>
                    <option value="Others/Engg. Services/Service Providers">Others/Engg. Services/Service Providers</option>
                    <option value="Petroleum/Oil and Gas/Projects/Infrastructure/Power/Non-conventional Energy">Petroleum/Oil and Gas/Projects/Infrastructure/Power/Non-conventional Energy</option>
                    <option value="Printing/Packagin">Printing/Packaging</option>
                    <option value="Publishing">Publishing</option>
                    <option value="Security/Law Enforcement">Security/Law Enforcement</option>
                    <option value="Shipping/Marine">Shipping/Marine</option>
                    <option value="Software Services">Software Services</option>
                    <option value="Telecom Equipment/Electronics/Electronic Devices/RF/Mobile Network/Semi-conductor">Telecom Equipment/Electronics/Electronic Devices/RF/Mobile Network/Semi-conductor</option>
                    <option value="Telecom/ISP">Telecom/ISP</option>
                    <option value="Tyres">Tyres</option>
                    <option value="WaterTreatment/WasteManagement">WaterTreatment/WasteManagement</option>
                    <option value="Wellness/Fitness/Sports">Wellness/Fitness/Sports</option>
    </select>
    
    
    </td>
  </tr>
   <tr>
     
     <td width="38%"><span class="em_reg_star">*</span> Category </td>
     <td width="3%">:</td>
     <td width="59%">
     
     <select id="category" title="Search with Industry Segment" name="category" class="em_reg_box_select">
<option value="" selected="selected">- Select -</option>
<option value="Production / Maintenance / Quality">Production / Maintenance / Quality</option>
<option value="IT Software - Application Programming / Maintenance">IT Software - Application Programming / Maintenance</option>
<option value="ITES / BPO / KPO / Customer Service / Operations">ITES / BPO / KPO / Customer Service / Operations</option>
<option value="Banking / Insurance">Banking / Insurance</option>
<option value="Agent">Agent</option>
<option value="Accounts / Finance / Tax / CS / Audit">Accounts / Finance / Tax / CS / Audit</option>
<option value="Analytics & Business Intelligence">Analytics & Business Intelligence</option>
<option value="Architecture / Interior Design">Architecture / Interior Design</option>
<option value="Content / Journalism">Content / Journalism</option>
<option value="Corporate Planning / Consulting">Corporate Planning / Consulting</option>
<option value="Engineering Design / R&D">Engineering Design / R&D </option>
<option value="Export / Import / Merchandising">Export / Import / Merchandising</option>
<option value="Fashion / Garments / Merchandising">Fashion / Garments / Merchandising</option>
<option value="Guards / Security Services">Guards / Security Services</option>
<option value="Hotels / Restaurants">Hotels / Restaurants</option>
<option value="">HR / Administration / IR</option>
<!--<option value="">IT Software - Client Server</option>
<option value="">IT Software - Mainframe</option>
<option value="">IT Software - Middleware</option>
<option value="">IT Software - Mobile</option>
<option value="">IT Software - Other</option>
<option value="">IT Software - System Programming</option> -->
<option value="IT Software - Mobile">IT Software - Mobile</option>
<option value="IT Software - Telecom Software">IT Software - Telecom Software</option>
<option value="IT Software - DBA / Datawarehousing">IT Software - DBA / Datawarehousing</option>
<option value="IT Software - E-Commerce / Internet Technologies">IT Software - E-Commerce / Internet Technologies</option>
<option value="IT Software - Embedded /EDA /VLSI /ASIC /Chip Des.">IT Software - Embedded /EDA /VLSI /ASIC /Chip Des.</option>
<option value="IT Software - ERP / CRM">IT Software - ERP / CRM</option>
<option value="IT Software - Network Administration / Security">IT Software - Network Administration / Security</option>
<option value="IT Software - QA & Testing">IT Software - QA & Testing</option>
<option value="Marketing / Advertising / MR / PR">Marketing / Advertising / MR / PR</option>
<option value="Shipping">Shipping</option>
<option value="Other">Other</option>
    </select>
     
     
     </td>
   </tr>
   <tr>
  
    <td width="38%"><span class="em_reg_star">*</span>&nbsp;Email-id</td>
    <td width="3%">:</td>
    <td width="59%"><input type="text" placeholder="Email-id"
    name="companyemail" 
    onblur="if(value=='') value = 'Email-id'" 
    onfocus="if(value=='Email-id') value = ''" class="em_reg_box" /></td>
  </tr>
  
    <tr>
  
    <td width="38%"><span class="em_reg_star">*</span> Password</td>
    <td width="3%">:</td>
    <td width="59%"><input type="password" placeholder="Password"
    name="password" 
    onblur="if(value=='') value = 'Password'" 
    onfocus="if(value=='Password') value = ''" class="em_reg_box" />      &nbsp;&nbsp;</td>
  </tr>
  
  
  
   <tr>
    <td><span class="em_reg_star">*</span> Confirm Password</td>
    <td>:</td>
    <td><input type="password" placeholder="Confirm Password"
    name="confirmpassword" 
    onblur="if(value=='') value = 'Confirm Password'" 
    onfocus="if(value=='Confirm Password') value = ''" class="em_reg_box" /></td>
  </tr>
 
  <tr>
    <td><span class="em_reg_star">*</span> Address</td>
    <td>:</td>
    <td><textarea name="address" cols="" rows="" class="em_address"></textarea></td>
  </tr>
  
  <tr>
    <td><span class="em_reg_star">*</span> City</td>
    <td>:</td>
    <td><input type="text" placeholder="City"
    name="city" 
    onblur="if(value=='') value = 'City'" 
    onfocus="if(value=='City') value = ''" class="em_reg_box" /></td>
  </tr>
   
   <tr>
    <td><span class="em_reg_star">*</span> State</td>
    <td>:</td>
    <td><input type="text" placeholder="State"
    name="state" 
    onblur="if(value=='') value = 'state'" 
    onfocus="if(value=='state') value = ''" class="em_reg_box" /></td>
  </tr>
  <tr>
    <td><span class="em_reg_star">*</span> Country</td>
    <td>:</td>
    <td>
    
    <select id="country" name="country" class="em_reg_box_select">
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
     <td><span class="em_reg_star">*</span> website URL</td>
     <td>:</td>
     <td><input type="text" placeholder="URL"
    name="website" 
    onblur="if(value=='') value = 'URL'" 
    onfocus="if(value=='URL') value = ''" class="em_reg_box" /></td>
   </tr>
   <tr>
     <td><span class="em_reg_star">*</span> Telephone</td>
     <td>:</td>
     <td> +
       <input type="text"
    name="TCCode" 
 class="mobile_box" onkeypress="return onlyNumbers(event);"/>
       +
       <input type="text"
    name="TACode" 
 class="land_code" onkeypress="return onlyNumbers(event);"/>
       -
       <input type="text"
    name="TNumber" 
 class="land_number_box" onkeypress="return onlyNumbers(event);"/></td>
   </tr>
     <tr>
       <td height="47" colspan="3"><span class="em_head_one">Contact Details</span></td>
     </tr>
  <tr>
  
    <td width="38%"><span class="em_reg_star">*</span> Title</td>
    <td width="3%">:</td>
    <td width="59%">
    
    <select id="title" name="title" class="em_reg_box_select" >
    
  <option value="" selected="selected">--Select--</option>  
  <option value="Mr">Mr</option>
  <option value="Ms">Ms</option>
  <option value="Mrs">Mrs</option>
  <option value="Dr">Dr</option>
  <option value="Prof">Prof</option>
</select>
    
    </td>
  </tr>
   <tr>
    <td><span class="em_reg_star">*</span> First Name</td>
    <td>:</td>
    <td><input type="text" placeholder="First Name"
    name="fname" 
    onblur="if(value=='') value = 'First Name'" 
    onfocus="if(value=='First Name') value = ''" class="em_reg_box" onkeypress="return onKeyPressBlockNumbers(event);"/></td>
  </tr>
  <tr>
    
    <td width="38%"><span class="em_reg_star">*</span> Last Name</td>
    <td width="3%">:</td>
    <td width="59%"><input type="text" placeholder="Last Name"
    name="lname" 
    onblur="if(value=='') value = 'Last Name'" 
    onfocus="if(value=='Last Name') value = ''" class="em_reg_box" onkeypress="return onKeyPressBlockNumbers(event);"/></td>
  </tr>
    <tr>
      <td><span class="em_reg_star">*</span> Designation</td>
      <td>:</td>
      <td><input type="text" placeholder="Designation"
    name="designation" 
    onblur="if(value=='') value = 'Designation'" 
    onfocus="if(value=='Designation') value = ''" class="em_reg_box" /></td>
    </tr>
      <tr>
        <td><span class="em_reg_star">*</span> Email id</td>
        <td>:</td>
        <td><br/>
          <input type="text" placeholder="Enter Your Contact Email id"
    name="contactemail" 
    onblur="if(value=='') value = 'Email id'" 
    onfocus="if(value=='Email id') value = ''" class="em_reg_box" /></td>
      </tr>
      <tr>
    <td><span class="em_reg_star">*</span> Mobile</td>
    <td>:</td>
    <td>+
      <input type="text"
    name="MCCode" 
 class="mobile_box" onkeypress="return onlyNumbers(event);"/>
-
<input type="text"
    name="MNumber" 
 class="mobile_number_box" onkeypress="return onlyNumbers(event);"/></td>
  </tr>
  
   <tr>
    <td colspan="3" style="text-align:center;"><hr /></td>
    </tr>

     <tr>
       <td height="47" colspan="3"><span class="em_head_one">Plan Details</span></td>
    </tr>
     <tr>
    <td><span class="em_reg_star">*</span> Please Specify Your Plan</td>
    <td>:</td>
    <td><select name="plan" class="em_reg_box_select">
      <option value="" selected="selected">- - Select - -</option>
      <option value="Trial">Trial 10 Days</option>
      <option value="1 Job">1 Job Plan</option>
      <option value="3 Job">3 Job Plan</option>
      <option value="5 Job">5 Job Plan</option>
      <option value="10 Job">10 Job Plan</option>
      <option value="Unlimited">Unlimited</option>
    </select>
   

    </td>
    </tr>
    
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>
        
         <table width="207px" border="1" cellspacing="0" cellpadding="5">
  <tr>
    <td><p>Trial Plan-Validity 10 days free</p>
      <p style="text-align:center;">&nbsp;</p>
      <p>1 Job Plan-Downloads possible 5 </p>
      <p>3 Job Plan-Downloads Possible 10 </p>
      <p>&nbsp;</p>
      <p>More Details &nbsp;&nbsp;<a href="#" style="color:#2699d6;">Click here !</a></p></td>
  </tr>
</table>

        </td>
      </tr>
    <tr>
    <td colspan="3" style="text-align:center;">
    <input name="check" type="checkbox" value="" style="text-align:center;" />     
     <span class="upload_text"> I have read and understood the Terms of Use and the Privacy Policy.</span></td>
    </tr>
  
   <tr>
    <td colspan="3" style="text-align:center;"> 
    <input type="submit" value="Register"  style="background:url(images/button.png) no-repeat; width:100px; height:25px; border:none; color:#fff;" /></td>
    </tr>
 
  <tr>
    <td colspan="3" style="text-align:center;">Fields marked with <span class="em_reg_star">*</span> are required</td>
    </tr>
</table>

</div>

</form>

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
