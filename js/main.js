//Navbar
jQuery(document).ready(function($){
	//move nav element position according to window width
	moveNavigation();
	$(window).on('resize', function(){
		(!window.requestAnimationFrame) ? setTimeout(moveNavigation, 300) : window.requestAnimationFrame(moveNavigation);
	});

	//mobile version - open/close navigation
	$('.cd-nav-trigger').on('click', function(event){
		event.preventDefault();
		if($('header').hasClass('nav-is-visible')) $('.moves-out').removeClass('moves-out');
		
		$('header').toggleClass('nav-is-visible');
		$('.cd-main-nav').toggleClass('nav-is-visible');
		$('.cd-main-content').toggleClass('nav-is-visible');
	});

	//mobile version - go back to main navigation
	$('.go-back').on('click', function(event){
		event.preventDefault();
		$('.cd-main-nav').removeClass('moves-out');
	});

	//open sub-navigation
	$('.cd-subnav-trigger').on('click', function(event){
		event.preventDefault();
		$('.cd-main-nav').toggleClass('moves-out');
	});
	/*
	function validateForm() {
    var fname = document.forms["regform"]["fname"].value;
    var lname = document.forms["regform"]["lname"].value;
    var username = document.forms["regform"]["username"].value;
    var pass = document.forms["regform"]["pass"].value;
    var email = document.forms["regform"]["email"].value;
    var atpos = email.indexOf("@");
    var dotpos = email.lastIndexOf(".");
    if (fname== null || fname == "" || fname < 2) {
        alert("First name must be filled out");
        return false;
    }
    if (lname== null || lname == "" || lname < 2) {
        alert("Last name must be filled out");
        return false;
    }
    if (username == null || username == "" || username < 2) {
        alert("Userame must be filled out");
        return false;
    }
    if (pass == null || pass == "" || pass < 7) {
        alert("Password must be at least 7 character long");
        return false;
    }
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) {
        alert("Not a valid e-mail address");
        return false;
    }
}
*/

	function moveNavigation(){
		var navigation = $('.cd-main-nav-wrapper');
  		var screenSize = checkWindowWidth();
        if ( screenSize ) {
        	//desktop screen - insert navigation inside header element
			navigation.detach();
			navigation.insertBefore('.cd-nav-trigger');
		} else {
			//mobile screen - insert navigation after .cd-main-content element
			navigation.detach();
			navigation.insertAfter('.cd-main-content');
		}
	}
	

	function checkWindowWidth() {
		var mq = window.getComputedStyle(document.querySelector('header'), '::before').getPropertyValue('content').replace(/"/g, '').replace(/'/g, "");
		return ( mq == 'mobile' ) ? false : true;
	}
});
/*
Hide login
    function toggle_visibility('formdivlogin'){
       var e = document.getElementById('formdivlogin');
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
   */
//Upgrades Menu
jQuery(document).ready(function($){
	var is_bouncy_nav_animating = false;
	//open bouncy navigation
	$('.cd-bouncy-nav-trigger').on('click', function(){
		triggerBouncyNav(true);
	});
	//close bouncy navigation
	$('.cd-bouncy-nav-modal .cd-close').on('click', function(){
		triggerBouncyNav(false);
	});
	$('.cd-bouncy-nav-modal').on('click', function(event){
		if($(event.target).is('.cd-bouncy-nav-modal')) {
			triggerBouncyNav(false);
		}
	});

	function triggerBouncyNav($bool) {
		//check if no nav animation is ongoing
		if( !is_bouncy_nav_animating) {
			is_bouncy_nav_animating = true;
			
			//toggle list items animation
			$('.cd-bouncy-nav-modal').toggleClass('fade-in', $bool).toggleClass('fade-out', !$bool).find('li:last-child').one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(){
				$('.cd-bouncy-nav-modal').toggleClass('is-visible', $bool);
				if(!$bool) $('.cd-bouncy-nav-modal').removeClass('fade-out');
				is_bouncy_nav_animating = false;
			});
			
			//check if CSS animations are supported... 
			if($('.cd-bouncy-nav-trigger').parents('.no-csstransitions').length > 0 ) {
				$('.cd-bouncy-nav-modal').toggleClass('is-visible', $bool);
				is_bouncy_nav_animating = false;
			}
		}
	}
});

//CSS Transform for Chat Box
$( ".musicBtn" ).click(function() {
    if (  $('#musicDiv').css( "transform" ) == 'none' ){
        $('#musicDiv').css("transform","translate(525px)");
        $('#musicDiv').css("transition","transform .2s ease-in-out");
    } else {
        $('#musicDiv').css("transform","" );
    }
});

//CSS Transform for Music Box Button
$( ".musicBtn" ).click(function() {
    if (  $('.musicBtn').css( "transform" ) == 'none' ){
        $('.musicBtn').css("transform","rotate(-180deg)");
        $('.musicBtn').css("transition","transform .2s ease-in-out");
    } else {
        $('.musicBtn').css("transform","" );
    }
});

//CSS Transform for Gem Box
$( ".gemStoreBtn" ).click(function() {
    if (  $('#statisticDiv').css( "transform" ) == 'none' ){
        $('#statisticDiv').css("transform","translate(-114%)");
        $('#statisticDiv').css("transition","transform .2s ease-in-out");
    } else {
        $('#statisticDiv').css("transform","" );
    }
});

//CSS Transform for Gem Button
$( ".gemStoreBtn" ).click(function() {
    if (  $('.gemStoreBtn').css( "transform" ) == 'none' ){
        $('.gemStoreBtn').css("transform","rotate(180deg)");
        $('.gemStoreBtn').css("transition","transform .2s ease-in-out");
    } else {
        $('.gemStoreBtn').css("transform","" );
    }
});

//Gem Store
$(document).ready(function(){
    var i=1;
    $("#add_row").click(function(){
    $('#gem'+i).html("<td>"+"Gems Go Here"+"</td>");

    $('#tab_logic').append('<tr id="gem'+(i+1)+'"></tr>');
    i++; 
});
    $("#delete_row").click(function(){
    	if(i>1){
		$("#gem"+(i-1)).html('');
		i--;
		}
	});
});

//Enter Key sends Chat Message
function handle(e){
    if(e.keyCode === 13){
        $('#sendBtn').click();
    }

    return false;
}