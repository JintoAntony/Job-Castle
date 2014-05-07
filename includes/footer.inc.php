
<?php 
if((!isset($_SESSION['jobseeker']) ))
    {  
	echo '
	<a href="#">About Us</a><br />
      <a href="#">FAQ’S</a><br />
      <a href="#">Site Map</a><br />
      <a href="#">Feedback</a><br />
      <a href="#">Disclaimer</a><br />
      <a href="#">Contact Us</a> </div>
    <div id="home_footer_slice_three"> <span class="home_foote_span">Jobseeker Links</span><br />
      <a href="jobseeker_home.php">Search Jobs</a><br />
      <a href="jobseeker_advanced_search.php">Advanced Job Search</a><br />
      <a href="jobseeker_registration.php">Submit Resume</a><br />
      <a href="jobseeker_login.php">Login to Your Account</a><br />
      <a href="jobseeker_latest_jobs">Latest Jobs</a> </div>
    <div id="home_footer_slice_four"> <span class="home_foote_span">Employer Links</span><br />
      <a href="employer_registration.php">Register</a><br />
      <a href="employer_login.php">Login to Your Account</a><br />
      <a href="employer_packages.php">Our Packages</a><br />
     
      <a href="employer_add_job.php">Post Jobs</a><br />
      <a href="download_resume.php">Search Resumes</a> </div> 
	';
	}
?>


<?php
if(isset($_SESSION['jobseeker']))
	{
	echo '
	<a href="#">About Us</a><br />
      <a href="#">FAQ’S</a><br />
      <a href="#">Site Map</a><br />
      <a href="#">Feedback</a><br />
      <a href="#">Disclaimer</a><br />
      <a href="#">Contact Us</a> </div>
    <div id="home_footer_slice_three"> <span class="home_foote_span">Jobseeker Links</span><br />
      <a href="#">Search Jobs</a><br />
      <a href="#">Quick Job Search</a><br />
      <a href="#">Submit Resume</a><br />
    <!--  <a href="#">Login to Your Account</a><br /> -->
    <!--  <a href="#">Jobs in Your Inbox</a><br /> -->
      <a href="#">Latest Jobs</a> </div>
    <div id="home_footer_slice_four"> <span class="home_foote_span">Employer Links</span><br />
      <a href="#">Register</a><br />
      <a href="#">Login to Your Account</a><br />
      <a href="#">Our Packages</a><br />
      <a href="#">My Jobs</a><br />
      <a href="#">Post Jobs</a><br />
      <a href="#">Search Resumes</a> </div> 
	  ';
	}
?>

	

	

