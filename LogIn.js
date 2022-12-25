function LogIn() {
  var useri = document.getElementById("useri").value;
  var paswordi = document.getElementById("paswordi").value;
  var paswordRegex = /^[a-zA-Z0-9]+ {8,}$/;
  if (paswordRegex.test(paswordi)) {
    confirm("Your password has been sent successfully!");
  } else {
    confirm("Password is not valid!");
  }
  var usernameRegex =
    /^[a-zA-Z0-9.! #$%&'*+/=? ^_`{|}~-]+@[a-zA-Z0-9-]+(?:\. [a-zA-Z0-9-]+)*$/;
  if (usernameRegex.test(useri)) {
    confirm("Username has been sent successfully!");
  } else {
    confirm("Username is not valid!");
  }
}
