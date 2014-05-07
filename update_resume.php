<?php session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update Resume</title>
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
      <p><strong>Edit Resume</strong></p>
      <table width="100%" cellspacing="10" cellpadding="5">
     <tr>
       <td height="20" colspan="3"><span class="em_head_one">Edit Personal Details</span></td>
     </tr>
     <tr>
    <td colspan="3"></td>
    </tr>
 
 
 <form name="update_resume" action="process_update_resume.php" method="post" enctype="multipart/form-data">
 
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
if (!$dbc) { trigger_error('Could not connect to MySQL: ' . mysqli_connect_error()); }


$query = "select * from employees where ee_id='$ee_id'";
$result = mysqli_query($dbc,$query);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

 echo '<tr>
    <td width="38%">&nbsp;&nbsp;&nbsp;&nbsp;First Name</td>
    <td width="3%">:</td>
    <td width="59%"><input type="text" value="'.$row['ee_fname'].'"
    name="fname" id="fname"
    class="advanced_box" /></td>
  </tr> 
  <tr>
  
    <td width="38%">&nbsp;&nbsp;&nbsp;&nbsp;Last Name</td>
    <td width="3%">:</td>
    <td width="59%"><input type="text" value="'.$row['ee_lname'].'"
    name="lname" id="lname"
    class="advanced_box" /></td>
  </tr>

  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;Date of Birth</td>
    <td>:</td>
    <td>
    <input type="text" value="'.$row['ee_day'].'"
    name="day" id="day"
    class="date_of_birth_box"/>
     &nbsp;
     <input type="text" value="'.$row['ee_month'].'"
    name="month" id="month"
    class="date_of_birth_box"/>   
    &nbsp;
 <input type="text" value="'.$row['ee_year'].'"
    name="year" id="year" 
    class="date_of_birth_box"/>
   </td>
  </tr>
  
  
    <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;Gender</td>
    <td>:</td>
    <td> <input type="radio" name="gender" id="gender" Value="Male"/>
    Male&nbsp;
    <input type="radio" name="gender" id="gender" Value="Female"/>
    Female</td>
  </tr>
   <tr>
     
     <td width="38%">&nbsp;&nbsp;&nbsp;&nbsp;</span>Nationality</td>
     <td width="3%">:</td>
     <td width="59%">
	 
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
  
    <td width="38%">&nbsp;&nbsp;&nbsp;&nbsp;Current City</td>
    <td width="3%">:</td>
    <td width="59%">
	
	<input type="text" value="'.$row['ee_city'].'"
    name="city" id="city"
    class="advanced_box" />
	
	</td>
  </tr>
  
    <tr>
  
    <td width="38%">&nbsp;&nbsp;&nbsp;&nbsp;Mobile Number</td>
    <td width="3%">:</td>
    <td width="59%">+
      <input type="text" value="'.$row['ee_mcode'].'"
    name="mcode" id="mcode"
 class="mobile_box"/>
-
<input type="text" value="'.$row['ee_mnumber'].'"
    name="mnumber" id="mnumber"
 class="mobile_number_box" />      &nbsp;&nbsp;</td>
  </tr>
       <tr>
       <td height="47" colspan="3"><span class="em_head_one">Edit Current Employment Details</span></td>
     </tr>
  
  
   <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;Experience</td>
    <td>:</td>
    <td><input type="text" value="'.$row['ee_experience'].'"
    name="experience" id="experience"
    class="advanced_box" /></td>
  </tr>
  
 
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;Skills</td>
    <td>:</td>
    <td><textarea name="skills" cols="" rows="" class="skills_box"></textarea></td>
  </tr>
  
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;Which Sector does Your Company Belongs to</td>
    <td>:</td>
    <td>
	<select id="sector" class="advanced_box_select" title="Search with Industry" name="sector">
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
       <td height="47" colspan="3"><span class="em_head_one">Edit Qualification Details</span></td>
     </tr>
	 
	 
	 
   <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;Basic Education</td>
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
  <td>&nbsp;&nbsp;&nbsp;&nbsp;Add Master Degree</td>
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
   <td>&nbsp;&nbsp;&nbsp;&nbsp;Add Certification Course</td>
    <td>:</td>
    <td>
	
	<input type="text" value="'.$row['ee_certification'].'"
    name="certification" id="certification"
    class="advanced_box" />
	</td> 
  </tr>'
  ?>
  
  <tr>
    <td colspan="3" style="text-align:center;"> 
    <input type="submit" value="Save" name="submit" id="submit" style="background:url(images/button.png) no-repeat; width:100px; height:25px; border:none; color:#fff;" /></td>
    </tr>
 
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
