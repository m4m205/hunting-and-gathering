<?php

class Users extends CI_Controller{
	public function index(){
			$this->load->view('users/forms');
	}

	public function action(){
		$action = $this->input->post('action', true);
		switch( $action ){


			case 'login':
				echo 'Login ';
				break;


				// $obj = new ClassName();
				// $shahrokh = array(
				// 	$irene,
				// 	$ivas,
				// 	$mahmod,
				// 	$johan
				// );
				// $obj->sheril( $shahrokh);




			case 'register':
				var_dump($_POST);
				echo '<br>';

				$this->load->model('User_model');
				$this->User_model->add_user();

				break;
			default:
				die('Hey Man Go away.... F WORD');
				break;
		}
	}
}