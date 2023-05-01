    function result(){
    var score=0;
    if(document.getElementById('correct1').checked)
    {
        score++;
    }
    if(document.getElementById('correct2').checked)
    {
        score++;
    }
    if(document.getElementById('correct3').checked)
    {
        score++;
    }
    if(document.getElementById('correct4').checked)
    {
        score++;
    }
    if(document.getElementById('correct5').checked)
    {
        score++;
    }
    if(document.getElementById('correct6').checked)
    {
        score++;
    }
    if(document.getElementById('correct7').checked)
    {
        score++;
    }
    var display=document.getElementById("display")
    display.innerHTML="You answered correctly to "+parseInt(score,10)+" Questions";
}