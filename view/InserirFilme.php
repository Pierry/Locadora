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
            function myFunction(e) {
                alert(e);    
            }
       
            function addRow(tableID) {
                var table = document.getElementById(tableID);

                var rowCount = table.rows.length;
                var row = table.insertRow(rowCount);

                var cell1 = row.insertCell(0);
                cell1.innerHTML = rowCount + 1;

                var cell2 = row.insertCell(1);
                cell2.innerHTML = rowCount + 1;

                var cell3 = row.insertCell(2);
                cell3.innerHTML = rowCount + 1;
            }
            
            function populateCombo(){
                var ddl =  document.getElementById('generos');
                var opt = new Option;
                var x;
                var i;
                
                for (i=0; i < 10; i++){
                    x = i + 1;
                    opt.text = x;
                    opt.value = x;
                    ddl.options[i] = opt;
                }              
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
                <form NAME="fcliente" id="fcliente" METHOD="POST" ACTION="ConfirmacaoFilme.php">
                <table id="datatable" width="550px" border="1" align="center" cellpadding="0"cellspacing="0" bordercolor="#c9c9c9">                    	
                    <tr><td>Título</td>  <td><input type="TEXT" name="titulo"  maxlength="50"></input></td></tr>                    
                    <tr><td>Sinopse</td>  <td><input type="TEXT" name="sinopse"  maxlength="11"></input></td></tr>                    
                    <tr><td>Gênero</td><td><select id="idgenero" name="idgenero">
                        <?PHP
                            require_once 'FilmeDAO.php';
                            $dao = new FilmeDAO();
                            $dao->SelectGenero();
                        ?>
                    </select></td></tr>
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