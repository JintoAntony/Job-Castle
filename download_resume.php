<?php session_start();

DEFINE('DATABASE_USER', 'root');
DEFINE('DATABASE_PASSWORD','root');
DEFINE('DATABASE_HOST', 'localhost');
DEFINE('DATABASE_NAME', 'jobportal');

$dbc = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,DATABASE_NAME);

if (!$dbc) { trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());  }

$query1 = "select * from validity";

$result1 = mysqli_query($dbc,$query1);

$row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC)


// to display applicant details in table



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
<div class="employee_register">
<img src="images/download.png" style="margin-bottom:20px;"  align="left"/><br />
<span style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color:#2699d6; font-size:17px;">Applicant Details</span>
<table width="100%" cellspacing="5" cellpadding="5">
       <tr>
    <td colspan="3">&nbsp;</td>
    </tr>
  
  
  
  
  
  <?php


// to display applicant details in table

echo
  
  '<tr>
  
    <td width="33%" height="33"><span class="em_reg_star">*</span>Plan Name</td>
    <td width="2%">:</td>
    <td width="65%">&nbsp;&nbsp;'.$row1['plan'].'</td>
  </tr>

  <tr>
    <td><span class="em_reg_star">*</span> Number of Jobs</td>
    <td>:</td>
  
    <td width="65%">&nbsp;&nbsp;'.$row1['number'].'</td>
  </tr>
    <tr>
    <td><span class="em_reg_star">*</span> Number of Downloads Possible</td>
    <td>:</td>
    <td>&nbsp;&nbsp;'.$row1['downloads'].'</td>
  </tr>'
  
?>
 
  
   <tr>
     
     <td colspan="3"><table width="95%" height="121" cellpadding="5" cellspacing="0" bordercolor="#ccc" style="text-align:center; font-family:Lucida Sans Unicode, Lucida Grande, sans-serif; font-size:14px;" border="1">
       <tr>
         <td width="20%" height="59" bgcolor="#F7F7F7" style="border-right:none; border-bottom:none;">Applicant ID</td>
         <td width="25%" bgcolor="#F7F7F7" style="border-right:none; border-bottom:none;"><p>Applicant Name</p></td>
         <td width="33%" bgcolor="#F7F7F7" style=" border-bottom:none;"><p>Job Title</p></td>
         <td width="22%" bgcolor="#F7F7F7" style=" border-bottom:none;"><p>Download Resume</p></td>
       </tr>
   
   
   <?php
   
   

$query2="select j_id,j_er_id,j_title from jobs";
$result2 = mysqli_query($dbc,$query2);
if($result2)
{ 
     if(mysqli_affected_rows($dbc)!=0)
	       {
           while($row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC))
		  	   {

                  $job_id=$row2['j_id'];
				  $job_employer_id=$row2['j_er_id'];
				  $job_title=$row2['j_title'];
				 
                    //echo '<tr> <td>'.$row['a_ee_id'].'</td></tr>';
                    //   echo '<tr><td>'."$job_id".'</td></tr>' ;
					$query3="select a_ee_id from applicants where (a_j_id=$job_id and a_er_id=$job_employer_id)";
                          $result3= mysqli_query($dbc,$query3);
                              if($result3)
                                    { 
                                         if(mysqli_affected_rows($dbc)!=0)
	                                     {
                                              while($row3 = mysqli_fetch_array($result3,MYSQLI_ASSOC))
		  	                                         {
			                                              // echo '<tr> <td>'.$row2['a_ee_id'].'</td></tr>';
														 $employer_id=$row3['a_ee_id']; 
														  $query4="select ee_id,ee_fname,ee_lname,ee_experience,ee_email from employees where ee_id=$employer_id"; 
														  $result4= mysqli_query($dbc,$query4);
														  if($result4)
                                                                     { 
                                                                         if(mysqli_affected_rows($dbc)!=0)
	                                                                        {
                                                                                while($row4 = mysqli_fetch_array($result4,MYSQLI_ASSOC))
																				
																				  {
																				  
																				  $query5 ="SELECT ee_fname,ee_email FROM employees";
                                                                                  $result5= mysqli_query($dbc,$query5);
																				  
		echo '<tr><td>'.$row4['ee_id'].'</td>' ;   
		echo '<td>'.$row4['ee_fname'].''.$row4['ee_lname'].'</td>';
		echo '<td>'.$row2['j_title'].'</td>';
		 while($row5 = mysqli_fetch_array($result5,MYSQLI_ASSOC))
		    {  
			$mail=$row5['ee_email'];
			if($mail==$row4['ee_email'])
			{
			//$domain = strstr($mail,"@", 1);	    
			
			echo "<td><a href='file_download.php?mail_id=$mail' style=width:100px; height:25px; border:none;><img src=images/download1.png></a></td></tr>";
			
		//	header("location:download_resume.php");
			
			}																	  
			}																	  
																				  
																				
																				  
																				  }
		  	                                                                        
																	        }
													                 }             
										             }
									     }
									}
									
			   }				
									
		   }						
									
}							
   
   
   
   
   
        
																				  
																				   






  ?>
   
   
   
   
   
   <!-- <tr>
         <td></td>
         <td>&nbsp;</td>
         <td><input type="submit" value="" style=" background:url(images/download1.png) no-repeat; width:100px; height:25px; border:none;" /></td>
       </tr>  -->
   
 </table></td>
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
