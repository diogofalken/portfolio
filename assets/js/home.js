/* Type effect on landing page */
new Typed("#typed", {
	strings: [
		"Olá.",
		"Hello.",
		"Bonjour.",
		"Nǐ Hǎo.",
		"Hallo.",
		"Ciào.",
		"Privet.",
		"Hola.",
		"Konnichiwa.",
		"Aloha."
	],
	loop: true,
	shuffle: true,
	fadeOut: true,
	typeSpeed: 100
});

const scene = new Scene(
	{
		"#title_icons": {
			0: "opacity: 0",
			0.9: "opacity: 1"
		},
		".hr_subtitle_icons": {
			0.3: "width: 0%",
			1: "width: 25%"
		},
		".icons": i => ({
			0: {
				transform: {
					translateX: "100%"
				},
				opacity: "0"
			},
			1: {
				transform: {
					translateX: "0%"
				},
				opacity: "1"
			},
			options: {
				delay: i * 0.1
			}
		})
	},
	{
		easing: "ease-in-out",
		selector: true,
		direction: "alternate"
	}
);

let teste = 0;
$(document).ready(() => {
	$(window).scroll(function() {
		// check if scroll event happened
		if ($(document).scrollTop() >= window.innerHeight && teste === 0) {
			teste = 1;
			scene.play();
		}
	});

	AOS.init();
});
