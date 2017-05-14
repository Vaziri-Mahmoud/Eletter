<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
public function __construct() {
        parent::__construct();
        $this->load->helper(
        	 array('form','url')

        	);
        $this->load->model('lettermodel');
        $this->load->library('session');
    }
	public function index()
	{
		$this->load->view('loginview');
	}
	 public function data_submitted() {
        $data = array(
            'u1' => $this->input->post('u_name'),
            'p1' => $this->input->post('u_pass')
                );
       $user=$this->lettermodel->getuser($data);
       if ($user!=null){
       	$this->session->set_userdata('name',$user);
       	$this->session->set_userdata('u1',$data['u1']);
       	$this->session->set_userdata('logged_in', 'True');

       	redirect('/main');

       }
       else{
       	   //set session    	$this->session->set_userdata('cmd',"Error");
       		redirect('Login');
       }
    }
}
