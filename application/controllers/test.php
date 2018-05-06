irenejoby [4:21 PM] 
<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_controller
{

    public function index()
    {
        $this->load->view('users/forms');
    }
    public function action()
    {
        // $this->input->post('action', true);
        // var_dump($this->input->post('action', true));
        // var_dump($_POST['action']);
        // die('irene');
        $action = $this->input->post('action', true);
        switch($action)
        {
            case 'login':
            $this->form_validation->set_rules('email_login', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('pass', 'Password', 'trim|required|min_length[4]|max_length[8]');

            if($this->form_validation->run()=== FALSE)
            {
                $this->load->view('users/forms');
                
            }
            else
            {
                $email = $this->input->post('email_login', true);
                $this->load->model('User_model');
                $isemail = $this->User_model->get_user_by_email($email);
                if($isemail)
                {
                    $passw = md5($this->input->post('pass', true) .
                              $this->config->item('encryption_key')
                              );
                    $this->input->post('pass', true);
                    if($passw === $isemail['paswword'])
                    {
                        $this->session->set_userdata('loggedinUser', $isemail);
                        redirect('/user_profile');
                    }
                    else
                        die('password doesnt match');
                    
                }
                else{
                    die('email doesnot exist');

                }
            }

                break;
// Registration validation******************************************************************************
            case 'register':

// $this->form_validation->set_rules('email', 'restart', 'callback_email_exist');
            
            $this->form_validation->set_rules('fname', 'First Name', 'trim|required');
            $this->form_validation->set_rules('lname', 'Last Name', 'trim|required');    
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users_temp.email]');
            $this->form_validation->set_rules('pass', 'Password', 'trim|required|min_length[4]|max_length[8]');
            $this->form_validation->set_rules('repass', 'Repeat pass', 'trim|required|matches[pass]');

            $this->form_validation->set_message('is_unique', 'This email already exixts');


            if($this->form_validation->run()== FALSE)
            {
                $this->load->view('users/forms');
                
            }
else
{

            $values = array(
            'fname' => $this->input->post('fname', true),
            'lname' => $this->input->post('lname', true),
            'password' => md5($this->input->post('pass', true) .
                              $this->config->item('encryption_key')
                              ),
            'email' => $this->input->post('email', TRUE),
            // 'repass' => $this->input->post('repass', true),
            'updated_at' => date("Y-m-d H:i:s"),
            'created_at' => date("Y-m-d H:i:s")
            
           );

       
       // die()

            $this->load->model('User_model');
            $myarray = $this->User_model->add_user($values);
            $this->session->set_userdata('sucessmsg', 'Thanks for your registration.please Login');

            redirect();
            // var_dump($myarray);

}            
                break;
            default:
                echo 'Sorry';
                break;
        }
}
    public function profile()
    {
        $user = $this->session->userdata('loggedinUser');
    if(!$user)    
    {
        redirect();    
    }

        // var_dump($user);
        $this->load->view('users/profile', $user);
    
    }
    public function logout()
    {
        $user = $this->session->unset_userdata('loggedinUser');
        redirect();
    }
    
}

?>