<?php
    require_once("../models/Ingrediente.php");
    $ingrediente = new Ingrediente();
    $listIngredientes = explode(',', $_POST['search']);
    $listIds = array();
    foreach($ingrediente->listar($listIngredientes) as $ingre){
        array_push($listIds, $ingre["idIngrediente"]);
    }
    
    require_once("../models/Receita.php");
    $receita = new Receita();
    $listReceitas = $receita->readWithIds($listIds);
    foreach($listReceitas as $recet){
        echo($recet["nomeReceita"] . "</br>");
    }
?>