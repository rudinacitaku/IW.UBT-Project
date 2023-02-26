<?php
include ('./config/connection.php');
$sql="SELECT * FROM `tbl_articles` WHERE 1";
$all_product=$conn->query($sql);
?>


<html>
  <head>
    <title>Online Newspaper</title>
    <link rel="stylesheet" href="index.css">
  </head>
  <body>
	<h1> Admin Panel </h1>

<div class='headery text-center'>
	<div class='border'>
		<ul> 
			<li><a href="index.php"> Home </a> </li>
			<li><a href="manage-admin.php"> Admin</a> </li>
			<li><a href="manage-category.php"> Category </a> </li>
			<li><a href="manage-news.php"> News </a> </li>
		</ul>
</div>
</div>
 
<div class="grid-collumn">
<?php 
		while ($row=mysqli_fetch_assoc($all_product)){
			
		?>
	<div class="head">
		<h3><?php echo $row['title'];?></h3>
      <p> <?php echo $row ['description'];?>
      </p>
      <img src="<?php echo $row ['image_name'];?>"> 
			<?php
		}
		?>
    </div>

<a href='logout.php'>Log out</a>
		

  </body>
</html>



<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Online Newspaper</title>
	<link rel="stylesheet" href="index.css">
</head>
<body>
	<h1> Admin Panel </h1>

	<div class='headery text-center'>
		<div class='border'>
			<ul> 
				<li><a href="index.php"> Home </a> </li>
				<li><a href="manage-admin.php"> Admin</a> </li>
				<li><a href="manage-category.php"> Category </a> </li>
				<li><a href="manage-news.php"> News </a> </li>
				<li><a href="manage-contacts.php"> Contact Us </a> </li>
			</ul>

		<p>	header</p>
</div>
</div>
<div class='main-content'>
<div class='border'>
<body>
 
<div class="grid-collumn">
<php 
		while ($row=mysqli_fetch_assoc($all_product)){
			
		?>
	<div class="head">
		<h3><php echo $row['title'];?></h3>
      <p> <php echo $row ['description'];?>
      </p>
      <img src="<php echo $row ['image_name'];?>"> 
			<php
		}
		?>
    </div>

</body>
</html> -->