<?php
    //obsoleto
    require_once("../models/Ingrediente.php");
    $ingrediente = new Ingrediente();
    $ingredienteList = explode("\n", $_POST['Ingredients']);
    $listIds = array();
    foreach($ingredienteList as $nomeIngrediente){
        $ingrediente->setNomeIngrediente($nomeIngrediente);
        $exist = $ingrediente->exists($ingrediente);
        if(!$exist){
            $lastId = $ingrediente->cadastrar($ingrediente);
            array_push($listIds, $lastId);
        }
    }
    
    $nome = $_FILES['image']['name'];
    $arquivo = $_FILES['image']['tmp_name'];
    $caminho = "assets/images/receitas/". time().".png";
    move_uploaded_file($arquivo, "../".$caminho);

    require_once("../models/Receita.php");
    $receita = new Receita();
    $receita->setIdsIngredientes(json_encode($listIds));
    $receita->setNomeReceita($_POST['description']);
    $receita->setTempoReceita($_POST['time']);
    $receita->setModoPreparo($_POST['preparationMode']);
    $receita->setCaminhoImg($caminho);
    $receita->cadastrar($receita);

    header("Location: ../private/adm/index.php?msg=Receita Cadastrada");
?>