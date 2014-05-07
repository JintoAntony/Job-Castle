// JavaScript Documentfunction required()  
function required()
{ 
var empt1 = document.forms["advanced_search"]["keyword"].value;  
var empt2 =  document.forms["advanced_search"]["location"].value;
var empt3= document.forms["advanced_search"]["sector"].value;
var empt4= document.forms["advanced_search"]["category"].value;

if (empt1== "" && empt2=="" && empt3=="" && empt4=="")  
{  
alert('One of your field is empty');  
return false;  
} 

else   
{  
return true;   
}  
}  


   