// JavaScript Document

//Only characters are allowed : Digit not possible
function onKeyPressBlockNumbers(e)
{
	var key = window.event ? e.keyCode : e.which;
	var keychar = String.fromCharCode(key);
	reg = /\d/;
	return !reg.test(keychar);
}


 function onlyNumbers(event) {
        var e = event || evt; // for trans-browser compatibility
        var charCode = e.which || e.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
 
        return true;
    }
	
function validateForm()
{
	
	
	//Email Verification	
var x=document.forms["jobseeker_registration"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  document.jobseeker_registration.email.focus();
  return false;
  }
  
//Password and Confirm password Verification 
if(document.jobseeker_registration.password.value == "")
{
alert('Please input Password');
document.jobseeker_registration.password.focus();    
return false;
}  

var textBox = document.getElementById("password");
var textLength = textBox.value.length;
if(textLength < 6)
{
    
    alert('Please input Password length more than 6 character');
	document.jobseeker_registration.password.focus();
	return false;
}

if(document.jobseeker_registration.confirmpassword.value == "")
{
alert('Please input Confirm Password');
document.jobseeker_registration.confirmpassword.focus();     
return false;
}  
 
if(document.jobseeker_registration.password.value != document.jobseeker_registration.confirmpassword.value)
{
alert('Confirm Password Not Match');
document.jobseeker_registration.confirmpassword.focus();     
return false;
}   
  

 //First name verification
 var x=document.forms["jobseeker_registration"]["fname"].value;
if (x==null || x=="")
  {
  alert("First name must be filled out");
   
  return false;
  } 
  
  
  var x=document.forms["jobseeker_registration"]["lname"].value;
if (x==null || x=="")
  {
  alert("Last name must be filled out");
   
  return false;
  } 
  
  
  var x=document.forms["jobseeker_registration"]["day"].value;
if (x==null || x=="")
  {
  alert("Date of Birth must be filled out");
   
  return false;
  } 
  
   var x=document.forms["jobseeker_registration"]["month"].value;
if (x==null || x=="")
  {
  alert("Date of Birth must be filled out");
  
  return false;
  } 
  
   var x=document.forms["jobseeker_registration"]["year"].value;
if (x==null || x=="")
  {
  alert("Date of Birth must be filled out");
  return false;
  } 
  
  
  var x=document.forms["jobseeker_registration"]["country"].value;
if (x==null || x=="")
  {
  alert("Select you nationality");
   
  return false;
  } 
  
 //City verification
 var x=document.forms["jobseeker_registration"]["city"].value;
if (x==null || x=="")
  {
  alert("Please select a city");
   
  return false;
  } 
  
     	
  //Basic Education verification
 var x=document.forms["jobseeker_registration"]["education"].value;
if (x==null || x=="-1")
  {
  alert("Select your Basic Education");
   
  return false;
  } 
 
  
//Experience verification
 var x=document.forms["jobseeker_registration"]["experience"].value;
if (x==null || x=="-1")
  {
  alert("Select you Working Experience");
   
  return false;
  } 
	  
	  
/*if ( ( form.gender[0].checked == false ) && ( form.gender[1].checked == false ) ) 
{
alert ( "Please choose your Gender: Male or Female" ); 
return false;
}	  */
	  

if (document.jobseeker_registration.check.checked == false)
{ 
alert('Please Agree');
return false;
}
  
}



/*function ValidateRadio(form){

if (document.jobseeker_registration.check.checked == false)
{ 
alert('Please Agree');
return false;
}

/*if ( ( form.gender[0].checked == false ) && ( form.gender[1].checked == false ) ) 
{
alert ( "Please choose your Gender: Male or Female" ); 
return false;
} */