
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
		
	}
	function Pelanggan(){
		$this->load->view('pelanggan/login');
        
    }
	public function index(){
		$this->load->view('login');
	}
	public function dologin(){
				if($this->Login_model->userCheck() == true){
					$src = $this->input->get('src');
					if(!empty($src)){
						redirect($src);
					}else{redirect('dashboard');}
				}else{
					$this->session->set_flashdata('announce', 'Invalid username or password');
					redirect('login');
				}
			}
	public function dologin_p(){
				if($this->Login_model->pelangganCheck() == true){
					$src = $this->input->get('src');
					if(!empty($src)){
						redirect($src);
					}else{redirect('dashboard/dash_pel');}
				}else{
					$this->session->set_flashdata('announce', 'Invalid username or password');
					redirect('login/Pelanggan');
				}
			}
			
			
	
	public function logout(){
		$data = array(
			'username'	=> '',
			'logged_in'	=> false,
			'role'		=> ''
		);

		$this->session->sess_destroy();
		redirect('login');
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */