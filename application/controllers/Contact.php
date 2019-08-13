<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
    function __construct() {
        parent::__construct();
    
    }
    
    public function contactMe() {
        $data = array(
            'Name' => $this->input->post('name', true),
            'Email' => $this->input->post('email', true),
            'Subject' => $this->input->post('subject', true),
            'Message' => $this->input->post('message', true)
        );

        if($this->sendEmail($data)) {
            redirect();
        }
    }
    
    private function sendEmail($data) {
        $email = array(
            "protocol" => "smtp",
            "smtp_host" => "andromeda.virtit.pt",
            "smtp_user" => "support@diogomarques.tk",
            "smtp_pass" => "-Support2019",
            "smtp_port" => 465,
            "smtp_crypto" => "ssl",
            "mailtype" => "text"
        );
        
        $this->load->library("email", $email);

        $this->email->from($data["Email"], $data["Name"]);
        $this->email->to("business@diogomarques.tk");

        $this->email->subject($data["Subject"]);
        $this->email->message($data["Message"]);

        return $this->email->send();
    }
}