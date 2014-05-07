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
	
//|Company name verification
var x=document.forms["employer_registration"]["company"].value;
if (x==null || x=="")
  {
  alert("Company name must be filled out");
  return false;
  } 
  
//Sector verification
var x=document.forms["employer_registration"]["sector"].value;
if (x==null || x=="")
  {
  alert("Please select a company sector");
  return false;
  } 
  
  
//category verification
var x=document.forms["employer_registration"]["category"].value;
if (x==null || x=="")
  {
  alert("Please select a company category");
  return false;
  } 
  
  
  //Email Verification	
var x=document.forms["employer_registration"]["companyemail"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid Comapny e-mail address");
  return false;
  }
  
  
  
  
 var x=document.forms["employer_registration"]["password"].value; 
  if(x==null || x=="")
{
alert('Please input Password');
document.employer_registration.password.focus();    
return false;
}  

    

var x=document.forms["employer_registration"]["confirmpassword"].value; 
  if(x==null || x=="")
{
alert('Please input Password');
document.employer_registration.confirmpassword.focus();    
return false;
}  
 
if(document.employer_registration.password.value != document.employer_registration.confirmpassword.value)
{
alert('Confirm Password Not Match');
document.employer_registration.confirmpassword.focus();     
return false;
}   
  
  
//Address verification
 var x=document.forms["employer_registration"]["address"].value;
if (x==null || x=="")
  {
  alert("Please Enter your address");
  return false;
  } 
  
  
     	//City verification
 var x=document.forms["employer_registration"]["city"].value;
if (x==null || x=="")
  {
  alert("Please select a city");
  return false;
  } 
  
     	//State verification
 var x=document.forms["employer_registration"]["state"].value;
if (x==null || x=="")
  {
  alert("Please select a state");
  return false;
  } 
  
     	//Country verification
 var x=document.forms["employer_registration"]["country"].value;
if (x==null || x=="")
  {
  alert("Please select a country");
  return false;
  } 
  
  
      
  
       	//Website verification
 var x=document.forms["employer_registration"]["website"].value;
if (x==null || x=="")
  {
  alert("Enter you website URL.");
  return false;
  } 
  
  	
	
var x=document.forms["employer_registration"]["title"].value;
if (x==null || x=="")
  {
  alert("Please select the title");
  return false;
  } 	
	
	
	
//First name verification
 var x=document.forms["employer_registration"]["fname"].value;
if (x==null || x=="")
  {
  alert("First name must be filled out");
  return false;
  } 
  
  
  
//Last name verification
 var x=document.forms["employer_registration"]["lname"].value;
if (x==null || x=="")
  {
  alert("Last name must be filled out");
  return false;
  } 
  
  
 //Designation verification
 var x=document.forms["employer_registration"]["designation"].value;
if (x==null || x=="")
  {
  alert("Please specify your designation");
  return false;
  }  
  
//Email Verification	
var x=document.forms["employer_registration"]["contactemail"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid Contact e-mail address");
  return false;
  }
  
  
  
  //mobile number verification
  
  
  
  var x=document.forms["employer_registration"]["MCCode"].value;
if (x==null || x=="")
  {
  alert("Please Enter your Mobile Number");
   
  return false;
  } 
  
   var x=document.forms["employer_registration"]["MNumber"].value;
if (x==null || x=="")
  {
  alert("Please Enter your Mobile Number");
  
  return false;
  } 
  
 if (document.employer_registration.check.checked == false)
{ 
alert('Please Agree');
return false;
}
  
}
  
  





