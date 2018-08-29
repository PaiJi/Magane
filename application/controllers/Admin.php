<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
    }
	public function index()
	{        
        if ($this->session->auth_status==true) {
            redirect('/Admin/control','refresh');
        }
        else{
            redirect('/Admin/login','refresh');
        }
    }
    public function login()
    {
        $this->load->model('admin/user/user');
        $loginStatus=$this->session->auth_status;
            if($loginStatus){
                redirect('/admin/control','refresh');
            }
            else{
                $this->load->view('admin/user/login');
            }
    }
    public function control()
    {
        if ($this->session->auth_status==true) {
            $this->load->view('admin/control/control');
        }
        else{
            redirect('/admin/login','refresh');
        }
        
    }
}
