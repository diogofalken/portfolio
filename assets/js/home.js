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

AOS.init();

const languages = [
	"HTML5",
	"CSS3",
	"JavaScript",
	"Java",
	"RobotFramework",
	"Android",
	"Github",
	"Python",
	"PHP",
	"C++",
	"C",
	"MySql"
];

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
				delay: i * 0.2
			}
		})
	},
	{
		easing: "ease-in-out",
		selector: true,
		direction: "alternate"
	}
);

document.querySelectorAll(".icons").forEach((icon, index) => {
	icon.addEventListener("mouseover", () => {
		icon.getElementsByTagName("p")[0].style.display = "block";
	});
	icon.addEventListener("mouseout", () => {
		icon.getElementsByTagName("p")[0].style.display = "none";
	});
});

let teste = 0;
$(window).scroll(function() {
	// check if scroll event happened
	if ($(document).scrollTop() >= window.innerHeight && teste === 0) {
		teste = 1;
		scene.play();
	}
});
