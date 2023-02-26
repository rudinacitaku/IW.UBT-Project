<?php 
session_start();
include ('partials/headery.php');
include ('./config/connection.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Category</title>
</head>
<body>

<div class='main-content'>
<div class='border'>
	<h3> Add Category</h3>
<br/>
<br/>
<?php
$id=$_GET['id'];
$sql="SELECT * FROM `tbl_categories` WHERE 1";
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);
?>

<form action='' method="POST">
<table class='tbl-full'>
	<tr>
	<td> <h3?> Title: </h3> </td>
	<td> <input type ='text' name='title' value="<?php echo $row ['title']?>"> </td>
</tr>
<td colspan="2">
	<input type='submit' name='submit' value= "Add Category" class='btn-primary'>
</form>
<?php
if(isset($_POST['submit']))
{
	$title=$_POST['title'];
	
	$sql= "INSERT INTO `tbl_categories`(`title`) 
	VALUES ('$title')";
	
	$res=mysqli_query($conn, $sql);
	if ($res==true){
		header('location:manage-category.php');
	}else{
		echo 'Error!';
		header ('location:add-category.php');
	}
}
	?>
</div>
</div>

<?php
include ('partials/footer.php');
?>