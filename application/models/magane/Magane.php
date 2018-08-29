<?php
class Magane extends CI_Model{
    public function __construct()
    {
        //parent::__construct();
        // Your own constructor code
        $this->load->database();
        //$this->load->helper('url');

    }
public function getOne(){
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
}
?>
