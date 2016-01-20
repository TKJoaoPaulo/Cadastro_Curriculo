<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login_view');
		

	}

	public function logar()
	{
		$this->load->view('login_view');
		
		$email = $this->input->post('email');
		$senha = $this->input->post('senha');

		$this->load->model('Login_model');
		$resultado = $this->Login_model->busca_usuario($email,$senha);

		if($resultado['status_admin']=='0')
		{

			if($resultado)
			{
				$session = array(
					'email'		=>	$resultado['email'],
					'id'		=>	$resultado['id'],
					'logado'	=>	TRUE
				);

				$this->session->set_userdata($session);
				redirect ('Curriculo');
			}
		}
		else
		{
				$session = array(
					'email'			=>	$resultado['email'],
					'id'			=>	$resultado['id'],
					'status_admin'	=>  $resultado['status_admin'],
					'logado'		=>	TRUE
				);

				$this->session->set_userdata($session);
				redirect ('Admin');
		}

	}

	public function registrar()
	{
		
		$this->load->view('registrar_view');


	}

	public function registrar_envio()
	{
		$email = $this->input->post('email');
		$senha = $this->input->post('senha');

		$this->load->model('Registrar_model');
		$this->load->model('Registrar_id_model');

		$resultado = $this->Registrar_model->registrar_usuario($email,$senha);
		
		

		if($resultado===FALSE)
		{
			$msg = array(

				"mensagem"	=>	'<div class="alert alert-danger" role="alert">
								  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
								  <span class="sr-only">Error:</span>
								  Email já está cadastrado em nosso sistema.
								</div>'	
			);
			
			$this->load->view('registrar_view',$msg);

		}
		else
		{

			$account_id = $this->db->insert_id();
			$resultado = $this->Registrar_id_model->registrar_id($account_id);

			
			$msg = array(

				"mensagem"	=>	'<div class="alert alert-success" role="alert">
								  <span class="glyphicon glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
								  <span class="sr-only">Error:</span>
								  Registro efetuado com sucesso!
								</div>'	
			);


			$this->load->view('registrar_view',$msg);
			//$this->output->set_header('refresh:3;url='.base_url().'index.php/login');
			$this->logar();

			
		}
	}


	public function redefinir()
	{
		$this->load->view('redefinir_senha_view');
	}


	public function redefinir_senha()
	{
		

		$email = $this->input->post('email');
		//$senha = $this->input->post('senha');

		$this->load->model('Redefinir_model');

		$resultado = $this->Redefinir_model->redefinir_senha($email);

		if($resultado===FALSE)
		{
			$msg = array(

				"mensagem"	=>	'<div class="alert alert-danger" role="alert">
								  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
								  <span class="sr-only">Error:</span>
								  Email não está cadastrado em nosso sistema.
								</div>'	
			);
		}
		else
		{
			$config = Array(
		        'protocol' => 'smtp',
		        'smtp_host' => 'smtp.sendgrid.com',
		        'smtp_port' =>  587,
		        'smtp_user' => 'send_libbero',    //email id
		        'smtp_pass' => 'libbero2015',            // password
		        'mailtype'  => 'html', 
		        'charset'   => 'iso-8859-1'
		    );

		    $this->load->library('email', $config);
		    $this->email->initialize($config);
		    $this->email->set_newline("\r\n");


		    $this->email->from('recrutamento@libbero.com.br','Libbero - Sua senha');
		    $this->email->to($email); // email array
		    $this->email->subject('Senha de acesso');   
		    $this->email->message("Sua senha para acessar nosso sistema: ".$resultado['senha']);

		    $result = $this->email->send();

		    $msg = array(

				"mensagem"	=>	'<div class="alert alert-success" role="alert">
								  <span class="glyphicon glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
								  <span class="sr-only">Error:</span>
								  Sua senha foi enviada para o seu email!
								</div>'	
			);


		    //show_error($this->email->print_debugger()); 


			//echo $resultado['senha'];
		}

		$this->load->view('redefinir_senha_view',$msg);

	}	


}
