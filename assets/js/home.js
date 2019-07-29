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
	$("#success-alert").hide();
	$(window).scroll(function() {
		// check if scroll event happened
		if ($(document).scrollTop() >= window.innerHeight && teste === 0) {
			teste = 1;
			scene.play();
		}
	});

	AOS.init();
});

document.querySelectorAll(".icons").forEach(col => {
	col.firstElementChild.style.filter = "";
	col.addEventListener("click", () => {
		let tool = col.getAttribute("tool");

		// Reset the color from all the icons
		takeFilter();

		// Add color active
		col.firstElementChild.style.filter =
			"invert(48%) sepia(13%) saturate(3207%) hue-rotate(130deg) brightness(95%) contrast(80%)";

		// Display the projects with the key = tool
		writeProject(tool);

		// Change the text from portfolio
		document.getElementById("project_type").innerHTML = `(${tool})`;
		let element = document.getElementById("section_projects");
		element.scrollIntoView();
	});
});

const writeProject = tool => {
	let output = "";

	if (tool in projetosCategoria) {
		projetosCategoria[tool].forEach(projeto => {
			output += `<div class="col-12 col-md-6 my-2"><div class="card shadow bg-white rounded"><img src="assets/images/projects-thumbnails/${
				projeto["imagem"]
			}" class="card-img-top" alt="MyCards Web"><div class="card-body"><h5 class="card-title text-center">${
				projeto["nome"]
			}</h5><hr><p class="card-text">${projeto["descricao"]}</p>
			</div><div class="card-footer text-center"><i class="fas fa-arrow-right fa-2x text-info"></i></div></div></div>`;
		});
	} else {
		output += `<div class="col-12 text-center text-danger"><h3>Não foram encontrados projetos realizados com a ferramenta ${tool}!</h3></div>`;
	}

	document.getElementById("projetos").innerHTML = output;
	clickCards();
};

const clickCards = () => {
	document.querySelectorAll(".card").forEach(col => {
		col.addEventListener("click", () => {
			console.log(col);
		});
	});
};
const teste1 = div => {
	console.log(div);
};
const takeFilter = () => {
	document.querySelectorAll(".icons").forEach(col => {
		col.firstElementChild.style.filter = "";
	});
};

/* Contact me */
const validation = form => {
	let returnValue = true;
	form.querySelectorAll("input").forEach(input => {
		if (input.value.trim().length == 0) {
			input.parentElement.lastElementChild.classList.remove("valid-tooltip");
			input.parentElement.lastElementChild.classList.add(
				"d-block",
				"invalid-tooltip"
			);
			input.parentElement.lastElementChild.innerHTML = "Campo obrigatório.";
			returnValue = false;
		} else {
			input.parentElement.lastElementChild.classList.remove("invalid-tooltip");
			input.parentElement.lastElementChild.classList.add(
				"d-block",
				"valid-tooltip"
			);
			input.parentElement.lastElementChild.innerHTML = "Correto!";
		}
	});
	let email = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
	if (!email.test(form.querySelector("input#email").value)) {
		form
			.querySelector("input#email")
			.parentElement.lastElementChild.classList.remove("valid-tooltip");
		form
			.querySelector("input#email")
			.parentElement.lastElementChild.classList.add(
				"d-block",
				"invalid-tooltip"
			);
		form.querySelector("input#email").parentElement.lastElementChild.innerHTML =
			"Email inválido.";
		returnValue = false;
	} else {
		form
			.querySelector("input#email")
			.parentElement.lastElementChild.classList.remove("invalid-tooltip");
		form
			.querySelector("input#email")
			.parentElement.lastElementChild.classList.add("d-block", "valid-tooltip");
		form.querySelector("input#email").parentElement.lastElementChild.innerHTML =
			"Correto!";
	}
	let textarea = form.querySelector("textarea");
	if (textarea.value.trim().length == 0) {
		textarea.parentElement.lastElementChild.classList.remove("valid-tooltip");
		textarea.parentElement.lastElementChild.classList.add(
			"d-block",
			"invalid-tooltip"
		);
		textarea.parentElement.lastElementChild.innerHTML = "Campo obrigatório.";
		returnValue = false;
	} else {
		textarea.parentElement.lastElementChild.classList.remove("invalid-tooltip");
		textarea.parentElement.lastElementChild.classList.add(
			"d-block",
			"valid-tooltip"
		);
		textarea.parentElement.lastElementChild.innerHTML = "Correto!";
	}
	return returnValue;
};
