<?php
    require_once("../database/Conexao.php");

    class Ingrediente{
        private $idIngrediente, $nomeIngrediente;

        public function getIdIngrediente(){
            return $this->idIngrediente;
        }
        public function getNomeIngrediente(){
            return $this->nomeIngrediente;
        }
        public function setIdIngrediente($idIngrediente){
            $this->idIngrediente = $idIngrediente;
        }
        public function setNomeIngrediente($nomeIngrediente){
            $this->nomeIngrediente = $nomeIngrediente;
        }

        public function cadastrar($Ingrediente){
            $con = Conexao::conectar();
            $stmt = $con->prepare("INSERT INTO tbingredientes(nomeIngrediente)
                                    VALUES(?)");
            $stmt->bindValue(1, $Ingrediente->getNomeIngrediente());
            $stmt->execute();
            $queryLastId = "SELECT LAST_INSERT_ID()";
            $resultado = $con->query($queryLastId);
            return $resultado->fetchAll()[0][0];
        }

        public function exists($Ingrediente){
            $exist = false;
            $con = Conexao::conectar();
            $querySelect = "SELECT * FROM tbingredientes WHERE nomeIngrediente LIKE \"" . $Ingrediente->getNomeIngrediente() . "\"";
            $resultado = $con->query($querySelect);
            $lista = $resultado->fetchAll();
            if(count($lista) > 0){
                $exist = true;
            }
            return $exist;
        }
        
        public function listar($ingredientes){
            $con = Conexao::conectar();
            $querySelect = "SELECT idIngrediente, nomeIngrediente FROM tbingredientes WHERE false ";
            foreach($ingredientes as  $ingred){
                $querySelect .= "OR nomeIngrediente LIKE '%" . $ingred . "%' ";
            }
            $resultado = $con->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;
        }
    }
?>