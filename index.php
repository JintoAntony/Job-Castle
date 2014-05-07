<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>JOBS</title>
<link rel="stylesheet" type="text/css" href="css/stylehome.css" />
</head>

<body>
<style>
input[type=text]{ color:#bcbbb8;}
input[type=text]:focus{ color:#000;}
  input.focus {
      border: 1px solid #F00;
    }
</style>
<div id="main">
<div class="logo"></div>
<div class="textbar">

 <form action="process_home_search.php" name="search" method="post">
<input 
    type="text" 
    value="Enter Your Job Title"
    name="keyword"
	id="keyword"
    onblur="if(value=='') value = 'Enter Your Job Title'" 
    onfocus="if(value=='Enter Your Job Title') value = ''"
    class="box_one"
 />
 <input 
    type="text" 
    value="Enter Your City/Location"
    name="keyword2"
	id="keyword2" 
    onblur="if(value=='') value = 'Enter Your City/Location'" 
    onfocus="if(value=='Enter Your City/Location') value = ''"
    class="box_two"
 /> 
 <br />  
 
<input name="search" type="submit" value="Search"  onmouseover="this.style.backgroundColor='#449ac9';return true;" onmouseout="this.style.backgroundColor='#68b5de';return true;"  class="search"/>
<!--
<input name="search" type="button" value="Search now" onmouseover="this.style.backgroundColor='#1082be';return true;" onmouseout="this.style.backgroundColor='#1599de';return true;"  class="search"/>
-->
</form>



</div>
</div>

<div class="footer">
  <p><strong>Jobseeker</strong>:   <a href="jobseeker_home.php">Search Jobs</a> | <a href="jobseeker_advanced_search.php">Advanced Job Search</a> | <a href="jobseeker_registration.php">Submit Resume</a> | <a href="jobseeker_login.php">Login to your Account</a> |<br />
    <strong>Employer</strong>:  <a href="employer_home.php">Home</a> | <a href="employer_registration.php">Register</a> | <a href="employer_login.php">Login to your Account</a> | <a href="employer_packages.php">Our Packages</a> | <a href="download_resume.php">Search Resumes</a><br />
    <a href="#">IT Software jobs</a> | <a href="#">BPO jobs</a> | <a href="#">Sales jobs</a> | <a href="#">Finance jobs</a> | <a href="#">Marketing jobs</a> | <a href="#">Fresher jobs</a> | <a href="#">Engineering jobs</a> | <a href="#">HR Administration jobs</a> | <a href="#">Telecom jobs</a>  </p>
  <p><a href="#">About Us</a> | <a href="#">FAQ's</a> | <a href="#">Terms of Use</a> | <a href="#">Privacy Policy</a> | <a href="#">Disclaimer</a> | <a href="#">Contact Us</a> | <a href="#">Site Map</a> | <a href="#">Feedback</a> | <a href="#">RSS Feed</a><br />
    <span class="copyright">
Copyright © 2013 jobscastle.com. All rights reserved to spiderguts.</span></p>
</div>

</body>
</html>
