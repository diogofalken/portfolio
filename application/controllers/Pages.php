<?php
    class Pages extends CI_Controller {
        public function view($page = 'home') {
            if (!file_exists(APPPATH."views/pages/{$page}.php")) {
                show_404();
            }

            $data["page"] = $page;
            $this->load->model("Projects_model");
            $data["projetos"] = json_encode($this->Projects_model->getProjects());
            $this->load->view("templates/header", $data);
		    $this->load->view("pages/{$page}");
            $this->load->view("templates/footer", $data);
        }
    }