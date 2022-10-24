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
            $stmt = $con->prepare("INSERT INTO `tbreceita`(`idsIngredientes`, `nomeReceita`, `modoPreparo`, `tempoReceita`, caminhoImg)
                                    VALUES(?,?,?,?,?)");
            $stmt->bindValue(1, $Receita->getIdsIngredientes());
            $stmt->bindValue(2, $Receita->getNomeReceita());
            $stmt->bindValue(3, $Receita->getModoPreparo());
            $stmt->bindValue(4, $Receita->getTempoReceita());
            $stmt->bindValue(5, $Receita->getCaminhoImg());
            $stmt->execute();
        }

        public function listar(){
            $con = Conexao::conectar();
            $querySelect = "SELECT * FROM tbreceita";
            $resultado = $con->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;
        }

        public function readWithIds($ingredientes){
            $con = Conexao::conectar();
            $querySelect = "SELECT * FROM tbreceita WHERE false ";
            foreach($ingredientes as  $ingred){
                $querySelect .= "OR idsIngredientes LIKE '%" . $ingred . "%' ";
            }
            $resultado = $con->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;
        }
    }
?>