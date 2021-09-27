var i=0;
images = [];

var time = 1000;
var x = 0;


//Image List
images = [
    ['./images/landscape1.png','./images/landscape2.png'],
    ['./images/landscape2.png','./images/landscape3.png'],
    ['./images/landscape3.png','./images/landscape4.png'],
    ['./images/landscape4.png','./images/landscape5.png']
];  


// Change Image
function changeImg(){
    slideq = document.slideq.src=images[i][0];
    slidea = images[i][1];
    if(x < 10){
        if(i < images.length - 1){
            i++;
            x++;
        }
        else{
            i=0;
            x++;
        }
        //setTimeout("changeImg()", time);
    }
}



function resetCard(){
    document.slideq.classList.remove('card-back');
}

function checkAnswer(){
    document.slideq.classList.add('card-back');
    document.slideq = slidea;
    setTimeout("checkAnswer()", time);
    resetCard();

}

window.onload - changeImg();