var i = 0;
var imazhet = [];
var time = 3000;

imazhet[0] = "./Cristiano-Ronaldo-ballondor.jpg";
imazhet[1] = "./jpn.jpg";
imazhet[2] = "./swiss.jpg";
imazhet[3] = "./tun.jpg";

function slideri() {
  document.slide.src = imazhet[i];
  if (i < imazhet.length) {
    i++;
  } else {
    i = 0;
  }
  setTimeout("slideri()", time);
}
window.onload = slideri;
