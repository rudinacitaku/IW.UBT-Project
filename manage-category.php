<?php 
include ('partials/headery.php');
?>
<div class='main-content'>
<div class='border'>
	<h3>Category management</h3>
</div>
<br/>
<br/>
	<a href='add-category.php' class='btn-primary'> Add Category</a>
<br/>
<br/>
<table class='tbl-30'>
	<tr>
	<th> ID</th>
	<th>Title </th>
</tr>
<?php 
		include ('./config/connection.php');
		$sql3="SELECT * FROM `tbl_categories` WHERE 1";
		$result=mysqli_query($conn, $sql3);
		while ($row = mysqli_fetch_assoc($result)){
			?>
	<tr>
	<td><?php echo $row['id'] ?> </td>
	<td><?php echo $row['title'] ?> </td>
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