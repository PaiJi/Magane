<?php
class User extends CI_Model {

    public $username;
    public $password;

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->database();
    }
    public function user_exist()
    {
        $username=$this->input->post('username');
        echo $username;

    }
    public function login()
    {

    }
    public function register()
    {

    }
    public function forget()
    {

    }
}
?>