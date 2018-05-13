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
	public function index()
	{
        //$this->load->view('welcome_message');
        $this->load->database();
        $query=$this->db->query('SELECT max(id) FROM magane_posts');
        $row=$query->row_array();
        $MAX_ID=$row['max(id)'];
        $POSTS_NUM=$MAX_ID-0;
        $Single_POST_ID=rand(0,$POSTS_NUM);
        //echo $Single_POST_ID;
        $query="SELECT * FROM magane_posts where ID=?";
        $query=$this->db->query($query,array($Single_POST_ID));
        $row=$query->row_array();
        //$row=$query->row_array();
        //echo $row['post_content'];
        //var_dump($row);
        //echo $row['post_content'];
        echo json_encode($row);
        
    }
    public function login()
    {
        $this->load->model('admin/user/user');
        $this->user->user_exist();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->view('admin/user');
    }
}
