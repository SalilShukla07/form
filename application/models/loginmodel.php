<?php
class loginmodel extends CI_Model
{
	public function login($username, $pass)
{   
    $q=$this->db->where(['user_name'=>$username,'user_password'=>$pass])->get('login');
   // print_r($this->db->last_query());
	if($q->num_rows())
	   {
		   return $q->row()->id;
	   }
	   else{
		   return False;
	   }
}
}








?>