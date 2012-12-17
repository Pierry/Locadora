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
                <td align="center">
                    <center>Digite o nome:<br></br></center>
                    <form method="GET" action="ConsultaCliente.php">
                    <center><input type="text" name="filtro" style="text-align: left; padding-left: 10px; font-family: Tahoma; font-size: 14px" 
                                   size="40"  align="middle" class="searchBox" ></input>                    
                        <br></br></center>
                        </form>
                </td>
                <table id="datatable" width="550px" border="1" align="center" cellpadding="0"cellspacing="0" bordercolor="#CCCCCC">
                    <tr>
                        <td id="nome_filme" width="350px"> Nome </td>
                        <td id="genero" width="100px"> Email </td>
                        <td id="statuslocacao" width="100px"> CPF </td>
                        <td>
                            <?PHP                        
                                $filtro = "";
                                if (isset($_GET["filtro"])) {
                                    $filtro = $_GET["filtro"];
                                }
                                require_once 'ClienteDAO.php';
                                $dao = new ClienteDAO();
                                $dao->Select($filtro);
                            ?>
                        </td>
                    </tr>
                </table>
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