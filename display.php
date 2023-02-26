<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div class='container'>
		<a href='signup (2).php' class='Butoni'> Add new User </a>
</div>
<table class="table">
  <thead>
    <tr>
		<th scope="col">password</th>
			<th scope="col">email</th>
      <th scope="col">FirstName</th>
      <th scope="col">surname</th>
      <th scope="col">age`</th>
    </tr>
  </thead>
  <tbody>
		<?php 
		include "connect.php";
		$sql="SELECT * FROM `users` WHERE 1";
		$result=mysqli_query($con, $sql);
		while ($row = mysqli_fetch_assoc($result)){
			?>
<tr>
<td><?php echo $row['password'] ?></td>
<td><?php echo $row['email'] ?></td>
<td?><?php echo $row['FirstName'] ?></td>
<td><?php echo $row['surname'] ?></td>
<td><?php echo $row['age'] ?></td>
    </tr> 
		<?php
		}
		?>
  </tbody>
</table>
</body>
</html>