<?php
class User extends CI_Model {

    public $username;
    public $password;

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->database();
        $this->load->helper('url');

    }
    public function user_exist()
    {
        $username=$this->input->post('username');
        $this->db->where('user_login', $username);
        $query=$this->db->get('magane_users');
        $err=$this->db->error();
        if(($data=$query->row_array())==null){
            return false;
        }
        else{
            return true;
        }
    }
    public function login()
    {
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $this->db->where('user_login',$username);
        $query=$this->db->get('magane_users');
        $data=$query->row_array();
        if($data['user_pass']==$password)
        {
            //echo ('login success');
            return true;
        }
        else{
            return false;
        }
    }
    public function register()
    {

    }
    public function forget()
    {

    }
}
?>
