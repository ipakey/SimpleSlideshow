function nextCard(){
    console.log('next card button pressed');
    document.getElementById('nCard').addEventListener("click",function(){
        $cardIndex=$order[$0+1];
    });
}

function lastCard(){
    console.log('last card button pressed');
}

function thisCard(){

}

function firstCard(){
    console.log('first card button pressed');
    $cardIndex = $order[0];
    

}

function prevCard(){
    console.log('previous card button pressed');
    document.getElementById('pCard').addEventListener("click",function(){
        $cardIndex=$order[$0-1];
    });
}

function chkAnswer(){
    console.log('check answer button pressed');
    $cardValue = "check value";
    document.getElementById('chkAnswer').addEventListener("click",flipCard());
}

function flipCard(){
    
    transform: translateY(-180);
    document.getElementById($cardValue).innerHTML= $order[$o]['answer'];
}

function correctAnswer(){
    console.log('correct answer button pressed');
    document.getElementById('pCard').addEventListener("click",function(){
        $score = $score+1;
        $count = $count+1;
        echo = "Well done one more point ";
    });
}

function wrongAnswer(){
    console.log('wrong answer button pressed');
    document.getElementById('incAnswer').addEventListener("click",function(){
        $score = $score;
        $count = $count+1;
        echo = "Try again with the next question ";
    });
}

