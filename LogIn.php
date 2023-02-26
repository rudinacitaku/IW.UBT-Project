<?php
session_start();

include 'connect.php';

if (isset($_POST['signin'])){
	$FirstName= mysqli_real_escape_string($con,$_POST[`FirstName`]);
	$surname=mysqli_real_escape_string($con, $_POST[`surname`]);
	$email=mysqli_real_escape_string($con, $_POST[`email`]);
	$age=$_POST[`age`];
	$password=mysqli_real_escape_string($con,$_POST[`password`]);
	$user_type=$_POST[`user_type`];

	$select = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";

	$result=mysqli_query($con, $select);

	if(mysqli_num_rows($result)>0){
		$row=mysqli_fetch_array($result);

if ($row [`user_type`]=='admin'){ 
	$_SESSION [`admin_name`]=$row['name'];
	header ("location:adminhome.php");
}
else if ($row [`user_type`]=='user'){
	$_SESSION [`user_name`]=$row['name'];
	header ('location:userhome.php');
}
}else{
	$error[]= 'username or password incorrect';
}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>LogIn</title>
    <link rel="stylesheet" href="./li.css" />
  </head>
  <body>
		<form action='' method='POST'>
    <div id="Logini">
		<?php 
if (isset ($error)){
	foreach ($error as $error){
		echo '<span class="errori">'.$error.'</span>';
	}
}
		?>
      <h1>
        Already have an account?
        <br />
        Sign in.
      </h1>
      <p>Email or username:</p>
      <input type="text" placeholder="type something" id="useri" />
      <p>Password:</p>
      <input type="text" placeholder="type password" id="paswordi" />
      <br />
      <br />
      <button id="buton" name='signin'>Sign in</button>
    </div>
    <a href="signup.php">Don't have an account? Sign up now!</a>
</form>

  </body>
</html>
