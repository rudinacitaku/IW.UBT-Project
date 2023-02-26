<?php 
include ('partials/headery.php');
?>

<div class='main-content'>
<div class='border'>
	<h3>Users management</h3>
<br/>
<br/>
	<a href='../signup.php' class='btn-primary'> Add User/Admin</a>
<br/>
<br/>
<table class='tbl-full'>
	<tr>
	<th> Password </th>
	<th>ID </th>
	<th> Email</th>
	<th> First name</th>
	<th> Surname  </th>
	<th> Age </th>
</tr>
<?php 
		include "../connect.php";
		$sql="SELECT * FROM `users` WHERE 1";
		$result=mysqli_query($con, $sql);
		while ($row = mysqli_fetch_assoc($result)){
			?>
	<tr>
	<td><?php echo $row['password'] ?> </td>
	<td><?php echo $row ['id'] ?></td>
	<td><?php echo $row['email'] ?> </td>
	<td> <?php echo $row['FirstName'] ?></td>
	<td><?php echo $row['surname'] ?> </td>
	<td><?php echo $row['age'] ?> </td>
</tr>
<?php
		}
		?>
</table>

</div>
</div>
<?php
include ('partials/footer.php');
?>
