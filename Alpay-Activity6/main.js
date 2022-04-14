var time = 5000;


var functionCalls = 0;

var level = 0;

function changeLocation(){ 

    var myTimeout = setTimeout(gameover, time);

    var randomPosition;
    
    randomPosition = Math.random()*300+"px";

    document.getElementById("gameButton").style.marginTop=randomPosition;

    randomPosition = Math.random()*300+"px";

    document.getElementById("gameButton").style.marginLeft=randomPosition; 

    functionCalls++;

    if(functionCalls==3)
    {
        level++;

        window.confirm("You are the winner! You can go to next level" +level);

        functionCalls = 0;

        time = time-1000;

        clearTimeout(myTimeout);

        return changeLocation;
    }
}

function gameover(){
    alert("Game Over");
}