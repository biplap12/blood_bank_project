function check() {
	let massage = "";
	//for name validator
	let Name = document.getElementById("name").value;
	let pattern = /[^ a-z || A-Z]/i;
	let res = pattern.test(Name);
	if (Name == "" || res == true) {
		massage += "Name must be filled";
		document.getElementById("name").style = "border-color:red";
	} else {
		document.getElementById("name").style = "border-color:none";
	}
	// for Phone Number validated in 10 digit ph number
	let Phone = document.getElementById("phone").value;
	if (Phone.length == 10) {
		let phoneavlidator = /[0-9]/i;
		let phoneresult = phoneavlidator.test(Phone);
		if (phoneresult == false) {
			document.getElementById("phone").style = "border-color:red";
		} else {
			document.getElementById("phone").style = "border-color:none ";
		}
	} else {
		document.getElementById("phone").style = "border-color:red";
		massage += "<br> phonenumber must be in 10 digits";
	}
	// Nationality validiity
	let Nationality = document.getElementById("nationality").value;
	if (Nationality == false) {
		massage += "<br> Nationality must be Filled";
		document.getElementById("nationality").style = "border-color:red";
	} else {
		document.getElementById("nationality").style = "border-color:none";
	}
	//For Country validity
	let Country = document.getElementById("country").value;
	if (Country == false) {
		massage += "<br> Country must be Filled";
		document.getElementById("country").style = "border-color:red";
	} else {
		document.getElementById("country").style = "border-color:none";
	}
	// for City validator
	let City = document.getElementById("city").value;
	let Citypattern = /[^ a-z || A-Z]/i;
	let CityValidetor = Citypattern.test(City);
	if (City == "" || CityValidetor == true) {
		massage += "<br>City Name must be in Alphabet";
		document.getElementById("city").style = "border-color:red";
	} else {
		document.getElementById("city").style = "border-color:none";
	}
	//for street validator
	let Street = document.getElementById("street").value;
	let Streetpattern = /[^ a-z || A-Z]/i;
	let StreetValidetor = Streetpattern.test(Street);
	if (Street == "" || StreetValidetor == true) {
		massage += "<br>Street Name must be in Alphabet";
		document.getElementById("street").style = "border-color:red";
	} else {
		document.getElementById("street").style = "border-color:none";
	}
	//for ward no validitor
	let WardNo = document.getElementById("ward").value;
	if (WardNo == "" || WardNo < 1) {
		massage += "<br> Ward No. must be Valid ";
		document.getElementById("ward").style = "border-color:red";
	} else {
		document.getElementById("ward").style = "border-color:none";
	}
	//for bloodgroup validator
	let Bloodgroup = document.getElementById("BloodGroup").value;
	if (Bloodgroup == false) {
		massage += "<br> Blood Group must be Filled";
		document.getElementById("BloodGroup").style = "border-color:red";
	} else {
		document.getElementById("BloodGroup").style = "border-color:none";
	}
	// for gender validator
	let Male = document.getElementById("male").checked;
	let Female = document.getElementById("female").checked;
	if (Male == false && Female == false) {
		massage += "<br>gender must be filled";
	}
	//dob validation
	let dob = document.getElementById("dob").value;
	let dobObj = new Date(dob);
	let dobMili = dobObj.getTime();

	let nowMili = new Date().getTime();
	if (nowMili < dobMili && (dob = "")) {
		massage += "<br> date of birth is grater than now";
		document.getElementById("dob").style = "border-color:red";

	}
	// //for email validity
	// let Email = document.getElementById("email").value;
	// let emailvalidator = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/i;
	// let ResultEmail = emailvalidator.test(Email);
	// if (ResultEmail == false) {
	// 	massage += "<br> email must be in valid";
	// 	document.getElementById("email").style = "border-color:red";
	// } else {
	// 	document.getElementById("email").style = "border-color:none";
	// }

	// // for Password validity
	// let Password = document.getElementById("password").value;
	// if (Password.length >= 8) {
	// 	document.getElementById("password").style = "border-color:none";

	// 	let passwordPattern = /[A-Z]/m;
	// 	let Result = passwordPattern.test(Password);
	// 	if (Result == false) {
	// 		massage += "<br>Password must be in atleast one Upper case";
	// 		document.getElementById("password").style = "border-color:red";

	// 		let passwordSpecial = /\W/i;
	// 		let resultSpecialpw = passwordSpecial.test(Password);
	// 		if (resultSpecialpw == false) {
	// 			massage += "<br> password must be in atleast one special charecter";
	// 			document.getElementById("password").style = "border-color:red";

	// 			let passwordNumber = /[0-9]/i;
	// 			let resultNumberpw = passwordNumber.test(Password);
	// 			if (resultNumberpw == false) {
	// 				massage += "<br> password must be in atleast one number";
	// 				document.getElementById("password").style = "border-color:red";
	// 			} else {
	// 				document.getElementById("password").style = "border-color:red";
	// 			}
	// 		}
	// 	}
	// } else {
	// 	massage += "<br>password must be atleast 8 charecter";
	// 	document.getElementById("password").style = "border-color:red";
	// }
	// //for conform password validity
	// let ConfirmPassword = document.getElementById("confirmpassword").value;
	// if (Password != "") {
	// 	document.getElementById("confirmpassword").style = "border-color:red";

	// 	if (ConfirmPassword == Password) {
	// 		document.getElementById("confirmpassword").style = "border-color:none";
	// 	} else {
	// 		massage += "<br> Password not maatch";
	// 	}
	// } else {
	// 	massage += "<br> please enter password";
	// 	document.getElementById("confirmpassword").style = "border-color:red";
	// }

	// //for username validity
	// let UserName = document.getElementById("userName").value;
	// if (UserName.length > 6) {
	// 	let userNamePattern = /[a-z][A-Z]/m;
	// 	let UserNameResult = userNamePattern.test(UserName);
	// 	if (UserNameResult == false) {
	// 		let usernameNumber = /[0-9]/m;
	// 		let usernamenumberResult = usernameNumber.test(UserName);
	// 		if (usernamenumberResult == false) {
	// 			massage += "<br/> UserName must be in atleast one number";
	// 			document.getElementById("userName").style = "border-color:red";
	// 		} else {
	// 			document.getElementById("userName").style = "border-color:none";
	// 		}
	// 	}
	// } else {
	// 	massage += "<br/> username must be in 6 charecter";
	// 	document.getElementById("userName").style = "border-color:red";
	// }

	// for error massage display
	let msg = document.getElementById("errorMassage");
	if (massage != "") {
		msg.style.backgroundColor = "red";
		msgcontent = document.getElementsByClassName("thank_You_OR_Error_Massage");
		errormsg = msgcontent[0];
		errormsg.innerHTML = massage;

		document.getElementById("errorMassage").style.display = "block";
	} else {
		msg.style.display = "none";
		msgcontent = document.getElementsByClassName("thank_You_OR_Error_Massage");
		errormsg = msgcontent[0];
		errormsg.innerHTML = massage;
	}

	// alert(massage);
}

// for errormassage close button
function close_error() {
	document.getElementById("errorMassage").style.display = "none";
}

// function login() {
// 	let UserNameLogin = document.getElementById("UserName").value;
// 	if (UserNameLogin.length > 5) {
// 		let userNamePattern = /[a-z][A-Z]/m;
// 		let UserNameResult = userNamePattern.test(UserNameLogin);
// 		if (UserNameResult == false) {
// 			let usernameNumber = /[0-9]/m;
// 			let usernamenumberResult = usernameNumber.test(UserNameLogin);
// 			if (usernamenumberResult == false) {
// 				document.getElementById("UserName").style =
// 					"border-color:red;backgroundColor:white";
// 			} else {
// 				document.getElementById("UserName").style = "border-color:none";
// 			}
// 		}
// 	} else {
// 		document.getElementById("UserName").style = "border-color:red";
// 	}
// }
