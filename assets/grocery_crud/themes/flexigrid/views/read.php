<a href="<?php echo base_url('index.php/Admin'); ?>">Voltar</a>


<?php

	$this->set_css($this->default_theme_path.'/flexigrid/css/flexigrid.css');
	$this->set_js_lib($this->default_theme_path.'/flexigrid/js/jquery.form.js');
	$this->set_js_config($this->default_theme_path.'/flexigrid/js/flexigrid-edit.js');

	$this->set_js_lib($this->default_javascript_path.'/jquery_plugins/jquery.noty.js');
	$this->set_js_lib($this->default_javascript_path.'/jquery_plugins/config/jquery.noty.config.js');


	$Cargo_Pretendido 						= 	strip_tags($input_fields['Cargo_Pretendido']->input);	
	$Nome 									=	strip_tags($input_fields['Nome']->input);
	$Sobrenome								=	strip_tags($input_fields['Sobrenome']->input);
	$Data_Nascimento						=	strip_tags($input_fields['Data_Nascimento']->input);
	$Cidade_Nascimento						=	strip_tags($input_fields['Cidade_Nascimento']->input);
	$Estado_Nascimento						=	strip_tags($input_fields['Estado_Nascimento']->input);
	$Idade									=	strip_tags($input_fields['Idade']->input);
	$Estado_Civil							=	strip_tags($input_fields['Estado_Civil']->input);
	$Sexo									=	strip_tags($input_fields['Sexo']->input);
	$N_Dependentes							=	strip_tags($input_fields['N_Dependentes']->input);
	$CPF									=	strip_tags($input_fields['CPF']->input);
	$Reservista								=	strip_tags($input_fields['Reservista']->input);
	$RG										=	strip_tags($input_fields['RG']->input);
	$Rg_Data_Emissao						=	strip_tags($input_fields['Rg_Data_Emissao']->input);
	$Rg_Cidade								=	strip_tags($input_fields['Rg_Cidade']->input);
	$Rg_Estado								=	strip_tags($input_fields['Rg_Estado']->input);
	$Nome_Pai								=	strip_tags($input_fields['Nome_Pai']->input);
	$Nome_Mae								=	strip_tags($input_fields['Nome_Mae']->input);
	$Endereco								=	strip_tags($input_fields['Endereco']->input);
	$Numero									=	strip_tags($input_fields['Numero']->input);
	$Bairro									=	strip_tags($input_fields['Bairro']->input);
	$Regiao									=	strip_tags($input_fields['Regiao']->input);
	$Cidade									=	strip_tags($input_fields['Cidade']->input);
	$Estado									=	strip_tags($input_fields['Estado']->input);
	$Tel_Residencial						=	strip_tags($input_fields['Tel_Residencial']->input);
	$Tel_Celular							=	strip_tags($input_fields['Tel_Celular']->input);
	$Tel_Recado								=	strip_tags($input_fields['Tel_Recado']->input);
	$Email									=	strip_tags($input_fields['Email']->input);
	$Facebook								=	strip_tags($input_fields['Facebook']->input);
	$Instagram								=	strip_tags($input_fields['Instagram']->input);
	$Twitter								=	strip_tags($input_fields['Twitter']->input);
	$Linkedin								=	strip_tags($input_fields['Linkedin']->input);
	$Ensino_Medio_Tecnico_Status			=	strip_tags($input_fields['Ensino_Medio_Tecnico_Status']->input);
	$Ensino_Medio_Tecnico_Conclusao			=	strip_tags($input_fields['Ensino_Medio_Tecnico_Conclusao']->input);
	$Ensino_Medio_Tecnico_Instituicao		=	strip_tags($input_fields['Ensino_Medio_Tecnico_Instituicao']->input);
	$Ensino_Medio_Tecnico_Curso				=	strip_tags($input_fields['Ensino_Medio_Tecnico_Curso']->input);
	$Ensino_Superior_Possui					=	strip_tags($input_fields['Ensino_Superior_Possui']->input);
	$Ensino_Superior_Status					=	strip_tags($input_fields['Ensino_Superior_Status']->input);
	$Ensino_Superior_Instituicao			=	strip_tags($input_fields['Ensino_Superior_Instituicao']->input);
	$Ensino_Superior_Conclusao				=	strip_tags($input_fields['Ensino_Superior_Conclusao']->input);
	$Ensino_Superior_Curso					=	strip_tags($input_fields['Ensino_Superior_Curso']->input);
	$Ensino_Pos_Graduacao_Possui			=	strip_tags($input_fields['Ensino_Pos_Graduacao_Possui']->input);
	$Ensino_Pos_Graduacao_Status			=	strip_tags($input_fields['Ensino_Pos_Graduacao_Status']->input);
	$Ensino_Pos_Graduacao_Conclusao			=	strip_tags($input_fields['Ensino_Pos_Graduacao_Conclusao']->input);
	$Ensino_Pos_Graduacao_Instituicao		=	strip_tags($input_fields['Ensino_Pos_Graduacao_Instituicao']->input);
	$Ensino_Pos_Graduacao_Curso				=	strip_tags($input_fields['Ensino_Pos_Graduacao_Curso']->input);
	$Primeiro_Emprego						=	strip_tags($input_fields['Primeiro_Emprego']->input);
	$Ultima_Empresa							=	strip_tags($input_fields['Ultima_Empresa']->input);
	$Ultima_Empresa_Cidade					=	strip_tags($input_fields['Ultima_Empresa_Cidade']->input);
	$Ultima_Empresa_Salario					=	strip_tags($input_fields['Ultima_Empresa_Salario']->input);
	$Ultima_Empresa_Cargo					=	strip_tags($input_fields['Ultima_Empresa_Cargo']->input);
	$Ultima_Empresa_Data_Admissao			=	strip_tags($input_fields['Ultima_Empresa_Data_Admissao']->input);
	$Ultima_Empresa_Data_Demissao			=	strip_tags($input_fields['Ultima_Empresa_Data_Demissao']->input);
	$Ultima_Empresa_Motivo_Saida			=	strip_tags($input_fields['Ultima_Empresa_Motivo_Saida']->input);
	$Empresa_Anterior_Status				=	strip_tags($input_fields['Empresa_Anterior_Status']->input);
	$Penultima_Empresa						=	strip_tags($input_fields['Penultima_Empresa']->input);
	$Penultima_Empresa_Cidade				=	strip_tags($input_fields['Penultima_Empresa_Cidade']->input);
	$Penultima_Empresa_Salario				=	strip_tags($input_fields['Penultima_Empresa_Salario']->input);
	$Penultima_Empresa_Cargo				=	strip_tags($input_fields['Penultima_Empresa_Cargo']->input);
	$Penultima_Empresa_Data_Admissao		=	strip_tags($input_fields['Penultima_Empresa_Data_Admissao']->input);
	$Penultima_Empresa_Data_Demissao		=	strip_tags($input_fields['Penultima_Empresa_Data_Demissao']->input);
	$Penultima_Empresa_Motivo_Saida			=	strip_tags($input_fields['Penultima_Empresa_Motivo_Saida']->input);
	$Empresa_Antepenultima_Status			=	strip_tags($input_fields['Empresa_Antepenultima_Status']->input);
	$Antepenultima_Empresa					=	strip_tags($input_fields['Antepenultima_Empresa']->input);
	$Antepenultima_Empresa_Cidade			=	strip_tags($input_fields['Antepenultima_Empresa_Cidade']->input);
	$Antepenultima_Empresa_Salario			=	strip_tags($input_fields['Antepenultima_Empresa_Salario']->input);
	$Antepenultima_Empresa_Cargo			=	strip_tags($input_fields['Antepenultima_Empresa_Cargo']->input);
	$Antepenultima_Empresa_Data_Admissao	=	strip_tags($input_fields['Antepenultima_Empresa_Data_Admissao']->input);
	$Antepenultima_Empresa_Data_Demissao	=	strip_tags($input_fields['Antepenultima_Empresa_Data_Demissao']->input);
	$Antepenultima_Empresa_Motivo_Saida		=	strip_tags($input_fields['Antepenultima_Empresa_Motivo_Saida']->input);
	$Deficiencia							=	strip_tags($input_fields['Deficiencia']->input);
	$Deficiencia_Qual						=	strip_tags($input_fields['Deficiencia_Qual']->input);
	$Deficiencia_CID						=	strip_tags($input_fields['Deficiencia_CID']->input);
	$Doenca									=	strip_tags($input_fields['Doenca']->input);
	$Doenca_Qual							=	strip_tags($input_fields['Doenca_Qual']->input);
	$Medicamento							=	strip_tags($input_fields['Medicamento']->input);
	$Medicamento_Qual						=	strip_tags($input_fields['Medicamento_Qual']->input);
	$Fuma									=	strip_tags($input_fields['Fuma']->input);
	$Fuma_Qtd								=	strip_tags($input_fields['Fuma_Qtd']->input);
	$Alcool									=	strip_tags($input_fields['Alcool']->input);
	$Alcool_Quando							=	strip_tags($input_fields['Alcool_Quando']->input);
	$Conhece_Alguem							=	strip_tags($input_fields['Conhece_Alguem']->input);
	$Grau_Parentesco						=	strip_tags($input_fields['Grau_Parentesco']->input);
	$Grau_Parentesco_Nome					=	strip_tags($input_fields['Grau_Parentesco_Nome']->input);
	$Conhecimento_Vaga						=	strip_tags($input_fields['Conhecimento_Vaga']->input);
	$Conhecimento_Vaga_Outros				=	strip_tags($input_fields['Conhecimento_Vaga_Outros']->input);
	$Questao_1								=	strip_tags($input_fields['Questao_1']->input);
	$Questao_2								=	strip_tags($input_fields['Questao_2']->input);
	$Questao_3								=	strip_tags($input_fields['Questao_3']->input);
	$Questao_4								=	strip_tags($input_fields['Questao_4']->input);
	$Questao_5								=	strip_tags($input_fields['Questao_5']->input);
	$Questao_6								=	strip_tags($input_fields['Questao_6']->input);
	$Questao_7								=	strip_tags($input_fields['Questao_7']->input);
	$Questao_8								=	strip_tags($input_fields['Questao_8']->input);
	$Questao_9								=	strip_tags($input_fields['Questao_9']->input);
	$Questao_10								=	strip_tags($input_fields['Questao_10']->input);
	$Questao_11								=	strip_tags($input_fields['Questao_11']->input);

	$data_atual = date("d/m/Y");



if ($Cargo_Pretendido=='&nbsp;')										{$Cargo_Pretendido='</br>';} 			
if ($Nome=='&nbsp;') 													{$Nome='</br>';} 			
if ($Sobrenome=='&nbsp;')												{$Sobrenome='</br>';} 		
if ($Data_Nascimento=='&nbsp;')											{$Data_Nascimento='</br>';} 		
if ($Cidade_Nascimento=='&nbsp;')										{$Cidade_Nascimento='</br>';} 			
if ($Estado_Nascimento=='&nbsp;')										{$Estado_Nascimento='</br>';} 			
if ($Idade=='&nbsp;')													{$Idade='</br>';} 			
if ($Estado_Civil=='&nbsp;')											{$Estado_Civil='</br>';} 			
if ($Sexo=='&nbsp;')													{$Sexo='</br>';} 			
if ($N_Dependentes=='&nbsp;')											{$N_Dependentes='</br>';} 			
if ($CPF=='&nbsp;')														{$CPF='</br>';} 			
if ($Reservista	=='&nbsp;')												{$Reservista='</br>';} 		
if ($RG	=='&nbsp;')														{$RG='</br>';} 		
if ($Rg_Data_Emissao	=='&nbsp;')										{$Rg_Data_Emissao='</br>';} 		
if ($Rg_Cidade	=='&nbsp;')												{$Rg_Cidade='</br>';} 		
if ($Rg_Estado	=='&nbsp;')												{$Rg_Estado='</br>';} 		
if ($Nome_Pai=='&nbsp;')												{$Nome_Pai='</br>';} 			
if ($Nome_Mae=='&nbsp;')												{$Nome_Mae='</br>';} 			
if ($Endereco=='&nbsp;')												{$Endereco='</br>';} 			
if ($Numero=='&nbsp;')													{$Numero='</br>';} 			
if ($Bairro=='&nbsp;')													{$Bairro='</br>';} 			
if ($Regiao=='&nbsp;')													{$Regiao='</br>';} 			
if ($Cidade=='&nbsp;')													{$Cidade='</br>';} 			
if ($Estado=='&nbsp;')													{$Estado='</br>';} 			
if ($Tel_Residencial=='&nbsp;')											{$Tel_Residencial='</br>';} 		
if ($Tel_Celular=='&nbsp;')												{$Tel_Celular='</br>';} 			
if ($Tel_Recado	=='&nbsp;')												{$Tel_Recado='</br>';} 		
if ($Email=='&nbsp;')													{$Email='</br>';} 			
if ($Facebook=='&nbsp;')												{$Facebook='</br>';} 			
if ($Instagram=='&nbsp;')												{$Instagram='</br>';} 			
if ($Twitter=='&nbsp;')													{$Twitter='</br>';} 		
if ($Linkedin	=='&nbsp;')												{$Linkedin='</br>';} 		
if ($Ensino_Medio_Tecnico_Status=='&nbsp;')								{$Ensino_Medio_Tecnico_Status='</br>';} 		
if ($Ensino_Medio_Tecnico_Conclusao=='&nbsp;')							{$Ensino_Medio_Tecnico_Conclusao='</br>';} 	
if ($Ensino_Medio_Tecnico_Instituicao=='&nbsp;')						{$Ensino_Medio_Tecnico_Instituicao='</br>';} 	
if ($Ensino_Medio_Tecnico_Curso	=='&nbsp;')								{$Ensino_Medio_Tecnico_Curso='</br>';} 	
if ($Ensino_Superior_Possui=='&nbsp;')									{$Ensino_Superior_Possui='</br>';} 		
if ($Ensino_Superior_Status=='&nbsp;')									{$Ensino_Superior_Status='</br>';} 		
if ($Ensino_Superior_Instituicao=='&nbsp;')								{$Ensino_Superior_Instituicao='</br>';} 		
if ($Ensino_Superior_Conclusao	=='&nbsp;')								{$Ensino_Superior_Conclusao='</br>';} 	
if ($Ensino_Superior_Curso=='&nbsp;')									{$Ensino_Superior_Curso='</br>';} 	
if ($Ensino_Pos_Graduacao_Possui=='&nbsp;')								{$Ensino_Pos_Graduacao_Possui='</br>';} 	
if ($Ensino_Pos_Graduacao_Status=='&nbsp;')								{$Ensino_Pos_Graduacao_Status='</br>';} 	
if ($Ensino_Pos_Graduacao_Conclusao=='&nbsp;')							{$Ensino_Pos_Graduacao_Conclusao='</br>';} 	
if ($Ensino_Pos_Graduacao_Instituicao	=='&nbsp;')						{$Ensino_Pos_Graduacao_Instituicao='</br>';} 
if ($Ensino_Pos_Graduacao_Curso	=='&nbsp;')								{$Ensino_Pos_Graduacao_Curso='</br>';} 
if ($Primeiro_Emprego=='&nbsp;')										{$Primeiro_Emprego='</br>';} 		
if ($Ultima_Empresa=='&nbsp;')											{$Ultima_Empresa='</br>';} 			
if ($Ultima_Empresa_Cidade=='&nbsp;')									{$Ultima_Empresa_Cidade='</br>';} 		
if ($Ultima_Empresa_Salario=='&nbsp;')									{$Ultima_Empresa_Salario='</br>';} 		
if ($Ultima_Empresa_Cargo=='&nbsp;')									{$Ultima_Empresa_Cargo='</br>';} 	
if ($Ultima_Empresa_Data_Admissao=='&nbsp;')							{$Ultima_Empresa_Data_Admissao='</br>';} 	
if ($Ultima_Empresa_Data_Demissao=='&nbsp;')							{$Ultima_Empresa_Data_Demissao='</br>';} 	
if ($Ultima_Empresa_Motivo_Saida=='&nbsp;')								{$Ultima_Empresa_Motivo_Saida='</br>';} 	
if ($Empresa_Anterior_Status	=='&nbsp;')								{$Empresa_Anterior_Status='</br>';} 
if ($Penultima_Empresa	=='&nbsp;')										{$Penultima_Empresa='</br>';} 	
if ($Penultima_Empresa_Cidade=='&nbsp;')								{$Penultima_Empresa_Cidade='</br>';} 	
if ($Penultima_Empresa_Salario=='&nbsp;')								{$Penultima_Empresa_Salario='</br>';} 		
if ($Penultima_Empresa_Cargo=='&nbsp;')									{$Penultima_Empresa_Cargo='</br>';} 
if ($Penultima_Empresa_Data_Admissao=='&nbsp;')							{$Penultima_Empresa_Data_Admissao='</br>';} 
if ($Penultima_Empresa_Data_Demissao=='&nbsp;')							{$Penultima_Empresa_Data_Demissao='</br>';} 
if ($Penultima_Empresa_Motivo_Saida=='&nbsp;')							{$Penultima_Empresa_Motivo_Saida='</br>';} 	
if ($Empresa_Antepenultima_Status=='&nbsp;')							{$Empresa_Antepenultima_Status='</br>';} 	
if ($Antepenultima_Empresa	=='&nbsp;')									{$Antepenultima_Empresa='</br>';} 	
if ($Antepenultima_Empresa_Cidade=='&nbsp;')							{$Antepenultima_Empresa_Cidade='</br>';} 	
if ($Antepenultima_Empresa_Salario=='&nbsp;')							{$Antepenultima_Empresa_Salario='</br>';} 	
if ($Antepenultima_Empresa_Cargo=='&nbsp;')								{$Antepenultima_Empresa_Cargo='</br>';} 
if ($Antepenultima_Empresa_Data_Admissao=='&nbsp;')						{$Antepenultima_Empresa_Data_Admissao='</br>';} 	
if ($Antepenultima_Empresa_Data_Demissao=='&nbsp;')						{$Antepenultima_Empresa_Data_Demissao='</br>';} 
if ($Antepenultima_Empresa_Motivo_Saida	=='&nbsp;')						{$Antepenultima_Empresa_Motivo_Saida='</br>';} 
if ($Deficiencia=='&nbsp;')												{$Deficiencia='</br>';} 			
if ($Deficiencia_Qual=='&nbsp;')										{$Deficiencia_Qual='</br>';} 			
if ($Deficiencia_CID=='&nbsp;')											{$Deficiencia_CID='</br>';} 		
if ($Doenca=='&nbsp;')													{$Doenca='</br>';} 			
if ($Doenca_Qual=='&nbsp;')												{$Doenca_Qual='</br>';} 			
if ($Medicamento=='&nbsp;')												{$Medicamento='</br>';} 			
if ($Medicamento_Qual=='&nbsp;')										{$Medicamento_Qual='</br>';} 			
if ($Fuma=='&nbsp;')													{$Fuma='</br>';} 			
if ($Fuma_Qtd	=='&nbsp;')												{$Fuma_Qtd='</br>';} 		
if ($Alcool=='&nbsp;')													{$Alcool='</br>';} 			
if ($Alcool_Quando=='&nbsp;')											{$Alcool_Quando='</br>';} 			
if ($Conhece_Alguem=='&nbsp;')											{$Conhece_Alguem='</br>';} 			
if ($Grau_Parentesco	=='&nbsp;')										{$Grau_Parentesco='</br>';} 	
if ($Grau_Parentesco_Nome=='&nbsp;')									{$Grau_Parentesco_Nome='</br>';} 		
if ($Conhecimento_Vaga=='&nbsp;')										{$Conhecimento_Vaga='</br>';} 	
if ($Conhecimento_Vaga_Outros	=='&nbsp;')								{$Conhecimento_Vaga_Outros='</br>';} 
if ($Questao_1=='&nbsp;')												{$Questao_1='</br>';} 			
if ($Questao_2=='&nbsp;')												{$Questao_2='</br>';} 			
if ($Questao_3=='&nbsp;')												{$Questao_3='</br>';} 			
if ($Questao_4=='&nbsp;')												{$Questao_4='</br>';} 			
if ($Questao_5=='&nbsp;')												{$Questao_5='</br>';} 			
if ($Questao_6	=='&nbsp;')												{$Questao_6='</br>';} 		
if ($Questao_7	=='&nbsp;')												{$Questao_7='</br>';} 		
if ($Questao_8	=='&nbsp;')												{$Questao_8='</br>';} 		
if ($Questao_9	=='&nbsp;')												{$Questao_9='</br>';} 		
if ($Questao_10	=='&nbsp;')												{$Questao_10='</br>';} 		
if ($Questao_11	=='&nbsp;')												{$Questao_11='</br>';} 		


	

?>


<head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

     <title>One Page Resume</title>

</head>

<body>
<?php echo'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="940" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td width="137"><img src="http://cadastrolibbero.esy.es/image001.png" width="201" height="58" /></td>
    <td colspan="2"><div align="center"><span class="xl146" style="border-right:.5pt solid black;border-left:
  none"><strong>FORMUL&Aacute;RIOS</strong></span></div></td>
    <td width="215">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4"><div align="center"><strong>Recrutamento Externo </strong></div></td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>

  <tr>
    <td colspan="4"><div align="center"><strong><em>Dados Pessoais </em></strong></div></td>
  </tr>
  <tr>
    <td colspan="4">Cargo Pretendido<br />'.mb_strtoupper($Cargo_Pretendido).' </td>
  </tr>
  <tr>
    <td colspan="4">Nome Completo(sem abrevia&ccedil;&otilde;es)<br />'.mb_strtoupper($Nome).' </td>
  </tr>
  <tr>
    <td height="21">Data de nascim.<br />'.$Data_Nascimento.'
    </td>
    <td width="182">Local de nascim.<br />'.mb_strtoupper($Cidade_Nascimento).'
    </td>
    <td width="196">Idade<br />'.$Idade.'</td>
    </td>
    <td>Estado Civil<br />'.mb_strtoupper($Estado_Civil).'</td>
  </tr>

    <tr>
    <td height="21">CPF<br />'.$CPF.'
    </td>
    <td width="182">RG<br />'.$RG.'
    </td>
    <td width="196">Cidade/Estado de Emissao<br />'.mb_strtoupper($Rg_Estado).'</td>
    </td>
    <td>Data de Expedi&ccedil;&atilde;o RG<br />'.$Rg_Data_Emissao.'</td>
  </tr>

  <tr>
	<td colspan="4">Reservista<br />'.$Reservista.'</td>
 </tr>
 
  <tr>
    <td colspan="4">Pai(nome completo)<br />'.mb_strtoupper($Nome_Pai).'</td>
  </tr>
  <tr>
    <td colspan="4">M&atilde;e(nome completo)<br />'.mb_strtoupper($Nome_Mae).'</td>
  </tr>
  <tr>
    <td colspan="3">Endere&ccedil;o completo<br />'.mb_strtoupper($Endereco).'
    </td>
    <td>N&ordm;<br />'.$Numero.'</td>
  </tr>
  <tr>
    <td colspan="3">Bairro<br />'.mb_strtoupper($Bairro).'</td>
    <td>Regi&atilde;o(zona)<br />'.mb_strtoupper($Regiao).'</td>
  </tr>
  <tr>
    <td colspan="3">Cidade<br />'.mb_strtoupper($Cidade).'</td>
    <td>Estado<br />'.mb_strtoupper($Estado).'</td>
  </tr>
  <tr>
    <td>Telefone residencial<br />'.mb_strtoupper($Tel_Residencial).'</td>
    <td colspan="2">Telefone celular<br />'.mb_strtoupper($Tel_Celular).'</td>
    <td>Telefone recado <br />'.mb_strtoupper($Tel_Recado).'</td>
  </tr>
  <tr>
    <td height="21">Facebook<br />'.$Facebook.'
    </td>
    <td width="182">Instagram<br />'.$Instagram.'
    </td>
    <td width="196">Twitter<br />'.$Twitter.'</td>
    </td>
    <td>Linkedin<br />'.$Linkedin.'</td>
  </tr>

  <tr>
    <td colspan="4">Email para contato <br />'.$Email.'</td>
  </tr>
</table>
<br />
<table width="940" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td height="28" colspan="4"><div align="center"><strong>Forma&ccedil;&atilde;o Escolar </strong></div></td>
  </tr>
  <tr>
    <td width="200" height="21">Ensino M&eacute;dio ou T&eacute;cnico<br />'.mb_strtoupper($Ensino_Medio_Tecnico_Status).'</td>
    <td width="256">Institui&ccedil;&atilde;o<br />'.mb_strtoupper($Ensino_Medio_Tecnico_Instituicao).'</td>
    <td width="197">Curso<br />'.mb_strtoupper($Ensino_Medio_Tecnico_Curso).'</td>
    <td width="121">Conclus&atilde;o<br />'.$Ensino_Medio_Tecnico_Conclusao.'</td>
  </tr>

  <tr>
    <td>Ensino Superior<br />'.mb_strtoupper($Ensino_Superior_Status).'</td>
    <td>Institui&ccedil;&atilde;o<br />'.mb_strtoupper($Ensino_Superior_Instituicao).'</td>
    <td>Curso<br />'.mb_strtoupper($Ensino_Superior_Curso).'</td>
    <td>Conclus&atilde;o<br />'.$Ensino_Superior_Conclusao.'</td>
  </tr>
  <tr>
     <!-- <td>Semestre<br /></td> !-->
     <!-- <td>Horario<br /></td> !-->
     <!-- <td></td> !-->
     <!-- <td></td> !-->
  </tr>
  <tr>
    <td height="23">P&oacute;s Gradua&ccedil;&atilde;o<br />'.mb_strtoupper($Ensino_Pos_Graduacao_Status).'</td>
    <td>Institui&ccedil;&atilde;o<br />'.mb_strtoupper($Ensino_Pos_Graduacao_Instituicao).'</td>
    <td>Curso<br />'.mb_strtoupper($Ensino_Pos_Graduacao_Instituicao).'</td>
    <td>Conclus&atilde;o<br />'.$Ensino_Pos_Graduacao_Conclusao.'</td>
  </tr>
</table>
<br />
<br />

<table width="940" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td width="240"><img src="http://cadastrolibbero.esy.es/image001.png" width="201" height="58" /></td>
    <td width="400"><div align="center"><strong>FORMUL&Aacute;RIOS</strong></div></td>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5"><div align="center"><strong>Recrutamento Externo </strong></div></td>
  </tr>
  <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5"><div align="center"><strong><em>Experi&ecirc;ncia Profissional </em></strong></div></td>
  </tr>
   <tr>
    <td colspan="5">Primeiro emprego?<br />'.$Primeiro_Emprego.'</td>
  </tr>
  <tr>
    <td colspan="3">Ultima Empresa<br />'.mb_strtoupper($Ultima_Empresa).'</td>
    <td width="500">Cidade<br />'.mb_strtoupper($Ultima_Empresa_Cidade).'</td>
    <td width="143">Ultimo sal&aacute;rio<br />'.$Ultima_Empresa_Salario.'</td>
  </tr>
  <tr>
    <td colspan="3">Ultimo Cargo<br />'.mb_strtoupper($Ultima_Empresa_Cargo).'</td>
    <td>Data Admiss&atilde;o<br />'.$Ultima_Empresa_Data_Admissao.'</td>
    <td>Data Demiss&atilde;o<br />'.$Ultima_Empresa_Data_Demissao.'</td>
  </tr>
  <tr>
    <td colspan="5">Motivo da sa&iacute;da<br />'.mb_strtoupper($Ultima_Empresa_Motivo_Saida).'</td>
  </tr>
  <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">Penultima Empresa<br />'.mb_strtoupper($Penultima_Empresa).'</td>
    <td width="500">Cidade<br />'.mb_strtoupper($Penultima_Empresa_Cidade).'</td>
    <td width="500">Ultimo sal&aacute;rio<br />'.$Penultima_Empresa_Salario.'</td>
  </tr>
  <tr>
    <td colspan="3">Ultimo Cargo<br />'.mb_strtoupper($Penultima_Empresa_Cargo).'</td>
    <td>Data Admiss&atilde;o<br />'.$Penultima_Empresa_Data_Admissao.'</td>
    <td>Data Demiss&atilde;o<br />'.$Penultima_Empresa_Data_Demissao.'</td>
  </tr>
  <tr>
    <td colspan="5">Motivo da sa&iacute;da<br />'.mb_strtoupper($Penultima_Empresa_Motivo_Saida).'</td>
  </tr>
  <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">Antepenultima Empresa<br />'.mb_strtoupper($Antepenultima_Empresa).'</td>
    <td width="500">Cidade<br />'.mb_strtoupper($Antepenultima_Empresa_Cidade).'</td>
    <td width="500">Ultimo sal&aacute;rio<br />'.$Antepenultima_Empresa_Salario.'</td>
  </tr>
  <tr>
    <td colspan="3">Ultimo cargo<br />'.mb_strtoupper($Antepenultima_Empresa_Cargo).'</td>
    <td>Data Admiss&atilde;o<br />'.$Antepenultima_Empresa_Data_Admissao.'</td>
    <td>Data Demiss&atilde;o<br />'.$Antepenultima_Empresa_Data_Demissao.'</td>
  </tr>
  <tr>
    <td colspan="5">Motivo da sa&iacute;da<br />'.mb_strtoupper($Antepenultima_Empresa_Motivo_Saida).'</td>
  </tr>
  <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5"><div align="center"><em><strong>Condi&ccedil;&otilde;es de Sa&uacute;de </strong></em></div></td>
  </tr>
  <tr>
    <td colspan="3">Apresenta alguma deficiencia?<br />'.mb_strtoupper($Deficiencia).'</td>
    <td colspan="2">Qual? e CID <br />'.mb_strtoupper($Deficiencia_Qual)." ".$Deficiencia_CID.'</td>
  </tr>
  <tr>
    <td colspan="3">Apresenta alguma doen&ccedil;a no momento?<br />'.mb_strtoupper($Doenca).'</td>
    <td colspan="2">Qual?<br />'.mb_strtoupper($Doenca_Qual).'</td>
  </tr>
  <tr>
    <td colspan="3">Fez algum uso de medicamento?<br />'.mb_strtoupper($Medicamento).'</td>
    <td colspan="2">Qual?<br />'.mb_strtoupper($Medicamento_Qual).'</td>
  </tr>
  <tr>
    <td colspan="3">Fuma?<br />'.mb_strtoupper($Fuma).'</td>
    <td colspan="2">Quantidade di&aacute;ria<br />'.mb_strtoupper($Fuma_Qtd).'</td>
  </tr>
  <tr>
    <td colspan="3">Fez uso recente de alcool ou drogas?<br />'.mb_strtoupper($Alcool).'</td>
    <td colspan="2">Quando?Quanto?<br />'.mb_strtoupper($Alcool_Quando).'</td>
  </tr>
  <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5"><div align="center"><em><strong>Informa&ccedil;&otilde;es Gerais </strong></em></div></td>
  </tr>
  <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">Conhece alguem que trabalha na <strong>Libbero Central de Atendimentos</strong>?<br />'.mb_strtoupper($Conhece_Alguem).'</td>
    <td>Grau de parentesco<br />'.mb_strtoupper($Grau_Parentesco).'</td>
    <td>Nome<br />'.mb_strtoupper($Grau_Parentesco_Nome).'</td>
  </tr>
  <tr>
    <td colspan="3">Como teve conhecimento da vaga<br />'.mb_strtoupper($Conhecimento_Vaga).'</td>
    <td colspan="2">Outros<br />'.mb_strtoupper($Conhecimento_Vaga_Outros).'</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="940" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td width="128" rowspan="2"><img src="http://cadastrolibbero.esy.es/image001.png" width="201" height="58" /></td>
    <td width="444"><div align="center"><strong>FORMUL&Aacute;RIOS</strong></div></td>
    <td width="160" rowspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center"><em><strong>Questionario de Interesses </strong></em></div></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">Nome Completo<br />'.mb_strtoupper($Nome.' '.$Sobrenome).'</td>
    <td>Data<br />'.mb_strtoupper($data_atual).'</td>
  </tr>
  <tr>
    <td colspan="3">1. Qual o seu conhecimento sobre nossa organiza&ccedil;&atilde;o? Como voc&ecirc; entende que pode contribuir com nosso time?<br >'.mb_strtoupper($Questao_1).'</td>
  </tr>
  <tr>
    <td colspan="3"><span class="xl93" style="mso-ignore:colspan">2. Por qual per&iacute;odo voc&ecirc; esteve desempregado? Fez algum processo seletivo recentemente? Para qual &aacute;rea?
    </span><br >'.mb_strtoupper($Questao_2).'</td>
  </tr>
  <tr>
    <td colspan="3">3. Como voc&ecirc; planeja sua carreira para os pr&oacute;ximos 3 anos? Como planeja chegar l&aacute;?
    </span><br >'.mb_strtoupper($Questao_3).'</td>
  </tr>
  <tr>
    <td colspan="3"><span class="xl93" style="mso-ignore:colspan">4. Cite 3 fatores que o motivam e o desmotivam no trabalho.
    </span><br >'.mb_strtoupper($Questao_4).'</td>
  </tr>
  <tr>
    <td colspan="3"><span class="xl93" style="mso-ignore:colspan">5. Descreva 3 caracter&iacute;sticas pessoais que poderiam ser melhor desenvolvidas.
    </span><br >'.mb_strtoupper($Questao_5).'</td>
  </tr>

  <tr>
    <td colspan="3"><span class="xl93" style="mso-ignore:colspan">6. Descreva uma situa&ccedil;&atilde;o em que seu superior tenha criticado o seu trabalho? Como se sentiu a respeito?
    </span><br >'.mb_strtoupper($Questao_6).'</td>
  </tr>
  <tr>
    <td colspan="3"><span class="xl93" style="mso-ignore:colspan">7. O que te leva a pensar, que seus chefes anteriores lhe tinham como um bom trabalhador? O que suas refer&ecirc;ncias diriam sobre voc&ecirc? 
    </span><br >'.mb_strtoupper($Questao_7).'</td>
  </tr>
  <tr>
    <td colspan="3"><span class="xl93" style="mso-ignore:colspan">8. Por que voc&ecirc; acha estar qualificado para esta posi&ccedil;&atilde;o?
    </span><br >'.mb_strtoupper($Questao_8).'</td>
  </tr>
  <tr>
    <td colspan="3">9. Quando voc&ecirc; recebe o &quot;sim&quot; de duas empresas, o que motiva sua decis&atilde;o?<br >'.mb_strtoupper($Questao_9).'</td>
  </tr>
  <tr>
    <td colspan="3"><span class="xl93" style="mso-ignore:colspan">10. Com quem voc&ecirc; mora?
  &Eacute; o(a) &uacute;nico(a) respons&aacute;vel pela receita da casa?
    </span><br >'.mb_strtoupper($Questao_10).'</td>
  </tr>
  <tr>
    <td colspan="3"><span class="xl93" style="mso-ignore:colspan">11. Possui filhos?
  Mencione idade e escolaridade.
    </span><br >'.mb_strtoupper($Questao_11).'</td>
  </tr>
</table>
<p><br />
  <br />
</p>
</body>
</html>
'; ?>
</body>