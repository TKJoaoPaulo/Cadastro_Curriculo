<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrar_id_model extends CI_Model {

	public function registrar_id($account_id){
		$this->load->database();

		$dados_id = array(
			"Account_id"	=>	$account_id
		);

		return $this->db->insert('dados', $dados_id);


	}	

}
