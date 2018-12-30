<?php
/**
 * Created by PhpStorm.
 * User: Kio
 * Date: 5/30/2018
 * Time: 3:16 AM
 */

class register extends CI_Controller
{
    Public function __construct()
    {
        parent::__construct();
        $this->load->model('crud_model');


    }

    public function index()
    {
        $this->load->view('register');
    }

    public function register_user()
    {
        if(isset($_POST['register'])){
            $this->form_validation->set_rules('username', 'Username', 'required|is_unique[tbl_users.username]|xss_clean');
            $this->form_validation->set_rules('password', 'Username', 'required|xss_clean');
            $this->form_validation->set_rules('email', 'Email', 'required|xss_clean|is_unique[tbl_users.email]|valid_email');
            $this->form_validation->set_rules('password1', 'Confirm Password', 'matches[password]');
            $this->form_validation->set_message('matches', 'Password is not matched');
            $this->form_validation->set_message('valid_email', 'Email is invalid');
            $this->form_validation->set_message('is_unique', 'This %s is already taken');
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><a class="close" data-dismiss="alert">x</a><strong>', '</strong></div>');
             if ($this->form_validation->run() == FALSE) {
                $this->load->view('register');
            } else {
                $data = array("username" => $this->input->post('username'),
                    "email" => $this->input->post('email'), "password" => password_hash($this->input->post('password'), PASSWORD_BCRYPT));
                $result = $this->crud_model->add('tbl_users', $data);
                if($result){
                    $this->session->set_flashdata('msg', 'Register Successfully!');
                    redirect(base_url('register'));
                }
                else {
                    $data['error'] = "There was an error in your action";
                    $this->load->view('register', $data);
                }
            }
        }
        else {
            $this->load->view('register');
        }



    }

}