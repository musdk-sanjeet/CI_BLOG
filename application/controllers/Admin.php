<?php 

class Admin extends CI_Controller
{
	public function index()
	{
		$this->form_validation->set_rules('uname','Username','required|min_length[5]|max_length[20]|alpha_numeric');
		$this->form_validation->set_rules('pass','Password','required|min_length[5]|max_length[15]|alpha_numeric');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');



		if($this->form_validation->run())
		{
			$uname=$this->input->post('uname');
			$pass=$this->input->post('pass');

			$this->load->model('loginmodel');
			$login_id=$this->loginmodel->isvalidate($uname,$pass);
			if($login_id)
			{
				$this->load->library('session');
				$this->session->set_userdata('id',$login_id);
				return redirect('Admin/welcome');
				
			}
			else
			{
				echo "Details not Match";

			}
		}
		else
		{
			$this->load->view('Admin/Login');
		}

	}
	public function welcome()
	{
		$this->load->view('Admin/dashboard');
	} 



}

?>