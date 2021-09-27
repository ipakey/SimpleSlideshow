<section class="main-overlay" aria-label="overlay container">

<main class="main-results" aria-label="flash card container">
    <?php
        $cards = array();


        for ($i=1; $i <= 12; $i++){
            $front = $cards[$i][0];
            $back = $cards[$i][1];
            $cards .="<div class='card' tabindex='0' aria-label='{$front} what is the right answer? '>
                        <div class='card-front'> {$front} 
                        </div>
                        <div class='card-back'  
                            aria-label='{$back} did you get it right? '>
                            {$back}
                        </div>
                       </div>";
            
        };
        
        echo $cards;
    ?>

</main>

<main class="main-overlay" aria-label="overlay container">

  <div  class='overlay-text'> 
    Click to Start
  </div>
  <div id='game-over-text' class='overlay-text'>
    GAME OVER!
    <span class='overlay-text-small '>Bad Luck: Click to Try Again</span>
    <span class='material-icons' >sentiment_dissatisfied</span>
  </div>
    <div id='victory-text' class='overlay-text'>
      VICTORY!
      <span class='overlay-text-small'>Well Done: Click to choose if you want to save this result</span><span class='material-icons' >sentiment_satisfied</span>
    </div>  
  </div>
</section>

<?php  
  $set = $_GET['set'];
 // echo' Set chosen : '.$set;
  $path = "./data/";
  $path.= $set;
  $path.= ".json";
 // echo $path;
  $order = [];
  $cards = json_decode(file_get_contents($path), true);
  $cards_json = json_encode($cards);
  //echo $cards_json;
  $lengthSet = count($cards);
  $i = 0;
  while($i < $lengthSet){
    array_push($order, $i);
    $i++;
  }
  shuffle($order);
 //var_dump($order);
 //var_dump($cards);
   



/*<!--***********************find data set string ***************-->*/

/*<!--************************* end data set selection ***********-->*/
?>
<!--************************* game page ************************-->
<main class="main-results">
  
<section class='main-results__container' aria-label="flash card container">
<div class='main-results__form'>

  <div class='game-info navigation__text'>
      Time <span id='time-remaining'>100</span>
      Score <span id='flips'>0</span>
      </div>
      
<!--********************** navigation arrows ***************-->
  <div class="navigation navigation__text">
    <a href="#" class="previous">&laquo;</a>
    <a href="#" class="previous round">&#8249;</a>
    <a class="navigation__text">Cards</a>
    <a href="#" class="next round"> &#8250; </a>
    <a href="#" class="next">&raquo;</a>
  </div>
<section>


<!--*****************end of next previous arrows ***************-->

<section class='main-results__form'>
<!-- *************** Card to display **************************-->
   <img class='card' name='slideq'>
  <!--<img class='invisible' name='slidea'> -->
  
  
 <!-- ****************Navigation Buttons **********************-->
  <button class='main-results__button' onclick="checkAnswer()" id="check">Check Answer</button>
    <button class='main-results__incorrect main-results__button-yes' id="yes">Got it Right <span class="material-icons">sentiment_satisfied_alt</span></button>
    <button class='main-results__incorrect main-results__button-no' id="no">Not this times <span class="material-icons">sentiment_dissatisfied</span></button>
    <button class='main-results__button' id="submit">'Next card '&#8250;</button>


</section>

</main>



<script src="simpleSlideShow.js"></script>

