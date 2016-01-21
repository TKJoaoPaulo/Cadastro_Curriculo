<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>

	  <meta charset="utf-8">
      
	  <title>Welcome to CodeIgniter</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.js">
	  
      <script src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.6.1.min.js"></script>
      <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
      <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.8.1/jquery.validate.js"></script>

	  <link rel="stylesheet" href="/resources/demos/style.css">

	  <script>
	  $(function() {
	  $("#Data_Nascimento, #Rg_Data_Emissao,#Ensino_Superior_Conclusao,#Ensino_Medio_Tecnico_Conclusao,#Ensino_Pos_Graduacao_Conclusao, #Ultima_Empresa_Data_Admissao,#Ultima_Empresa_Data_Demissao,#Antepenultima_Empresa_Data_Admissao,#Antepenultima_Empresa_Data_Demissao,#Penultima_Empresa_Data_Admissao,#Penultima_Empresa_Data_Demissao").datepicker({
		    changeMonth: true,
      		changeYear: true,
      		yearRange: '1950:2050',
		    dateFormat: 'dd/mm/yy',
		    dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
		    dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
		    dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
		    monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
		    monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
		    nextText: 'Próximo',
		    prevText: 'Anterior'
	  });

	  });
	  </script>

      <script type="text/javascript">
            $(document).ready(function(){
                $("#Primeiro_Emprego").change(function(){
                    $(this).find("option:selected").each(function(){
                        if($(this).attr("value")=="Nao"){
                            //$('.ultima-empresa').css('display','block');
                             $('.ultima-empresa').show();
                        }
                        else{
                            //$('.ultima-empresa').css('display','none');
                             $('.ultima-empresa').hide();
                             $('.penultima-empresa').hide();
                             $('.antepenultima-empresa').hide();
                        }
                       
                    });
                 }).change();
            });

            $(document).ready(function(){
                $("#Empresa_Anterior_Status").change(function(){
                    $(this).find("option:selected").each(function(){
                        if($(this).attr("value")=="Nao"){
                            //$('.ultima-empresa').css('display','block');
                             $('.penultima-empresa').hide();
                             $('.antepenultima-empresa').hide();
                        }
                        else{
                            //$('.ultima-empresa').css('display','none');
                             $('.penultima-empresa').show();
                        }
                       
                    });
                 }).change();
            });

            $(document).ready(function(){
                $("#Empresa_Antepenultima_Status").change(function(){
                    $(this).find("option:selected").each(function(){
                        if($(this).attr("value")=="Nao"){
                            //$('.ultima-empresa').css('display','block');
                             $('.antepenultima-empresa').hide();
                        }
                        else{
                            //$('.ultima-empresa').css('display','none');
                             $('.antepenultima-empresa').show();
                        }
                       
                    });
                 }).change();
            });



            $(document).ready(function(){
                $("#Deficiencia").change(function(){
                    $(this).find("option:selected").each(function(){
                        if($(this).attr("value")=="Nao"){
                            //$('.ultima-empresa').css('display','block');
                             $('.div-deficiencia').hide();
                        }
                        else{
                            //$('.ultima-empresa').css('display','none');
                             $('.div-deficiencia').show();

                        }
                       
                    });
                 }).change();
            });

            $(document).ready(function(){
                $("#Doenca").change(function(){
                    $(this).find("option:selected").each(function(){
                        if($(this).attr("value")=="Nao"){
                            //$('.ultima-empresa').css('display','block');
                             $('.div-doenca').hide();
                        }
                        else{
                            //$('.ultima-empresa').css('display','none');
                             $('.div-doenca').show();

                        }
                       
                    });
                 }).change();
            });

            $(document).ready(function(){
                $("#Alcool").change(function(){
                    $(this).find("option:selected").each(function(){
                        if($(this).attr("value")=="Nao"){
                            //$('.ultima-empresa').css('display','block');
                             $('.div-alcool').hide();
                        }
                        else{
                            //$('.ultima-empresa').css('display','none');
                             $('.div-alcool').show();

                        }
                       
                    });
                 }).change();
            });


            $(document).ready(function(){
                $("#Medicamento").change(function(){
                    $(this).find("option:selected").each(function(){
                        if($(this).attr("value")=="Nao"){
                            //$('.ultima-empresa').css('display','block');
                             $('.div-medicamento').hide();
                        }
                        else{
                            //$('.ultima-empresa').css('display','none');
                             $('.div-medicamento').show();

                        }
                       
                    });
                 }).change();
            });

            $(document).ready(function(){
                $("#Fuma").change(function(){
                    $(this).find("option:selected").each(function(){
                        if($(this).attr("value")=="Nao"){
                            //$('.ultima-empresa').css('display','block');
                             $('.div-fuma').hide();
                        }
                        else{
                            //$('.ultima-empresa').css('display','none');
                             $('.div-fuma').show();

                        }
                       
                    });
                 }).change();
            });


            $(document).ready(function(){
                $("#Conhece_Alguem").change(function(){
                    $(this).find("option:selected").each(function(){
                        if($(this).attr("value")=="Nao"){
                            //$('.ultima-empresa').css('display','block');
                             $('.div-conhece-alguem').hide();
                        }
                        else{
                            //$('.ultima-empresa').css('display','none');
                             $('.div-conhece-alguem').show();

                        }
                       
                    });
                 }).change();
            });

            $(document).ready(function(){
                $("#Conhecimento_Vaga").change(function(){
                    $(this).find("option:selected").each(function(){
                        if($(this).attr("value")=="Outros"){
                            //$('.ultima-empresa').css('display','block');
                             $('.div-outros').show();
                        }
                        else{
                            //$('.ultima-empresa').css('display','none');
                             $('.div-outros').hide();

                        }
                       
                    });
                 }).change();
            });

            $(document).ready(function(){
                $("#Ensino_Superior_Possui").change(function(){
                    $(this).find("option:selected").each(function(){
                        if($(this).attr("value")=="Sim"){
                            //$('.ultima-empresa').css('display','block');
                             $('.div-ensino-superior').show();
                        }
                        else{
                            //$('.ultima-empresa').css('display','none');
                             $('.div-ensino-superior').hide();

                        }
                       
                    });
                 }).change();
            });

            $(document).ready(function(){
                $("#Ensino_Pos_Graduacao_Possui").change(function(){
                    $(this).find("option:selected").each(function(){
                        if($(this).attr("value")=="Sim"){
                            //$('.ultima-empresa').css('display','block');
                             $('.div-ensino-pos').show();
                        }
                        else{
                            //$('.ultima-empresa').css('display','none');
                             $('.div-ensino-pos').hide();

                        }
                       
                    });
                 }).change();
            });

            $(document).ready(function(){
                $("#Sexo").change(function(){
                    $(this).find("option:selected").each(function(){
                        if($(this).attr("value")=="Masculino"){
                            //$('.ultima-empresa').css('display','block');
                             $('.div-reservista').show();
                        }
                        else{
                            //$('.ultima-empresa').css('display','none');
                             $('.div-reservista').hide();

                        }
                       
                    });
                 }).change();
            });




      </script>



<script>


    /*
    // fix for IE < 11
    if ($("<input />").prop("required") === undefined) {
        $(document).on("submit", function(e) {
            $(this)
                    .find("input, select, textarea")
                    .filter("[required]")
                    .filter(function() { return this.value == ''; })
                    .each(function() {
                        e.preventDefault();
                        $(this).css({ "border-color":"red" });
                        //alert( $(this).prev('label').html() + " is required!");

                    });
                    alert("Por favor, preencha todos os campos requeridos!");
        });

    }*/

$(function() {
    // valida o formulário
    $('#candidatedata').validate({
        // define regras para os campos
        errorClass: "my-error-class",

        rules: {
            Nome: {
                required: true, 
                minlength: 5, 
                maxlength: 50
            },
            Sobrenome: {
                required: true , 
                minlength: 5, 
                maxlength: 255
            },
            Cargo_Pretendido: {
                required: true,
                 minlength: 5, 
                 maxlength: 255
            },
            Data_Nascimento: {
                required: true,
                 minlength: 10,
                  maxlength: 10
            },
            Cidade_Nascimento: {
                required: true,
                 maxlength: 50
            },
            Estado_Nascimento: {
                required: true,
            },
            Idade: {
                required: true,
                maxlength: 2
            },
            CPF: {
                required: true,
                maxlength: 14
            },
            Reservista: {
                required: false,
            },
            RG: {
                required: true,
                maxlength: 12
            },
            Rg_Data_Emissao: {
                required: true,
                maxlength: 10
            },
            Rg_Cidade: {
                required: true,
                maxlength: 150
            },
            Rg_Estado: {
                required: true,
            },
            Nome_Pai: {
                required: true,
                 maxlength: 255
            },
            Nome_Mae: {
                required: true,
                 maxlength: 255
            },
            Endereco: {
                required: true,
                 maxlength: 500
            },
            Numero: {
                required: true,
                 maxlength: 30
            },
            Bairro: {
                required: true,
                 maxlength: 255
            },
            Regiao: {
                required: true,
                 maxlength: 20
            },
            Cidade: {
                required: true, 
                maxlength: 255
            },
            Estado: {
                required: true,
            },
            Tel_Residencial: {
                required: true,
                 maxlength: 11
            },
            Tel_Celular: {
                required: true,
                 maxlength: 12
            },
            Tel_Recado: {
                required: true,
                 maxlength: 12
            },
            Email: {
                required: true, 
                maxlength: 255,
                email: true
            },
            Facebook: {
                url: true
            }


            
        },

        // define messages para cada campo
        messages: {
            Nome:                    "Informe o seu Nome",
            Sobrenome:               "Informe seu Sobrenome",
            Cargo_Pretendido:        "Infome o Cargo Pretendido",
            Data_Nascimento:         "Informe a Data de Nascimento",
            Cidade_Nascimento:       "Informe a Cidade de Nascimento",
            Estado_Nascimento:       "Informe o Estado de Nascimento",
            Idade:                   "Informe a sua Idade",
            Estado_Civil:            "Infome o Estado Civil",
            N_Dependentes:           "Informe o Número de Dependentes",
            CPF:                     "Informe o CPF",     
            RG:                      "Informe o seu RG",
            Rg_Data_Emissao:         "Informe a Data de Emissão do seu RG",
            Rg_Cidade:               "Informe a Cidade de seu RG",
            Rg_Estado:               "Informe o Estado de seu RG",
            Nome_Pai:                "Informe o Nome do seu Pai",
            Nome_Mae:                "Informe o Nome da sua Mãe",
            Endereco:                "Informe seu Endereço",
            Numero:                  "Informe o Número",
            Bairro:                  "Informe seu Bairro",
            Regiao:                  "Informe a Região",
            Cidade:                  "Informe sua Cidade",
            Estado:                  "Informe seu Estado",
            Tel_Residencial:         "Informe o seu Telefone Residencial",
            Tel_Celular:             "Informe o seu Telefone Celular",
            Tel_Recado :             "Informe um telefone para Recado",
            Email:                   "Informe um Email para contato"
        },


    });
});




</script>


<meta name="viewport" content="width=480, initial-scale=0.7, maximum-scale=0.7, minimum-scale=0.7,target-densitydpi=device-dpi, user-scalable=no" />




	<style type="text/css">


/* Font ROBOTO */
.roboto{
    font-family: 'Roboto', sans-serif !important; 
}

/* custom background for panel  */
.container{ 
    padding-top: 30px !important;
    background-color: #f5f5f5 !important;  

}

/* custom background header panel */
.custom-header-panel{
    background-color: #1fa67b !important;
    border-color: #1fa68b !important;
    color: white;
}

.no-margin-form-group {
    margin: 0 !important;
}
.requerido {
    color: red;
}
.btn-orange-md {
    background: #FF791F !important;
    border-bottom: 3px solid #ae4d13 !important;
    color: white;
}

.btn-orange-md:hover {
    background: #d86016 !important;
    color: white !important;
}

.body{
	background-color: #f5f5f5 !important;
}

.panel-botao{
    margin-bottom: 20px;
    background-color:#f5f5f5;
}

.my-error-class {
    color:red;
}


.plus{
    margin-top: -15px;
}




	</style>
</head>

<body class="body">

    
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- beauty font ROBOTO -->
<link href='http://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>


<form id="candidatedata" name="candidatedata" class="form-horizontal" method="POST" role="form" action="<?php echo base_url('index.php/Curriculo/update'); ?>">

<div class="container">

<div class="row" >

    <div class="col-md-12" >

        
            <div class="row"  >
                <div class="col-md-offset-2 col-md-8">
                    <div class="panel"  >
                        <div class="panel-heading custom-header-panel" >
                            <h3 class="panel-title roboto">Dados Pessoais</h3>
                        </div>
                        <div class="panel-body">

                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Cargo_Pretendido">Cargo Pretendido<span class="requerido"> *</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="Cargo_Pretendido" id="Cargo_Pretendido" required="" maxlength="70" value="<?php echo $Cargo_Pretendido ?>">
                                </div>
                            </div>
                               <div class="form-group">
                                <label class="col-sm-4 control-label" for="Nome">Nome<span class="requerido"> *</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="Nome" id="Nome" required maxlength="100" value="<?php echo $Nome ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Sobrenome">Sobrenome<span class="requerido"> *</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control rut" id="Sobrenome" name="Sobrenome" required  maxlength="100" placeholder=""  value="<?php echo $Sobrenome ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Data_Nascimento">Data de Nascimento<span class="requerido"> *</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control rut" id="Data_Nascimento" name="Data_Nascimento"  maxlength="100" placeholder="" required="required" value="<?php echo $Data_Nascimento ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Cidade_Nascimento">Cidade de Nascimento<span class="requerido"> *</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control rut" id="Cidade_Nascimento" name="Cidade_Nascimento"  maxlength="100" placeholder="" required="required" value="<?php echo $Cidade_Nascimento ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Estado_Nascimento">Estado de Nascimento<span class="requerido"> *</span></label>
                                <div class="col-sm-8">
                                    <select class="form-control" id="Estado_Nascimento" name="Estado_Nascimento" >
                                        <option <?php if( $Estado_Nascimento == "Acre" ) echo "selected"; ?> value="Acre">Acre</option>
                                        <option <?php if( $Estado_Nascimento == "Alagoas" ) echo "selected"; ?> value="Alagoas">Alagoas</option> 
                                        <option <?php if( $Estado_Nascimento == "Amazonas" ) echo "selected"; ?> value="Amazonas">Amazonas</option> 
                                        <option <?php if( $Estado_Nascimento == "Amapá" ) echo "selected"; ?> value="Amapá">Amapá</option> 
                                        <option <?php if( $Estado_Nascimento == "Bahia" ) echo "selected"; ?> value="Bahia">Bahia</option> 
                                        <option <?php if( $Estado_Nascimento == "Ceará" ) echo "selected"; ?> value="Ceará">Ceará</option>
                                        <option <?php if( $Estado_Nascimento == "Distrito Federal" ) echo "selected"; ?> value="Distrito Federal">Distrito Federal</option>
                                        <option <?php if( $Estado_Nascimento == "Espirito Santo" ) echo "selected"; ?> value="Espirito Santo">Espirito Santo</option> 
                                        <option <?php if( $Estado_Nascimento == "Goiás" ) echo "selected"; ?> value="Goiás">Goiás</option> 
                                        <option <?php if( $Estado_Nascimento == "Maranhão" ) echo "selected"; ?> value="Maranhão">Maranhão</option> 
                                        <option <?php if( $Estado_Nascimento == "Mato Grosso" ) echo "selected"; ?> value="Mato Grosso">Mato Grosso</option>  
                                        <option <?php if( $Estado_Nascimento == "Mato Grosso do Sul" ) echo "selected"; ?> value="Mato Grosso do Sul">Mato Grosso do Sul</option> 
                                        <option <?php if( $Estado_Nascimento == "Minas Gerais" ) echo "selected"; ?> value="Minas Gerais">Minas Gerais</option> 
                                        <option <?php if( $Estado_Nascimento == "Pará" ) echo "selected"; ?> value="Pará">Pará</option> 
                                        <option <?php if( $Estado_Nascimento == "Paraíba" ) echo "selected"; ?> value="Paraíba">Paraíba</option>
                                        <option <?php if( $Estado_Nascimento == "Paraná" ) echo "selected"; ?> value="Paraná">Paraná</option>
                                        <option <?php if( $Estado_Nascimento == "Pernambuco" ) echo "selected"; ?> value="Pernambuco">Pernambuco</option>
                                        <option <?php if( $Estado_Nascimento == "Piauí" ) echo "selected"; ?> value="Piauí">Piauí</option>
                                        <option <?php if( $Estado_Nascimento == "Rio de Janeiro" ) echo "selected"; ?> value="Rio de Janeiro">Rio de Janeiro</option>
                                        <option <?php if( $Estado_Nascimento == "Rio Grande do Norte" ) echo "selected"; ?> value="Rio Grande do Norte">Rio Grande do Norte</option>
                                        <option <?php if( $Estado_Nascimento == "Rondônia" ) echo "selected"; ?> value="Rondônia">Rondônia</option>
                                        <option <?php if( $Estado_Nascimento == "Rio Grande do Sul" ) echo "selected"; ?> value="Rio Grande do Sul">Rio Grande do Sul</option> 
                                        <option <?php if( $Estado_Nascimento == "Roraima" ) echo "selected"; ?> value="Roraima">Roraima</option>
                                        <option <?php if( $Estado_Nascimento == "Santa Catarina" ) echo "selected"; ?> value="Santa Catarina">Santa Catarina</option>
                                        <option <?php if( $Estado_Nascimento == "Sergipe" ) echo "selected"; ?> value="Sergipe">Sergipe</option>
                                        <option <?php if( $Estado_Nascimento == "São Paulo" ) echo "selected"; ?> value="São Paulo">São Paulo</option> 
                                        <option <?php if( $Estado_Nascimento == "Tocantins" ) echo "selected"; ?> value="Tocantins">Tocantins</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Idade">Idade<span class="requerido"> *</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control rut" id="Idade" name="Idade"  maxlength="100" placeholder="" required="required" value="<?php echo "$Idade" ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Estado_Civil">Estado Civil<span class="requerido"> *</span></label>
                                <div class="col-sm-8">
                                    <select class="form-control" id="Estado_Civil" name="Estado_Civil">
                                        <?php 
                                                if($Estado_Civil=="Solteiro" || $Estado_Civil=="")
                                                {
                                                    echo '<option selected value="Solteiro">Solteiro</option>';
                                                    echo '<option value="Casado">Casado</option>';
                                                    echo '<option value="Divorciado">Divorciado</option>';
                                                }
                                                if($Estado_Civil=="Casado")
                                                {
                                                    echo '<option value="Solteiro">Solteiro</option>';
                                                    echo '<option selected value="Casado">Casado</option>';
                                                    echo '<option value="Divorciado">Divorciado</option>';
                                                }
                                                if($Estado_Civil=="Divorciado")
                                                {
                                                    echo '<option value="Solteiro">Solteiro</option>';
                                                    echo '<option value="Casado">Casado</option>';
                                                    echo '<option selected value="Divorciado">Divorciado</option>';
                                                }
                                         ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Sexo">Sexo<span class="requerido">*</span></label>
                                <div class="col-sm-8">
                                <select class="form-control" id="Sexo" name="Sexo" >
                                        <option <?php if( $Sexo == "Masculino" || $Sexo=="" ) echo "selected"; ?> value="Masculino">Masculino</option>
                                        <option <?php if( $Sexo == "Feminino" ) echo "selected"; ?> value="Feminino">Feminino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="N_Dependentes">Número de Dependentes<span class="requerido"> *</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control rut" id="N_Dependentes" name="N_Dependentes"  maxlength="2" placeholder="" required="required" value="<?php echo "$N_Dependentes" ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Cpf">CPF<span class="requerido"> *</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control rut" id="CPF" name="CPF"  maxlength="14" placeholder="" required="required" value="<?php echo "$CPF" ?>">
                                </div>
                            </div>
                            <div class="div-reservista">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="Reservista">Número de Reservista<span class="requerido">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control rut" id="Reservista" name="Reservista"  maxlength="100" placeholder="" required="required" value="<?php echo "$Reservista" ?>">
                                    </div>
                                </div>
                            </div>    
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="RG">RG<span class="requerido"> *</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control rut" id="RG" name="RG"  maxlength="12" placeholder="" required="required" value="<?php echo "$RG" ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Rg_Data_Emissao">Data de Emissão RG<span class="requerido"> *</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control rut" id="Rg_Data_Emissao" name="Rg_Data_Emissao"  maxlength="10" placeholder="" required="required" value="<?php echo "$Rg_Data_Emissao" ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Rg_Cidade">Cidade Emissão RG<span class="requerido"> *</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control rut" id="Rg_Cidade" name="Rg_Cidade"  maxlength="150" placeholder="" required="required" value="<?php echo "$Rg_Cidade" ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Rg_Estado">Estado Emissão RG<span class="requerido"> *</span></label>
                                <div class="col-sm-8">
                                    <select class="form-control" id="Rg_Estado" name="Rg_Estado" >
                                        <option <?php if( $Rg_Estado == "Acre" ) echo "selected"; ?> value="Acre">Acre</option>
                                        <option <?php if( $Rg_Estado == "Alagoas" ) echo "selected"; ?> value="Alagoas">Alagoas</option> 
                                        <option <?php if( $Rg_Estado == "Amazonas" ) echo "selected"; ?> value="Amazonas">Amazonas</option> 
                                        <option <?php if( $Rg_Estado == "Amapá" ) echo "selected"; ?> value="Amapá">Amapá</option> 
                                        <option <?php if( $Rg_Estado == "Bahia" ) echo "selected"; ?> value="Bahia">Bahia</option> 
                                        <option <?php if( $Rg_Estado == "Ceará" ) echo "selected"; ?> value="Ceará">Ceará</option>
                                        <option <?php if( $Rg_Estado == "Distrito Federal" ) echo "selected"; ?> value="Distrito Federal">Distrito Federal</option>
                                        <option <?php if( $Rg_Estado == "Espirito Santo" ) echo "selected"; ?> value="Espirito Santo">Espirito Santo</option> 
                                        <option <?php if( $Rg_Estado == "Goiás" ) echo "selected"; ?> value="Goiás">Goiás</option> 
                                        <option <?php if( $Rg_Estado == "Maranhão" ) echo "selected"; ?> value="Maranhão">Maranhão</option> 
                                        <option <?php if( $Rg_Estado == "Mato Grosso" ) echo "selected"; ?> value="Mato Grosso">Mato Grosso</option>  
                                        <option <?php if( $Rg_Estado == "Mato Grosso do Sul" ) echo "selected"; ?> value="Mato Grosso do Sul">Mato Grosso do Sul</option> 
                                        <option <?php if( $Rg_Estado == "Minas Gerais" ) echo "selected"; ?> value="Minas Gerais">Minas Gerais</option> 
                                        <option <?php if( $Rg_Estado == "Pará" ) echo "selected"; ?> value="Pará">Pará</option> 
                                        <option <?php if( $Rg_Estado == "Paraíba" ) echo "selected"; ?> value="Paraíba">Paraíba</option>
                                        <option <?php if( $Rg_Estado == "Paraná" ) echo "selected"; ?> value="Paraná">Paraná</option>
                                        <option <?php if( $Rg_Estado == "Pernambuco" ) echo "selected"; ?> value="Pernambuco">Pernambuco</option>
                                        <option <?php if( $Rg_Estado == "Piauí" ) echo "selected"; ?> value="Piauí">Piauí</option>
                                        <option <?php if( $Rg_Estado == "Rio de Janeiro" ) echo "selected"; ?> value="Rio de Janeiro">Rio de Janeiro</option>
                                        <option <?php if( $Rg_Estado == "Rio Grande do Norte" ) echo "selected"; ?> value="Rio Grande do Norte">Rio Grande do Norte</option>
                                        <option <?php if( $Rg_Estado == "Rondônia" ) echo "selected"; ?> value="Rondônia">Rondônia</option>
                                        <option <?php if( $Rg_Estado == "Rio Grande do Sul" ) echo "selected"; ?> value="Rio Grande do Sul">Rio Grande do Sul</option> 
                                        <option <?php if( $Rg_Estado == "Roraima" ) echo "selected"; ?> value="Roraima">Roraima</option>
                                        <option <?php if( $Rg_Estado == "Santa Catarina" ) echo "selected"; ?> value="Santa Catarina">Santa Catarina</option>
                                        <option <?php if( $Rg_Estado == "Sergipe" ) echo "selected"; ?> value="Sergipe">Sergipe</option>
                                        <option <?php if( $Rg_Estado == "São Paulo" ) echo "selected"; ?> value="São Paulo">São Paulo</option> 
                                        <option <?php if( $Rg_Estado == "Tocantins" ) echo "selected"; ?> value="Tocantins">Tocantins</option>
                                    </select>
                                   
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Nome_Pai">Nome do Pai<span class="requerido"> *</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control rut" id="Nome_Pai" name="Nome_Pai"  maxlength="255" placeholder="" required="required" value="<?php echo "$Nome_Pai" ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Nome_Mae">Nome da Mãe<span class="requerido"> *</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control rut" id="Nome_Mae" name="Nome_Mae"  maxlength="255" placeholder="" required="required" value="<?php echo "$Nome_Mae" ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Endereco">Endereço<span class="requerido"> *</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control rut" id="Endereco" name="Endereco"  maxlength="500" placeholder="" required="required" value="<?php echo "$Endereco" ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Numero">Nº<span class="requerido"> *</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control rut" id="Numero" name="Numero"  maxlength="10" placeholder="" required="required" value="<?php echo "$Numero" ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Bairro">Bairro<span class="requerido"> *</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control rut" id="Bairro" name="Bairro"  maxlength="255" placeholder="" required="required" value="<?php echo "$Bairro" ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Regiao">Região(Zona)<span class="requerido"> *</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control rut" id="Regiao" name="Regiao"  maxlength="20" placeholder="" required="required" value="<?php echo "$Regiao" ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Cidade">Cidade<span class="requerido"> *</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control rut" id="Cidade" name="Cidade"  maxlength="255" placeholder="" required="required" value="<?php echo "$Cidade" ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Estado">Estado<span class="requerido"> *</span></label>
                                <div class="col-sm-8">
                                    <select class="form-control" id="Estado" name="Estado" >
                                        <option <?php if( $Estado == "Acre" ) echo "selected"; ?> value="Acre">Acre</option>
                                        <option <?php if( $Estado == "Alagoas" ) echo "selected"; ?> value="Alagoas">Alagoas</option> 
                                        <option <?php if( $Estado == "Amazonas" ) echo "selected"; ?> value="Amazonas">Amazonas</option> 
                                        <option <?php if( $Estado == "Amapá" ) echo "selected"; ?> value="Amapá">Amapá</option> 
                                        <option <?php if( $Estado == "Bahia" ) echo "selected"; ?> value="Bahia">Bahia</option> 
                                        <option <?php if( $Estado == "Ceará" ) echo "selected"; ?> value="Ceará">Ceará</option>
                                        <option <?php if( $Estado == "Distrito Federal" ) echo "selected"; ?> value="Distrito Federal">Distrito Federal</option>
                                        <option <?php if( $Estado == "Espirito Santo" ) echo "selected"; ?> value="Espirito Santo">Espirito Santo</option> 
                                        <option <?php if( $Estado == "Goiás" ) echo "selected"; ?> value="Goiás">Goiás</option> 
                                        <option <?php if( $Estado == "Maranhão" ) echo "selected"; ?> value="Maranhão">Maranhão</option> 
                                        <option <?php if( $Estado == "Mato Grosso" ) echo "selected"; ?> value="Mato Grosso">Mato Grosso</option>  
                                        <option <?php if( $Estado == "Mato Grosso do Sul" ) echo "selected"; ?> value="Mato Grosso do Sul">Mato Grosso do Sul</option> 
                                        <option <?php if( $Estado == "Minas Gerais" ) echo "selected"; ?> value="Minas Gerais">Minas Gerais</option> 
                                        <option <?php if( $Estado == "Pará" ) echo "selected"; ?> value="Pará">Pará</option> 
                                        <option <?php if( $Estado == "Paraíba" ) echo "selected"; ?> value="Paraíba">Paraíba</option>
                                        <option <?php if( $Estado == "Paraná" ) echo "selected"; ?> value="Paraná">Paraná</option>
                                        <option <?php if( $Estado == "Pernambuco" ) echo "selected"; ?> value="Pernambuco">Pernambuco</option>
                                        <option <?php if( $Estado == "Piauí" ) echo "selected"; ?> value="Piauí">Piauí</option>
                                        <option <?php if( $Estado == "Rio de Janeiro" ) echo "selected"; ?> value="Rio de Janeiro">Rio de Janeiro</option>
                                        <option <?php if( $Estado == "Rio Grande do Norte" ) echo "selected"; ?> value="Rio Grande do Norte">Rio Grande do Norte</option>
                                        <option <?php if( $Estado == "Rondônia" ) echo "selected"; ?> value="Rondônia">Rondônia</option>
                                        <option <?php if( $Estado == "Rio Grande do Sul" ) echo "selected"; ?> value="Rio Grande do Sul">Rio Grande do Sul</option> 
                                        <option <?php if( $Estado == "Roraima" ) echo "selected"; ?> value="Roraima">Roraima</option>
                                        <option <?php if( $Estado == "Santa Catarina" ) echo "selected"; ?> value="Santa Catarina">Santa Catarina</option>
                                        <option <?php if( $Estado == "Sergipe" ) echo "selected"; ?> value="Sergipe">Sergipe</option>
                                        <option <?php if( $Estado == "São Paulo" ) echo "selected"; ?> value="São Paulo">São Paulo</option> 
                                        <option <?php if( $Estado == "Tocantins" ) echo "selected"; ?> value="Tocantins">Tocantins</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Tel_Residencial">Tel. Residencial<span class="requerido"> *</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control rut" id="Tel_Residencial" name="Tel_Residencial"  maxlength="10" placeholder="(DDD)XXXX-XXXX" required="required" value="<?php echo "$Tel_Residencial" ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Tel_Celular">Tel. Celular<span class="requerido"> *</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control rut" id="Tel_Celular" name="Tel_Celular"  maxlength="11" placeholder="(DDD)XXXXX-XXXX" required="required" value="<?php echo "$Tel_Celular" ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Tel_Recado">Tel. Recado<span class="requerido"> *</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control rut" id="Tel_Recado" name="Tel_Recado"  maxlength="11" placeholder="(DDD)XXXXX-XXXX" required="required" value="<?php echo "$Tel_Recado" ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Email">Email para contato<span class="requerido"> *</span></label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control rut" id="Email" name="Email"  maxlength="255" placeholder="" required="required" value="<?php echo "$Email" ?>">
                                </div>
                            </div>

                            <!--Fin datos personales-->
                            
                        </div>
                    </div>
                </div>
            
            </div>
    </div>
</div>
<!-- Tab panes -->



<div class="row" >

    <div class="col-md-12" >

            <div class="row"  >
                <div class="col-md-offset-2 col-md-8">
                    <div class="panel">
                        <div class="panel-heading custom-header-panel" >
                            <h3 class="panel-title roboto">Redes Sociais</h3>
                        </div>
                        <div class="panel-body">

                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Facebook">Facebook<span class="requerido"> </span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control rut" id="Facebook" name="Facebook"  maxlength="100" placeholder=""  value="<?php echo "$Facebook" ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Twitter">Twitter<span class="requerido"> </span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control rut" id="Twitter" name="Twitter"  maxlength="100" placeholder="" value="<?php echo "$Twitter" ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Instagram">Instagram<span class="requerido"> </span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control rut" id="Instagram" name="Instagram"  maxlength="100" placeholder=""  value="<?php echo "$Instagram" ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Linkedin">Linkedin<span class="requerido"> </span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control rut" id="Linkedin" name="Linkedin"  maxlength="100" placeholder=""  value="<?php echo "$Linkedin" ?>">
                                </div>
                            </div>

                            <!--Fin datos personales-->
                            
                        </div>
                    </div>
                </div>
            
            </div> 
    </div>
</div>



<div class="row" >

    <div class="col-md-12" >

            <div class="row"  >
                <div class="col-md-offset-2 col-md-8">
                    <div class="panel">
                        <div class="panel-heading custom-header-panel" >
                            <h3 class="panel-title roboto">Formação Escolar</h3>
                        </div>
                        <div class="panel-body">

                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Ensino_Medio_Tecnico_Status">Ensino Médio e Técnico<span class="requerido">*</span></label>
                                <div class="col-sm-8">
                                <select class="form-control" id="Ensino_Medio_Tecnico_Status" name="Ensino_Medio_Tecnico_Status" >
                                        <option <?php if( $Ensino_Medio_Tecnico_Status == "Andamento" ) echo "selected"; ?> value="Andamento">Andamento</option>
                                        <option <?php if( $Ensino_Medio_Tecnico_Status == "Incompleto" ) echo "selected"; ?> value="Incompleto">Incompleto</option>
                                        <option <?php if( $Ensino_Medio_Tecnico_Status == "Completo" ) echo "selected"; ?> value="Completo">Completo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Ensino_Medio_Tecnico_Conclusao">Ano de Conclusão<span class="requerido">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control rut" id="Ensino_Medio_Tecnico_Conclusao" name="Ensino_Medio_Tecnico_Conclusao"  maxlength="100" placeholder="" required=""  value="<?php echo "$Ensino_Medio_Tecnico_Conclusao" ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Ensino_Medio_Tecnico_Instituicao">Instituição<span class="requerido">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control rut" id="Ensino_Medio_Tecnico_Instituicao" name="Ensino_Medio_Tecnico_Instituicao"  maxlength="100" placeholder="" required=""   value="<?php echo "$Ensino_Medio_Tecnico_Instituicao" ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Ensino_Medio_Tecnico_Curso">Curso<span class="requerido">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control rut" id="Ensino_Medio_Tecnico_Curso" name="Ensino_Medio_Tecnico_Curso"  maxlength="100" placeholder="" required=""   value="<?php echo "$Ensino_Medio_Tecnico_Curso" ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Ensino_Superior_Possui">Possuí Ensino Superior?<span class="requerido">*</span></label>
                                <div class="col-sm-8">
                                <select class="form-control" id="Ensino_Superior_Possui" name="Ensino_Superior_Possui" >
                                        <option <?php if( $Ensino_Superior_Possui == "Nao" ) echo "selected"; ?> value="Nao">Nao</option>
                                        <option <?php if( $Ensino_Superior_Possui == "Sim" ) echo "selected"; ?> value="Sim">Sim</option>
                                    </select>
                                </div>
                            </div>

                            <div class="div-ensino-superior">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="Ensino_Superior_Status">Status<span class="requerido">*</span></label>
                                    <div class="col-sm-8">
                                    <select class="form-control" id="Ensino_Superior_Status" name="Ensino_Superior_Status" >
                                        <option <?php if( $Ensino_Superior_Status == "Andamento" ) echo "selected"; ?> value="Andamento">Andamento</option>
                                        <option <?php if( $Ensino_Superior_Status == "Incompleto" ) echo "selected"; ?> value="Incompleto">Incompleto</option>
                                        <option <?php if( $Ensino_Superior_Status == "Completo" ) echo "selected"; ?> value="Completo">Completo</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="Ensino_Superior_Conclusao">Ano de Conclusão<span class="requerido">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control rut" id="Ensino_Superior_Conclusao" name="Ensino_Superior_Conclusao"  maxlength="100" placeholder=""   value="<?php echo "$Ensino_Superior_Conclusao" ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="Ensino_Superior_Instituicao">Instituição<span class="requerido">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control rut" id="Ensino_Superior_Instituicao" name="Ensino_Superior_Instituicao"  maxlength="100" placeholder=""   value="<?php echo "$Ensino_Superior_Conclusao" ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="Ensino_Superior_Curso">Curso<span class="requerido">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control rut" id="Ensino_Superior_Curso" name="Ensino_Superior_Curso"  maxlength="100" placeholder=""   value="<?php echo "$Ensino_Superior_Curso" ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Ensino_Pos_Graduacao_Possui">Possuí Pós Graduação?<span class="requerido">*</span></label>
                                <div class="col-sm-8">
                                <select class="form-control" id="Ensino_Pos_Graduacao_Possui" name="Ensino_Pos_Graduacao_Possui" >
                                        <option <?php if( $Ensino_Pos_Graduacao_Possui == "Nao" ) echo "selected"; ?> value="Nao">Nao</option>
                                        <option <?php if( $Ensino_Pos_Graduacao_Possui == "Sim" ) echo "selected"; ?> value="Sim">Sim</option>
                                    </select>
                                </div>
                            </div>   

                            <div class="div-ensino-pos">    
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="Ensino_Pos_Graduacao_Status">Status<span class="requerido">*</span></label>
                                    <div class="col-sm-8">
                                    <select class="form-control" id="Ensino_Pos_Graduacao_Status" name="Ensino_Pos_Graduacao_Status" >
                                        <option <?php if( $Ensino_Pos_Graduacao_Status == "Andamento" ) echo "selected"; ?> value="Andamento">Andamento</option>
                                        <option <?php if( $Ensino_Pos_Graduacao_Status == "Incompleto" ) echo "selected"; ?> value="Incompleto">Incompleto</option>
                                        <option <?php if( $Ensino_Pos_Graduacao_Status == "Completo" ) echo "selected"; ?> value="Completo">Completo</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="Ensino_Pos_Graduacao_Conclusao">Ano de Conclusão<span class="requerido">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control rut" id="Ensino_Pos_Graduacao_Conclusao" name="Ensino_Pos_Graduacao_Conclusao"  maxlength="100" placeholder=""   value="<?php echo "$Ensino_Pos_Graduacao_Conclusao" ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="Ensino_Pos_Graduacao_Instituicao">Instituição<span class="requerido">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control rut" id="Ensino_Pos_Graduacao_Instituicao" name="Ensino_Pos_Graduacao_Instituicao"  maxlength="100" placeholder=""   value="<?php echo "$Ensino_Pos_Graduacao_Instituicao" ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="Ensino_Pos_Graduacao_Curso">Curso<span class="requerido">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control rut" id="Ensino_Pos_Graduacao_Curso" name="Ensino_Pos_Graduacao_Curso"  maxlength="100" placeholder=""   value="<?php echo "$Ensino_Pos_Graduacao_Curso" ?>">
                                    </div>
                                </div>
                            </div>        

                            <!--Fin datos personales-->
                            
                        </div>
                    </div>
                </div>
            
            </div>
    </div>
</div>



<div class="row" >

    <div class="col-md-12" >


            <div class="row"  >
                <div class="col-md-offset-2 col-md-8">
                    <div class="panel">
                        <div class="panel-heading custom-header-panel" >
                            <h3 class="panel-title roboto">Experiência Profissional</h3>
                        </div>
                        <div class="panel-body">

                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Primeiro_Emprego">Primeiro Emprego?<span class="requerido">*</span></label>
                                <div class="col-sm-8">
                                <select class="form-control" id="Primeiro_Emprego" name="Primeiro_Emprego" >
                                        <option <?php if( $Primeiro_Emprego == "Sim" ) echo "selected"; ?> value="Sim">Sim</option>
                                        <option <?php if( $Primeiro_Emprego == "Nao" ) echo "selected"; ?> value="Nao">Nao</option>
                                    </select>
                                </div>
                            </div>

                            <div class="ultima-empresa">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="Ultima_Empresa">Ultima Empresa<span class="requerido">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control rut" id="Ultima_Empresa" name="Ultima_Empresa"  maxlength="100" placeholder=""   value="<?php echo "$Ultima_Empresa" ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="Ultima_Empresa_Cidade">Cidade<span class="requerido">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control rut" id="Ultima_Empresa_Cidade" name="Ultima_Empresa_Cidade"  maxlength="100" placeholder=""  value="<?php echo "$Ultima_Empresa_Cidade" ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="Ultima_Empresa_Salario">Ultimo Salário<span class="requerido">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control rut" id="Ultima_Empresa_Salario" name="Ultima_Empresa_Salario"  maxlength="100" placeholder=""  value="<?php echo "$Ultima_Empresa_Salario" ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="Ultima_Empresa_Cargo">Ultimo Cargo<span class="requerido">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control rut" id="Ultima_Empresa_Cargo" name="Ultima_Empresa_Cargo"  maxlength="100" placeholder=""  value="<?php echo "$Ultima_Empresa_Cargo" ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="Ultima_Empresa_Data_Admissao">Data de Admissão<span class="requerido">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control rut" id="Ultima_Empresa_Data_Admissao" name="Ultima_Empresa_Data_Admissao"  maxlength="100" placeholder=""  value="<?php echo "$Ultima_Empresa_Data_Admissao" ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="Ultima_Empresa_Data_Demissao">Data de Demissão<span class="requerido">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control rut" id="Ultima_Empresa_Data_Demissao" name="Ultima_Empresa_Data_Demissao"  maxlength="100" placeholder=""  value="<?php echo "$Ultima_Empresa_Data_Demissao" ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="Ultima_Empresa_Motivo_Saida">Motivo da Saida<span class="requerido">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control rut" id="Ultima_Empresa_Motivo_Saida" name="Ultima_Empresa_Motivo_Saida"  maxlength="100" placeholder=""  value="<?php echo "$Ultima_Empresa_Motivo_Saida" ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                <label class="col-sm-4 control-label" for="Empresa_Anterior_Status">Trabalhou em outra empresa anterior a esta?<span class="requerido">*</span></label>
                                <div class="col-sm-8">
                                    <select class="form-control" id="Empresa_Anterior_Status" name="Empresa_Anterior_Status" >
                                        <option <?php if( $Empresa_Anterior_Status == "Nao" ) echo "selected"; ?> value="Nao">Nao</option>
                                        <option <?php if( $Empresa_Anterior_Status == "Sim" ) echo "selected"; ?> value="Sim">Sim</option>
                                    </select>
                                </div>
                                </div>

                             </div>




                            <div class="penultima-empresa">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="Penultima_Empresa">Penultima Empresa<span class="requerido">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control rut" id="Penultima_Empresa" name="Penultima_Empresa"  maxlength="100" placeholder=""  value="<?php echo "$Penultima_Empresa" ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="Penultima_Empresa_Cidade">Penultima Cidade<span class="requerido">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control rut" id="Penultima_Empresa_Cidade" name="Penultima_Empresa_Cidade"  maxlength="100" placeholder=""  value="<?php echo "$Penultima_Empresa_Cidade" ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="Penultima_Empresa_Salario">Penultimo Salário<span class="requerido">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control rut" id="Penultima_Empresa_Salario" name="Penultima_Empresa_Salario"  maxlength="100" placeholder=""  value="<?php echo "$Penultima_Empresa_Salario" ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="Penultima_Empresa_Cargo">Penultimo Cargo<span class="requerido">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control rut" id="Penultima_Empresa_Cargo" name="Penultima_Empresa_Cargo"  maxlength="100" placeholder=""  value="<?php echo "$Penultima_Empresa_Cargo" ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="Penultima_Empresa_Data_Admissao">Penultima Data de Admissão<span class="requerido">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control rut" id="Penultima_Empresa_Data_Admissao" name="Penultima_Empresa_Data_Admissao"  maxlength="100" placeholder=""  value="<?php echo "$Penultima_Empresa_Data_Admissao" ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="Penultima_Empresa_Data_Demissao">Penultima Data de Demissão<span class="requerido">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control rut" id="Penultima_Empresa_Data_Demissao" name="Penultima_Empresa_Data_Demissao"  maxlength="100" placeholder=""  value="<?php echo "$Penultima_Empresa_Data_Demissao" ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="Penultima_Empresa_Motivo_Saida">Penultimo Motivo da Saida<span class="requerido">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control rut" id="Penultima_Empresa_Motivo_Saida" name="Penultima_Empresa_Motivo_Saida"  maxlength="100" placeholder=""  value="<?php echo "$Penultima_Empresa_Motivo_Saida" ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                <label class="col-sm-4 control-label" for="Empresa_Antepenultima_Status">Trabalhou em outra empresa anterior a esta?<span class="requerido">*</span></label>
                                <div class="col-sm-8">
                                    <select class="form-control" id="Empresa_Antepenultima_Status" name="Empresa_Antepenultima_Status" >
                                        <option <?php if( $Empresa_Antepenultima_Status == "Nao" ) echo "selected"; ?> value="Nao">Nao</option>
                                        <option <?php if( $Empresa_Antepenultima_Status == "Sim" ) echo "selected"; ?> value="Sim">Sim</option>
                                    </select>
                                </div>
                                </div>

                             </div>


                            <div class="antepenultima-empresa">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="Antepenultima_Empresa">Antepenultima Empresa<span class="requerido">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control rut" id="Antepenultima_Empresa" name="Antepenultima_Empresa"  maxlength="100" placeholder=""  value="<?php echo "$Antepenultima_Empresa" ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="Antepenultima_Empresa_Cidade">Antepenultima Cidade<span class="requerido">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control rut" id="Antepenultima_Empresa_Cidade" name="Antepenultima_Empresa_Cidade"  maxlength="100" placeholder=""  value="<?php echo "$Antepenultima_Empresa_Cidade" ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="Antepenultima_Empresa_Salario">Antepenultimo Salário<span class="requerido">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control rut" id="Antepenultima_Empresa_Salario" name="Antepenultima_Empresa_Salario"  maxlength="100" placeholder=""  value="<?php echo "$Antepenultima_Empresa_Salario" ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="Antepenultima_Empresa_Cargo">Antepenultimo Cargo<span class="requerido">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control rut" id="Antepenultima_Empresa_Cargo" name="Antepenultima_Empresa_Cargo"  maxlength="100" placeholder=""  value="<?php echo "$Antepenultima_Empresa_Cargo" ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="Antepenultima_Empresa_Data_Admissao">Antepenultima Data de Admissão<span class="requerido">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control rut" id="Antepenultima_Empresa_Data_Admissao" name="Antepenultima_Empresa_Data_Admissao"  maxlength="100" placeholder=""  value="<?php echo "$Antepenultima_Empresa_Data_Admissao" ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="Antepenultima_Empresa_Data_Demissao">Antepenultima Data de Demissão<span class="requerido">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control rut" id="Antepenultima_Empresa_Data_Demissao" name="Antepenultima_Empresa_Data_Demissao"  maxlength="100" placeholder=""  value="<?php echo "$Antepenultima_Empresa_Data_Demissao" ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="Ultima_Empresa_Motivo_Saida">Antepenultimo Motivo da Saida<span class="requerido">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control rut" id="Antepenultima_Empresa_Motivo_Saida" name="Antepenultima_Empresa_Motivo_Saida"  maxlength="100" placeholder=""  value="<?php echo "$Antepenultima_Empresa_Motivo_Saida" ?>">
                                    </div>
                                </div>

                             </div>


                            <!--Fin datos personales-->
                            
                        </div>
                    </div>
                </div>
            
            </div>
    </div>
</div>


<div class="row" >

    <div class="col-md-12" >


            <div class="row"  >
                <div class="col-md-offset-2 col-md-8">
                    <div class="panel">
                        <div class="panel-heading custom-header-panel" >
                            <h3 class="panel-title roboto">Condições de Saúde</h3>
                        </div>
                        <div class="panel-body">

                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Deficiencia">Apresenta alguma deficiência?<span class="requerido">*</span></label>
                                <div class="col-sm-8">
                                     <select class="form-control" id="Deficiencia" name="Deficiencia" >
                                        <option <?php if( $Deficiencia == "Nao" ) echo "selected"; ?> value="Nao">Nao</option>
                                        <option <?php if( $Deficiencia == "Sim" ) echo "selected"; ?> value="Sim">Sim</option>
                                    </select>
                                   

                                </div>
                            </div>

                             <div class="div-deficiencia">
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label" for="Deficiencia_Qual">Qual?<span class="requerido">*</span></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control rut" id="Deficiencia_Qual" name="Deficiencia_Qual"  maxlength="100" placeholder=""  value="<?php echo "$Deficiencia_Qual" ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label" for="Deficiencia_CID">Informe o CID<span class="requerido">*</span></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control rut" id="Deficiencia_CID" name="Deficiencia_CID"  maxlength="100" placeholder=""  value="<?php echo "$Deficiencia_CID" ?>">
                                            </div>
                                        </div>
                            </div>    



                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Doenca">Apresenta alguma doença no momento?<span class="requerido">*</span></label>
                                <div class="col-sm-8">
                                     <select class="form-control" id="Doenca" name="Doenca" >
                                        <option <?php if( $Doenca == "Nao" ) echo "selected"; ?> value="Nao">Nao</option>
                                        <option <?php if( $Doenca == "Sim" ) echo "selected"; ?> value="Sim">Sim</option>
                                    </select>
                                </div>
                            </div>

                            <div class="div-doenca">
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label" for="Doenca_Qual">Qual?<span class="requerido">*</span></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control rut" id="Doenca_Qual" name="Doenca_Qual"  maxlength="100" placeholder=""  value="<?php echo "$Doenca_Qual" ?>">
                                            </div>
                                        </div>
                            </div>    



                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Medicamento">Faz uso de algum medicamento?<span class="requerido">*</span></label>
                                <div class="col-sm-8">
                                     <select class="form-control" id="Medicamento" name="Medicamento" >
                                        <option <?php if( $Medicamento == "Nao" ) echo "selected"; ?> value="Nao">Nao</option>
                                        <option <?php if( $Medicamento == "Sim" ) echo "selected"; ?> value="Sim">Sim</option>
                                    </select>
                                </div>
                            </div>

                            <div class="div-medicamento">
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label" for="Medicamento_Qual">Qual?<span class="requerido">*</span></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control rut" id="Medicamento_Qual" name="Medicamento_Qual"  maxlength="100" placeholder="" value="<?php echo "$Medicamento_Qual" ?>">
                                            </div>
                                        </div>
                            </div>  


                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Alcool">Fez uso recente de alcool ou drogas?<span class="requerido">*</span></label>
                                <div class="col-sm-8">
                                     <select class="form-control" id="Alcool" name="Alcool" >
                                        <option <?php if( $Alcool == "Nao" ) echo "selected"; ?> value="Nao">Nao</option>
                                        <option <?php if( $Alcool == "Sim" ) echo "selected"; ?> value="Sim">Sim</option>
                                    </select>
                                </div>
                            </div>

                            <div class="div-alcool">
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label" for="Alcool_Quando">Informe a ultima vez e a quantidade<span class="requerido">*</span></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control rut" id="Alcool_Quando" name="Alcool_Quando"  maxlength="100" placeholder="" value="<?php echo "$Alcool_Quando" ?>">
                                            </div>
                                        </div>
                            </div>  

                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Fuma">Fuma?<span class="requerido">*</span></label>
                                <div class="col-sm-8">
                                     <select class="form-control" id="Fuma" name="Fuma" >
                                        <option <?php if( $Fuma == "Nao" ) echo "selected"; ?> value="Nao">Nao</option>
                                        <option <?php if( $Fuma == "Sim" ) echo "selected"; ?> value="Sim">Sim</option>
                                    </select>
                                </div>
                            </div>

                            <div class="div-fuma">
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label" for="Fuma_Qtd">Informe a quantidade diária<span class="requerido">*</span></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control rut" id="Fuma_Qtd" name="Fuma_Qtd"  maxlength="100" placeholder=""  value="<?php echo "$Fuma_Qtd" ?>">
                                            </div>
                                        </div>
                            </div>                             

                            <!--Fin datos personales-->
                            
                        </div>
                    </div>
                </div>
            
            </div>
        <!-- Fint form -->  
    </div>
</div>


<div class="row" >

    <div class="col-md-12" >


            <div class="row"  >
                <div class="col-md-offset-2 col-md-8">
                    <div class="panel">
                        <div class="panel-heading custom-header-panel" >
                            <h3 class="panel-title roboto">Informações Gerais</h3>
                        </div>
                        <div class="panel-body">

                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Conhece_Alguem">Conhece alguém que trabalha na empresa?<span class="requerido">*</span></label>
                                <div class="col-sm-8">
                                    <select class="form-control" id="Conhece_Alguem" name="Conhece_Alguem" >
                                        <option <?php if( $Conhece_Alguem == "Nao" ) echo "selected"; ?> value="Nao">Nao</option>
                                        <option <?php if( $Conhece_Alguem == "Sim" ) echo "selected"; ?> value="Sim">Sim</option>
                                    </select>
                                </div>
                            </div>

                            <div class="div-conhece-alguem">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="Grau_Parentesco">Grau de parentesco<span class="requerido">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control rut" id="Grau_Parentesco" name="Grau_Parentesco"  maxlength="100" placeholder=""  value="<?php echo "$Grau_Parentesco" ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="Grau_Parentesco_Nome">Nome da pessoa<span class="requerido">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control rut" id="Grau_Parentesco_Nome" name="Grau_Parentesco_Nome"  maxlength="100" placeholder=""  value="<?php echo "$Grau_Parentesco_Nome" ?>">
                                    </div>
                                </div>
                            </div>    

                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="Conhecimento_Vaga">Como soube da vaga?<span class="requerido">*</span></label>
                                <div class="col-sm-8">
                                    <select class="form-control" id="Conhecimento_Vaga" name="Conhecimento_Vaga" >
                                            <option <?php if( $Conhecimento_Vaga == "Rede Social" ) echo "selected"; ?> value="Rede Social">Rede Social</option>
                                            <option <?php if( $Conhecimento_Vaga == "Emprega São José" ) echo "selected"; ?> value="Emprega São José">Emprega São José</option>
                                            <option <?php if( $Conhecimento_Vaga == "Jornal O Vale" ) echo "selected"; ?> value="Jornal O Vale">Jornal O Vale</option>
                                            <option <?php if( $Conhecimento_Vaga == "Outros" ) echo "selected"; ?> value="Outros">Outros</option>
                                    </select>
                                </div>
                            </div>   
                            <div class="div-outros">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="Conhecimento_Vaga_Outros">Infome qual<span class="requerido">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control rut" id="Conhecimento_Vaga_Outros" name="Conhecimento_Vaga_Outros"  maxlength="100" placeholder=""  value="<?php echo "$Conhecimento_Vaga_Outros" ?>">
                                    </div>
                                </div>
                            </div>     

                            <!--Fin datos personales-->
                            
                        </div>
                    </div>
                </div>
            
            </div>
        <!-- Fint form -->  
    </div>
</div>



<div class="row" >

    <div class="col-md-12" >

            <div class="row"  >
                <div class="col-md-offset-2 col-md-8">
                    <div class="panel">
                        <div class="panel-heading custom-header-panel" >
                            <h3 class="panel-title roboto">Questionário de Interesses</h3>
                        </div>
                        <div class="panel-body">

                            <div class="form-group">
                                <label class="col-sm-12" for="Questao_1">Qual o seu conhecimento sobre nossa empresa? Como você pode contribuir com nosso time?<span class="requerido">*</span></label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" rows="3" id="Questao_1" name="Questao_1"><?php echo "$Questao_1" ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-12" for="Questao_2">Por qual período você esteve desempregado? Você realizou processo seletivo recentemente? Para qual área?<span class="requerido">*</span></label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" rows="3" id="Questao_2" name="Questao_2"><?php echo "$Questao_2" ?></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-12" for="Questao_3">Como você planeja sua carreira para os próximos 3 anos? Como planeja chegar lá?<span class="requerido">*</span></label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" rows="3" id="Questao_3" name="Questao_3"><?php echo "$Questao_3" ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12" for="Questao_4">Cite 3 fatores que o motivam e o desmotivam no trabalho.<span class="requerido">*</span></label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" rows="3" id="Questao_4" name="Questao_4"><?php echo "$Questao_4" ?></textarea>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-12" for="Questao_5">Descreva 3 características pessoais que poderiam ser melhor desenvolvidas.<span class="requerido">*</span></label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" rows="3" id="Questao_5" name="Questao_5"><?php echo "$Questao_5" ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12" for="Questao_6">Descreva uma situação em que seu superior tenha criticado o seu trabalho? Como se sentiu a respeito?<span class="requerido">*</span></label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" rows="3" id="Questao_6" name="Questao_6"><?php echo "$Questao_6" ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12" for="Questao_7">O que te leva a pensar, que seus chefes anteriores lhe tinham como um bom trabalhador? O que suas referências diriam sobre você?<span class="requerido">*</span></label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" rows="3" id="Questao_7" name="Questao_7"><?php echo "$Questao_7" ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12" for="Questao_8">Por que você acha estar qualificado para esta posição?<span class="requerido">*</span></label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" rows="3" id="Questao_8" name="Questao_8"><?php echo "$Questao_8" ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12" for="Questao_9">Quando você recebe o "sim" de duas empresas, o que motiva sua decisão?<span class="requerido">*</span></label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" rows="3" id="Questao_9" name="Questao_9"><?php echo "$Questao_9" ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12" for="Questao_10">Com quem você mora? É o(a) único(a) responsável pela receita da casa?<span class="requerido">*</span></label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" rows="3" id="Questao_10" name="Questao_10"><?php echo "$Questao_10" ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12" for="Questao_11">Possui filhos? Mencione idade e escolaridade.<span class="requerido">*</span></label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" rows="3" id="Questao_11" name="Questao_11"><?php echo "$Questao_11" ?></textarea>
                                </div>
                            </div>

                            <!--Fin datos personales-->
                            
                        </div>
                    </div>
                </div>
            
            </div>
         <!-- Fint form -->  
    </div>
</div>






<div class="row" >

    <div class="col-md-12" >

            <div class="row"  >
                <div class="col-md-offset-2 col-md-8">
                    <div class="panel-botao">
                        <div class="panel-botao text-right">
                            <?php if ($Nome==""){ echo '<button type="submit" class="btn btn-success">Cadastrar Curriculo</button>'; }else{ echo '<button type="submit" class="btn btn-success">Salvar Alterações</button>';}  ?>
                           

                            <!--Fin datos personales-->
                            
                        </div>
                    </div>
                </div>
            
            </div>
     <!-- Fint form -->  
    </div>
</div>
</form>
<!-- Tab panes -->







</div>













</body>
</html>