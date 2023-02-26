<?php 
include ('partials/headery.php');

?>
<div class='main-content'>
<div class='border'>
	<h3>News management</h3>
</div>
<br/>
<br/>
	<a href='add-news.php' class='btn-primary'> Add News</a>
<br/>
<br/>
<table class='tbl-30'>
	<tr>
	<th> <h3> ID </h3></th>
	<th> <h3>Title</h3> </th>
	<th> <h3> Description </h3></th>
	<th> <h3>Image</h3> </th>
</tr>
<?php 
		include ('./config/connection.php');
		$sql3="SELECT * FROM `tbl_articles` WHERE 1";
		$result=mysqli_query($conn, $sql3);
		while ($row = mysqli_fetch_assoc($result)){
			?>
	<tr>
	<td><?php echo $row['id'] ?> </td>
	<td><?php echo $row['title'] ?> </td>
	<td><?php echo $row['description'] ?> </td>
	<td><?php echo $row['image_name'] ?> </td>
		</tr>
		<?php
		}
		?>
</tr>

</table>
</div>
</div>
<?php
include ('partials/footer.php');
?>