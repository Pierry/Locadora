<?php

class FilmeDAO {

    public function Delete($id) {
        
    }

    public function Insert(Filme $filme, $conexao) {        
        $query_insert = "insert into FILME (TITULO, SINOPSE, IDGENERO) values ('$filme->titulo', '$filme->sinopse', '$filme->idgenero')";
        $exec_query = mysql_query($query_insert, $conexao) or die('Erro ao inserir registro...' . mysql_error() . " Cod: " . mysql_errno);
        echo("Inseridos (" . mysql_affected_rows() . ") registros<br>");
    }

    public function Select($id) {
        require_once ('ConexaoPo.php');
        $query_select = "select * from FILME where upper(TITULO) like upper('" . $id . "%')";
        $exec_query = mysql_query($query_select, $conexao) or die('Erro ao buscar registro...' . mysql_error() . " Cod: " . mysql_errno);        
        while ($registros = mysql_fetch_row($exec_query)) {
            $query_select_filme = "select nome from GENERO where IDGENERO = " . $registros[1];
            $exec_query_filme = mysql_query($query_select_filme, $conexao) or die('Erro ao buscar registro...' . mysql_error() . " Cod: " . mysql_errno);
            $generos = mysql_fetch_row($exec_query_filme);
            echo("<TR><TD>" . $registros[2] . "</TD><TD>" . $generos[0] . "</TD><TD>" . $registros[3] . "</TD></TR>");
        }
    }

    public function SelectGenero() {
        require_once ('ConexaoPo.php');
        $query_select = "select * from GENERO";
        $exec_query = mysql_query($query_select, $conexao) or die('Erro ao buscar registro...' . mysql_error() . " Cod: " . mysql_errno);
        while ($registros = mysql_fetch_row($exec_query)) {
            echo("<option value='". $registros[0] ."' name='idgenero'>" . $registros[1] . "</option>");
        }
    }

    public function Update(Filme $filme) {
        
    }

}

?>
