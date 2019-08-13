<main>
    <section id="section_home">
        <div class="intro w-100 text-center text-light">
            <span id="typed"></span>
            <h1 id="logo" data-aos="fade-right" data-aos-duration="1500">Diogo Costa</h1>
            <p data-aos="fade-left" data-aos-duration="1500">You’ve got questions, I got answers.</p>
        </div>
        <div id="scroll_down" class="demo" data-aos="zoom-in" data-aos-duration="1500">
            <a href="#section_about"><span></span>More about me</a>
        </div>
    </section>

    <section class="container" id="section_about">

        <div class="row">
            <div class="col-12" id="about_header">
                <h3 class="text-center">About</h3>
                <hr id="span_title" class="bg-dark w-10">
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-4 my-2">
                <img src="<?php echo base_url("assets/images/avatar.jpg")?>" alt="" class="w-100 h-100" loading="lazy">
            </div>
            <div class="col-12 col-md-8 my-2">
                <div id="terminal">

                    <div class="terminal-window">

                        <div class="terminal-bar">

                            <div class="text-left">

                                <div class="circle circle-red"></div>
                                <div class="circle circle-orange"></div>
                                <div class="circle circle-green"></div>

                            </div>

                        </div>

                        <div class="terminal-body">
                            <span class="command">
                                diogocosta$ cat README.md <br>

                                I'm Diogo, I'm 19 years old and currently on my 3rd year of computer engineering at
                                ESTGV in Viseu.
                                I'm passionate about learning new technologies while working constantly to improve my
                                existing skillset.
                                Below you'll find details about tools that I'm familiar with, and a detailed list of
                                personal
                                projects<span class="cursor text-success">_</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row my-2 shadow p-1 bg-white rounded w-100 mx-auto" id="tools">
            <div class="col-12 text-center">
                <div class="row">
                    <div class="col-12">
                        <h4 id="title_icons">Tools</h4>
                        <hr class="hr_subtitle_icons bg-dark">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-2 my-auto icons" tool="HTML">
                        <i class="fab fa-html5 fa-5x fa-fw mr-2"></i>
                    </div>
                    <div class="col-6 col-md-2 my-auto icons" tool="CSS">
                        <i class="fab fa-css3-alt fa-5x fa-fw mr-2"></i>
                    </div>
                    <div class="col-6 col-md-2 my-auto icons" tool="JavaScript">
                        <i class="fab fa-js fa-5x fa-fw mr-2"></i>
                    </div>
                    <div class="col-6 col-md-2 my-auto icons" tool="Java">
                        <i class="fab fa-java fa-5x fa-fw mr-2"></i>
                    </div>
                    <div class="col-6 col-md-2 my-auto icons" tool="RobotFramework">
                        <i class="fas fa-robot fa-5x fa-fw mr-2"></i>
                    </div>
                    <div class="col-6 col-md-2 my-auto icons" tool="Android">
                        <i class="fab fa-android fa-5x fa-fw mr-2"></i>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-6 col-md-2 my-auto icons" tool="GitHub">
                        <i class="fab fa-github fa-5x fa-fw"></i>
                    </div>
                    <div class="col-6 col-md-2 my-auto icons" tool="Python">
                        <img src="<?php echo base_url("assets/images/icons/python.png")?>" alt="Python">
                    </div>
                    <div class="col-6 col-md-2 my-auto icons" tool="PHP">
                        <img src="<?php echo base_url("assets/images/icons/php.png")?>" alt="php"></i>
                    </div>
                    <div class="col-6 col-md-2 my-auto icons" tool="C++">
                        <img src="<?php echo base_url("assets/images/icons/c++.png")?>" alt="c++">
                    </div>
                    <div class="col-6 col-md-2 my-auto icons" tool="C">
                        <img src="<?php echo base_url("assets/images/icons/c.png")?>" alt="c">
                    </div>
                    <div class="col-6 col-md-2 my-auto icons" tool="MySql">
                        <img src="<?php echo base_url("assets/images/icons/mysql.png")?>" alt="mysql">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container" id="section_projects">
        <div class="row">
            <div class="col-12" id="about_header">
                <h3 class="text-center">Portfolio <span id="project_type"></span></h3>
                <hr id="span_title" class="bg-dark w-10">
            </div>
        </div>
        <div class="row" id="projetos">

        </div>
    </section>

    <div class="modal fade p-0" id="modalProject" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_project_name"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="" class="w-100" alt="MyCards Web">
                    <p id="modal_description" class="my-2"></p>
                    <p class="text-center pt-3 text-danger">For more info you can see the github repo and a live
                        version.
                    </p>
                </div>
                <div class="modal-footer justify-content-center">
                    <a href="" target="_blank"><i class="fab fa-github fa-3x p-2"></i></a>
                    <a href="" target="_blank"><i class="fas fa-globe fa-3x p-2"></i></a>

                </div>
            </div>
        </div>
    </div>

    <section class="container" id="section_contact">
        <div class="row">
            <div class="col-12" id="about_header">
                <h3 class="text-center">Contact</h3>
                <hr id="span_title" class="bg-dark w-10">
            </div>
        </div>
        <div class="row">
            <div class="col-12 my-4">
                <?php echo form_open("Contact/contactMe", "class=\"form-row\" onsubmit=\"return validation(this);\""); ?>
                <!--Grid column-->
                <div class="col-md-12 mb-4">
                    <div class="form-row mb-0">
                        <input type="text" id="name" name="name" class="form-control shadow p-3 bg-white rounded"
                            placeholder="Name...">
                        <div class="form-text"></div>
                    </div>
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-md-12 mb-4">
                    <div class="form-row mb-0">
                        <input type="email" id="email" name="email" class="form-control shadow p-3 bg-white rounded"
                            placeholder="Email...">
                        <div class="form-text"></div>
                    </div>
                </div>
                <!--Grid column-->
                <div class="col-md-12 mb-4">
                    <div class="form-row mb-0">
                        <input type="text" id="subject" name="subject" class="form-control shadow p-3 bg-white rounded"
                            placeholder="Subject">
                        <div class="form-text"></div>
                    </div>
                </div>
                <!--Grid column-->
                <div class="col-md-12 mb-4">
                    <div class="form-row ">
                        <textarea type="text" id="message" name="message" rows="6"
                            class="form-control shadow p-3 bg-white rounded"
                            placeholder="Write your message here...."></textarea>
                        <div class="form-text"></div>
                    </div>
                </div>
                <div class="row w-100">
                    <div class="col-12 p-0 text-center">
                        <button type="submit" class="btn btn-primary p-2">Submit</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </section>
</main>