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
        </script>        
    </head>
    <body>
        <div id="page-container">
            <div id="main-nav">             
                <dt id="home"><a href="#">Home</a></dt>
                <dt id="consulta_cliente"><a href="ConsultaCliente.php" onclick="change_content('content', 'ConsultaCliente.php')">Consultar Cliente</a></dt>
                <dt id="consulta_filme"><a href="index.php" onclick="change_content('content', 'index.php')">Consultar Filme</a></dt>
                <dt id="inserir_filme"><a href="InserirFilme.php" onclick="change_content('content', 'InserirFilme.php')">Inserir Filme</a></dt>
                <dt id="inserir_cliente"><a href="InserirCliente.php" onclick="change_content('content', 'InserirCliente.php')">Inserir Cliente</a></dt>
                <dt id="locacao"><a href="NovaLocacao.php" onclick="change_content('content', 'NovaLocacao.php')">Nova Locação</a></dt>                                                   
            </div>
            <div id="header"> 

            </div>
            <div id="content"> 
                <td align="center">
                    <center>Digite o título do filme:<br></br></center>
                    <center><input type="text" style="text-align: left; padding-left: 10px; font-family: Tahoma; font-size: 14px" 
                                   size="40" name="filme_nome" align="middle" class="searchBox" onkeypress="if ((window.event ? event.keyCode : event.which) == 13) { addRow('datatable'); }"></input>                    
                        <br></br></center>                
                </td>
                <table id="datatable" width="550px" border="1" align="center" cellpadding="0"cellspacing="0" bordercolor="#CCCCCC">
                    <tr>
                        <td id="nome_filme" width="350px">Título Filme</td>
                        <td id="genero" width="100px"> Gênero </td>
                        <td id="statuslocacao" width="100px"> Disponível </td>
                    </tr>
                </table>
            </div>
            <div id="footer">
                <div id="altnav">                
                    <a href="#">Consultar Cliente</a>    |
                    <a href="#">Consultar Filme</a>    |
                    <a href="#">Adicionar Cliente</a>    |
                    <a href="#">Adicionar Filme</a>    |
                    <a href="#">Nova Locação</a>
                </div>            
            </div>
        </div>                
    </body>
</html>