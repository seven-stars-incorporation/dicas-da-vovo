<?php
    require_once("../database/Conexao.php");

    class Receita{
        private $idReceita, $idsIngredientes, $nomeReceita, $modoPreparo, $tempoReceita, $caminhoImg;

        public function getIdReceita(){
            return $this->idReceita;
        }
        public function getIdsIngredientes(){
            return $this->idsIngredientes;
        }
        public function getNomeReceita(){
            return $this->nomeReceita;
        }
        public function getModoPreparo(){
            return $this->modoPreparo;
        }
        public function getTempoReceita(){
            return $this->tempoReceita;
        }
        public function getCaminhoImg(){
            return $this->caminhoImg;
        }
        public function setIdReceita($idReceita){
            $this->idReceita = $idReceita;
        }
        public function setIdsIngredientes($idsIngredientes){
            return $this->idsIngredientes = $idsIngredientes;
        }
        public function setNomeReceita($nomeReceita){
            return $this->nomeReceita = $nomeReceita;
        }
        public function setModoPreparo($modoPreparo){
            return $this->modoPreparo = $modoPreparo;
        }
        public function setTempoReceita($tempoReceita){
            return $this->tempoReceita = $tempoReceita;
        }
        public function setCaminhoImg($caminhoImg){
            return $this->caminhoImg = $caminhoImg;
        }

        public function cadastrar($Receita){
            $con = Conexao::conectar();
            $stmt = $con->prepare("INSERT INTO `tbreceita`(`nomeReceita`, `modoPreparo`, `tempoReceita`, caminhoImg)
                                    VALUES(?,?,?,?)");
            $stmt->bindValue(1, $Receita->getNomeReceita());
            $stmt->bindValue(2, $Receita->getModoPreparo());
            $stmt->bindValue(3, $Receita->getTempoReceita());
            $stmt->bindValue(4, $Receita->getCaminhoImg());
            $stmt->execute();
            $lastID = "SELECT LAST_INSERT_ID()";
            $result = $con->query($lastID);
            return $result->fetchAll()[0][0];
        }



        public function listar(){
            $con = Conexao::conectar();
            $querySelect = "SELECT * FROM tbreceita";
            $resultado = $con->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;
        }

    }
?>