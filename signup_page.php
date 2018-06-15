<!DOCTYPE html>
<html>
<head>  	
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style> 

.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;

}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: black;
}

.fa-twitter {
  background: #55ACEE;
  color: black;
}

.fa-google {
  background: #dd4b39;
  color: black;
}

.fa-linkedin {
  background: #007bb5;
  color: black;
}

.fa-youtube {
  background: #bb0000;
  color: black;
}

.fa-instagram {
  background: #125688;
  color: black;



}
.button{
 background-color:transparent;
    color: black;
    padding: 14px 20px;
    border: solid none;
    cursor: pointer;
    width: 50%;
    transition: ease-in 1s;
}

.button:hover{
  background-color:tomato;
  color:#fff;
  border:none;
  width:102%;
  transition: ease-in 1s;



}
}
</style>
</head>
<body background="email.png" style="background-color:white; background-size: cover;">
	<div align="bottom">
<a href="https://www.facebook.com/" class="fa fa-facebook"></a>
<a href="https://www.twitter.com/" class="fa fa-twitter"></a>
<a href="https://www.google.com/" class="fa fa-google"></a>
<a href="https://www.linkedin.com/" class="fa fa-linkedin"></a>
<a href="https://www.youtube.com/" class="fa fa-youtube"></a>
<a href="https://www.instagram.com/" class="fa fa-instagram"></a>


 
<div style="background-color:rgba(252,251,251,0.63);margin-right:100px;margin-left: 900px;margin-top: 40px;padding-top: 50px;padding-bottom: 20px ">
  <div id="wrapper">
  <form  action="signup.php" method="GET">
  <center>
	<table>
		<thead>

		</thead>
	</head>
		<tr>
	<td> <label for="email"><b>Email</b></label><input type="email" placeholder="use your name" name="email" style=" width: 100%;
    padding: 12px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;" />
    <div id="email_error" class="val_error"></div></td>
</tr>
</div>
<div>
	<tr>
<td>  <label for="psw"><b>Password</b></label><input type="password" placeholder="set a password" class="password" name="password" style=" width: 100%;
    padding: 12px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;" />
    <div id="password_error" class="val_error"></div></td>
</tr>
</div>
<div>
<tr>
  <td> <label for="psw-repeat"><b>Repeat Password</b></label><input type="password" placeholder=" RE-type the secret" name="confPass" style="width: 100%;
    padding: 12px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;"/>
  <div id="password_error" class="val_error"></div>
</td>
</div>
<div>
  <tr>
    <td> <label>
      <input type="checkbox" checked="checked" name="rememberPass" style="margin-bottom:15px font-size:30px"><b style="color:black"> Remember me</b>
    </label>
  <div id="checkbox_error" class="val_error"></div>
</td> 
  </tr>
  <tr>
    <td> <p style="color: black"><i>By creating an account you agree to our</i> <a href="#" style="color:black">Terms & Privacy</a></p></td>
  </tr>
</div>
<tr>

	<td><input  type="submit" class="button" value="submit" name="submit"  action="second.html">
  </td>
<!--	<a href="" target="_blank"></a> check this laterS-->
</tr>

	</table>
</center>
</form>
<script>
  

  function validate(){
    var emailField = document.vform["email"];
    var passField = document.vform["password"];
    var email=document.vform["email"].value;
    var password=document.vform["password"].value;
    var confPass = document.vform["confPass"].value;
    // console.log(emailField);
    // console.log(email);
    // console.log(passField);
    // console.log(password);
    // console.log(confPass);
    var flag=true;
    if(email.length == 0)
    {
      alert('please enter email');
      // write your error showing logic here
      flag = false;
    }
    else if(password.length == 0)
    {
      alert('please enter password');
      // write your error showing logic here
      flag = false;
    }

    if(password !== confPass)
    {
      alert('password and confirm password do not match') ;
      // write your error showing logic here
      flag = false;
    }
    </script>
<!--<?php
// echo "string"; 
// if (isset($_GET["submit"])) {
  
  
//   $email = $_GET['email'];
//   $password = $_GET['password'];
//   $confPass = $_GET['confPass'];

//   if(!empty($email) &&!empty($password)&& !empty($confPass)){

//    $query="insert into user_table values('{$email}' , '{$password}')";
//    echo $query;
//     $con = mysqli_connect("localhost","root","","yashwant");


//       if (mysqli_connect_errno())
//       {
//          echo "Failed to connect to MySQL: " . mysqli_connect_error();
//         }

//         else{
          
//         }
//   }
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
// }
?>-->

</body>
</html>

