<?php
class Auth extends CI_Controller
{

	public function logout(){
		unset($_SESSION);
		session_destroy();
		redirect("auth/login", "refresh");
	}

	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|matches[password]');

		if($this->form_validation->run() == TRUE){
			//If form is validated, check user in DB

			$username = $_POST['username'];
			$password = md5($_POST['password']);

			$this->db->select ('*');
			$this->db->from ('users');
			$this->db->where (array('username' => $username, 'password' => $password));

			$query = $this->db->get();

			$user = $query->row(); //All user data where username and password match
			//Check if user exists
			if($user->username){ //Check if email exists for user
				$this->session->set_flashdata("Success", "Login in successful.");

				$_SESSION['user_logged'] = TRUE;
				$_SESSION['username'] = $user->username;

				redirect('user/profile', 'refresh');
			}else{
				$this->session->set_flashdata("error", "Account does not exist.");
				//redirect('auth/login', 'refresh');
			}
		}
		$this->load->view('login');
	}

	public function register(){
		if (isset($_POST['register'])){
			//Setting validation rules
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|matches[password]');
			$this->form_validation->set_rules('phone', 'Phone', 'required|min_length[10]');

			//Validating form
			if ($this->form_validation->run() == TRUE){
				echo 'form validated';

				//Code to enter/send the data to the DB
				//Left side: DB Items, Right side: Items from HTML Form
				$data = array(
					'username'=> $_POST['username'],
                    'email'=> $_POST['email'],
                    'gender'=> $_POST['gender'],
					'password'=>md5($_POST['password']), //Password encryption
					'phone'=> $_POST['phone'],
					//'created-Date'=> date(Y-m-d),		
				);

				$this->db->insert('users', $data);

				$this->session->set_flashdata("success", "Your account has been registered. You will be redirected to the homepage");
				redirect("auth/register", "refresh");
			}
		}

		//Loading register view
		$this->load->view('register');
	}
}
?>
