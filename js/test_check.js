// JavaScript Document

function ValidateRadio(form){

if (document.feedback.check.checked == false)
{ alert('Please Agree');
form.email.focus();
return false ;

}


ErrorText= "";
if ( ( form.gender[0].checked == false ) && ( form.gender[1].checked == false ) ) 
{
alert ( "Please choose your Gender: Male or Female" ); 
}
if (ErrorText= "") { form.submit() }
}