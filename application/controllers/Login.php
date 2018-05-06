<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Login extends CI_Controller{

	public function index(){
		switch ($this->input->post('action')) {

			case 'Login':
				$this->check_login();
				break;
			case 'register':
				redirect("/Login/register");
				break;
			default:		
				$this->load->view("Template/header");
				$this->load->view("Template/navigation_landing");
				$this->load->view("main");
				$this->load->view("Template/footer");
				break;
		}

		
	}



	public function check_login(){
		
		$this->load->library('Form_validation');
		$this->form_validation->set_rules('email', 'email', 'xss_clean|trim|required|valid_email');
		$this->form_validation->set_rules('password', 'password', 'xss_clean|required|min_length[6]');
		
		
		if ($this->form_validation->run() == FALSE)
			{
		     // $this->view_data['errors'] = validation_errors();
				// $this->load->view("Template/header");
				// $this->load->view("Template/navigation_landing");
				// $this->load->view("main");
				// $this->load->view("Template/footer");   
				redirect();
		}
		else
			{
		    
			$check = $this->input->post('email', true);   
			$this->load->model('user_model');
			$check_exist = $this->user_model->get_user($check);

			if ($check_exist) {
				
				$passw = md5($this->input->post('password', true) .
                              $this->config->item('encryption_key')
                              );
                    
                    if($passw === $check_exist['password'])
                    {
                        $this->session->set_userdata('loggedin_user', $check_exist);
                        redirect("/Logged");
                    }
                    else
                        die('password doesnt match');

			}
			else{
				 die('email doesnot exist');
			}

		}

			
			
	}


	public function register (){	
		$this->load->view("Template/header");
		$this->load->view("Template/navigation_landing");
		$this->load->view("register");
		$this->load->view("Template/footer");
	}

	public function check_register(){

		// die("meeeeeeeeeeeeeeee");

		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'email', 'xss_clean|trim|required|valid_email|is_unique[users.email]');
		
		$this->form_validation->set_rules('password', 'password', 'xss_clean|required|min_length[6]|max_length[30]');
		$this->form_validation->set_rules('confirm_password', 'Confirm password', 'xss_clean|required|matches[password]');
		$this->form_validation->set_rules('first_name', 'First Name', 'xss_clean|trim|required|max_length[30]');
		$this->form_validation->set_rules('last_name', 'First Name', 'xss_clean|trim|required|max_length[30]');

		$this->form_validation->set_rules('category', 'Category', 'xss_clean|trim|required|max_length[6]');
		$this->form_validation->set_rules('look_for', 'Looking for', 'xss_clean|trim|required|max_length[220]');
		$this->form_validation->set_rules('link', 'Link', 'trim|max_length[220]');
		$this->form_validation->set_rules('story', 'Story', 'xss_clean|trim|required|min_length[30]');
		$this->form_validation->set_rules('image', 'Image', 'xss_clean');

		$this->form_validation->set_message('is_unique', 'This email already exists');


		if ($this->form_validation->run() == FALSE)
			{
		     
		    	$this->load->view("Template/header");
				$this->load->view("Template/navigation_landing");
				$this->load->view("main");
				$this->load->view("Template/footer");
		    
		      

		}
		else
			{
			// $config['upload_path']   = './uploads/';
		 //    $config['allowed_types'] = 'gif|jpg|png';
		 //    $config['max_size']      = "100000";
		 //    $config['max_width']  = '10024';
			// $config['max_height']  = '7680';

		 //    $this->load->library('upload', $config);
		 //    $this->upload->data();
		 //    $data=array('upload_data'=>$this->upload->data());
		 //     var_dump($data);
		 //    die();	

		     $values = array(
        	'first_name'=> $this->input->post('first_name', true), 
            'last_name'=>$this->input->post('last_name', true),
            'email'=> $this->input->post('email', true) ,
            'password'=>md5($this->input->post('password', true) . $this->config->item('encryption_key')),
            'category'=>$this->input->post('category', true),
            'looking_for'=>$this->input->post('look_for', true),
            'link'=>$this->input->post('link', FALSE),
            'story'=>$this->input->post('story', true),
            'image'=>$this->input->post('image', true),
        	'created_at'=> date("Y-m-d H:i:s"),
        	'updated_at'=>date("Y-m-d H:i:s")
        	);
		     $this->load->model("user_model");
		     $this->user_model->add_user($values);
		     $this->session->set_userdata('sucessmsg', 'Thanks for your registration.please Login');
		     //$temp["temp"] = $this->session->userdata('successMsg');
		     	
				$this->load->view("Template/header");
				$this->load->view("Template/navigation_landing");
				$this->load->view("main");
				$this->load->view("Template/header");
			
				
		}

			
	}

	

	public function logout()
    {

        $this->session->unset_userdata('loggedin_user');
        $this->session->sess_destroy();
        redirect();
    }

   


    public function success(){
    	$this->load->view("Template/header");
    	$this->load->view("Template/navigation_landing");
    	$this->load->view('users_by_category');
    	$this->load->view("Template/footer");
    }
}	

?>