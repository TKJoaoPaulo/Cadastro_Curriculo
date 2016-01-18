<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Curriculo_model extends CI_Model {

	public function carregar_curriculo($id)
	{
		$this->load->database();
		$this->db->from('dados');
		$this->db->where('Account_id',$id);
		$resultado = $this->db->get();

		if($resultado->num_rows())
		{
			$row = $resultado->row_array();
			
		    return $row;

			
		}

	}	

    public function salvar_curriculo($id,$resultado)
	{
		$this->load->database();
		
		$resultado = array(
			"Cargo_Pretendido"						=>	$resultado['Cargo_Pretendido'],
			"Nome"									=>	$resultado['Nome'],
			"Sobrenome"								=>	$resultado['Sobrenome'],
			"Data_Nascimento"						=>	$resultado['Data_Nascimento'],
			"Cidade_Nascimento"						=>	$resultado['Cidade_Nascimento'],
			"Estado_Nascimento"						=>	$resultado['Estado_Nascimento'],	
			"Idade"									=>	$resultado['Idade'],
			"Estado_Civil"							=>	$resultado['Estado_Civil'],
			"Sexo"									=>	$resultado['Sexo'],
			"N_Dependentes"							=>	$resultado['N_Dependentes'],
			"CPF"									=>	$resultado['CPF'],
			"Reservista"							=>	$resultado['Reservista'],
			"RG"									=>	$resultado['RG'],
			"Rg_Data_Emissao"						=>	$resultado['Rg_Data_Emissao'],
			"Rg_Cidade"								=>	$resultado['Rg_Cidade'],
			"Rg_Estado"								=>	$resultado['Rg_Estado'],
			"Nome_Pai"								=>	$resultado['Nome_Pai'],
			"Nome_Mae"								=>	$resultado['Nome_Mae'],
			"Endereco"								=>	$resultado['Endereco'],
			"Numero"								=>	$resultado['Numero'],
			"Bairro"								=>	$resultado['Bairro'],
			"Regiao"								=>	$resultado['Regiao'],
			"Cidade"								=>	$resultado['Cidade'],
			"Estado"								=>	$resultado['Estado'],
			"Tel_Residencial"						=>	$resultado['Tel_Residencial'],
			"Tel_Celular"							=>	$resultado['Tel_Celular'],
			"Tel_Recado"							=>	$resultado['Tel_Recado'],
			"Email"			 					    =>	$resultado['Email'],
			"Facebook"							    =>	$resultado['Facebook'],
			"Instagram"							    =>	$resultado['Instagram'],
			"Twitter"							    =>	$resultado['Twitter'],
			"Linkedin"							    =>	$resultado['Linkedin'],
			"Ensino_Medio_Tecnico_Status"		    =>	$resultado['Ensino_Medio_Tecnico_Status'],
			"Ensino_Medio_Tecnico_Conclusao"	    =>	$resultado['Ensino_Medio_Tecnico_Conclusao'],
			"Ensino_Medio_Tecnico_Instituicao"	    =>	$resultado['Ensino_Medio_Tecnico_Instituicao'],
			"Ensino_Medio_Tecnico_Curso"			=>	$resultado['Ensino_Medio_Tecnico_Curso'],
			"Ensino_Superior_Possui"			    =>	$resultado['Ensino_Superior_Possui'],
			"Ensino_Superior_Status"			    =>	$resultado['Ensino_Superior_Status'],
			"Ensino_Superior_Conclusao"			    =>	$resultado['Ensino_Superior_Conclusao'],
			"Ensino_Superior_Instituicao"	        =>	$resultado['Ensino_Superior_Instituicao'],
			"Ensino_Superior_Curso"			        =>	$resultado['Ensino_Superior_Curso'],
			"Ensino_Pos_Graduacao_Possui"		    =>	$resultado['Ensino_Pos_Graduacao_Possui'],
			"Ensino_Pos_Graduacao_Status"			=>	$resultado['Ensino_Pos_Graduacao_Status'],
			"Ensino_Pos_Graduacao_Conclusao"	    =>	$resultado['Ensino_Pos_Graduacao_Conclusao'],
			"Ensino_Pos_Graduacao_Instituicao"	    =>	$resultado['Ensino_Pos_Graduacao_Instituicao'],
			"Ensino_Pos_Graduacao_Curso"		    =>	$resultado['Ensino_Pos_Graduacao_Curso'],
			"Primeiro_Emprego"			 		    =>	$resultado['Primeiro_Emprego'],
			"Ultima_Empresa"			 		    =>	$resultado['Ultima_Empresa'],
			"Ultima_Empresa_Cidade"				    =>	$resultado['Ultima_Empresa_Cidade'],
			"Ultima_Empresa_Salario"			    =>	$resultado['Ultima_Empresa_Salario'],
			"Ultima_Empresa_Cargo"				    =>	$resultado['Ultima_Empresa_Cargo'],
			"Ultima_Empresa_Data_Admissao"	        =>	$resultado['Ultima_Empresa_Data_Admissao'],
			"Ultima_Empresa_Data_Demissao"		    =>	$resultado['Ultima_Empresa_Data_Demissao'],
			"Ultima_Empresa_Motivo_Saida"		    =>	$resultado['Ultima_Empresa_Motivo_Saida'],
			"Empresa_Anterior_Status"				=>	$resultado['Empresa_Anterior_Status'],
			"Penultima_Empresa"			   		    =>	$resultado['Penultima_Empresa'],
			"Penultima_Empresa_Cidade"			    =>	$resultado['Penultima_Empresa_Cidade'],
			"Penultima_Empresa_Salario"			    =>	$resultado['Penultima_Empresa_Salario'],
			"Penultima_Empresa_Cargo"			    =>	$resultado['Penultima_Empresa_Cargo'],
			"Penultima_Empresa_Data_Admissao"		=>	$resultado['Penultima_Empresa_Data_Admissao'],
			"Penultima_Empresa_Data_Demissao"		=>	$resultado['Penultima_Empresa_Data_Demissao'],
			"Penultima_Empresa_Motivo_Saida"		=>	$resultado['Penultima_Empresa_Motivo_Saida'],
			"Empresa_Antepenultima_Status"			=>	$resultado['Empresa_Antepenultima_Status'],
			"Antepenultima_Empresa"			    	=>	$resultado['Antepenultima_Empresa'],
			"Antepenultima_Empresa_Cidade"		    =>	$resultado['Antepenultima_Empresa_Cidade'],
			"Antepenultima_Empresa_Salario"			=>	$resultado['Antepenultima_Empresa_Salario'],
			"Antepenultima_Empresa_Cargo"		    =>	$resultado['Antepenultima_Empresa_Cargo'],
			"Antepenultima_Empresa_Data_Admissao"   =>	$resultado['Antepenultima_Empresa_Data_Admissao'],
			"Antepenultima_Empresa_Data_Demissao"   =>	$resultado['Antepenultima_Empresa_Data_Demissao'],
			"Antepenultima_Empresa_Motivo_Saida"    =>	$resultado['Antepenultima_Empresa_Motivo_Saida'],
			"Deficiencia"			    			=>	$resultado['Deficiencia'],
			"Deficiencia_Qual"			  		    =>	$resultado['Deficiencia_Qual'],
			"Deficiencia_CID"					    =>	$resultado['Deficiencia_CID'],
			"Doenca"			   				    =>	$resultado['Doenca'],
			"Doenca_Qual"						    =>	$resultado['Doenca_Qual'],
			"Medicamento"			 			    =>	$resultado['Medicamento'],
			"Medicamento_Qual"					    =>	$resultado['Medicamento_Qual'],
			"Fuma"			  					    =>	$resultado['Fuma'],
			"Fuma_Qtd"							    =>	$resultado['Fuma_Qtd'],
			"Alcool"			 				    =>	$resultado['Alcool'],
			"Alcool_Quando"			   			    =>	$resultado['Alcool_Quando'],
			"Conhece_Alguem"					    =>	$resultado['Conhece_Alguem'],
			"Grau_Parentesco"			  		    =>	$resultado['Grau_Parentesco'],
			"Grau_Parentesco_Nome"			        =>	$resultado['Grau_Parentesco_Nome'],
			"Conhecimento_Vaga"			   		    =>	$resultado['Conhecimento_Vaga'],
			"Conhecimento_Vaga_Outros"			    =>	$resultado['Conhecimento_Vaga_Outros'],
			"Questao_1"			   				    =>	$resultado['Questao_1'],
			"Questao_2"			  				    =>	$resultado['Questao_2'],
			"Questao_3"			  				    =>	$resultado['Questao_3'],
			"Questao_4"			  				    =>	$resultado['Questao_4'],
			"Questao_5"			  				    =>	$resultado['Questao_5'],
			"Questao_6"			  				    =>	$resultado['Questao_6'],
			"Questao_7"			  				    =>	$resultado['Questao_7'],
			"Questao_8"			  				    =>	$resultado['Questao_8'],
			"Questao_9"			  				    =>	$resultado['Questao_9'],
			"Questao_10"						    =>	$resultado['Questao_10'],
			"Questao_11"						    =>	$resultado['Questao_11']
		);
		    $this->db->where('Account_Id', $id);
			$this->db->update('dados', $resultado);

			return TRUE;
			
	}

	

}
