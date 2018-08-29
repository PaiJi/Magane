<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
    }
	public function getone()
	{
        $this->load->model('magane/magane');
        $this->magane->getOne();
    }
    public function login()
    {
        $this->load->model('admin/user/user');
        if($this->input->get('username')&&$this->input->get('password')){
            $loginStatus=$this->user->login();
            if ($loginStatus) {
                $this->output->set_content_type('application/json')->set_output(json_encode(array('status'=>'1','msg'=>'Login success.LINK START.')));
            }
           else{
            $this->output->set_content_type('application/json')->set_output(json_encode(array('status'=>'0','msg'=>'Login faild.')));
           }
        }
        else{
            $this->output->set_content_type('application/json')->set_output(json_encode(array('status'=>'0','msg'=>'Missing value.')));
        }
    }
}
