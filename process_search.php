<?php session_start();


$_SESSION['status']=1; 
$_SESSION['category']='jobseeker';


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search Job</title>
<link rel="stylesheet" type="text/css" href="css/stylejobseeker.css" />

<style>
input[type=text]{ color:#E6E6E6;}
input[type=text]:focus{ color:#fff;}
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
      <li><a href="#"><img src="images/techno.png" width="23" /></a></li>
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
<div class="home_banner_main">
  <div id="home_banner_search">
<div id="reg_maindiv">
  <div class="reg_left">
    <div style="width:750px; height:auto; margin:10px 0 0 35px; font-family:Arial; font-size:13px;">
      <table width="100%" cellpadding="5" cellspacing="0">
        <tr style="background:#F7F7F7;">
          <td width="13%"  style="border-right:none; border-bottom:none;">Job Code</td>
          <td width="74%" style="border-bottom:none; border-right:none;">Position</td>
          <td width="13%" style="border-bottom:none;">Expires on</td>
        </tr>
               
        
        <?php
/*include_once ('database_connection.php');*/

DEFINE('DATABASE_USER', 'root');
DEFINE('DATABASE_PASSWORD','root');
DEFINE('DATABASE_HOST', 'localhost');
DEFINE('DATABASE_NAME', 'jobportal');


$dbc = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,DATABASE_NAME);

if (!$dbc) { trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());  }

$keyword=$_POST['keyword'];
if(empty($_POST))
{
exit;
}

$query = "select j_id,j_title,j_city,j_experience,j_category,j_company,j_vacancy from jobs where (j_title='$keyword' or j_city='$keyword' or j_category='$keyword')or(j_company='$keyword')";

//echo $query;

$result = mysqli_query($dbc,$query);
if($result){ 
    if(mysqli_affected_rows($dbc)!=0){
          while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
    echo
	'<tr class="mouse">
<td style="color:#B30000">'.$row['j_id'].' </td>

<td  ><span style="color:#CC0099; font-size:14px;"><strong>'.$row['j_title'].'</strong></span><br />

<span style="color:#060;"> Company:'.$row['j_company'].'</span><br />
<span style="color:#000;"> Location:'.$row['j_city'].'</span><br />
<span style="color:#075;"> Vacancy:'.$row['j_vacancy'].'</span><br /></td>

<td style="text-align:left top;">11/10/2013 <br /> 
';
if(isset($_SESSION['status']) && $_SESSION['category']=="jobseeker")
{
echo ' <a href="jobseeker_job_details.php?jid='.$row['j_id'].'" style="text-decoration:none; color:#000; border:none;"><img src="images/apply.png" /></a>';
}
echo '
      </td>
      </tr>
     ';
	
    }
    }
	
	else 
        echo "No Results ";
    }
  

else {
    echo 'Parameter Missing';
}

?>
                     
      </table>
    </div>
  </div>
  <div class="search_main_div">
    <?php
	include ('includes/sidebar.inc.php');
	?>
    
    
  </div>
</div></div></div>
<div id="home_logos">

<!--<iframe frameborder="0" style="height: 185px; overflow:scroll; width: 100%"  marginheight="1" marginwidth="1" name="cboxmain" id="cboxmain" seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true"></iframe>
-->
<iframe  frameborder="0" width="1075" height="125" src="navigator/example/navigator.html"   scrolling="no" frameborder="0"   allowtransparency="no" >
</iframe>
 </div> 
 
<div class="clear_both">&nbsp;</div>

<div id="home_navigator">
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
