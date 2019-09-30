<?php
class Auth extends CI_Controller
{
public function __construct()
        {
         parent::__construct();
         $this->load->model('auth_model');
             $this->load->library(array('form_validation','session'));
			 $this->load->helper(array('url','html','form'));  
                 $this->user_id = $this->session->userdata('user_id');
        }
  
  
    public function index()
    {
     $this->load->view('login');
    }
    public function login()
        {
 
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_message('required', 'Enter %s');
 
        if ($this->form_validation->run() === FALSE)
        {  
            $this->load->view('login');
        }
        else
        {   
            $data = array(
               'username' => $this->input->post('username'),
               'password' => md5($this->input->post('password')),
 
             );
   
            $check = $this->auth_model->auth_check($data);
            
            if($check != false){
 
                 $user = array(
                 'user_id' => $check->id,
                 'username' => $check->username,
                 'email' => $check->email,
                 
                );
  
            $this->session->set_userdata($user);
 
             redirect( base_url('dashboard') ); 
            }
 
           $this->load->view('login');
        }
         
    }   
    public function register()
    {
 
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		$this->form_validation->set_rules('gender', 'gender', 'required');
		$this->form_validation->set_rules('phone', 'phone', 'required');
	public function index(){
		//Opens register page
		$this->load->view('register');
	}


       $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
       $this->form_validation->set_message('required', 'Enter %s');
 
        if ($this->form_validation->run() === FALSE)
        {  
            $this->load->view('register');
        }
        else
        {   
            $data = array(
               'username' => $this->input->post('username'),
			   'email' => $this->input->post('email'),
			   'password' => md5($this->input->post('password')),
               'gender' => $this->input->post('gender'),
               'phone' => $this->input->post('phone'),
               
 
             );
   
            $check = $this->auth_model->insert_user($data);
 
            if($check != false){
 
                $user = array(
				 'user_id' => $check,
				 'username' => $this->input->post('username'),
                 'email' => $this->input->post('email'),
                 'gender' => $this->input->post('gender'),
                );
             }
  
             $this->session->set_userdata($user);
 
             redirect( base_url('auth/dashboard') ); 
            }
 
         
    }
    public function logout(){
    $this->session->sess_destroy();
    redirect(base_url('auth'));
   }    
   
   public function dashboard(){
       if(empty($this->user_id)){
        redirect(base_url('auth'));
      }
       $this->load->view('dashboard');
    }
}
?>
