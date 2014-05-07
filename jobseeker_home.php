<?php session_start();

DEFINE('DATABASE_USER', 'root');
DEFINE('DATABASE_PASSWORD','root');
DEFINE('DATABASE_HOST', 'localhost');
DEFINE('DATABASE_NAME', 'jobportal');

$dbc = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,DATABASE_NAME);

if (!$dbc) { trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());  }


$query1 = "select * from jobs limit 5";

$result1 = mysqli_query($dbc,$query1);

//$row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);

mysqli_close($dbc);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link rel="stylesheet" type="text/css" href="css/stylejobseeker.css" />


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
	font-family: Arial, Helvetica, sans-serif;
	color: #333;
	line-height: normal;
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
  
  
  
  
  

</head>

<body>
<div class="home_header_main">
  <div id="home_header">
    <div class="home_logo"><img src="images/jobs_castle_logo.png" width="180" /></div>
    <div class="home_header_right">
      <div class="home_right_topmenubar">
      
    <?php
	include ('includes/top.inc2.php');
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
  <div id="home_banner">
  <div style="float:left; padding-top:228px; width:200px; height:auto;">
  <a href="#"><img src="images/view-our.png" class="view_our"  border="none"  onmouseover="this.src='images/view-our-mouse.png'" onmouseout="this.src='images/view-our.png'"/></a>
  </div>
    <div class="ban_right"> <span class="quick_search_span">Enter Keyword(s):<br />
      (i.e.job title, company name,etc.): </span>
      <form action="process_search.php" name="search" method="post">
      <input type="text" class="quick_search_input" id="keyword" name="keyword" />
      <br />
      <a href="#">Advanced Search</a>
      <input name="search" type="submit" value="Search"  onmouseover="this.style.backgroundColor='#449ac9';return true;" onmouseout="this.style.backgroundColor='#68b5de';return true;"  class="home_search"/>
      </form>
      <div class="home_select_div"> <a href="#">
        <div class="submityour_resume"></div>
        </a> <a href="#">
        <div class="submit_jobads"></div>
        </a></div>
    </div>
  </div>
</div>


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

<div class="clear_both">&nbsp;</div>
<div id="home_content_main">
  <div id="home_content">
    <div class="home_latest_jobposting"> <img src="images/latestjob-posting.png" class="jobposting_img" />
      <div id="latest_job_div">
      
      <ul id="jobposting_firstul">
          <li style="margin-left:10px;">Posted date</li>
          <li>Position</li>
          <li>Company</li>
          <li>Vacancy</li>
          <li>Experience</li>
        </ul>
    
    <?php
	
	while($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC))

{
   
	echo     '<ul id="jobposting_secondul">
          <li>'.$row1['j_date'].'</li>
          <li>'.$row1['j_title'].'</li>
          <li>'.$row1['j_company'].'</li>
          <li>'.$row1['j_vacancy'].'</li>
          <li>'.$row1['j_experience'].'</li>
        </ul>';
    }
  
?>
	
	
<!--    <ul id="jobposting_secondul">
          <li>Posted date</li>
          <li>Position</li>
          <li>Company</li>
          <li>Vacancy</li>
          <li>Experience</li>
        </ul>
    
        <ul id="jobposting_thirdul">
          <li>Posted date</li>
          <li>Position</li>
          <li>Company</li>
          <li>Vacancy</li>
          <li>Experience</li>
        </ul>
    
        <ul id="jobposting_secondul">
          <li>Posted date</li>
          <li>Position</li>
          <li>Company</li>
          <li>Vacancy</li>
          <li>Experience</li>
        </ul>
    
        <ul id="jobposting_thirdul">
          <li>Posted date</li>
          <li>Position</li>
          <li>Company</li>
          <li>Vacancy</li>
          <li>Experience</li>
        </ul>
   
        <ul id="jobposting_lastul">
          <li>Posted date</li>
          <li>Position</li>
          <li>Company</li>
          <li>Vacancy</li>
          <li>Experience</li>
        </ul> -->
        
        
        <div class="jobposting_more"><a href="#"><em>View more...</em></a></div>
      </div>
    </div>
    <div class="home_brows_jobads"> <img src="images/brows-jobads.png" class="jobposting_img" />
      <ul>
        <li><a href="#">Account Jobs</a></li>
        <li><a href="#">Bank Jobs</a></li>
        <li><a href="#">Fresher Jobs</a></li>
        <li><a href="#">HR Jobs</a></li>
        <li><a href="#">Hardware Jobs</a></li>
        <li><a href="#">Industrial Jobs</a></li>
        <li><a href="#">Marketing Jobs</a></li>
        <li><a href="#">IT Jobs</a></li>
        <li><a href="#">Management Jobs</a></li>
        <li><a href="#">Designer/Graphics Designer Jobs</a></li>
      </ul>
    </div>
  </div>
</div>
<div id="home_navigator"></div>
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
