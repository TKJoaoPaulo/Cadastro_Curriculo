<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<style type="text/css">
.form-signin
{
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
}
.form-signin .form-signin-heading, .form-signin .checkbox
{
    margin-bottom: 10px;
}
.form-signin .checkbox
{
    font-weight: normal;
}
.form-signin .form-control
{
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.form-signin .form-control:focus
{
    z-index: 2;
}
.form-signin input[type="text"]
{
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}
.form-signin input[type="password"]
{
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.account-wall
{
    margin-top: 20px;
    padding: 40px 0px 20px 0px;
    background-color: #f7f7f7;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}
.login-title
{
    color: #555;
    font-size: 18px;
    font-weight: 400;
    display: block;
}
.profile-img
{
    width: 201px;
    height: 58px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}
.need-help
{
    margin-top: 10px;
}
.new-account
{
    display: block;
    margin-top: 10px;
}

label.error { float: none; color: red; margin: 0 .5em 0 0; vertical-align: top; font-size: 12px }


	
	</style>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
 <script>

 $(document).ready(function(){
  function add() {
    if($(this).val() === ''){
      $(this).val($(this).attr('placeholder')).addClass('placeholder');
    }
  }

  function remove() {
    if($(this).val() === $(this).attr('placeholder')){
      $(this).val('').removeClass('placeholder');
    }
  }

  // Create a dummy element for feature detection
  if (!('placeholder' in $('<input>')[0])) {

    // Select the elements that have a placeholder attribute
    $('input[placeholder], textarea[placeholder]').blur(add).focus(remove).each(add);

    // Remove the placeholder text before the form is submitted
    $('form').submit(function(){
      $(this).find('input[placeholder], textarea[placeholder]').each(remove);
    });
  }
});

 </script>



      <script src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.6.1.min.js"></script>
      <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
      <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.8.1/jquery.validate.js"></script>
<script>
$(document).ready( function() {
  $("#candidatedata").validate({
    // Define as regras
    rules:{
      senha:{
        // campoNome será obrigatório (required) e terá tamanho mínimo (minLength)
        required: true
      },
      email:{
        // campoMensagem será obrigatório (required) e terá tamanho mínimo (minLength)
        required: true, email: true
      }
    },
    // Define as mensagens de erro para cada regra
    messages:{
      senha:{
        required: "Digite sua senha"
      },
      email:{
        required: "Digite seu Email", email: "Digite um e-mail válido"
      }
    }
  });
});
</script>





	<meta name="viewport" content="width=480, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall">
                <img class="profile-img" src="http://cadastrolibbero.esy.es/image001.png"
                    alt="">
                <form class="form-signin" id="candidatedata" name="candidatedata" action="<?php echo base_url('index.php/login/logar'); ?>" method="post">
                <input type="text" id ="email" name="email" class="form-control" placeholder="Email" required autofocus>
                <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>
                <button class="btn btn-lg btn btn-success btn-block" type="submit">
                    Entrar</button>
          
                <a href="<?php echo base_url('index.php/login/redefinir'); ?>" class="pull-right need-help">Esqueceu a senha? </a>
                <a href="<?php echo base_url('index.php/login/registrar'); ?>" class="pull-left new-account">Cadastrar</a>
                </form>
            </div>

        </div>
    </div>
</div>



</body>
</html>