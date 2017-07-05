<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
public function __construct() {
        parent::__construct();
<<<<<<< HEAD
         $this->load->library('session');
         //$loged=$this->session->userdata();
         //print_r($loged);
         if ($this->session->userdata('logged_in')=='True') {
         	$this->load->helper(
        	 array('form','url')

        	);
        	$this->load->model('lettermodel');

        	date_default_timezone_set("iran");
        	$data['t1']=date("Y-m-d h:i:sa");
        	$data['u1']=$this->session->userdata('u1');
            $this->lettermodel->setlog($data);
         }
         else {
				//redirect('Login');
         	header("Location: Login");
    die();
	         }
    }

        public function inbox()
        {

                $user['u1']=$this->session->userdata('u1');
                $letter['rec']=$this->lettermodel->getletterbyreciver($user);

                //$letter['cop']=$this->lettermodel->getletterbycop($user);
                $letter['ref']=$this->lettermodel->getletterbyref($user);
                $letter['rec'] = array_merge($letter['rec'], /*$letter['cop'],*/$letter['ref']);
                $countletter = count($letter['rec']);
                //$countletter += count($letter['cop']);
               $countletter +=  count($letter['ref']);
               $letter['countletter']= $countletter ;
               //echo $countletter;
               // print_r($letter);
				$data['title']="دریافتی ها";
				$data['user']=$this->session->userdata('name');
     			$this->load->view('header',$data);
               $this->load->view('inbox',$letter);
                $this->load->view('footer');
        }

		public function showmessage(){
	    $data['id'] = $this->input->get('id');
	    $data['u1']=$this->session->userdata('u1');
        $letter['rec']=$this->lettermodel->getbyreciverid($data);
	    $letter['cop']=$this->lettermodel->getbycopid($data);
        $letter['ref']=$this->lettermodel->getbyrefid($data);
        $letter['imp']=$this->lettermodel->getbyimpid($data);
        $titleanduser['title']="دریافتی ها";
	    $titleanduser['user']=$this->session->userdata('name');
        $letter['userlist']=$this->lettermodel-> getuserlist();

	    $letter['rec'] = array_merge($letter['rec'], $letter['cop'],$letter['rec'],$letter['imp']);
     	    $this->load->view('header',$titleanduser);
            $this->load->view('showmessage',$letter);
            $this->load->view('footer');

		}
        public function messageref(){
            $headerdata['user']=$this->session->userdata('name');
            $data=$this->input->post();
            if ($data['recivers']!=null){
		foreach ($data['recivers'] as $value) {
            $a=array('id' => $data['id'],'user' =>$value);
          //  print_r($a);
			$this->lettermodel-> setref(array('id' => $data['id'],'user' =>$value));
		}

	}
  $this->load->view('composecomplete', $data);

        }

	public function index()
	{
		//return $this->load->template('home');

		$data['title']="صفحه اصلی";
		$data['user']=$this->session->userdata('name');
     	$this->load->view('header',$data);
        $user['u1']=$this->session->userdata('u1');
        $letter['rec']=$this->lettermodel->getletterbyreciver($user);

        $letter['cop']=$this->lettermodel->getletterbycop($user);
        $letter['ref']=$this->lettermodel->getletterbyref($user);
        $letter['imp']=$this->lettermodel->getletterbyimp($user);
        $countletter = count($letter['rec']);
        $countletter += count($letter['cop']);
        $countletter +=  count($letter['ref']);
        $sendforview['countletter']=$countletter;
        $sendforview['countletterimp']=count($letter['imp']);
        $this->load->view('home',$sendforview);
        $this->load->view('footer');
	}

	public function composeletter(){
		$data['title']="ارسال";
		$data['user']=$this->session->userdata('name');
		$data['id']=$this->lettermodel->getlastid();
		$data['id']=$data['id'][0]->id+1;

     	$this->load->view('header',$data);
     	$this->load->view('composeview',$data);
     	$this->load->view('footer');
	}

	public function composerecivers(){
		$hasfile=0;
		$headerdata['title']="ارسال";
		$headerdata['user']=$this->session->userdata('name');
		$userlist['user']=$this->session->userdata('name');
		$data=$this->input->post();
		 $config['upload_path']   = './uploads/';
         $config['allowed_types'] = 'doc|docx|jpg';
         $config['max_size']      = 100;
         $this->load->library('upload', $config);
			 $upload_data = $this->upload->data();
         if ( ! $this->upload->do_upload('userfile')) {
         	if ($upload_data['file_name']=="")
         	{
         		$hasfile=0;

         	}
         	else{
            //$error = array('error' => $this->upload->display_errors());
           // $this->load->view('upload_form', $error);
            print_r($this->upload->display_errors());}
         }

         else {
            $data = array('upload_data' => $this->upload->data());
            //$this->load->view('upload_success', $data);
            $hasfile=1;
            $this->lettermodel-> setfile(array('id' => $data['id'], 'file'=>$upload_data['file_name']));

         }
         $letter1['id']=$data['id'];
         $letter1['date']=$data['date'];
         $letter1['sender']=$this->session->userdata('u1');//$data['sender'];
         $letter1['subject']=$data['subject'];
         $letter1['text']=$data['text'];
         $letter1['file']=$hasfile;

        $this->lettermodel->setletter($letter1);

        $userlist['letterid']= $data['id'];

        $userlist['userlist']=$this->lettermodel-> getuserlist();
        $this->load->view('header',$headerdata);
     	$this->load->view('reciversview',$userlist);
     	$this->load->view('footer');
	}
/*	        public function do_upload()
        {
        		$hasfile=0;
				$headerdata['title']="ارسال";
				$headerdata['user']=$this->session->userdata('name');
				$userlist['user']=$this->session->userdata('name');
				$data=$this->input->post();
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('upload_success', $data);
                }
        }
        */
public function composecomplete()
{
	$headerdata['title']="ارسال شد.";
	$headerdata['user']=$this->session->userdata('name');
	$target['recivers'] = $this->input->post('recivers');
	$target['id'] = $this->input->post('letterid');
	$target['coprecivers'] = $this->input->post('coprecivers');
	if ($target['recivers']!=null){
		foreach ($target['recivers'] as $value) {
			$this->lettermodel-> setreciver(array('id' => $target['id'],'user' =>$value));
		}
	}
	if ($target['coprecivers']!=null){
		foreach ($target['coprecivers'] as $value) {
			$this->lettermodel->  setcopreciver(array('id' => $target['id'],'user' =>$value));
		}
	}
		$this->load->view('header',$headerdata);
     	$this->load->view('composecomplete',$target);
     	$this->load->view('footer');
}


	 function searchbyid()
		{
			$headerdata['user']=$this->session->userdata('name');
      $data['user']=$this->session->userdata('u1');//$this->session->userdata('name');
			$data['id']= $this->input->get('id');
      //echo $d['id']; $data['u1']=$this->session->userdata('u1');
      $letter['letter']=$this->lettermodel->getallbyid($data);
			$headerdata['title']="جست و جو بر اساس شناسه";
     	$this->load->view('header',$headerdata);
    $this->load->view('searchbyidview',$letter);
//  var_dump($letter['letter']);
// print all the available keys for the arrays of variables
//print_r(array_keys(get_defined_vars()));
      $this->load->view('footer');
		}
function search(){

  $data['title']='جست و جو';
  $data['user']=$this->session->userdata('name');
  $this->load->view('header',$data);
  $this->load->view('searchview',$data);
  $this->load->view('footer');

}
	function logout()
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
=======
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
		echo "Hi";
		
	}
	
>>>>>>> 09ab9f107d724c8185a0269c6dbae278064e9c6c
}
