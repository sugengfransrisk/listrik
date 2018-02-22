<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {



public function userCheck(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$now = date('d-m-Y H:i:s');
		$kueri = $this->db->where('username', $username)->where('password', $password)->get('admin');
		if($kueri->num_rows() > 0){
			$data = array(
				'username'	=> $kueri->row()->username,
				'logged_in'	=> true,
				'role'		=> $kueri->row()->role,
				'foto'		=> $kueri->row()->foto,
				'id'        =>$kueri->row()->id
			);
			
			$this->session->set_userdata($data);
			$id = $kueri->row()->id;
			$this->db->set('last_login', $now)->where('id', $id)->update('admin');
			return true;
		}else{
			return false;
		}
	}
	public function pelangganCheck(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$kueri = $this->db->where('username', $username)->where('pass', $password)->get('pelanggan');
		if($kueri->num_rows() > 0){
			$data = array(
				'username'	=> $kueri->row()->username,
				'logged_in'	=> true,
				'id'		=>$kueri->row()->id,
				'foto'		=> $kueri->row()->foto
			);
			
			$this->session->set_userdata($data);
			$id = $kueri->row()->id;
			
			return true;
		}else{
			return false;
		}
	}

}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */