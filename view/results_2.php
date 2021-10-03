<!--************************* overlays ************************-->
<section class="main-overlay" aria-label="overlay container">

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



<!--************************* game page ************************-->
<main class="main-results" aria-label="flash card container">


<section class='main-results__container' >
<div class='main-results__form'>

  <div class='game-info'>
      Time <span id='time-remaining'>100</span>
      Score <span id='flips'>0</span>
  </div>
 

<!--********************** results buttons ***************-->
  <div class="game-buttons">
  <button class="main-results__button  button__go" id='chkAnswer'>Check Answer? </button>
  <button class="main-results__button button__correct" id='corAnswer'>Got  it  right  <span class="material-icons title-break"> sentiment_satisfied_alt</span></button>
  <button class="main-results__button button__incorrect" id='incAnswer'>Not this time<span class="material-icons title-break">sentiment_dissatisfied </span></button>
  </div>
     
<!--********************** navigation arrows ***************-->
  <div class="navigation">
    <a href="#" class="results-navigation__arrow" id='fCard'>&laquo;</a>
    <a href="#" class="results-navigation__arrow" id='pCard'>&#8249;</a>
    <a class="results-navigation__text">Cards</a>
    <a href="#" class="results-navigation__arrow" id='nCard'> &#8250; </a>
    <a class="results-navigation__arrow" id='lCard'>&raquo;</a>
  </div>
<section>


<!--*****************end of next previous arrows ***************-->



<section class='main-results__form'>
  
    <div class='card'>
      <div class='card-back card-face'>
          <img class='corner corner-top-left'
          src='./Corners/corner_black.png'>
          
          <img class='corner corner-top-right'
          src='./Corners/corner_black.png'>
          
          <img class='corner corner-bottom-left'
          src='./Corners/corner_black.png'>
          
          <img class='corner corner-bottom-right'
          src='./Corners/corner_black.png'>
                
          <a id="cardValue"></a>
        
            </div>
            
            
            <div class='card-front card-face'>
                <img class='corner corner-top-left'
                src='./Corners/corner_black.png'>
                
                <img class='corner corner-top-right'
                src='./Corners/corner_black.png'>
                
                <img class='corner corner-bottom-left'
                src='./Corners/corner_black.png'>
                
                <img class='corner corner-bottom-right'
                src='./Corners/corner_black.png'>
                
                <img class='card-value' alt='eight'
                src='./Images/logo_trans.png'>   
            </div>            
        </div>

</section>

<!--***************** End of Main Card Display ***************-->


</main>
<script src="./scrpt/script.js"></script>


