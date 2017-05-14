<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lettermodel extends CI_Model{
    public function __construct() {
        parent::__construct();

        $newdb = $this->load->database();
        //$this->load->database();
    }
    public function setlog($data) {
    	try {
         	$this->db->reconnect();
            $sql = "CALL setlog (?,?)";
            //$logdata['t1']=$this->db->escape_str($data['t1']);
            //$logdata['u1']=$this->db->escape_str($data['u1']);
            $this->db->query($sql,$data);
         	$this->db->close();
         	} catch (Exception $e) {
            echo $e->getMessage();
        }
        } 
        
        
    
	 public function getuser($data) {
        
        try {
            $this->db->reconnect();
            $sql = "CALL finduser ('".$data['u1']."', '".$data['p1']."')";
            //$uname=$this->db->escape_str($data['u1']);
           // $pass=$this->db->escape_str($data['p1']);
            $query = $this->db->query($sql,$data);
			$result=$query->result();
         	$this->db->close();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $result;
    }

    public function getletterbyreciver($data){
    	try {
         	$this->db->reconnect();
            $sql = "CALL  getletterbyreciver ('". $data['u1'].'reciver'."')";
            //$logdata['u1']=$this->db->escape_str($data['u1']);
            $query = $this->db->query($sql);
            //$query=$newdb->query($sql,$data);
			$result=$query->result();
         	$this->db->close();
         	} catch (Exception $e) {
            echo $e->getMessage();
        }
         return $result;
    }
    public function getletterbycop($data){
    	try {
         	$this->db->reconnect();
            $sql = "CALL  getletterbyreciver ('". $data['u1']."')";
            //$logdata['u1']=$this->db->escape_str($data['u1']);
            $query = $this->db->query($sql);
            //$query=$newdb->query($sql,$data);
			$result=$query->result();
         	$this->db->close();
         	} catch (Exception $e) {
            echo $e->getMessage();
        }
         return $result;
    }
    public function getletterbyref($data){
    	try {
         	$this->db->reconnect();
            $sql = "CALL  getletterbyreciver ('". $data['u1']."')";
            //$logdata['u1']=$this->db->escape_str($data['u1']);
            $query = $this->db->query($sql);
            //$query=$newdb->query($sql,$data);
			$result=$query->result();
         	$this->db->close();
         	} catch (Exception $e) {
            echo $e->getMessage();
        }
         return $result;
    }
    public function getletterbyimp($data){
       /* try {
            $this->db->reconnect();
            $sql = "CALL  getletterbyreciver ('". $data['u1']."')";
            //$logdata['u1']=$this->db->escape_str($data['u1']);
            $query = $this->db->query($sql);
            //$query=$newdb->query($sql,$data);
            $result=$query->result();
            $this->db->close();
            } catch (Exception $e) {
            echo $e->getMessage();
        }
         return $result;*/
	$a=[];
	return $a;
    }


    public function  setletter($data){
    	  try {
            $this->db->reconnect();
            $sql = "CALL setletter ('".$data['id']."','".$data['date']."','".$data['sender']."','".$data['subject']."','".$data['text']."','".$data['file']."','".$data['STID']."')";
            //$logdata['u1']=$this->db->escape_str($data['u1']);
            //$query=$newdb->query($sql,$data);
            $this->db->query($sql);
            $this->db->close();
            } catch (Exception $e) {
            echo $e->getMessage();
        }

    }
     public function  getlastid(){
    	  try {
            $this->db->reconnect();
            $sql = "CALL getlastletterid ()";
            //$logdata['u1']=$this->db->escape_str($data['u1']);
            //$query=$newdb->query($sql,$data);
            $query = $this->db->query($sql);
            //$query=$newdb->query($sql,$data);
            $result=$query->result();
            $this->db->close();
            $this->db->close();
            } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $result;

    }
    public function   getuserlist(){
    	  try {
            $this->db->reconnect();
            $sql = "CALL  getuserlist ()";
            //$logdata['u1']=$this->db->escape_str($data['u1']);
            //$query=$newdb->query($sql,$data);
            $query = $this->db->query($sql);
            //$query=$newdb->query($sql,$data);
            $result=$query->result();
            $this->db->close();
            $this->db->close();
            } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $result;

    }
     public function   setreciver($data){
    	  try {
            $this->db->reconnect();
            $sql = "CALL  setreciver ('".$data['id']."','".$data['user']."','".'reciver'."')";
            //$logdata['u1']=$this->db->escape_str($data['u1']);
            //$query=$newdb->query($sql,$data);
            $this->db->query($sql);
            $this->db->close();
            } catch (Exception $e) {
            echo $e->getMessage();
        }

    }

     public function   setref($data){
    	  try {
            $this->db->reconnect();
            $sql = "CALL  setreciver ('".$data['id']."','".$data['user']."','".'ref'."')";
            //$logdata['u1']=$this->db->escape_str($data['u1']);
            //$query=$newdb->query($sql,$data);
            $this->db->query($sql);
            $this->db->close();
            } catch (Exception $e) {
            echo $e->getMessage();
        }

    }


         public function    setcopreciver($data){
    	  try {
            $this->db->reconnect();
            $sql = "CALL   setreciver ('".$data['id']."','".$data['user']."','".'cop'."')";
            //$logdata['u1']=$this->db->escape_str($data['u1']);
            //$query=$newdb->query($sql,$data);
            $this->db->query($sql);
            $this->db->close();
            } catch (Exception $e) {
            echo $e->getMessage();
        }

    }
    public function setfile($data){
    	  try {
            $this->db->reconnect();
            $sql = "CALL setfile ('".$data['id']."','".$data['name']."')";
            //$logdata['u1']=$this->db->escape_str($data['u1']);
            //$query=$newdb->query($sql,$data);
            $this->db->query($sql);
            $this->db->close();
            } catch (Exception $e) {
            echo $e->getMessage();
        }

    }
     public function  getbyreciverid($data){
    	try {
            $this->db->reconnect();
            $sql = "CALL   getbyreciverid (". $data['id'].",'".$data['u1']."','".'reciver'."')";
            $query = $this->db->query($sql);
           $result=$query->result();
            $this->db->close();
            } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $result;
    }
     public function  getbycopid($data){
    	try {
            $this->db->reconnect();
            $sql = "CALL   getbyreciverid (". $data['id'].",'".$data['u1']."','".'cop'."')";
            $query = $this->db->query($sql);
           $result=$query->result();
            $this->db->close();
            } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $result;
    }
             public function  getbyrefid($data){
    	try {
            $this->db->reconnect();
            $sql = "CALL   getbyreciverid (". $data['id'].",'".$data['u1']."','".'ref'."')";
            $query = $this->db->query($sql);
           $result=$query->result();
            $this->db->close();
            } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $result;
    }
    public function getbyimpid($data){
    	/*try {
            $this->db->reconnect();
            $sql = "CALL getbyimpid (". $data['id'].",'".$data['u1']."')";
            $query = $this->db->query($sql);
            $result=$query->result();
            $this->db->close();
            } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $result;*/
	$a=[];
	return $a;
}


public function   setcheckedimp ($data){
 try {
            $this->db->reconnect();
            $sql = "CALL   setcheckedimp ('".$data['id']."','".$data['name']."')";
            //$logdata['u1']=$this->db->escape_str($data['u1']);
            //$query=$newdb->query($sql,$data);
            $this->db->query($sql);
            $this->db->close();
            } catch (Exception $e) {
            echo $e->getMessage();
        }
	
}
public function setcheckedrec ($data){
 try {
            $this->db->reconnect();
            $sql = "CALL   setcheckedimp ('".$data['id']."','".$data['name']."')";
            //$logdata['u1']=$this->db->escape_str($data['u1']);
            //$query=$newdb->query($sql,$data);
            $this->db->query($sql);
            $this->db->close();
            } catch (Exception $e) {
            echo $e->getMessage();
        }
	
}
	

public function  getpermission($data){
	try {
            $this->db->reconnect();
            $sql = "CALL getpermission ('". $data['user']."','".$data['role']."')";
            $query = $this->db->query($sql);
            $result=$query->result();
            $this->db->close();
            } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $result;
}
public function getlog(){
	try {
            $this->db->reconnect();
            $sql = "CALL getlog ()";
            $query = $this->db->query($sql);
            $result=$query->result();
            $this->db->close();
            } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $result;
}
 public function  deleteuser ($data){
 try {
            $this->db->reconnect();
            $sql = "CALL  deleteuser ('".$data."')";;
            $this->db->query($sql);
            $this->db->close();
            } catch (Exception $e) {
            echo $e->getMessage();
        }
	
}
 public function  setnewuser ($data){
 try {
            $this->db->reconnect();
            $sql = "CALL  setnewuser ('".$data['name']."','".$data['puser']."','".$data['ppos']."','".$data['ppass']."')";;
            $this->db->query($sql);
            $this->db->close();
            } catch (Exception $e) {
            echo $e->getMessage();
        }
	
}
 public function  setpass ($data){
 try {
            $this->db->reconnect();
            $sql = "CALL  setpass ('".$data['user']."','".$data['pass']."')";;
            $this->db->query($sql);
            $this->db->close();
            } catch (Exception $e) {
            echo $e->getMessage();
        }
	
}
public function getall($data){
	try {
            $this->db->reconnect();
            $sql = "CALL getall ('".$data."')";
            $query = $this->db->query($sql);
            $result=$query->result();
            $this->db->close();
            } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $result;
}
public function getallbyid($data){
	try {
            $this->db->reconnect();
            $sql = "CALL getallbyid ('".$data['user']."','".$data['id']."')";
            $query = $this->db->query($sql);
            $result=$query->result();
            $this->db->close();
            } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $result;
}
}


?>
