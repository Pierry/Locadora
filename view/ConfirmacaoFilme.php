<html>
  <head>
	<style type="text/css" media="all">@import "css/master.css";</style>
  </head>
  <body>
	<?php
            require_once ('Filme.php');
            require_once ('ConexaoPo.php');
            require_once ('FilmeDAO.php');                        
            $filme = new Filme();            
            $filme->setTitulo($_POST['titulo']);
            $filme->setSinopse($_POST['sinopse']);
            $filme->setIdGenero($_POST['idgenero']);                                
            $dao = new FilmeDAO();
            $dao->Insert($filme, $conexao);
	?>	      
  </body>
</html>