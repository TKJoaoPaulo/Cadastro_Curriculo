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


	
	</style>
	<meta name="viewport" content="width=480, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall">

                <img class="profile-img" src="http://cadastrolibbero.esy.es/image001.png"alt="">
                </br>   
                <div class="info alert alert-warning" align="center">Informe o seu email para receber sua senha</div>
                <p></p>
                     <?php

                        if( isset($mensagem) )
                        {
                            echo $mensagem;
                        }    

                    ?>
                <form class="form-signin" action="<?php echo base_url('index.php/login/redefinir_senha'); ?>" method="post">
                <input type="text" id ="email" name="email" class="form-control" placeholder="Email" required autofocus>
                <p></p>
                <button class="btn btn-lg btn btn-warning btn-block" type="submit">Redefinir Senha</button>
          
                <a href="#" class="pull-right need-help">Esqueceu a senha? </a>
                <a href="<?php echo base_url('index.php/login/'); ?>" class="pull-left new-account">Voltar</a>
                </form>
            </div>

        </div>
    </div>
</div>



</body>
</html>