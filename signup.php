<?php

if (isset($_GET["submit"])) {
	
	// echo "string";
	$email = $_GET['email'];
	$password = $_GET['password'];
	$confPass = $_GET['confPass'];
	// echo "ghgjkjhjiukj";

	if(!empty($email) &&!empty($password)&& !empty($confPass)){

		$query="insert into user_table values('$email' , '$password')";
		$con = mysqli_connect("localhost","root","","yashwant");


		if (mysqli_connect_errno())
  		{
 				 // echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		}

		else{
			echo $query;
			 if(mysqli_query($con,$query)){

			 	// echo"Successfully registered";
			 }
			 else{
			 	// echo"Error!";
			 }	
  		}
  		$email="harshal@1.comaaa";
  $password="123";
  		$sql="DELETE FROM yashwant where email=$email";

  		// print_r($con);
  		// $result = $con->query($query);
	}
	/*if(strcmp($password, $confPass))
	{
		$query ="Select * from user_table where email = $email and password = $password";
		//$mysqli_connect();
		//mysqli_query($connection, $query);


		if($result){

			header("/localhost/social/")
		}
	}
	else{
		echo"Error!";
	}*/
}
header('Location: login.html.html');
?>