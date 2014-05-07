<?php session_start();
ob_start();
//$_SESSION['email']=$row['er_companyemail'];
//$_SESSION['category']='employer';
//$_SESSION['status']=1;
//$_SESSION['employer']=1;

//fetch employer status active or not
$employer_id= $_SESSION['erid'];

DEFINE('DATABASE_USER', 'root');
DEFINE('DATABASE_PASSWORD','root');
DEFINE('DATABASE_HOST', 'localhost');
DEFINE('DATABASE_NAME', 'jobportal');

$dbc = @mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,DATABASE_NAME);
if (!$dbc) { trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());  }
 
  
$val="select downloads from validity where employer_id = '$employer_id' ";
$valresult = mysqli_query($dbc,$val);
$row1 = mysqli_fetch_array($valresult,MYSQLI_ASSOC);

echo "No.of downloads";
$downloads=$row1['downloads'];
echo $downloads;
echo $employer_id;

if ($row1['downloads'] == 0)
{
echo "not possible";
}
else
{
$id=$_GET['mail_id'];
echo $id;

$file_dir="uploads/";

$file_name1=$id.'.'.'pdf';
$file_name2=$id.'.'.'docx';
$file_name3=$id.'.'.'doc';
$file_name4=$id.'.'.'rtf';

if(file_exists($file_dir.$file_name1))
{
echo "File is present...";
$file_name=$file_name1;
}
else if(file_exists($file_dir.$file_name2))
{
$file_name=$file_name2;
}

else if(file_exists($file_dir.$file_name3))
{
$file_name=$file_name3;
}
else if(file_exists($file_dir.$file_name4))
{
$file_name=$file_name4;
}

else
{
echo "File not found";
}


$fh=fopen($file_dir.$file_name, "r");
			$file_size=filesize($file_dir.$file_name);
         
               			
				
// Download speed in KB/s
                $speed=10;				
				
// Initialize the range of bytes to be transferred
                $start=0;
                $end=$file_size-1;
                

// Check HTTP_RANGE variable
                if(isset($_SERVER['HTTP_RANGE']) &&
                        preg_match('/^bytes=(\d+)-(\d*)/', $_SERVER['HTTP_RANGE'], $arr)){
                        
                        // Starting byte
                        $start=$arr[1];
                        if($arr[2]){
                                // Ending byte
                                $end=$arr[2];
                        }
                }                

// Check if starting and ending byte is valid
                if($start>$end || $start>=$file_size){
                        header("HTTP/1.1 416 Requested Range Not Satisfiable");
                        header("Content-Length: 0");
                }
                else{
                        // For the first time download
                        if($start==0 && $end==$file_size){
                                // Send HTTP OK header
                                header("HTTP/1.1 200 OK");
                        }
                        else{
                                // For resume download
                                // Send Partial Content header
                                header("HTTP/1.1 206 Partial Content");
                                // Send Content-Range header
                                header("Content-Range: bytes ".$start."-".$end."/".$file_size);
                        }
                        

// Bytes left
                        $left=$end-$start+1;
                        

// Send the other headers
                        header("Content-Type: application/octet-stream");
                        header("Accept-Ranges: bytes");
                        // Content length should be the bytes left
                        header("Content-Length: ".$left);
                        header("Content-Disposition: attachment; filename=".$file_name);
                        
                        // Read file from the given starting bytes
                        fseek($fh, $start);
                        // Loop while there are bytes left
                        while($left>0){
                                // Bytes to be transferred
                                // according to the defined speed
                                $bytes=$speed*1024;
                                // Read file per size
                                echo fread($fh, $bytes);
                                // Flush the content to client
                                flush();
                                // Substract bytes left with the tranferred bytes
                                $left-=$bytes;
                                // Delay for 1 second
                                sleep(1);
                        }
                }
                fclose($fh);				
			
				
$downloads=$row1['downloads'] - 1;  
$query2="update validity set downloads='$downloads' where employer_id='$employer_id'";
$result2=  mysqli_query($dbc,$query2);	

//header("location:download_resume.php");		
				
mysqli_close($dbc);   
	
//exit();				
}
?>
