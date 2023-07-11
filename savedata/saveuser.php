<?php




// try{

// $name=$_POST['name'];
// $phone=$_POST['phone'];
// $email=$_POST['email'];
// $username=$_POST['username'];
// $password=$_POST['password'];
// $status="Pending";
// // connection()
// // select database
// // executing query

// include "../database/dbConnect.php";

// $q=" INSERT INTO `tbl_user`( `name` , `phone` , `email` , `username`, `password`, `status`) VALUES ('$name','$phone','$email','$username','$password','$status')";
// $result=mysqli_query($con,$q);


// sleep(2);
// // echo "success";
// // header("location:loginForm.php");
// }
// catch(Exception $e){
// 	throw $e;
// }


// *****************************




try{
	
	include "../database/dbConnect.php";
	$username=$_POST['username'];
	
	$query = "SELECT * FROM `tbl_user` WHERE username='$username'";
	$result2 = mysqli_query($con,$query);
	
  

		$name=$_POST['name'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$status="Pending";
		
		
		
		$q=" INSERT INTO `tbl_user`( `name` , `phone` , `email` , `username`, `password`, `status`) VALUES ('$name','$phone','$email','$username','$password','$status')";
		$result1=mysqli_query($con,$q);
		
		
		
	
		if($result1!=$result2) {
			echo "<span style='color:red'> Sorry User already exists .</span>";
			echo "<script>$('#submit').prop('disabled',true);</script>";
		  }else{
			echo "<span style='color:green'> User available for Registration .</span>";
			echo "<script>$('#submit').prop('disabled',false);</script>";
		  }
	
	
	
	


	

	
// $errors=array();

// $usernameQuery = "SELECT username from tbl_user WHERE username='$username'";
// $usernameQueryresult=mysqli_query($con,$usernameQuery);

// if(empty($name)){
// $errors['n']="Name Requires";
// }else if (mysqli_num_rows($usernameQueryresult)>0){
// $errors['n'] = "Username Exist";
// }
// if(empty($phone)){
// $errors['p']="Phone Requires";
// }
// if(empty($email)){
// $errors['e']="Email Requires";
// }

// if(empty($username)){
// $errors['u']="Username Requires";
// }

// if(empty($password)){
// $errors['pw']="Password Requires";
// }



// echo "success";
// header("location:loginForm.php");
}
catch(Exception $e){
throw $e;
}

?>