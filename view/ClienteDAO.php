<?php

class ClienteDAO {

    public function Delete($id) {
        
    }

    public function Insert(Cliente $cliente, $conexao) {           
        $query_insert = "insert into CLIENTE (NOME, EMAIL, TELEFONE, CPF) values ('$cliente->nome','$cliente->email','$cliente->telefone','$cliente->cpf')";
        $exec_query = mysql_query($query_insert, $conexao) or die('Erro ao inserir registro...' . mysql_error() . " Cod: " . mysql_errno);
        echo("Inseridos (" . mysql_affected_rows() . ") registros<br>");
    }

    public function Select($id) {
        require_once ('ConexaoPo.php');
        $query_select = "select * from CLIENTE where upper(NOME) like upper('" . $id . "%')";
        $exec_query = mysql_query($query_select, $conexao) or die('Erro ao buscar registro...' . mysql_error() . " Cod: " . mysql_errno);        
        while ($registros = mysql_fetch_row($exec_query)) {
            echo("<TR><TD>" . $registros[1] . "</TD><TD>" . $registros[2] . "</TD><TD>" . $registros[4] . "</TD></TR>");
        }
    }

    public function Update(Cliente $cliente) {
        
    }

}

?>
