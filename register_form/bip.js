function check() {
	let massage = "";
	//for name validator
	let Name = document.getElementById("name").value;
	let pattern = /[^ a-z || A-Z]/i;
	let res = pattern.test(Name);
	if (Name == "" || res == true) {
		massage += "Name must be filled";
		document.getElementById("name").style="border-color:red";
	}else{
		document.getElementById("name").style="border-color:black";
	}












	// for Phone Number validated in 10 digit ph number
	let Phone = document.getElementById("phone").value;
	if (Phone.length < 10) {
		massage += "<br> phonenumber must be in 10 digits";
		document.getElementById("phone").style = "border-color:red";
	} else {
		document.getElementById("phone").style = "border-color:black";
	}
	let Nationality = document.getElementById("nationality").value;
	if (Nationality == false) {
		massage += "<br> Nationality must be Filled";
		document.getElementById("nationality").style = "border-color:red";
	}
	let Country = document.getElementById("country").value;
	if (Country == false) {
		massage += "<br> Country must be Filled";
		document.getElementById("country").style = "border-color:red";
	}else{
		document.getElementById("country").style = "border-color:black";

	}
	let City = document.getElementById("city").value;
	let Citypattern = /[^ a-z || A-Z]/i;
	let CityValidetor = Citypattern.test(City);
	if (City == "" || CityValidetor == true) {
		massage += "<br>City Name must be in Alphabet";
		document.getElementById("city").style = "border-color:red";
	} else {
		massage += "<br>";
		document.getElementById("city").style = "border-color:black";

	}
	let state = document.getElementById("state").value;
	let statepattern = /[^ a-z || A-Z]/i;
	let stateValidetor = statepattern.test(state);
	if (state == "" || stateValidetor == true) {
		massage += "<br>state Name must be in Alphabet";
		document.getElementById("state").style = "border-color:red";
	} else {
		massage += "<br>";
		document.getElementById("state").style = "border-color:black";

	}
	let WardNo = document.getElementById("ward").value;
	let wardpattern = /[^ 0-9]/i;
	if (WardNo == "" || WardNo < 1) {
		massage += "<br> Ward No. must be Valid ";
		document.getElementById("ward").style = "border-color:red";
	}else{
		document.getElementById("ward").style = "border-color:black";

	}

	let Male = document.getElementById("male").checked;
	let Female = document.getElementById("female").checked;
	if (Male == false && Female == false) {
		massage += "<br>gender must be filled";
		document.getElementById("male").style = "border-color:red";
		document.getElementById("female").style = "border-color:red";

	}
	else{
		document.getElementById("male").style = "border-color:black";
		document.getElementById("female").style = "border-color:black";

	}

	let Bloodgroup = document.getElementById("BloodGroup").value;
	if (Bloodgroup == false) {
		massage += "<br> Blood Group must be Filled";
		document.getElementById("BloodGroup").style = "border-color:red";
	}else{
		document.getElementById("BloodGroup").style = "border-color:black";

	}
	// let BirthDate = document.getElementById("date").value;
	// if (BirthDate == "" || BirthDate.date(1/1/2005)) {
	// 	massage += "<br>Age is must be greater than 18  ";
	// 	document.getElementById("date").style = "border-color:red";

	// } else {
	// 	massage += "\n";
	// 	document.getElementById("date").style = "border-color:black";

	// }

	// const validateButton = document.getElementById('validateButton');
	// validateButton.addEventListener('click', function() {
	  const birthdateInput = document.getElementById('date');
	  const birthdate = new Date(birthdateInput.value);
	  const currentDate = new Date();
  
	  const ageInMilliseconds = currentDate - birthdate;
	  const ageInYears = ageInMilliseconds / (1000 * 60 * 60 * 24 * 365);
  
	  if (ageInYears < 18) {
		alert('You must be at least 18 years old.');
	  } else {
		alert('Age is valid.');
	  }
	


	let msg = document.getElementById("errorMassage");
	if (massage != "Error!!!") {
		msg.style.backgroundColor = "#d93b11";
		msgcontent = document.getElementsByClassName("thank_You_OR_Error_Massage");
		errormsg = msgcontent[0];
		errormsg.innerHTML = massage;

		document.getElementById("errorMassage").style.display = "block";
	}

	// alert(massage);
}

function close_error() {
	document.getElementById("errorMassage").style.display = "none";
}





















// ********************************************************************



	// let Email = document.getElementById("email").value;
	// let emailvalidator = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/i;
	// let ResultEmail = emailvalidator.test(Email);
	// if (ResultEmail == false) {
	// 	massage += "<br> email must be in valid";
	// }

	// let Password = document.getElementById("password").value;
	// if (Password.length >= 8) {
	// 	massage += "<br>password is good ";
	// 	let passwordPattern = /[A-Z]/m;
	// 	let Result = passwordPattern.test(Password);
	// 	if (Result == false) {
	// 		massage += "<br>Password must be in atleast one Upper case";
	// 		let passwordSpecial = /\W/i;
	// 		let resultSpecialpw = passwordSpecial.test(Password);
	// 		if (resultSpecialpw == false) {
	// 			massage += "<br> password must be in atleast one special charecter";
	// 			let passwordNumber = /[0-9]/i;
	// 			let resultNumberpw = passwordNumber.test(Password);
	// 			if (resultNumberpw == false) {
	// 				massage += "<br> password must be in atleast one number";
	// 			}
	// 		}
	// 	}
	// } else {
	// 	massage += "<br>password must be atleast 8 charecter";
	// }
	// let ConfirmPassword = document.getElementById("confirmpassword").value;
	// if (Password != "") {
	// 	if (ConfirmPassword == Password) {
	// 		massage += "<br> Passwort match";
	// 	} else {
	// 		massage += "<br> Password not maatch";
	// 	}
	// } else {
	// 	massage += "<br> please enter password";
	// }
	// let UserName = document.getElementById("userName").value;
	// if (UserName.length > 6) {
	// 	let userNamePattern = /[a-z][A-Z]/m;
	// 	let UserNameResult = userNamePattern.test(UserName);
	// 	if (UserNameResult == false) {
	// 		let usernameNumber = /[0-9]/m;
	// 		let usernamenumberResult = usernameNumber.test(UserName);
	// 		if (usernamenumberResult == false) {
	// 			massage += "<br/> UserName must be in atleast one number";
	// 		}
	// 	}
	// } else {
	// 	massage += "<br/> username must be in 6 charecter";
	// }