<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
public function __construct() {
        parent::__construct();
        $this->load->helper(
        	 array('form','url')

        	);
        $this->load->model('lettermodel');
    }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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
       	redirect('/main');
       }
        //print_r($data); For test
        //if (1)//if find in database 
       // $this->load->view("view_form", $data);
    }
}
