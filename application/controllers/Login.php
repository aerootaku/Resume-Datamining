<?php
/**
 * Created by PhpStorm.
 * User: Kio
 * Date: 5/26/2018
 * Time: 10:02 AM
 */

class login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth');

    }

    public function index()
    {
    	$title = array("title"=>"sample");
        if($this->session->has_userdata('is_login')){
        	$this->load->view('admin/dashboard');
        }
        else{
            $this->load->view('login', $title);
        }

    }

    public function authenticate()
    {
    	if(isset($_POST['login'])){
    		$rules = array(
    			array(
    				"field"=>"username",
					"label"=>"Username",
					"rules"=>"required|trim|xss_clean"
					),
				array(
					"field"=>"password",
					"label"=>"Password",
					"rules"=>"required|trim|xss_clean"
				)
			);

    		$this->form_validation->set_rules($rules);
    		if($this->form_validation->run() == false){
    			$this->load->view('login');
			}
			else{
    			$data = array(
    				"username"=>$_POST['username'],
					"password"=>$_POST['password']
				);

    			$auth = $this->auth->login('tbl_users', $data);
    			if($auth == true){
    				$session_data = array(
    					"id"=>$auth['id'],
						"username"=>$auth['username'],
						"is_login"=>true
					);

    				$this->session->set_userdata($session_data);
    				redirect(base_url('admin/dashboard'));
				}
				else{
					$data = array(
						"error"=>"Invalid username / Password",
						"sample"=>"sample"
					);
					$this->load->view('login', $data);
				}
			}
		}
    }

}
