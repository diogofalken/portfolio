$(document).ready(function() {
	$(window).scroll(function() {
		// check if scroll event happened
		if ($(document).scrollTop() >= window.innerHeight) {
			// check if user scrolled more than 50 from top of the browser window
			$(".navbar").removeClass("bg-transparent");
			$(".navbar").addClass("bg-dark");
		} else {
			$(".navbar").removeClass("bg-dark");
			$(".navbar").addClass("bg-transparent");
		}
	});
});
