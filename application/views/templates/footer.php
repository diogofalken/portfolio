<footer class="bg-dark container-fluid">
    <div class="row p-3 h-75 align-items-center justify-content-center">
        <div class="mx-auto">
            <a href="https://github.com/diogofalken" target="_blank"><i
                    class="fab fa-github fa-3x fa-fw text-light"></i></a>
            <a href="https://www.linkedin.com/in/diogocosta99/" target="_blank"><i
                    class="fab fa-linkedin-in fa-3x fa-fw text-light"></i></a>
        </div>
    </div>
    <div class="bg-footer-down text-light h-25">
        <div class="container">
            <div class="text-center mx-auto">
                &copy; 2019 Diogo Costa - <a href="https://opensource.org/licenses/MIT" target="_blank"
                    rel="noopener noreferrer">MIT</a>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="//daybrush.com/scenejs/release/latest/dist/scene.min.js"></script>

<script text="text/javascript" src="<?php echo base_url("assets/js/{$page}.js"); ?>"></script>
<script text="text/javascript" src="<?php echo base_url("assets/js/core.js"); ?>"></script>

<script>
const allProjects = <?php echo $projetos?>;
const projetosCategoria = {};

allProjects.forEach(da => {
    let tools = JSON.parse(da["tools"]);

    document.getElementById("projetos").innerHTML +=
        `<div class="col-12 col-md-6 my-2"><div class="card shadow bg-white rounded"><img src="<?php echo base_url("assets/images/projects-thumbnails")?>/${da["imagem"]}" class="card-img-top" alt="MyCards Web"><div class="card-body"><h5 class="card-title text-center">${da["nome"]}</h5><hr><p class="card-text">${da["descricao"].substr(
				0,
				202
			)}...</p></div><div class="card-footer text-center"><i class="fas fa-arrow-right fa-2x text-info"></i></div></div></div>`;
    tools.forEach(tool => {
        projetosCategoria[tool] = projetosCategoria[tool] || [];
        projetosCategoria[tool].push(da);
    });
});
clickCards();
</script>

</body>

</html>