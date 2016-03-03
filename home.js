var main = function() {
	if (username && userid) {
		$('#logIn').hide();
		$('#signUp').hide();
		$('#profile').show();
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