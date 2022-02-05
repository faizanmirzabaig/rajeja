	function getAjxCountryCode(ajxurl)
	{
		$('#txt_countrycode').val('');
		var field_country = $("#txt_country option:selected").val();
		if(field_country != "" && field_country != "oo")
		{
			ajxurl = ajxurl+field_country;
			$.ajax({
				url: ajxurl,
				dataType: 'html',
				success: function(respdata)
				{
					respdata = jQuery.trim(respdata);
					$('#txt_countrycode').val('+'+respdata);
				}
			});
		}
	}

	function onlyAlphaKeyStroke(event)
	{
		var regex = new RegExp("^[a-zA-Z ]+$");
		var str = String.fromCharCode(!event.charCode ? event.which : event.charCode);
		if(event.charCode == 0)
		{
			return;
		}
		if (regex.test(str)) {
			return true;
		}

		event.preventDefault();
		return false;
	}

	function onlyDigitKeyStroke(event)
	{
		var regex = new RegExp("^[0-9]+$");
		var str = String.fromCharCode(!event.charCode ? event.which : event.charCode);
		if(event.charCode == 0)
		{
			return;
		}
		if (regex.test(str)) {
			return true;
		}

		event.preventDefault();
		return false;
	}

	function showvisitsection(val)
	{
		if(val=='Yes'){
			$('#visitsection').show();
		}else{
			$('#visitsection').hide();
		}
	}
	 
	function hidevisitsection(val)
	{
		if(val=='no'){
			$('#visitsection').hide();
		}else{
			$('#visitsection').show();
		}
	}
	
	function validate_HappeningIndiafrm()
{
		var re = /^[0-9]+$/;
		var re_alpha = /^[A-Za-z ]+$/;
		var msg = '';
		var field_name = jQuery.trim($('#txt_firstname').val());
		var field_email = jQuery.trim($('#txt_email').val());
		var field_mobile = jQuery.trim($('#txt_mobile').val());	
		var field_country = $("#txt_country option:selected").val();
		var field_project = $("#txt_project option:selected").val();
		
				
		if(field_name == "")
		{
			msg = 'Please enter your name';
		}
		else if (!re_alpha.test(field_name))
		{
			msg = 'Name should contain only alphabets';
		}
		else if(field_name.length > 150)
		{
			msg = 'Name should not be more than 150 characters';
		}
		else if(field_email == "")
		{
			msg = 'Please enter your email id';
		}
		else if(field_email.length > 150)
		{
			msg = 'Email id should not be more than 150 characters';
		}
		else if(echeck(field_email) == false)
		{
			msg = 'Invalid E-mail ID';
		}	
		else if(field_country == "")
		{
			msg = 'Please select your state';
		}
		else if(field_project == "")
		{
			msg = 'Please select your project';
		}
		else if(field_mobile == "")
		{
			msg = 'Please enter your mobile number';
		}
		else if (!re.test(field_mobile))
		{
			msg = 'Only digits are allowed in mobile number';
		}
		else if(field_mobile.length < 5 || field_mobile.length > 15)
		{
			msg = 'Please Enter Valid number';
		}
		
		return msg;
	}

	function validate_contactfrm()
	{
		var re = /^[0-9]+$/;
		var re_alpha = /^[A-Za-z ]+$/;
		var msg = '';
		var field_name = jQuery.trim($('#txt_firstname').val());
		var field_email = jQuery.trim($('#txt_email').val());
		var field_mobile = jQuery.trim($('#txt_mobile').val());	
		var field_ccode = jQuery.trim($('#txt_countrycode').val());	
		var field_country = $("#txt_country option:selected").val();
		
		if(field_name == "")
		{
			msg = 'Please enter your name';
		}
		else if (!re_alpha.test(field_name))
		{
			msg = 'Name should contain only alphabets';
		}
		else if(field_name.length > 150)
		{
			msg = 'Name should not be more than 150 characters';
		}
		else if(field_email == "")
		{
			msg = 'Please enter your email id';
		}
		else if(field_email.length > 150)
		{
			msg = 'Email id should not be more than 150 characters';
		}
		else if(echeck(field_email) == false)
		{
			msg = 'Invalid E-mail ID';
		}	
		else if(field_country == "")
		{
			msg = 'Please select your country';
		}
		else if(field_ccode == "")
		{
			msg = 'Please enter your country code';
		}
		else if (!/^[\+]{1}[0-9 ]+$/.test(field_ccode))
		{
			msg = 'Country code should start with + and contains only digits';
		}	
		else if(field_mobile == "")
		{
			msg = 'Please enter your mobile number';
		}
		else if (!re.test(field_mobile))
		{
			msg = 'Only digits are allowed in mobile number';
		}
		/*else if(field_mobile.length < 5 || field_mobile.length > 15)
		{
			msg = 'Mobile number should be 5 or 15 digits';
		}*/
		else if(field_country == 'in')
		{
				var first_digit = parseInt(field_mobile.substring(0,1));
			if(field_mobile.length != 10)
			{
				msg = 'Mobile number should be 10 digits';
			}else if (first_digit < 7 || first_digit > 9)
			{
				msg = 'Mobile number should start with 7/8/9';
			}
		}
		else if(field_mobile.length < 5 || field_mobile.length > 15)
		{
			msg = 'Please Enter Valid number';
		}
		
		return msg;
	}
	
	function validate_yelahankacontactfrm()
	{
		var re = /^[0-9]+$/;
		var re_alpha = /^[A-Za-z ]+$/;
		var msg = '';
		var field_name = jQuery.trim($('#txt_firstname').val());
		var field_email = jQuery.trim($('#txt_email').val());
		var field_mobile = jQuery.trim($('#txt_mobile').val());	
		var field_ccode = jQuery.trim($('#txt_countrycode').val());	
		var field_country = $("#txt_country option:selected").val();
		var field_residencechoice = $("#txt_residencechoice").val();
		var field_budget = $("#txt_budget").val();
		
		if(field_name == "")
		{
			msg = 'Please enter your name';
		}
		else if (!re_alpha.test(field_name))
		{
			msg = 'Name should contain only alphabets';
		}
		else if(field_name.length > 150)
		{
			msg = 'Name should not be more than 150 characters';
		}
		else if(field_email == "")
		{
			msg = 'Please enter your email id';
		}
		else if(field_email.length > 150)
		{
			msg = 'Email id should not be more than 150 characters';
		}
		else if(echeck(field_email) == false)
		{
			msg = 'Invalid E-mail ID';
		}	
		else if(field_country == "")
		{
			msg = 'Please select your country';
		}
		else if(field_ccode == "")
		{
			msg = 'Please enter your country code';
		}
		else if (!/^[\+]{1}[0-9 ]+$/.test(field_ccode))
		{
			msg = 'Country code should start with + and contains only digits';
		}	
		else if(field_mobile == "")
		{
			msg = 'Please enter your mobile number';
		}
		/*else if(field_residencechoice == "")
		{
			msg = 'Please select your Preferred configuration';
		}
		else if(field_budget == "")
		{
			msg = 'Please select your Budget';
		}*/
		else if (!re.test(field_mobile))
		{
			msg = 'Only digits are allowed in mobile number';
		}
		/*else if(field_mobile.length < 5 || field_mobile.length > 15)
		{
			msg = 'Mobile number should be 5 or 15 digits';
		}*/
		else if(field_country == 'in')
		{
			if(field_mobile.length != 10)
			{
				msg = 'Mobile number should be 10 digits';
			}
		}
		else if(field_mobile.length < 5 || field_mobile.length > 15)
		{
			msg = 'Mobile number should be 5 or 15 digits';
		}
		
		
		return msg;
	}

	function validate_contactfrm_typo()
	{
		var re = /^[0-9]+$/;
		var re_alpha = /^[A-Za-z ]+$/;
		var msg = '';
		var field_name = jQuery.trim($('#txt_firstname').val());
		var field_email = jQuery.trim($('#txt_email').val());
		var field_mobile = jQuery.trim($('#txt_mobile').val());	
		var field_ccode = jQuery.trim($('#txt_countrycode').val());	
		var field_country = $("#txt_country option:selected").val();
		var desiredunittype = jQuery.trim($('#desiredunittype').val());
		
		//alert(field_name);
		if(field_name == "")
		{
			msg = 'Please enter your name';
			$('#txt_firstname').addClass('error_msg');
		}
		else if (!re_alpha.test(field_name))
		{
			msg = 'Name should contain only alphabets';
			$('#txt_firstname').addClass('error_msg');
		}
		else if(field_name.length > 150)
		{
			msg = 'Name should not be more than 150 characters';
			$('#txt_firstname').addClass('error_msg');
		}else{
			$('#txt_firstname').removeClass('error_msg');
		}

		if(field_email == "")
		{
			msg = 'Please enter your email id';
			$('#txt_email').addClass('error_msg');
		}
		else if(field_email.length > 150)
		{
			msg = 'Email id should not be more than 150 characters';
			$('#txt_email').addClass('error_msg');
		}
		else if(echeck(field_email) == false)
		{
			msg = 'Invalid E-mail ID';
			$('#txt_email').addClass('error_msg');
		}else{
			$('#txt_email').removeClass('error_msg');
		}	
		
		if(field_country == "")
		{
			msg = 'Please select your country';
			$('#txt_country').addClass('error_msg');
		}
		else if(field_ccode == "")
		{
			msg = 'Please enter your country code';
			$('#txt_country').addClass('error_msg');
		}
		else if (!/^[\+]{1}[0-9 ]+$/.test(field_ccode))
		{
			msg = 'Country code should start with + and contains only digits';
			$('#txt_country').addClass('error_msg');
		}else{
			$('#txt_country').removeClass('error_msg');
		}	

		if(desiredunittype == "")
		{
			msg = 'Please select Budget';
			$('#desiredunittype').addClass('error_msg');
		}else{
			$('#desiredunittype').removeClass('error_msg');
		}

		if(field_mobile == "")
		{
			msg = 'Please enter your mobile number';
			$('#txt_mobile').addClass('error_msg');
		}
		else if (!re.test(field_mobile))
		{
			msg = 'Only digits are allowed in mobile number';
			$('#txt_mobile').addClass('error_msg');
		}
		/*else if(field_mobile.length < 5 || field_mobile.length > 15)
		{
			msg = 'Mobile number should be 5 or 15 digits';
		}*/
		else if(field_country == 'in')
		{
				var first_digit = parseInt(field_mobile.substring(0,1));
			if(field_mobile.length != 10)
			{
				msg = 'Mobile number should be 10 digits';
				$('#txt_mobile').addClass('error_msg');
			}else if (first_digit < 6 || first_digit > 9)
			{
				msg = 'Mobile number should start with 6/7/8/9';
				$('#txt_mobile').addClass('error_msg');
			}
		}
		else if(field_mobile.length < 5 || field_mobile.length > 15)
		{
			msg = 'Please Enter Valid number';
			$('#txt_mobile').addClass('error_msg');
		}else{
			$('#txt_mobile').removeClass('error_msg');
		}


		
		return msg;
	}

	/**
	 * DHTML email validation script. Courtesy of SmartWebby.com (http://www.smartwebby.com/dhtml/)
	*/
	var bugchars = '!#$^&*()+|}{[]?><~%:;/,=`"\'';

	function CharsInBag(s)
	{   var i;
		var lchar="";
			// Search through string's characters one by one.
			// If character is not in bag.
			for (i = 0; i < s.length; i++)
			{   
				// Check that current character isn't whitespace.
				var c = s.charAt(i);
				if(i>0)lchar=s.charAt(i-1)
				if (bugchars.indexOf(c) != -1 || (lchar=="." && c==".")) return false;
			}
			return true;
	}
	 
	function isInteger(s)
	{   var i;
		for (i = 0; i < s.length; i++)
		{   
			// Check that current character is not a number.
			var c = s.charAt(i);
			if ((c >= "0") && (c <= "9") && (c != ".")) return false;
		}
		// All characters are numbers.
		return true;
	}

	function echeck(str)
	{
			var at="@"
			var dot="."
			var lat=str.indexOf(at)
			var lstr=str.length
			var ldot=str.indexOf(dot)
			var lastdot=str.lastIndexOf(dot)
			
			if (str.indexOf(at)==-1){
			   return false
			}
			if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
			   return false
			}
			if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr || str.substring(lastdot+1)==""){
				return false
			}
			 
			 if (str.indexOf(at,(lat+1))!=-1){
				return false
			 }

			 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
				return false
			 }

			 if (str.indexOf(dot,(lat+2))==-1){
				return false
			 }
			
			 if (str.indexOf(" ")!=-1){
				return false
			 }
			if(CharsInBag(str)==false){
				return false
			 }
			 var arrEmail=str.split("@")
			 var ldot=arrEmail[1].indexOf(".")
			 if(isInteger(arrEmail[1].substring(ldot+1))==false){		    
				return false
			 } 
			 return true					
	}

	function validate_contactfrm_hillside()
	{
		var re = /^[0-9]+$/;
		var re_alpha = /^[A-Za-z ]+$/;
		var msg = '';
		var field_name = jQuery.trim($('#txt_firstname').val());
		var field_email = jQuery.trim($('#txt_email').val());
		var field_mobile = jQuery.trim($('#txt_mobile').val());	
		var field_ccode = jQuery.trim($('#txt_countrycode').val());	
		var field_country = $("#txt_country option:selected").val();
		
		//alert(field_name);
		if(field_name == "")
		{
			msg = 'Please enter your name';
			$('#txt_firstname').addClass('error_msg');
		}
		else if (!re_alpha.test(field_name))
		{
			msg = 'Name should contain only alphabets';
			$('#txt_firstname').addClass('error_msg');
		}
		else if(field_name.length > 150)
		{
			msg = 'Name should not be more than 150 characters';
			$('#txt_firstname').addClass('error_msg');
		}else{
			$('#txt_firstname').removeClass('error_msg');
		}

		if(field_email == "")
		{
			msg = 'Please enter your email id';
			$('#txt_email').addClass('error_msg');
		}
		else if(field_email.length > 150)
		{
			msg = 'Email id should not be more than 150 characters';
			$('#txt_email').addClass('error_msg');
		}
		else if(echeck(field_email) == false)
		{
			msg = 'Invalid E-mail ID';
			$('#txt_email').addClass('error_msg');
		}else{
			$('#txt_email').removeClass('error_msg');
		}	
		
		if(field_country == "")
		{
			msg = 'Please select your country';
			$('#txt_country').addClass('error_msg');
		}
		else if(field_ccode == "")
		{
			msg = 'Please enter your country code';
			$('#txt_country').addClass('error_msg');
		}
		else if (!/^[\+]{1}[0-9 ]+$/.test(field_ccode))
		{
			msg = 'Country code should start with + and contains only digits';
			$('#txt_country').addClass('error_msg');
		}else{
			$('#txt_country').removeClass('error_msg');
		}	

		if(field_mobile == "")
		{
			msg = 'Please enter your mobile number';
			$('#txt_mobile').addClass('error_msg');
		}
		else if (!re.test(field_mobile))
		{
			msg = 'Only digits are allowed in mobile number';
			$('#txt_mobile').addClass('error_msg');
		}
		/*else if(field_mobile.length < 5 || field_mobile.length > 15)
		{
			msg = 'Mobile number should be 5 or 15 digits';
		}*/
		else if(field_country == 'in')
		{
				var first_digit = parseInt(field_mobile.substring(0,1));
			if(field_mobile.length != 10)
			{
				msg = 'Mobile number should be 10 digits';
				$('#txt_mobile').addClass('error_msg');
			}else if (first_digit < 6 || first_digit > 9)
			{
				msg = 'Mobile number should start with 6/7/8/9';
				$('#txt_mobile').addClass('error_msg');
			}
		}
		else if(field_mobile.length < 5 || field_mobile.length > 15)
		{
			msg = 'Please Enter Valid number';
			$('#txt_mobile').addClass('error_msg');
		}else{
			$('#txt_mobile').removeClass('error_msg');
		}
		
		return msg;
	}
	/* SmartWebby.com Script ends here */