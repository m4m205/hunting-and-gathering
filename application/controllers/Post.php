<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Post extends CI_Controller{

	public function show(){
		$this->load->view("post_page");

	}

	public function new_post (){

		$new_post = array(
        	'users_idusers'=> $this->session->userdata("loggedin_user", true)["idusers"], 
            'post'=>$this->input->post('myText', true)
            );
		$this->load->model("user_model");
		$this->user_model->add_post($new_post);
		$this->load->view("post_page");
	}




}	