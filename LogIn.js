function LogIn() {
  var usernameRegex = / ^[A-Za-z0-9]{5,} $/;
  var useri = document.getElementById("useri").value;
  if (usernameRegex.test(useri)) {
    console.log("Username eshte ne rregull!");
  } else {
    console.log("Username nuk eshte ne rregull!");
  }
}
confirm("Keni shenuar te dhenat me sukses!");
