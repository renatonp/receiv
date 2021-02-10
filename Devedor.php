<?php
class Devedor{
    public function listarDevedores(){
        $mysqli = new mysqli("localhost", "root", "", "devedores");

        $query = "SELECT * FROM devedores";
        $result = $mysqli->query($query);
        $rows = $result->num_rows;
        $result = $mysqli->query($query);
        for($i=0;$i < $rows; $i++){
            $devedores[$i] = $result->fetch_array(MYSQLI_ASSOC);
        }
        return $devedores;
    }
}