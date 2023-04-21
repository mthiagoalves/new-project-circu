function validateFirstName(){
	var obj1=document.getElementById("first_name");
	if(obj1==null || obj1.value=="" || obj1.value == "First Name*"){
		obj1.style.borderColor="#f41b3b";
		return false;
	}
	else {
			var vnome=obj1.value;
			var expregn=/^\D+$/;
			if (!(expregn.test(vnome))){
					obj1.style.borderColor="#f41b3b";
					return false;
			}
			else {
					obj1.style.borderColor="#777777";
					return true;
			}
		}
}

function validateCompany(){
	var obj1=document.getElementById("company");
		if(obj1==null || obj1.value=="" || obj1.value == "Company*"){
		obj1.style.borderColor="#f41b3b";
		return false;
	}
	else{
			obj1.style.borderColor="#777777";
			return true;	
		}
}


function validateLastName(){
	var obj1=document.getElementById("last_name");
	if(obj1==null || obj1.value=="" || obj1.value == "Last Name*"){
		obj1.style.borderColor="#f41b3b";
		return false;
	}
	else {
			var vnome=obj1.value;
			var expregn=/^\D+$/;
			if (!(expregn.test(vnome))){
					obj1.style.borderColor="#f41b3b";
					return false;
			}
			else {
					obj1.style.borderColor="#777777";
					return true;
			}
		}
}

function validateHowDidYou(){
	var obj1=document.getElementById("how_did_you");
		if(obj1==null || obj1.value==""){
		obj1.style.borderColor="#EC1B33";
		return false;
	}
	else{
			obj1.style.borderColor="#777777";
			return true;	
		}
}

function validateEmail() {
	var obj1=document.getElementById('email');
	if(obj1==null || obj1.value==""){
		obj1.style.borderColor="#f41b3b";
		return false;
		}
	else {
			var vemail=obj1.value;
			var expregn=/^[\w!#$%&'*+\/=?^`{|}~-]+(\.[\w!#$%&'*+\/=?^`{|}~-]+)*@(([\w-]+\.)+[A-Za-z]{2,6}|\[\d{1,3}(\.\d{1,3}){3}\])$/;
			if(!(expregn.test(vemail))) {
				obj1.style.borderColor="#f41b3b";
				return false;
			}
			else {
				obj1.style.borderColor="#777777";
				return true;
			}
		}
}

function validateMessage(){
	var obj1=document.getElementById("message");
		if(obj1==null || obj1.value==""){
		obj1.style.borderColor="#f41b3b";
		return false;
	}
	else{
			obj1.style.borderColor="#777777";
			return true;	
		}
}

function validateAddress(){
	var obj1=document.getElementById("address");
		if(obj1==null || obj1.value=="" || obj1.value == "Address*"){
		obj1.style.borderColor="#f41b3b";
		return false;
	}
	else{
		obj1.style.borderColor="#777777";
		return true;
	}
}


function validateCountry(){
	var obj1=document.getElementById("country");
		if(obj1==null || obj1.value=="" || obj1.value=="Country*"){
		obj1.style.borderColor="#f41b3b";
		return false;
	}
	else{
		var vcountry=obj1.value;
		var expregn=/^\D+$/;
		if (!(expregn.test(vcountry))){
			obj1.style.borderColor="#f41b3b";
			return false;
		}
		else {
			obj1.style.borderColor="#777777";
			return true;
		}
	}
}

function validatePhone(){
	var obj1=document.getElementById("phone");
	if(obj1==null || obj1.value=="" || obj1.value == "Phone*"){
		obj1.style.borderColor="#f41b3b";
		return false;
	}
	else {
			var vnome=obj1.value;
			var expregn='/^[0-9]+$/';
			if (!(expregn.test(vnome))){
					obj1.style.borderColor="#f41b3b";
					return false;
			}
			else {
					obj1.style.borderColor="#777777";
					return true;
			}
		}
}

function validate()
{
	var res=true;
	if(validateFirstName()){
		if(validateCompany()){
			if(validateLastName()){
				if(validateHowDidYou()){
					if(validateEmail()){
						if(validateMessage()){
							if(validateAddress()){
								if(validateCountry()){
								if(validatePhone()){
									document.getElementById('warning').innerHTML = '*Your request was submited!';	
							}
							else{
								res=false;
								document.getElementById('warning').innerHTML = '*Phone is not correctly written.';	
							}
						}
						else{
								res=false;
								document.getElementById('warning').innerHTML = '*Country is missing.';	
							}
						}
						else{
						res=false;
						document.getElementById('warning').innerHTML = '*Address is missing.';	
					}
				}
					else{
						res=false;
						document.getElementById('warning').innerHTML = '*Message is missing.';	
					}
				}	
				else{
					res=false;
					document.getElementById('warning').innerHTML = '*Email is not correctly written.';	
				}
			}
			else{
				res=false;
				document.getElementById('warning').innerHTML = '*Field is missing.';	
			}
		}
		else{
			res=false;
			document.getElementById('warning').innerHTML = '*Last Name is not correctly written.';	
		}
	}	
	else{
		res=false;
		document.getElementById('warning').innerHTML = '*Field missing';	
	}
}
else{
	res=false;
	document.getElementById('warning').innerHTML = '*Name is not correctly written!';	
}
return res; 
}
