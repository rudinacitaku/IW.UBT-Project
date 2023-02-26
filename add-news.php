<?php 
include ('partials/headery.php');
include ('./config/connection.php');
?>
<div class='main-content'>
<div class='border'>
	<h3>News management</h3>
</div>
<br/>
<br/>
<form action='' method="POST" enctype='multipart/form-data'>
	<tr>
<td><h3>Title</h3> </td>
	<td> <input type='text'name='title'> </td>
</tr>
<tr>
	<td><h3>Description</h3></td>
	<td> <input type='text' cols='30' rows='5' name='description'>  </td>
</tr>
<tr>
	<td><h3>Image</h3></td>
	<td><input type='file' name='image'> </td>
</tr>
<tr>
<td colspan="2">
	<input type='submit' name='submit' value= "Add Category" class='btn-primary'>
</td>
</tr>
</form>
<?php
if(isset($_POST['submit'])){
	$title=$_POST['title'];
	$description=$_POST['description'];

	if (isset($_FILES['image']['name'])){
		$image_name=$_FILES['image']['name'];

		if($image_name!=""){
			$ext=end(explode('.',$image_name));
		$image_name='News'.rand(0000,9999).".".$ext;

		$src=$_FILES ['image']['tap_name'];

		$dst="../images/newspics".$image_name;

		$upload=move_uploaded_file($src, $dst);
		if($upload==false){
			echo "error uploading file";
		}
		}	

$select = "SELECT * FROM `tbl_articles` WHERE `title`='$title' AND `description`='$description'";

	$result=mysqli_query($conn, $select);

	if(mysqli_num_rows($result)>0){
		$error[]="Artikulli ekziston.";
	}else{
		$sql2="INSERT INTO `tbl_articles`(`id`, `title`, `description`, `image_name`) VALUES (NULL,'[$title]','[$description]','[$image_name]')";
		mysqli_query($conn, $sql2);
		header('location:manage-news.php');
	}
}
	}


?>
</div>
</div>
<?php
include ('partials/footer.php');
?>