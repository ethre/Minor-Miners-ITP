/* -------------------------------- 

Game Logic

-------------------------------- */
//Global Variables
//initiate variables that count score and number of upgrades 
//variables purposely commented out, retrieving from db in index then sent to here.
//var score = 1;
var incr1 = 1;
//var b = 1;
//var c = 1;
//var d = 1;
var e = 1;
//var curs1Own = 0;
//var curs2Own = 0;
//var curs3Own = 0;
var up1 = 10;
var up2 = 50;
var up3 = 100;
var upCursor1 = 100;
var upCursor2 = 200;
var upCursor3 = 300;
var done;
var done2;
var check;
var clone;
var roundNum=1;

//this function will increase score by 1 when "increase" function is called(onclick)
function increase(){
    var inc = document.getElementById("Test").innerHTML = score;
    score = score + incr1;
}

//Manual Upgrades
function cursorUpgrade1(){
    if(score>=upCursor1){
        score-=upCursor1;
        document.getElementById("Test").innerHTML = score;
        clickNum = clickNum+1;
        incr1 = incr1+1;
        curs1Own++;
        upCursor1=upCursor1*2;
        document.getElementById("curs1Own").innerHTML = "Owned: " + curs1Own;
        document.getElementById("cps").innerHTML = "CPS: " + clickNum;
        document.getElementById("curs1").innerHTML = "Cost: " + upCursor1;
        
        //Purchase +1 Effect
        var chaChing = "Upgraded";
        
        $(".cursorUpgrade1").one("click",function(e) {
            var obj = $("#clone2").clone();
            $("body").append(obj);
            obj.html("+"+chaChing);
        
            obj.css('position','absolute');
        	obj.offset({left: e.pageX-10, top: e.pageY-25});
            
            obj.animate({"top": "-=40px"}, 500, "linear");
            obj.animate({"opacity": 0, "top": "-=40px"}, 500, "linear", function() {
        		$(this).remove();
                
            });
        });
    }
}

function cursorUpgrade2(){
    if(score>=upCursor2){
        score-=upCursor2;
        document.getElementById("Test").innerHTML = score;
        clickNum = clickNum+5;
        incr1 = incr1+5;
        curs2Own++;
        upCursor2=upCursor2*2;
        document.getElementById("curs2Own").innerHTML = "Owned: " + curs2Own;
        document.getElementById("cps").innerHTML = "CPS: " + clickNum;
        document.getElementById("curs2").innerHTML = "Cost: " + upCursor2;
        
        //Purchase +1 Effect
        var chaChing = "Upgraded";
        
        $(".cursorUpgrade2").one("click",function(e) {
            var obj = $("#clone2").clone();
            $("body").append(obj);
            obj.html("+"+chaChing);
        
            obj.css('position','absolute');
        	obj.offset({left: e.pageX-10, top: e.pageY-25});
            
            obj.animate({"top": "-=40px"}, 500, "linear");
            obj.animate({"opacity": 0, "top": "-=40px"}, 500, "linear", function() {
        		$(this).remove();
                
            });
        });
    }
}

function cursorUpgrade3(){
    if(score>=upCursor3){
        score-=upCursor3;
        document.getElementById("Test").innerHTML = score;
        clickNum = clickNum+10;
        incr1 = incr1+10;
        curs3Own++;
        upCursor3=upCursor3*2;
        document.getElementById("curs3Own").innerHTML = "Owned: " + curs3Own;
        document.getElementById("cps").innerHTML = "CPS: " + clickNum;
        document.getElementById("curs3").innerHTML = "Cost: " + upCursor3;
        
        //Purchase +1 Effect
        var chaChing = "Upgraded";
        
        $(".cursorUpgrade3").one("click",function(e) {
            var obj = $("#clone2").clone();
            $("body").append(obj);
            obj.html("+"+chaChing);
        
            obj.css('position','absolute');
        	obj.offset({left: e.pageX-10, top: e.pageY-25});
            
            obj.animate({"top": "-=40px"}, 500, "linear");
            obj.animate({"opacity": 0, "top": "-=40px"}, 500, "linear", function() {
        		$(this).remove();
                
            });
        });
    }
}

/* Achievements */

/*
function achievement1(){
    if(a==11){
        if(!done){
            alert("Achievement");
            done = true;
        }   
    }
}


function achievement2(){
    if(a==21){
        if(!done2){
            alert("Achievement");
            done2 = true;
        }
    }
}
*/
// Auto Upgrades
function upg1time() {
    if(score>=up1){
        setInterval(upg1, 1000);
        var amt = document.getElementById("mini").innerHTML = "Owned: " + b;
        b++;
        score-=up1;
        document.getElementById("Test").innerHTML = score;
        up1=up1*2;
        document.getElementById("c1").innerHTML = "Cost: " + up1;

        
        //Purchase +1 Effect
        var chaChing = "Purchased";
        
        $(".upgrade1").one("click",function(e) {
            var obj = $("#clone1").clone();
            $("body").append(obj);
            obj.html("+"+chaChing);
        
            obj.css('position','absolute');
        	obj.offset({left: e.pageX-10, top: e.pageY-25});
            
            obj.animate({"top": "-=40px"}, 500, "linear");
            obj.animate({"opacity": 0, "top": "-=40px"}, 500, "linear", function() {
        		$(this).remove();
                
            });
        });
    }
}

function upg2time() {
    if(score>=up2){
        setInterval(upg2, 500);
        var amt = document.getElementById("good").innerHTML = "Owned: " + c;
        c++;
        score-=up2;
        document.getElementById("Test").innerHTML = score;
        up2 = up2*2;
        document.getElementById("c2").innerHTML = "Cost: " + up2;
        
                //Purchase +1 Effect
        var chaChing = "Purchased";
        
        $(".upgrade2").one("click",function(e) {
            var obj = $("#clone1").clone();
            $("body").append(obj);
            obj.html("+"+chaChing);
        
            obj.css('position','absolute');
        	obj.offset({left: e.pageX-10, top: e.pageY-25});
            
            obj.animate({"top": "-=40px"}, 500, "linear");
            obj.animate({"opacity": 0, "top": "-=40px"}, 500, "linear", function() {
        		$(this).remove();
                
            });
        });
    }
}
function upg3time() {
    if(score>=up3){
        setInterval(upg3, 100);
        var amt = document.getElementById("super").innerHTML = "Owned: " + d;
        d++;
        score-=up3;
        document.getElementById("Test").innerHTML = score;
        up3 = up3*2;
        document.getElementById("c3").innerHTML = "Cost: " + up3;
        
        
        var chaChing = "Purchased";
        
        $(".upgrade3").one("click",function(e) {
            var obj = $("#clone1").clone();
            $("body").append(obj);
            obj.html("+"+chaChing);
        
            obj.css('position','absolute');
        	obj.offset({left: e.pageX-10, top: e.pageY-25});
            
            obj.animate({"top": "-=40px"}, 500, "linear");
            obj.animate({"opacity": 0, "top": "-=40px"}, 500, "linear", function() {
        		$(this).remove();
                
            });
        });
    }
}

//upg1, upg2, upg3 functions increment the values differently, depending
//on level of the upgrade
function upg1() {
    var inc = document.getElementById("Test").innerHTML = score;
    score+=1;
}

function upg2() {
    var inc = document.getElementById("Test").innerHTML = score;
    score+=1;
}

function upg3() {
    var inc = document.getElementById("Test").innerHTML = score;
    score+=1;
}

//Game Audio
function up1play() {
    if(score>=up1){
        var audio = document.getElementById('audio1');
        if (audio.paused) {
            audio.play();
        }else{
            audio.currentTime = 0
        }
    }
}
    
function up2play() {
    if(score>=up2){
        var audio = document.getElementById('audio1');
        if (audio.paused) {
            audio.play();
        }else{
            audio.currentTime = 0
        }
    }
}
    
function up3play() {
    if(score>=up3){
        var audio = document.getElementById('audio1');
        if (audio.paused) {
            audio.play();
        }else{
            audio.currentTime = 0
        }
    }
}

function click1play() {
    if(score>=upCursor1){
        var audio = document.getElementById('audio5');
        if (audio.paused) {
            audio.play();
        }else{
            audio.currentTime = 0
        }
    }
}

function click2play() {
    if(score>=upCursor2){
        var audio = document.getElementById('audio5');
        if (audio.paused) {
            audio.play();
        }else{
            audio.currentTime = 0
        }
    }
}

function click3play() {
    if(score>=upCursor3){
        var audio = document.getElementById('audio5');
        if (audio.paused) {
            audio.play();
        }else{
            audio.currentTime = 0
        }
    }
}

function clickPlay(){
    var audio = document.getElementById('audio2');
    if(audio.paused){
        audio.play();
    }else{
        audio.currentTime = 0;
    }
}

function menuNav(){
    var audio = document.getElementById('audio3');
    if(audio.paused){
        audio.play();
    }else{
        audio.currentTime = 0;
    }
}

function toggleFadeDiv(){
    $( "#marketPlaceDiv" ).fadeToggle("fast");
}

function chatToggle(){
    $( "#chatPlaceDiv" ).fadeToggle("fast");
}


function menuBack(){
    var audio = document.getElementById('audio4');
    if(audio.paused){
        audio.play();
    }else{
        audio.currentTime = 0;
    }
}

function minerExample(){
    var audio = document.getElementById('audio4');
    if(audio.paused){
        audio.play();
    }else{
        audio.currentTime = 0;
    }
}

$(document).ready(function () {

    $('#loginform').validate({ // initialize the plugin
        rules: {
            emailuser: {
                required: true,
                email: true
            },
            pass: {
                required: true,
                minlength: 10
            }
        }
    });

});

//Onclick +1 Effect
//initiated in index
//var clickNum = 1;

$("#clickBtn").click(function(e) {
    
    var obj = $("#clone").clone();
    $("body").append(obj);
    obj.html("+"+clickNum);

    obj.css('position','absolute');
	obj.offset({left: e.pageX-10, top: e.pageY-25});
    
    obj.animate({"top": "-=40px"}, 500, "linear");
    obj.animate({"opacity": 0, "top": "-=40px"}, 500, "linear", function() {
		$(this).remove();
	});	
});
	//cloning score function
	
function cloneScore(){
	     window.location.href = "ScoreToDatabase.php?gold=" + score + "&autoup1=" +b+ "&autoup2=" +c+ "&autoup3=" +d+ "&manup1=" +curs1Own+ "&manup2=" + curs2Own + "&manup3=" + curs3Own + "&cps=" +clickNum+ "&incr="+incr1;
	}
	
    
    //**********************************************************************************************************************************//
    //Gems logic
        var countClicks = 0;
        
        var firstGem = Math.floor((Math.random() * 6) + 1);
        var secondGem = Math.floor((Math.random() * 6) + 1);
        var thirdGem = Math.floor((Math.random() * 6) + 1);
        var fourthGem = Math.floor((Math.random() * 6) + 1);
        var fifthGem = Math.floor((Math.random() * 6) + 1);
        var sixthGem = Math.floor((Math.random() * 6) + 1);
        
        var greenGem = 0;
        var redGem = 0;
        var blueGem = 0;
        var purpleGem = 0;
        var pinkGem = 0;
        var yellowGem = 0;
        
    
       // alert(firstGem+" "+secondGem+" "+thirdGem+" "+fourthGem+" "+fifthGem+" "+sixthGem);
        
        function spawnFirstGem(){
        if(firstGem==1){
       
        $('#gemDiv').append("<div class='a'></div>");
        animateDiv($('.a'));
        greenGem++;
        document.getElementById("gemDisplay").innerHTML = greenGem;
        
        }else if(firstGem==2){
        
        $('#gemDiv').append("<div class='a2'></div>");
        animateDiv($('.a2'));
        
        }else if(firstGem==3){
            
        $('#gemDiv').append("<div class='a3'></div>");
        animateDiv($('.a3'));
        
        }else if(firstGem==4){
            
        $('#gemDiv').append("<div class='a4'></div>");
        animateDiv($('.a4'));
        
        }else if(firstGem==5){
            
        $('#gemDiv').append("<div class='a5'></div>");
        animateDiv($('.a5'));
        
        }else if(firstGem==6){
        
        $('#gemDiv').append("<div class='a6'></div>");    
        animateDiv($('.a6'));
        }
    }    
       
    
         function spawnSecondGem(){
        if(secondGem==1){
       
        $('#gemDiv').append("<div class='c'></div>");
        animateDiv($('.c'));
        greenGem++;
         document.getElementById("gemDisplay").innerHTML = greenGem;
        }else if(secondGem==2){
        
        $('#gemDiv').append("<div class='c2'></div>");
        animateDiv($('.c2'));
        
        }else if(secondGem==3){
            
        $('#gemDiv').append("<div class='c3'></div>");
        animateDiv($('.c3'));
        
        }else if(secondGem==4){
            
        $('#gemDiv').append("<div class='c4'></div>");
        animateDiv($('.c4'));
        }else if(secondGem==5){
           
        $('#gemDiv').append("<div class='c5'></div>"); 
        animateDiv($('.c5'));
        }else if(secondGem==6){
        
        $('#gemDiv').append("<div class='c6'></div>");    
        animateDiv($('.c6'));
        }
    }    
 
        function spawnThirdGem(){
        if(thirdGem==1){
       
        $('#gemDiv').append("<div class='d'></div>");
        animateDiv($('.d'));
        greenGem++;
         document.getElementById("gemDisplay").innerHTML = greenGem;
        }else if(thirdGem==2){
        
        $('#gemDiv').append("<div class='d2'></div>");
        animateDiv($('.d2'));
        
        }else if(thirdGem==3){
            
        $('#gemDiv').append("<div class='d3'></div>");
        animateDiv($('.d3'));
        
        }else if(thirdGem==4){
            
        $('#gemDiv').append("<div class='d4'></div>");
        animateDiv($('.d4'));
 
        
        }else if(thirdGem==5){
            
        $('#gemDiv').append("<div class='d5'></div>");
         animateDiv($('.d5'));
        
        }else if(thirdGem==6){
        
        $('#gemDiv').append("<div class='d6'></div>");    
        animateDiv($('.d6'));
     
            
        }
    }  

        function spawnFourthGem(){
        if(fourthGem==1){
       
        $('#gemDiv').append("<div class='e'></div>");
        animateDiv($('.e'));
         document.getElementById("gemDisplay").innerHTML = greenGem;
        }else if(fourthGem==2){
        greenGem++;
        $('#gemDiv').append("<div class='e2'></div>");
        animateDiv($('.e2'));
        }else if(fourthGem==3){
            
        $('#gemDiv').append("<div class='e3'></div>");
        animateDiv($('.e3'));
        }else if(fourthGem==4){
            
        $('#gemDiv').append("<div class='e4'></div>");
        animateDiv($('.e4'));
        }else if(fourthGem==5){
            
        $('#gemDiv').append("<div class='e5'></div>");
        animateDiv($('.e5'));
        
        }else if(fourthGem==6){
        
        $('#gemDiv').append("<div class='e6'></div>");    
      animateDiv($('.e6'));
            
        }
    }  
    
         function spawnFifthGem(){
        if(fifthGem==1){
       
        $('#gemDiv').append("<div class='f'></div>");
        animateDiv($('.f'));
        greenGem++;
         document.getElementById("gemDisplay").innerHTML = greenGem;
        }else if(fifthGem==2){
        
        $('#gemDiv').append("<div class='f2'></div>");
        animateDiv($('.f2'));
        
        }else if(fifthGem==3){
            
        $('#gemDiv').append("<div class='f3'></div>");
         animateDiv($('.f3'));
        
        }else if(fifthGem==4){
            
        $('#gemDiv').append("<div class='f4'></div>");
        animateDiv($('.f4'));
        
        }else if(fifthGem==5){
            
        $('#gemDiv').append("<div class='f5'></div>");
        animateDiv($('.f5'));
        
        }else if(fifthGem==6){
        
        $('#gemDiv').append("<div class='f6'></div>");    
        animateDiv($('.f6'));
            
        }
    } 
    
     function spawnSixthGem(){
        if(sixthGem==1){
       
        $('#gemDiv').append("<div class='g'></div>");
        animateDiv($('.g'));
         document.getElementById("gemDisplay").innerHTML = greenGem;
        greenGem++;
    
        }else if(sixthGem==2){
        
        $('#gemDiv').append("<div class='g2'></div>");
        animateDiv($('.g2'));
    
        
        }else if(sixthGem==3){
            
        $('#gemDiv').append("<div class='g3'></div>");
        animateDiv($('.g3'));
       
        
        }else if(sixthGem==4){
            
        $('#gemDiv').append("<div class='g4'></div>");
        animateDiv($('.g4'));
       
        
        }else if(sixthGem==5){
            
        $('#gemDiv').append("<div class='g5'></div>");
        animateDiv($('.g5'));
       
        
        }else if(sixthGem==6){
        
        $('#gemDiv').append("<div class='g6'></div>");    
        animateDiv($('.g6'));
            
        }
    } 

        function animateDiv($target) {
        var newq = makeNewPosition($target.parent());
        var oldq = $target.offset();
        var speed = calcSpeed([oldq.top, oldq.left], newq);
        
        $target.animate({
            top: newq[0],
            left: newq[1]
        }, speed, function() {
            animateDiv($target);
        });
    
    };
    
    
        
       function makeNewPosition() {
    
     
        var h = $(window).height() - 50;
        var w = $(window).width() - 50;
    
        var nh = Math.floor(Math.random() * h);
        var nw = Math.floor(Math.random() * w);
    
        return [nh, nw];
    
    }
                  
              
       function calcSpeed(prev, next) {

        var x = Math.abs(prev[1] - next[1]);
        var y = Math.abs(prev[0] - next[0]);
    
        var greatest = x > y ? x : y;
    
        var speedModifier = 0.1;
    
        var speed = Math.ceil(greatest / speedModifier);
    
        return speed;

        }
         
         
      function onClick(){
        var i=1;    
            $( ".a,.a2,.a3,.a4,.a5,.a6" ).click(function() {
                countClicks++;

                if(countClicks>=0){
                    $('#gem'+i).html("<td>"+"Gems Go Here"+"</td>");
                    $('#tab_logic').append('<tr id="gem'+(i+1)+'"></tr>');
                    i++; 
                
                    $('.a,.a2,.a3,.a4,.a5,.a6').hide();
            }
        })};
      
      function onClick2(){
   
      $( ".c,.c2,.c3,.c4,.c5,.c6" ).on( "click", function() {
      countClicks++;
      
      if(countClicks>=0){
    
    
      $('.c,.c2,.c3,.c4,.c5,.c6').hide();
      }
      
      
      })};
      
      function onClick3(){
   
      $( ".d,.d2,.d3,.d4,.d5,.d6" ).on( "click", function() {
      countClicks++;
      
      if(countClicks>=0){
    
    
      $('.d,.d2,.d3,.d4,.d5,.d6').hide();
      }
      
      
      })};
      
       function onClick4(){
   
      $( ".e,.e2,.e3,.e4,.e5,.e6" ).on( "click", function() {
      countClicks++;
      
      if(countClicks>=0){
    
    
      $('.e,.e2,.e3,.e4,.e5,.e6').hide();
      }
      
      
      })};
      
       function onClick5(){
   
      $( ".f,.f2,.f3,.f4,.f5,.f6" ).on( "click", function() {
      countClicks++;
      
      if(countClicks>=0){
    
    
      $('.f,.f2,.f3,.f4,.f5,.f6').hide();
      }
      
      
      })};
      
       function onClick6(){
   
      $( ".g,.g2,.g3,.g4,.g5,.g6" ).on( "click", function() {
      countClicks++;
      
      if(countClicks>=0){
    
    
      $('.g,.g2,.g3,.g4,.g5,.g6').hide();
      }
      
      
      })};
    
    
  
    $(document).ready(function() {
        animateDiv($('.a'));
        animateDiv($('.a2'));
        animateDiv($('.a3'));
        animateDiv($('.a4'));
        animateDiv($('.a5'));
        animateDiv($('.a6'));
        
        animateDiv($('.c'));
        animateDiv($('.c2'));
        animateDiv($('.c3'));
        animateDiv($('.c4'));
        animateDiv($('.c5'));
        animateDiv($('.c6'));
        
        animateDiv($('.d'));
        animateDiv($('.d2'));
        animateDiv($('.d3'));
        animateDiv($('.d4'));
        animateDiv($('.d5'));
        animateDiv($('.d6'));
        
        animateDiv($('.e'));
        animateDiv($('.e2'));
        animateDiv($('.e3'));
        animateDiv($('.e4'));
        animateDiv($('.e5'));
        animateDiv($('.e6'));
        
        animateDiv($('.f'));
        animateDiv($('.f2'));
        animateDiv($('.f3'));
        animateDiv($('.f4'));
        animateDiv($('.f5'));
        animateDiv($('.f6'));
        
        animateDiv($('.g'));
        animateDiv($('.g2'));
        animateDiv($('.g3'));
        animateDiv($('.g4'));
        animateDiv($('.g5'));
        animateDiv($('.g6'));

        });



//Got Your Gems Working
function countdown( elementName, minutes, seconds )
{
    var element, endTime, hours, mins, msLeft, time;

    function twoDigits( n )
    {
        return (n <= 9 ? "0" + n : n);
    }

    function updateTimer()
    {
       
        msLeft = endTime - (+new Date);
        if ( msLeft < 1000 ) {
            element.innerHTML = "Wave cleared!";
            countdown( "countdown", 2, 0 );
            $( "#marketPlaceDiv" ).fadeIn("fast");
            roundNum++;
            document.getElementById("roundDisplay").innerHTML = roundNum;
            $('#spawnMiner').append("<div id='firstMiner' class='col-md-2'  style='height: 100%;'></div>");
        }
        
        else if(countClicks >=6){
            countClicks = 0;
            $( "#marketPlaceDiv" ).fadeOut("fast");
            time = new Date( msLeft );
            hours = time.getUTCHours();
            mins = time.getUTCMinutes();
            element.innerHTML = (hours ? hours + ':' + twoDigits( mins ) : mins) + ':' + twoDigits( time.getUTCSeconds() );
            setTimeout( updateTimer, time.getUTCMilliseconds() + 500 );
            spawnFirstGem();
            spawnSecondGem();
            spawnThirdGem();
            spawnFourthGem();
            spawnFifthGem();
            spawnSixthGem();
            score = score + 500;
            
            onClick();
            onClick2();
            onClick3();
            onClick4();
            onClick5();
            onClick6();
        }
             
        else {
            time = new Date( msLeft );
            hours = time.getUTCHours();
            mins = time.getUTCMinutes();
            element.innerHTML = (hours ? hours + ':' + twoDigits( mins ) : mins) + ':' + twoDigits( time.getUTCSeconds() );
            setTimeout( updateTimer, time.getUTCMilliseconds() + 500 );
        }
    }

    element = document.getElementById( elementName );
    endTime = (+new Date) + 1000 * (60*minutes + seconds) + 500;
    updateTimer();
}

countdown( "countdown", 0, 5 );