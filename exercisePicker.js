var main = function() {
	if (username && userid) {
		$('#logIn').hide();
		$('#signUp').hide();
		$('#profile').show();
		if (ex1Status == 0 || ex1Status == null) {
			$('#exercise1').attr("src","images/question_mark.png");
		}
		else if (ex1Status == 1) {
			console.log('hi');
			$('#exercise1').attr("src","images/green_tick.png");
		}
		if (ex2Status == 0 || ex2Status == null) {
			$('#exercise2').attr("src","images/question_mark.png");
		}
		else if (ex2Status == 1) {
			$('#exercise2').attr("src","images/green_tick.png");
		}
		if (ex3Status == 0 || ex3Status == null) {
			$('#exercise3').attr("src","images/question_mark.png");
		}
		else if (ex3Status == 1) {
			$('#exercise3').attr("src","images/green_tick.png");
		}
	}
	else {
		$('#logIn').show();
		$('#signUp').show();
		$('#profile').hide();
	}
	
	$('.dropdown-toggle').click(function() {
    	$('.dropdown-menu').toggle();
  	});
}

$(document).ready(main);