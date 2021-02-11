<?php
class Devedor{
    public function listarDevedores(){
        $mysqli = new mysqli("localhost", "root", "", "devedores");

        $query = "SELECT * FROM devedores";
        $result = $mysqli->query($query);
        $rows = $result->num_rows;
        $devedores = array();
        if($rows > 0){
            $result = $mysqli->query($query);
            for($i=0;$i < $rows; $i++){
                $devedores[$i] = $result->fetch_array(MYSQLI_ASSOC);
            }
            $result->close();
        }
        return $devedores;
    }

    public function cadastrarDevedor($dados){
        $mysqli = new mysqli("localhost", "root", "", "devedores");

        $mysqli->query("INSERT INTO devedores(Nome,cpf_cnpj,data_nascimento,endereco,descricao_titulo,valor,data_vencimento,updated)
        VALUES
        ('".$_POST['nome']."', '".$_POST['cpf_cnpj']."', '".$_POST['data_nascimento']."', '".$_POST['endereco']."', '".$_POST['descricao_titulo']."', '".$_POST['valor']."', '".$_POST['data_vencimento']."', '".date('Y-m-d H:i:s')."')");

        $mysqli->close();
    }

    public function edicaoDevedor($id){
        $mysqli = new mysqli("localhost", "root", "", "devedores");

        $query = "SELECT * FROM devedores WHERE id = $id";
        $result = $mysqli->query($query);
        $devedores = $result->fetch_array(MYSQLI_ASSOC);

        $mysqli->close();
        return $devedores;
    }

    public function editarDevedor($dados){
        $mysqli = new mysqli("localhost", "root", "", "devedores");

        $mysqli->query("UPDATE devedores SET Nome = '".$_POST['nome']."',
        cpf_cnpj = '".$_POST['cpf_cnpj']."',
        data_nascimento = '".$_POST['data_nascimento']."',
        endereco = '".$_POST['endereco']."',
        descricao_titulo = '".$_POST['descricao_titulo']."',
        valor = '".$_POST['valor']."',
        data_vencimento = '".$_POST['data_vencimento']."',updated = '".date('Y-m-d H:i:s')."'
        WHERE id = '".$_POST['id']."'");

        $mysqli->close();
    }
    public function deletarDevedor($id){
        $mysqli = new mysqli("localhost", "root", "", "devedores");

        $mysqli->query("DELETE FROM devedores WHERE id = '".$id."'");

        $mysqli->close();
    }
}