<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
        <title>Trabalho M3 - Pierry Borges</title>
        <meta http-equiv="Content-Language" content="en-us" />

        <meta http-equiv="imagetoolbar" content="no" />
        <meta name="MSSmartTagsPreventParsing" content="true" />

        <meta name="description" content="Description" />
        <meta name="keywords" content="Keywords" />

        <meta name="author" content="Pierry Borges" />

        <style type="text/css" media="all">@import "css/master.css";</style>

        <script>
            function validar(nome, email, telefone, cpf) {                
                alert(<?php 
                    require_once 'ValidacaoRo.php';
                    $validar = new ValidacaoRo();
                    $validar->ValidarInsertCliente(nome, email, telefone, cpf);
                ?>);    
            }       
        </script>        
    </head>
    <body>
        <div id="page-container">
            <div id="main-nav">             
                <dt id="home"><a href="index.php" onclick="change_content('content', 'index.php')">Home</a></dt>
                <dt id="consulta_cliente"><a href="ConsultaCliente.php" onclick="change_content('content', 'ConsultaCliente.php')">Consultar Cliente</a></dt>
                <dt id="consulta_filme"><a href="index.php" onclick="change_content('content', 'index.php')">Consultar Filme</a></dt>
                <dt id="inserir_filme"><a href="InserirFilme.php" onclick="change_content('content', 'InserirFilme.php')">Inserir Filme</a></dt>
                <dt id="inserir_cliente"><a href="InserirCliente.php" onclick="change_content('content', 'InserirCliente.php')">Inserir Cliente</a></dt>
                <dt id="locacao"><a href="NovaLocacao.php" onclick="change_content('content', 'NovaLocacao.php')">Nova Locação</a></dt>                                                   
            </div>
            <div id="header"> 

            </div>
            <div id="content">                 
                <form NAME="fcliente" METHOD="POST" ACTION="ConfirmacaoCliente.php">
                <table id="datatable" width="550px" border="1" align="center" cellpadding="0"cellspacing="0" bordercolor="#c9c9c9">                    	
                    <tr><td>Nome</td>  <td><input type="TEXT" name="nome" obrigatorio="1" maxlength="50"></input></td></tr>                    
                    <tr><td>CPF</td>  <td><input type="TEXT" name="cpf"  maxlength="11"></input></td></tr>                    
                    <tr><td>Email</td>  <td><input type="TEXT" name="email"  maxlength="90"></input></td></tr>                    
                    <tr><td>Telefone</td>  <td><input type="TEXT" name="telefone"  maxlength="10"></input></td></tr>                                        
                    <tr><td colspan="2"><input type="SUBMIT" name="Cadastrar"></input></td></tr>
                </table>
                    </form>
            </div>
            <div id="footer">
                <div id="altnav">                
                    <a href="index.php" onclick="change_content('content', 'ConsultaCliente.php')">Consultar Filme</a>    |
                    <a href="ConsultaCliente.php" onclick="change_content('content', 'ConsultaCliente.php')">Consultar Cliente</a>    |
                    <a href="InserirFilme.php" onclick="change_content('content', 'InserirFilme.php')">Adicionar Filme</a>    |
                    <a href="InserirCliente.php" onclick="change_content('content', 'InserirCliente.php')">Adicionar Cliente</a>    |
                </div>            
            </div>
        </div>                
    </body>
</html>