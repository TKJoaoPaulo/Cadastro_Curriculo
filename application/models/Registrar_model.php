<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrar_model extends CI_Model {

	public function registrar_usuario($email,$senha){
		$this->load->database();
		$this->db->from('account');
		$this->db->where('email',$email);
		$resultado = $this->db->get();

		if($resultado->num_rows())
		{
			return FALSE;
		}
		else
		{
			$data = array(
				'email'	=>	$email,
				'senha'	=>	$senha
			);

			$this->db->insert('account',$data);

			

		}	
	}	

}
