var main = function() {
	console.log($(".exercise").text());
	setCookie('exerciseId', 5);
	$(".exercise").click(function() {
		console.log(10000000);
		$exerciseId = $(this).text();
		
	});
}

var setCookie = function(name, value) {
	document.cookie = name + '=' + value + '; path = / ;';
}

$(document).ready(main);