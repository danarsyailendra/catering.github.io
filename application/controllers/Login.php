<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('javascript');
        $this->load->library('form_validation');
        $this->load->library('email');
        $this->load->library('session');
        $this->load->model('catering_model');
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        if (isset($_SESSION['suser_email'])) {
            $data['include'] = 'main.php';
            $data['title'] = 'Catering Metra';
            $data['class_body'] = 'page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-md';
        } else {
            $data['include'] = 'login.php';
            $data['title'] = 'Login';
            $data['class_body'] = 'login';
            $data['style'] = "style='background-color: #ddd9d9!important;'";
        }
        $this->load->view('index', $data);
    }

    public function login() {
        $data = array(
            'email' => $this->input->post('username'),
            'password' => $this->input->post('password')
        );
        $row = $this->catering_model->login($data);
        if ($row->num_rows() > 0) {
            foreach ($row->result() as $sess) {
                $sess_data['suser_email'] = $sess->email;
                $sess_data['suser_name'] = $sess->nama;
                $sess_data['suser_role'] = $sess->role_id;
                $this->session->set_userdata($sess_data);
            }
            redirect('main');
        } else {
            $this->session->set_flashdata('alert','<div class="alert alert-danger">
                    <span><center> Username atau Password salah </center></span>
                </div>');
            redirect('login');
        }
    }

}
