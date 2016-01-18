<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Admin extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();
 
        /* Standard Libraries of codeigniter are required */
        $this->load->database();
        $this->load->helper('url');
        /* ------------------ */ 
 
        $this->load->library('grocery_CRUD');
 
    }
 
    public function index()
    {
    
        $sessao_admin_status = $this->session->userdata('status_admin');


        if($sessao_admin_status==1)
        {

    		$this->grocery_crud->set_table('dados');
    		//$this->grocery_crud->set_theme('datatables');

    		$this->grocery_crud->set_language("pt-br.portuguese");

    		$this->grocery_crud->unset_add();

            //$this->grocery_crud->unset_export();
            $this->grocery_crud->unset_print();
            $this->grocery_crud->unset_edit();

            $this->grocery_crud->columns('Cargo_Pretendido','Nome','Sobrenome','Idade','Estado_Civil','Sexo','Cidade','Estado','Tel_Residencial','Tel_Celular','Tel_Recado','Email');

            $output = $this->grocery_crud->render();


     
    		$this->load->view('admin-view',$output); 
            
        }
        else
        {
            redirect('Login');
        }    
    }


    function exportar()
    {


    $this->grocery_crud->set_table('dados');

    $state = $this->grocery_crud->getState();

    if ($state == 'export' || $state == 'print') {
        $this->grocery_crud->columns(

        "Nome",                  
        "Sobrenome",             
        "Data_Nascimento",           
        "Cidade_Nascimento",         
        "Estado_Nascimento",        
        "Idade",                 
        "Estado_Civil",              
        "Sexo",                  
        "N_Dependentes",             
        "CPF",                   
        "Reservista",                
        "RG",                    
        "Rg_Data_Emissao",           
        "Rg_Cidade",             
        "Rg_Estado",             
        "Nome_Pai",             
        "Nome_Mae",              
        "Endereco",              
        "Numero",                
        "Bairro",                
        "Regiao",                
        "Cidade",                
        "Estado",                
        "Tel_Residencial",           
        "Tel_Celular",               
        "Tel_Recado",                
        "Email",                 
        "Facebook",              
        "Instagram",             
        "Twitter",               
        "Linkedin",              
        "Ensino_Medio_Tecnico_Status",       
        "Ensino_Medio_Tecnico_Conclusao",    
        "Ensino_Medio_Tecnico_Instituicao",  
        "Ensino_Medio_Tecnico_Curso",        
        "Ensino_Superior_Possui",        
        "Ensino_Superior_Status",        
        "Ensino_Superior_Conclusao",     
        "Ensino_Superior_Instituicao",           
        "Ensino_Superior_Curso",         
        "Ensino_Pos_Graduacao_Possui",       
        "Ensino_Pos_Graduacao_Status",       
        "Ensino_Pos_Graduacao_Conclusao",    
        "Ensino_Pos_Graduacao_Instituicao",  
        "Ensino_Pos_Graduacao_Curso",        
        "Primeiro_Emprego",          
        "Ultima_Empresa",            
        "Ultima_Empresa_Cidade",         
        "Ultima_Empresa_Salario",        
        "Ultima_Empresa_Cargo",          
        "Ultima_Empresa_Data_Admissao",          
        "Ultima_Empresa_Data_Demissao",      
        "Ultima_Empresa_Motivo_Saida",       
        "Empresa_Anterior_Status",       
        "Penultima_Empresa",         
        "Penultima_Empresa_Cidade",      
        "Penultima_Empresa_Salario",     
        "Penultima_Empresa_Cargo",       
        "Penultima_Empresa_Data_Admissao",   
        "Penultima_Empresa_Data_Demissao",   
        "Penultima_Empresa_Motivo_Saida",    
        "Empresa_Antepenultima_Status",      
        "Antepenultima_Empresa",         
        "Antepenultima_Empresa_Cidade",      
        "Antepenultima_Empresa_Salario",     
        "Antepenultima_Empresa_Cargo",       
        "Antepenultima_Empresa_Data_Admissao",   
        "Antepenultima_Empresa_Data_Demissao",   
        "Antepenultima_Empresa_Motivo_Saida",    
        "Deficiencia",                   
        "Deficiencia_Qual",          
        "Deficiencia_CID",           
        "Doenca",                
        "Doenca_Qual",               
        "Medicamento",               
        "Medicamento_Qual",          
        "Fuma",                  
        "Fuma_Qtd",              
        "Alcool",                
        "Alcool_Quando",             
        "Conhece_Alguem",            
        "Grau_Parentesco",           
        "Grau_Parentesco_Nome",          
        "Conhecimento_Vaga",         
        "Conhecimento_Vaga_Outros",      
        "Questao_1",             
        "Questao_2",             
        "Questao_3",             
        "Questao_4",             
        "Questao_5",             
        "Questao_6",             
        "Questao_7",             
        "Questao_8",             
        "Questao_9",             
        "Questao_10",                
        "Questao_11"                
        );


    } else {
        $this->grocery_crud->columns('Cargo_Pretendido','Nome','Sobrenome','Idade','Estado_Civil','Sexo','Cidade','Estado','Tel_Residencial','Tel_Celular','Tel_Recado','Email');
    }

    $output = $this->grocery_crud->render();

    $this->load->view('admin-view',$output); 
    }

 
}

?>