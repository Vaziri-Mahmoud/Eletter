<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lettermodel extends CI_Model{
public function __construct() {
        parent::__construct();

        
        $this->load->database();
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
	 public function getuser($data) {
        
        try {
            $this->db->reconnect();
            $sql = "CALL finduser (?, ?)";
            $uname=$this->db->escape_str($data['u1']);
            $pass=$this->db->escape_str($data['p1']);
            $query = $this->db->query($sql,$data);
			$result=$query->result();
         	$this->db->close();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $result;
        //print_r($data); For test
        //if (1)//if find in database 
       // $this->load->view("view_form", $data);
    }
}
