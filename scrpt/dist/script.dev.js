"use strict";

function nextCard() {
  console.log('next card button pressed');
  document.getElementById('nCard').addEventListener("click", function () {
    $cardIndex = $order[$0 + 1];
  });
}

function lastCard() {
  console.log('last card button pressed');
}

function thisCard() {}

function firstCard() {
  console.log('first card button pressed');
  $cardIndex = $order[0];
}

function prevCard() {
  console.log('previous card button pressed');
  document.getElementById('pCard').addEventListener("click", function () {
    $cardIndex = $order[$0 - 1];
  });
}

function chkAnswer() {
  console.log('check answer button pressed');
  $cardValue = "check value";
  document.getElementById('chkAnswer').addEventListener("click", flipCard());
}

function flipCard() {
  transform: translateY(-180);

  document.getElementById($cardValue).innerHTML = $order[$o]['answer'];
}

function correctAnswer() {
  console.log('correct answer button pressed');
  document.getElementById('pCard').addEventListener("click", function () {
    $score = $score + 1;
    $count = $count + 1;
    echo = "Well done one more point ";
  });
}

function wrongAnswer() {
  console.log('wrong answer button pressed');
  document.getElementById('incAnswer').addEventListener("click", function () {
    $score = $score;
    $count = $count + 1;
    echo = "Try again with the next question ";
  });
}

function endSet() {
  console.log('wrong answer button pressed');
}

function start() {
  document.getElementById('startGame').addEventListener('click', ready());
}

function ready() {
  // get path of correct set of chosen data
  $set = $_GET['set']; //echo' Set chosen : '.$set;

  $path = "./data/";
  $path += $set;
  $path += ".json";
  echo($path);
  $order = [];
  $cards = json_decode(file_get_contents($path), true);
  $cards_json = json_encode($cards);
  echo($cards_json);
  $lengthSet = count($cards);
  $i = 0;

  while ($i < $lengthSet) {
    array_push($order, $i);
    $i++;
  }

  shuffle($order);
  console.log($order);
  console.log($cards); // load overlays and cards and create Arrays of data

  var overlays = Array.from(document.getElementsByClassName('overlay-text'));
  console.log(overlays);
  var cards = Array.from($path);
  console.log(cards);
  var totalTime = document.getElementById('time-remaining');
  var game = new Flashcard_Set(100, cards);
  overlays.forEach(function (overlay) {
    overlay.addEventListener('click', function () {
      overlay.classList.remove('visible');
      game.startGame(); //Will start //game play when defined

      var audioController = new AudioController();
    });
  });
  cards.forEach(function (card) {
    card.addEventListener('click', function () {
      console.log();
      game.flipCard(card); //Will flip a card when defined			
    });
  });
}

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', start());
} else {
  start();
}