<html>
    <head>
        <title>Contact Us</title> 
        <link rel="stylesheet" href="cu.css">
  </head>
   <body>

    <div class="container">
		<div class='slideri'>
	<image name='slide' width='500' height='300'>
		<div>
        <form action='' method='POST'>
      
          <label for="fname">First Name</label>
          <input type="text" class="fname" name="firstname" placeholder="Your name..">
      
          <label for="lname">Last Name</label>
          <input type="text" class="lname" name="lastname" placeholder="Your last name..">
      
          <label for="country">Country</label>
          <select class="country" name="country">
            <option value="australia">Australia</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
          </select>

          <label for="subject">Subject</label>
          <textarea class="subject" name="subject" placeholder="Write something..." style="height:200px"></textarea>
      
          <input type="submit" value="Submit" onclick="alert('Jane shenuar te dhenat me sukses')">
        </form>
      </div>
			
   </body>
	 
	 <script src="contactus.js"></script>
</html>