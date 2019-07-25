<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects_model extends CI_Model {
    public function getProjects() {
      $query = $this->db->get('projetos');
      return $query->result_array();
    }
}

?>