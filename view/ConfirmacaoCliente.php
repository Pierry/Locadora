<html>
  <head>
	<style type="text/css" media="all">@import "css/master.css";</style>
  </head>
  <body>
	<?php
            require_once ('Cliente.php');
            require_once ('ConexaoPo.php');
            require_once ('ClienteDAO.php');                        
            $cliente = new Cliente();            
            $cliente->setNome($_POST['nome']);
            $cliente->setEmail($_POST['email']);
            $cliente->setTelefone($_POST['telefone']);                    
            $cliente->setCPF($_POST['cpf']);
            $dao = new ClienteDAO();
            $dao->Insert($cliente, $conexao);
	?>	      
  </body>
</html>