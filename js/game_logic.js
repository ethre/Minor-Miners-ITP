/* -------------------------------- 

Game Logic

-------------------------------- */
//Global Variables
//initiate variables that count score and number of upgrades 
//variables purposely commented out, retrieving from db in index then sent to here.
//var score = 1;
//var incr1 = 1;
//var b = 1;
//var c = 1;
//var d = 1;
var e = 1;
//var curs1Own = 0;
//var curs2Own = 0;
//var curs3Own = 0;
//var up1 = 10;
//var up2 = 50;
//var up3 = 100;
//var upCursor1 = 100;
//var upCursor2 = 200;
//var upCursor3 = 300;
var done;
var done2;
var check;
var clone;
var roundNum=1;
var roundNum2=3;
var triggerScore=1;
var triggerRound=1;
var upgradeTest = 0;
var gemScore = 250;
var quota = 100;
var status = "in profit";
//this function will increase score by 1 when "increase" function is called(onclick)
function increase(){
    var inc = document.getElementById("Test").innerHTML = score;
    
    document.getElementById("cps").innerHTML = "CPS: " + clickNum;
    score = score + incr1;
}


function quotaAppend(){
    document.getElementById("quotaP").innerHTML = "Quota: <img src='img/coin2.gif' style='position: relative; top: 3px; padding-right: 5px;'>" + quota;
    if(status == "in profit"){
        document.getElementById("statusP").innerHTML = "Status: " + "<span style='color: #ACDDE8;'>"+status+"</span>";   
    }else if(status == "in debt"){
        document.getElementById("statusP").innerHTML = "Status: " + "<span style='color: #E8B1B4;'>"+status+"</span>"; 
    }
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
        
         if(upgradeTest<=5){
            $("#minerDivExample").append('<div class="col-md-2" style="height: 100%; padding-top:12px;"><img src="img/pixelMiner1SLITHERIO.gif"></div>');
            upgradeTest++;
            
         }else if(upgradeTest>5 && upgradeTest<=11){
            $("#minerDivExample2").append('<div class="col-md-2" style="height: 100%;"><img src="img/pixelMiner1SLITHERIO.gif"></div>');     
            upgradeTest++;
            
         } else if(upgradeTest>11 && upgradeTest<=17){
            $("#minerDivExample3").append('<div class="col-md-2" style="height: 100%;"><img src="img/pixelMiner1SLITHERIO.gif"></div>');     
            upgradeTest++;
     
         } else if(upgradeTest>17 && upgradeTest<=23){
            $("#minerDivExample4").append('<div class="col-md-2" style="height: 100%;"><img src="img/pixelMiner1SLITHERIO.gif"></div>');     
            upgradeTest++;
     
         } else if(upgradeTest>23 && upgradeTest<=29){
            $("#minerDivExample5").append('<div class="col-md-2" style="height: 100%;"><img src="img/pixelMiner1SLITHERIO.gif"></div>');     
            upgradeTest++;
        }

        
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
function loadScores23(){
    document.getElementById("c1").innerHTML = "Cost: " + up1;
    document.getElementById("cps").innerHTML = "CPS: " + clickNum;
    document.getElementById("c2").innerHTML = "Cost: " + up2;
    document.getElementById("c3").innerHTML = "Cost: " + up3;
    document.getElementById("mini").innerHTML = "Owned: " + b;
    document.getElementById("good").innerHTML = "Owned: " + c;
    document.getElementById("super").innerHTML = "Owned: " + d;
    document.getElementById("curs1Own").innerHTML = "Owned: " + curs1Own;
    document.getElementById("curs2Own").innerHTML = "Owned: " + curs2Own;
    document.getElementById("curs3Own").innerHTML = "Owned: " + curs3Own;
    document.getElementById("curs1").innerHTML = "Cost: " + upCursor1;
    document.getElementById("curs2").innerHTML = "Cost: " + upCursor2;
    document.getElementById("curs3").innerHTML = "Cost: " + upCursor3;
    if(score==1){
        document.getElementById("Test").innerHTML = 0;
    }
    else{
        document.getElementById("Test").innerHTML = score;
    }
    if(!(b==1)){
    for(var i=0;i<=b;i++){
        upg1timestart();
    }
    }
    if(!(c==1)){
    for(var i=0;i<=c;i++){
        upg2timestart();
    }
    }
    if(!(d==1)){
    for(var i=0;i<=d;i++){
        upg3timestart();
    }
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
        
         if(upgradeTest<=5){
            $("#minerDivExample").append('<div class="col-md-2" style="height: 100%; padding-top:12px;"><img src="img/pixelMiner2AWESOME.gif"></div>');
            upgradeTest++;
            
         }else if(upgradeTest>5 && upgradeTest<=11){
            $("#minerDivExample2").append('<div class="col-md-2" style="height: 100%;"><img src="img/pixelMiner2AWESOME.gif"></div>');     
            upgradeTest++;
            
         } else if(upgradeTest>11 && upgradeTest<=17){
            $("#minerDivExample3").append('<div class="col-md-2" style="height: 100%;"><img src="img/pixelMiner2AWESOME.gif"></div>');     
            upgradeTest++;
     
         } else if(upgradeTest>17 && upgradeTest<=23){
            $("#minerDivExample4").append('<div class="col-md-2" style="height: 100%;"><img src="img/pixelMiner2AWESOME.gif"></div>');     
            upgradeTest++;
     
         } else if(upgradeTest>23 && upgradeTest<=29){
            $("#minerDivExample5").append('<div class="col-md-2" style="height: 100%;"><img src="img/pixelMiner2AWESOME.gif"></div>');     
            upgradeTest++;
        }
        
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
        
        if(upgradeTest<=5){
            $("#minerDivExample").append('<div class="col-md-2" style="height: 100%; padding-top:12px;"><img src="img/pixelMiner3MLG.gif"></div>');
            upgradeTest++;
            
         }else if(upgradeTest>5 && upgradeTest<=11){
            $("#minerDivExample2").append('<div class="col-md-2" style="height: 100%;"><img src="img/pixelMiner3MLG.gif"></div>');     
            upgradeTest++;
            
         } else if(upgradeTest>11 && upgradeTest<=17){
            $("#minerDivExample3").append('<div class="col-md-2" style="height: 100%;"><img src="img/pixelMiner3MLG.gif"></div>');     
            upgradeTest++;
     
         } else if(upgradeTest>17 && upgradeTest<=23){
            $("#minerDivExample4").append('<div class="col-md-2" style="height: 100%;"><img src="img/pixelMiner3MLG.gif"></div>');     
            upgradeTest++;
     
         } else if(upgradeTest>23 && upgradeTest<=29){
            $("#minerDivExample5").append('<div class="col-md-2" style="height: 100%;"><img src="img/pixelMiner3MLG.gif"></div>');     
            upgradeTest++;
        }
        
        
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
function upg1timestart() {
        setInterval(upg1, 100);
        document.getElementById("Test").innerHTML = score;
}
function upg2timestart() {
        setInterval(upg2, 100);
        document.getElementById("Test").innerHTML = score;
}
function upg3timestart() {
        setInterval(upg3, 100);
        document.getElementById("Test").innerHTML = score;
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

function leaderToggle(){
    $( "#leaderDiv" ).fadeToggle("fast");
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
	     window.location.href = "ScoreToDatabase.php?gold=" + score + "&autoup1=" +b+ "&autoup2=" +c+ "&autoup3=" +d+ "&manup1=" +curs1Own+ "&manup2=" + curs2Own + "&manup3=" + curs3Own + "&cps=" +clickNum+ "&incr="+incr1+"&autocost1="+up1+"&autocost2="+up2+"&autocost3="+up3+"&mancost1="+upCursor1+"&mancost2="+upCursor2+"&mancost3="+upCursor3;
	}
	
    
     /*                                                                 */
     /*                         GEMS LOGIC                              */
     /*                                                                 */
     /*                                                                 */
     /*                                                                 */
     
     
        var countClicks = 0;
        
        var firstGem = Math.floor((Math.random() * 6) + 1);
        var secondGem = Math.floor((Math.random() * 6) + 1);
        var thirdGem = Math.floor((Math.random() * 6) + 1);
        var fourthGem = Math.floor((Math.random() * 6) + 1);
        var fifthGem = Math.floor((Math.random() * 6) + 1);
        var sixthGem = Math.floor((Math.random() * 6) + 1);
        var seventhGem = Math.floor((Math.random() * 6) + 1);
        
    
   
        
        function spawnFirstGem(){
        if(firstGem==1){
       
        $('#gemDiv').append("<div class='a'></div>");
        animateDiv($('.a'));
        
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
       
        }else if(fourthGem==2){
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
    
    
     function spawnSeventhGem(){
        if(seventhGem==1){
       
        $('#gemDiv').append("<div class='b'></div>");
        animateDiv($('.b'));
    
        }else if(seventhGem==2){
        
        $('#gemDiv').append("<div class='b2'></div>");
        animateDiv($('.b2'));
    
        
        }else if(seventhGem==3){
            
        $('#gemDiv').append("<div class='b3'></div>");
        animateDiv($('.b3'));
       
        
        }else if(seventhGem==4){
            
        $('#gemDiv').append("<div class='b4'></div>");
        animateDiv($('.b4'));
       
        
        }else if(seventhGem==5){
            
        $('#gemDiv').append("<div class='b5'></div>");
        animateDiv($('.b5'));
       
        
        }else if(seventhGem==6){
        
        $('#gemDiv').append("<div class='b6'></div>");    
        animateDiv($('.b6'));
            
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
    
        var speedModifier = 0.2;
    
        var speed = Math.ceil(greatest / speedModifier);
    
        return speed;

       }
         
    function onClick(){
        $( ".a,.a2,.a3,.a4,.a5,.a6" ).click(function() {
            countClicks++;
            
            var audio = document.getElementById('gemCollect');
            if (audio.paused) {
                audio.play();
            }else{
                audio.currentTime = 0
            }
            
        if(countClicks>=0){
            $('.a,.a2,.a3,.a4,.a5,.a6').hide();
        }
    })};
    
    function onClick7(){
        $( ".b,.b2,.b3,.b4,.b5,.b6" ).on( "click", function() {
        countClicks++;
        
        var audio = document.getElementById('gemCollect');
        if (audio.paused) {
            audio.play();
        }else{
            audio.currentTime = 0
        }
        
        if(countClicks>=0){
            $('.b,.b2,.b3,.b4,.b5,.b6').hide();
        }
    })};
      
    function onClick2(){
        $( ".c,.c2,.c3,.c4,.c5,.c6" ).on( "click", function() {
            countClicks++;
            
            var audio = document.getElementById('gemCollect');
            if (audio.paused) {
                audio.play();
            }else{
                audio.currentTime = 0
            }
    
        if(countClicks>=0){
            $('.c,.c2,.c3,.c4,.c5,.c6').hide();
        }
    })};
      
    function onClick3(){
        $( ".d,.d2,.d3,.d4,.d5,.d6" ).on( "click", function() {
        countClicks++;
        
        var audio = document.getElementById('gemCollect');
        if (audio.paused) {
            audio.play();
        }else{
            audio.currentTime = 0
        }
      
        if(countClicks>=0){
            $('.d,.d2,.d3,.d4,.d5,.d6').hide();
        }
    })};
      
    function onClick4(){
        $( ".e,.e2,.e3,.e4,.e5,.e6" ).on( "click", function() {
        countClicks++;
        
        var audio = document.getElementById('gemCollect');
        if (audio.paused) {
            audio.play();
        }else{
            audio.currentTime = 0
        }
      
        if(countClicks>=0){
            $('.e,.e2,.e3,.e4,.e5,.e6').hide();
        }
    })};
      
    function onClick5(){
        $( ".f,.f2,.f3,.f4,.f5,.f6" ).on( "click", function() {
        countClicks++;
        
        var audio = document.getElementById('gemCollect');
        if (audio.paused) {
            audio.play();
        }else{
            audio.currentTime = 0
        }
      
        if(countClicks>=0){
            $('.f,.f2,.f3,.f4,.f5,.f6').hide();
        }
    })};
      
    function onClick6(){
        $( ".g,.g2,.g3,.g4,.g5,.g6" ).on( "click", function() {
        countClicks++;
        
        var audio = document.getElementById('gemCollect');
        if (audio.paused) {
            audio.play();
        }else{
            audio.currentTime = 0
        }
      
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


        animateDiv($('.b'));
        animateDiv($('.b2'));
        animateDiv($('.b3'));
        animateDiv($('.b4'));
        animateDiv($('.b5'));
        animateDiv($('.b6'));

        });

//Gems on Timer
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
            countdown( "countdown", 1, 0  );
            
            var audio = document.getElementById('audio6');
            if (audio.paused) {
                audio.play();
            }else{
                audio.currentTime = 0
            }
            
            //Gold Taken each Round
            score = score - quota - clickNum;
            $('#clickBtn').click();
            
            if(score<0){
                status = "in debt";
            }else if(score>0){
                status = "in profit";
            }else if(score == 0){
                status = "even"
            }
            
            document.getElementById('popUpWarning').innerHTML = '<h1 id="warnMain">Warning!</h1><h1 id="warnHead">Gold Deducted!</h1><p id="warnBody">The Governor has taken '+quota+' Gold!</br>You are '+status+'</p>'
            $('#popUpWarning').fadeIn('fast').delay(7000).fadeOut('fast');
            
            quota = quota*2;
            quotaAppend();
            roundNum++;
            
            if(roundNum==roundNum2){
                $( "#marketPlaceDiv" ).fadeIn("fast");
                roundNum2 = roundNum2+3;
            }
            
            document.getElementById("roundDisplay").innerHTML = roundNum;
          //  $('#spawnMiner').append("<div id='firstMiner' class='col-md-2'  style='height: 100%;'></div>");
        }
        
        else if(countClicks >=7){
            //Gem Notification
            var audio = document.getElementById('notSound');
            if (audio.paused) {
                audio.play();
            }else{
                audio.currentTime = 0
            }
            document.getElementById('popUpNotification').innerHTML = '<h1 id="notMain">Notification!</h1><h1 id="notHead">Gems Collected!</h1><p id="notBody">You sell the Gems for '+gemScore+' Gold!</p>';
            $('#popUpNotification').fadeIn('fast').delay(7000).fadeOut('fast');
            
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
            spawnSeventhGem();
            
            onClick();
            onClick2();
            onClick3();
            onClick4();
            onClick5();
            onClick6();
            onClick7();
            
            //Gem Worth Increases Every Event
            score = score + gemScore - clickNum;
            $('#clickBtn').click();
            gemScore = gemScore+250;
            
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

countdown( "countdown", 1, 0 );

//Achievements, Notifications & Warnings
var achievement1 = setInterval(function achievement(){
    if(roundNum==2){
        var audio = document.getElementById('achSound');
        if (audio.paused) {
            audio.play();
        }else{
            audio.currentTime = 0
        }
        
        document.getElementById('popUpAchievement').innerHTML = '<h1 id="achMain">Achievement Unlocked!</h1><h1 id="achHead">First Round!</h1><p id="achBody">You completed the first round!</br>Keep Digging!</p>'
        $('#popUpAchievement').fadeIn('fast').delay(7000).fadeOut('fast');
        myStopFunction1();
    }
}, 0001);

var achievement2 = setInterval(function achievement2(){
    if(score==101){
        var audio = document.getElementById('achSound');
        if (audio.paused) {
            audio.play();
        }else{
            audio.currentTime = 0
        }
        
        document.getElementById('popUpAchievement').innerHTML = '<h1 id="achMain">Achievement Unlocked!</h1><h1 id="achHead">100 Gold!</h1><p id="achBody">You got your first 100 Gold!</p>'
        $('#popUpAchievement').fadeIn('fast').delay(7000).fadeOut('fast');
        myStopFunction2();
    }
}, 0001);

//Stop Achievements, Notifications & Warnings Repeating
function myStopFunction1() {
    clearInterval(achievement1);
}

function myStopFunction2() {
    clearInterval(achievement2);
}

function myStopFunction3() {
    clearInterval(achievement3);
}

function myStopFunction4() {
    clearInterval(achievement4);
}

function myStopFunction5() {
    clearInterval(achievement5);
}
            
     /*                                                                 */
     /*                      CANVAS JS CHART                            */
     /*                                                                 */
     /*                                                                 */
     /*                                                                 */
    
function loadChart() {

		var dps = []; // dataPoints

		var chart = new CanvasJS.Chart("chartContainer",{
		    theme: "theme10", //"theme1"
		    zoomEnabled:true,
		    colorSet: "#FFF",
		    backgroundColor: "#33414a",
			title :{
			   
				text: "SCORE PER SECOND",
				fontWeight: "bold",
				fontFamily: "calibri",
				fontColor: "#FFF",
				fontSize:25,
				
			},			
			data: [{
				type: "line",
				dataPoints: dps,
				color: "#ffc40f"
			}]
		});

		var xVal = 0;
		var updateInterval = 060;
		var dataLength = 1000; // number of dataPoints visible at any point

		var updateChart = function (count) {
			count = count || 1;
			// count is number of times loop runs to generate random dataPoints.
			
			for (var j = 0; j < count; j++) {	
				score = score;
				dps.push({
					x: xVal,
					y: score
				});
				xVal++;
			};
			if (dps.length > dataLength)
			{
				dps.shift();				
			}
			
			chart.render();		

		};

		// generates first set of dataPoints
		updateChart(dataLength); 

		// update chart after specified time. 
		setInterval(function(){updateChart()}, updateInterval); 

	}
     /*  CANVAS JS CHART END */