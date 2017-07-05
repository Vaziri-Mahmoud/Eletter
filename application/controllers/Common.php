<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Common extends CI_Controller {
	public function __construct() {
        parent::__construct();
         $this->load->library('session');
         //$loged=$this->session->userdata();
         //print_r($loged);
         if ($this->session->userdata('logged_in')=='True') {
         	$this->load->helper(
        	 array('form','url')

        	);
        	$this->load->model('lettermodel');
         }
         else {
				//redirect('Login');
         	header("Location: Login");
die();
	         }
	     }
public function setting()
{
	$setting['admin']=0;
	$setting['log']=null;
	$setting['users']=null;
	$user['user']=$this->session->userdata('u1');
	$user['role']='admin';
	$data['title']="تنظیمات";
	$data['user']=$this->session->userdata('name');
	$permission=$this->lettermodel->getpermission($user);
	if ($permission!=null) {
		$setting['admin']=1;
		$setting['log']=$this->lettermodel->getlog();
		$setting['users']=$this->lettermodel->getuserlist();
		$setting['permissions']=$this->lettermodel->getallpermission();
	}
	$this->load->view('header',$data);
	$this->load->view('setting',$setting);
	$this->load->view('footer');
}
public function delete(){
	$user = $this->input->post();
	//print_r($user);
	$this->lettermodel->deleteuser($user['users']);
	redirect('/Main');
}

public function adduser(){
	$data['pass'] = $this->input->post('password');
	$data['name'] = $this->input->post('name');
	$data['position'] = $this->input->post('position');
	$data['user']= $this->input->post('username');
	$data['permissions'] = $this->input->post('permissions');
	foreach($data['permissions'] as $per){
		$user['permission']=$per;
		$user['user']=$this->input->post('username');
		$this->lettermodel->setpermission($user);//***
	}
	$this->lettermodel->setuser($data);
	redirect('/Main');
}

public function updatepass(){
	$data['pass'] = $this->input->post('password');
	$data['permissions'] = $this->input->post('permissions');

	$this->lettermodel->setpass($data);
	redirect('/Main');
}
public function updatepermission(){
	$p['permissions'] = $this->input->post('permissions');

	foreach($p['permissions'] as $per){
		$data['permission']=$per;
		$data['users'] = $this->input->post('users1');
		$this->lettermodel->setpermission($data);//***
	}
	redirect('/Main');
}

public function logout()
{
    $user_data = $this->session->all_userdata();
        foreach ($user_data as $key => $value) {
            if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
                $this->session->unset_userdata($key);
            }
        }
    $this->session->sess_destroy();
    redirect('login');
}

}
?>
