function ContactUs() {
  var firstn = document.getElementById("fname").value;
  var surn = document.getElementById("lname").value;
  var subject = document.getElementById("subject").value;

  if (firstn || surn || subject == "") {
    confirm("Your message has been sent!");
  } else {
    confirm(
      "Your message has not been sent! Check if you've filled all spaces."
    );
  }
}
ContactUs();
