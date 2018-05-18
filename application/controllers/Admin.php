<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
        $this->load->helper(array('form', 'url'));//表单类加载
        $this->load->library('form_validation');//表单验证加载
        $this->form_validation->set_rules('username', 'Username', array('required',array('user_exist',array($this->user,'user_exist'))));
        $this->form_validation->set_message('user_exist', '这个世界线并不知晓你的存在');
        $this->form_validation->set_rules('password', 'Auth', 'required');
        $this->form_validation->set_message('required', '{field} 为必要数据');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('admin/user');
        }
        else
        {
            $status=$this->user->login();
            if($status){
                $this->session->auth_status=true;
                redirect('/admin/control','refresh');
                
            }
        }
    }
    public function control()
    {
        if ($this->session->auth_status==true) {
            $this->load->view('admin/control');
        }
        else{
            redirect('/admin/login','refresh');
            
        }
        
    }
}
