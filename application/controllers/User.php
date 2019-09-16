<?php
	class User extends CI_Controller{

		public function __construct()
		{
			if (!isset($_SESSION['user_logged'])){
				$this->session->set_flashdata("error","You must be logged in to view this page.");
				redirect(auth/login);
			}
		}

		public function profile(){
			$this->load->view('profile');
		}
	}
?>
