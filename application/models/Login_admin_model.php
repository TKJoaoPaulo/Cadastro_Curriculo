<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_admin_model extends CI_Model {


	public function busca_admin($email,$senha){
		$this->load->database();
		$this->db->from('account');
		$this->db->where('email',$email);
		$this->db->where('senha',$senha);
		$resultado = $this->db->get();

		if($resultado->num_rows())
		{
			$resultado = $resultado->result_array();
			return $resultado[0];
		}
		else
		{
			return FALSE;
		}	
	}

}
