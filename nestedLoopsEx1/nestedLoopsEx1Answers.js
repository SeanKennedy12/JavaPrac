var main = function() {

	var currentScore = parseInt(getCookie('score'));

	$('.answers li').click(function() {
		var question = $('.header h1').text()
		
		if (question == "Question 1") {
			setCookie('score', 0);
			
			var usrAns = $(this).text();
			
			if (usrAns == "25") {
				$('.answers li').css('background-color', 'white');
				$(this).css('background-color', '#2ecc71');
				$('.answers li').addClass('disableClick');
				setCookie('score', 1);
			}
			
			else {
				$('.answers li').css('background-color', 'white');
				$(this).css('background-color', '#c0392b');
				$('.answers li').addClass('disableClick');
				setCookie('score', 0);
			}
			
		}
		
		if (question == "Question 2") {
			
			var usrAns = $(this).text();
			if (usrAns == "2") {
				$('.answers li').css('background-color', 'white');
				$(this).css('background-color', '#2ecc71');
				$('.answers li').addClass('disableClick');
				setCookie('score', currentScore +=1);
			}
			
			else {
				$('.answers li').css('background-color', 'white');
				$(this).css('background-color', '#c0392b');
				$('.answers li').addClass('disableClick');
			}
		}
		
		if (question == "Question 3") {
			
			var usrAns = $(this).text();
			
			if (usrAns == "000") {
				$('.answers li').css('background-color', 'white');
				$(this).css('background-color', '#2ecc71');
				$('.answers li').addClass('disableClick');
				setCookie('score', currentScore +=1);
			}
			
			else {
				$('.answers li').css('background-color', 'white');
				$(this).css('background-color', '#c0392b');
				$('.answers li').addClass('disableClick');
			}
		}
		
	});
}

var setCookie = function(name, value) {
	document.cookie = name + '=' + value + '; path = / ;';
}

function getCookie(cname) {
	//Reference: Code taken from http://www.w3schools.com/js/js_cookies.asp
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
    return "";
}

$(document).ready(main);