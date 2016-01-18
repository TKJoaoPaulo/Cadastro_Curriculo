<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Redefinir_model extends CI_Model {

	public function redefinir_senha($email)
	{
		$this->load->database();

		$this->db->from('account');
		$this->db->where('email',$email);

		$resultado = $this->db->get();

		if($resultado->num_rows())
		{
				$row = $resultado->row_array();

				$data = array(
			        'senha' => $row['senha']
				);

			//$this->db->where('email',$email);
			//$this->db->update('account', $data);

			return $data;	
		}
		else
		{
			return FALSE;
		}

	}
}		