function SignUp() {
  var firstn = document.getElementById("Fn").value;
  var surn = document.getElementById("Sn").value;
  var em = document.getElementById("Em").value;
  var pw = document.getElementById("Pw").value;

  if (firstn || surn || em || pw == "") {
    confirm("Your sign up is not valid!");
  } else {
    confirm("Your signup is valid!");
  }
}
