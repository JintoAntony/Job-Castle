/*
	author: istockphp.com
*/
jQuery(function($) {
	var val_holder;
	
	$("form input[name='register']").click(function() { // triggred click 
		
		/************** form validation **************/
		val_holder 		= 0;
		var fname 		= jQuery.trim($("form input[name='fname']").val()); // first name field
		var lname 		= jQuery.trim($("form input[name='lname']").val()); // last name field*/
		var email 		= jQuery.trim($("form input[name='email']").val()); // email field
		var email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/; // reg ex email check	
		
		if(fname == "") {
			$("span.fname_val").html("This field is empty.");
		val_holder = 1;
		} 
		if(lname == "") {
			$("span.lname_val").html("This field is empty.");
		val_holder = 1;
		}  
		if(email == "") {
			$("span.email_val").html("This field is empty.");
		val_holder = 1;
		}
		if(email != "") {
			if(!email_regex.test(email)){ // if invalid email
				$("span.email_val").html("Your email is invalid.");
				val_holder = 1;
			} 
		}
		if(val_holder == 1) {
			return false;
		}  
		val_holder = 0;
		/************** form validation end **************/
		
		/************** start: email exist function and etc. **************/
		$("span.loading").html("<img src='images/ajax_fb_loader.gif'>");
		$("span.validation").html("");
		
	//	var datastring = 'fname='+ fname +'&lname='+ lname +'&email='+ email; // get data in the form manual
		//var datastring = $('form#mainform').serialize(); // or use serialize

         var datastring ='&email='+ email;

		$.ajax({
					type: "POST", // type
					url: "check_email.php", // request file the 'check_email.php'
					data: datastring, // post the data
					success: function(responseText) { // get the response
						if(responseText == 1) { // if the response is 1
							$("span.email_val").html("<img src='images/invalid.png'> Email are already exist.");
							$("span.loading").html("");
						} else { // else blank response
							if(responseText == "") { 
								$("span.loading").html("<img src='images/correct.png'> You are registred.");
								$("span.validation").html("");
								$("form input[type='text']").val(''); // optional: empty the field after registration
							}
						}
					} // end success
		}); // ajax end
		/************** end: email exist function and etc. **************/
	}); // click end
}); // jquery end