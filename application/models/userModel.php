
   
<?php
class userModel extends CI_Model
{
    function __construct() {
		parent::__construct();
        $this->load->libraries('mongo_db');
		
	}
    
    public function addUser($data)
    {
        $this->mongo_db->insert('users',$data);
 // $this->db->insert('users',$data);
  redirect('userController/viewUser','refresh');
        
    }
    public function getuser(){
        $res = $this->mongo_db->get('users');
       // $res = $this->db->get('users');
        return  $res;
    }
    public function deleteById($id){
        $this->db->where('id',$id);
        $this->db->delete("users");
        redirect('userController/viewUser','refresh');
    }
    public function getById($id){
        $this->db->where('id',$id);
        $res = $this->db->get('users');
        return $res;
    }
    public function updateById($id,$data){
        $this->db->where('id',$id);
       $this->db->update('users',$data);
       redirect('userController/viewUser','refresh');
    }
}




?>
