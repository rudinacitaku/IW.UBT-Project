<?php 
include 'connect.php';
if (isset($_POST['SignUp'])){
	$FirstName=$_POST['FirstName'];
	$surname=$_POST['surname'];
	$email=$_POST['email'];
	$age=$_POST['age'];
	$password=$_POST['password'];
	$user_type=$_POST['user_type'];

	$select = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";

	$result=mysqli_query($con, $select);

	if(mysqli_num_rows($result)>0){
		$error[]="Useri vecse ekziston";
	}else{
$sql="INSERT INTO `users`(`password`, `id`, `email`, `FirstName`, `surname`, `age`, `user_type`) VALUES
 ('$password',NULL,'$email','$FirstName','$surname','$age','$user_type')";

mysqli_query($con, $sql);
header('location:LogIn.php');

	}
}


?>
<html>
  <head>
    <title>Sign Up</title>
		<link rel="stylesheet" href="./su.css">
  </head>
    <h1>Sign Up today!</h1>
    <div class="AboutUs">
      <h2>Why should you sign up?</h2>
      <p>
        Our website is a reliable sport newspaper with all of the latest sport
        news and trustful sources. If you want to be able to get the newest
        notifications and be the first to know about what's happening in
        football, don't hesitate to sign up now!
      </p>
    </div>
	<form action='' method="POST">

		<?php 
if (isset ($error)){
	foreach ($error as $error){
		echo '<span class="errori">'.$error.'</span>';
	}
}
		?>

    <h3>First name</h3>
    <input type="text" placeholder="type name" id="Fn" name='FirstName'/>
		<h3>Surname</h3>
		<input type="text" placeholder="type surname"id="Sn" name='surname'/>
    <h3>Age</h3>
    <input type="number" placeholder="type age" id="Ag" name='age'/>
    <h3>Email</h3>
    <input type="email" placeholder="type email" id="Em" name='email'/>
    <h3>Password</h2>
    <input type="password" placeholder="type password" id="Pw" name='password'/> 
		<h3> Select user type <h3>
			<select name="user_type">
				<option value="user"> User </option>
				<option value="admin"> Admin </option>
</select>
		<br />
	
		<br>
		<div >
		<button id="buton" class="Butoni" name='SignUp'>Sign up</button>
	</div>
		<br/>
		<div class="AlrAcc">
    <a class="login" href="LogIn.html">Already have an account ? Log in! </a>
		</form>
		</div>
    <script src="SignUp.js"></script>
  </body>
</html>
