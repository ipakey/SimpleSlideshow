"use strict";

var i = 0;
images = [];
var time = 1000;
var x = 0; //Image List

images = [['./images/landscape1.png', './images/landscape2.png'], ['./images/landscape2.png', './images/landscape3.png'], ['./images/landscape3.png', './images/landscape4.png'], ['./images/landscape4.png', './images/landscape5.png']]; // Change Image

function changeImg() {
  slideq = document.slideq.src = images[i][0];
  slidea = document.slidea.src = images[i][1];
  document.slidea.style.display = 'none';

  if (x < 10) {
    if (i < images.length - 1) {
      i++;
      x++;
    } else {
      i = 0;
      x++;
    } //setTimeout("changeImg()", time);

  }
}

function flipCard() {
  console.log('Fliping Card');
  document.slideq.style.transform = 'rotateY(-180deg)';
  setTimeout(function () {
    document.slideq.style.transform = 'rotateY(-180deg)';
  }, time * 10);
  displayFace();
}

function displayFace() {
  var x = document.getElementById("slidea");
  var y = document.getElementById("slideq");

  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";
  } else {
    x.style.display = "none";
    y.style.display = "block";
  }

  console.log('Displaying Card Face');
}

function resetCard() {
  console.log('Resetting Card');
  setTimeout(function () {}, time * 10);
  document.slidea.style.transform = 'rotateY(180deg)';
  document.slidea.style.display = 'none';
  slideq = document.slideq.display = 'block';
}

function checkAnswer() {
  flipCard();
  resetCard();
}

window.onload - changeImg();