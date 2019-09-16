<?php 
	class Test extends CI_Controller
	{
		public function index()
		{
			$this->load->view('test');
		}

		public function hello()
		{
			echo "Hey, how are you doing?";
		}
	}
 ?>