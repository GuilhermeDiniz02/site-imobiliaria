<?php
$pgLogin = true;
require_once($_SERVER['DOCUMENT_ROOT']."/sistema/config/admin.php");
//EncryptSenha::B64_Encode($_POST['password']);
if($_POST['nomeUsuario'] != '' && $_POST['password'] != ''){		
	if(!$Login->efetuarLogin($_POST['nomeUsuario'],$_POST['password'] )){ 			
		Uteis::alertJava("Login ou senha inválidos.", true);
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo NOME_APP?></title>
<?php require_once($_SERVER['DOCUMENT_ROOT'].CAMINHO_CFG."/includes/css.php");?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].CAMINHO_CFG."/includes/js.php");?>
</head>

<body>
  <style>
    @import url("https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

html {
  height: 100%;
}
body {
  margin: 0;
  padding: 0;
  font-family: Verdana;
  /*background-image: url(../img/sampameo.jpg);*/
  background: linear-gradient(#292929, rgb(0, 119, 255) ,#fefeff0c);
}

.caixa__login {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0, 0, 0, 0.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgb(0, 119, 255);
  border-radius: 10px;
}

.caixa__login h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.caixa__login .caixa__login-input {
  position: relative;
}

.caixa__login .caixa__login-input input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.caixa__login .caixa__login-input label {
  position: absolute;
  top: 0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: 0.5s;
}

.caixa__login .caixa__login-input input:focus ~ label,
.caixa__login .caixa__login-input input:valid ~ label {
  top: -20px;
  left: 0;
  color: #8b80f9;
  font-size: 12px;
}

.caixa__login form a {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #8b80f9;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: 0.5s;
  margin-top: 40px;
  letter-spacing: 4px;
}

.caixa__login a:hover {
  background: #8b80f9;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #8b80f9, 0 0 25px #8b80f9, 0 0 50px #8b80f9,
    0 0 100px #8b80f9;
}

.caixa__login a span {
  position: absolute;
  display: block;
}

.caixa__login a span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #8b80f9);
  animation: animacaoBotao1 1s linear infinite;
}

@keyframes animacaoBotao1 {
  0% {
    left: -100%;
  }
  50%,
  100% {
    left: 100%;
  }
}

.caixa__login a span:nth-child(2) {
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(180deg, transparent, #8b80f9);
  animation: animacaoBotao2 1s linear infinite;
  animation-delay: 0.25s;
}

@keyframes animacaoBotao2 {
  0% {
    top: -100%;
  }
  50%,
  100% {
    top: 100%;
  }
}

.caixa__login a span:nth-child(3) {
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(270deg, transparent, #8b80f9);
  animation: animacaoBotao3 1s linear infinite;
  animation-delay: 0.5s;
}

@keyframes animacaoBotao3 {
  0% {
    right: -100%;
  }
  50%,
  100% {
    right: 100%;
  }
}

.caixa__login a span:nth-child(4) {
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg, transparent, #8b80f9);
  animation: animacaoBotao4 1s linear infinite;
  animation-delay: 0.75s;
}

@keyframes animacaoBotao4 {
  0% {
    bottom: -100%;
  }
  50%,
  100% {
    bottom: 100%;
  }
}
  </style>
  
	<div id="divs_jquery"> </div>
<div id="centro"> <br />
  <div id="alertas"></div>
  <div id="div_login">
    <form id="login" class="validate" action="login.php" method="post" >
      <p><strong>Área administrativa</strong></p> 
      <p>
        <label>Nome de usuário:</label>
        <input type="text" name="nomeUsuario" id="nomeUsuario" class="required" value="<?php echo $login_temp?>" autocomplete="off" />
        <span class="placeholder">Campo Obrigatório</span> </p>
      <p>
        <label>Senha</label>        
        <input type="password" name="password" id="password" class="required" value="<?php echo $senha_temp?>" autocomplete="off" />
        <span class="placeholder">Campo Obrigatório</span> 
        <input type="checkbox" value="1" onclick="mostraSenha(this)" /><small>mostrar a senha</small></p>
      <p>
        <button class="button blue submit">Efetuar Login</button>
      </p>
      <p onClick="confirmar();"  class="onlink" >Não sabe a sua senha?</p> 
      <!--mensagem(); enviarSenha(redefSenha(),'#cpf', 'admin')"-->
    </form>
    <script>
	function confirmar() {
	var r = confirm("Tem certeza que deseja resetar a senha e receber no seu email? ");
	if(r == true) {
		mensagem();
		enviarSenha(redefSenha(),'#cpf', 'admin');
		}
	}

	function mensagem() {
	alert("Sua senha foi enviada para o e-mail cadastrado.");
		
	}
	$('#documento').focus();</script> 
  </div>
</div>
</body>
</html>
<script>
	ativarForm();
</script>