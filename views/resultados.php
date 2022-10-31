<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pesquisar</title>

    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link rel="stylesheet" type="text/css" href="./assets/css/all.min.css" />

    <!-- custom css file link -->
    <link rel="stylesheet" href="./assets/css/style.css" />
  </head>

  <body>
  <?php
    include_once("./header.php")
  ?>

    <section class="speciality" id="resultados">
      <h1 class="heading"><span>Resultados</span> encontrados</h1>

      <div class="box-container">


      <?php
          require_once("../models/ReceitaIngrediente.php");

          $ids = $_POST['ingredientList'];
          $ids = explode(',', $ids);
          $receitaIngrediente = new ReceitaIngrediente();

          $redundancyControl = array();

          foreach($ids as $id){
            if(strlen($id)> 0){
              $listRecipes = $receitaIngrediente->listarPIngrediente($id);
              foreach($listRecipes as $recet){
                
                if(!in_array($recet["idReceita"], $redundancyControl)){
                  $listIngredientes = $receitaIngrediente->listarIngredientePRecita($recet["idReceita"]);
                  $ingredientesText = @$listIngredientes[0]['nomeIngrediente'] . " </br> " . @$listIngredientes[1]['nomeIngrediente'] . " </br> " .
                      @$listIngredientes[2]['nomeIngrediente'] . " </br> " . @$listIngredientes[3]['nomeIngrediente'] . "... </br> ";
                  $valorTotal = 0;
                  foreach($listIngredientes as $ingredient){
                    $valorTotal += floatval($ingredient['valorIngrediente']);
                  }

                  $box = "
                    <div class='box'>
                    <!-- foto da receita -->
                    <img class='image' src='../{$recet["caminhoImg"]}' alt='' />
                    <div class='content'>
                      <img src='./assets/images/recomendado.png' alt='' />
                      <h3>{$recet["nomeReceita"]}</h3>
                      <p>Ingredientes: {$ingredientesText}</p>
                      <p>Valor Da Receita: R\${$valorTotal} </p>
                    </div>
                  </div>
                  
                  ";



                  echo($box);
                  array_push($redundancyControl, $recet["idReceita"]);
                }
                
              }
            }
          }
          
          
      ?>

        

        <!--<div class="box">
          <img class="image" src="./assets/images/exemplo.jpg" alt="" />
          <div class="content">
            <img src="./assets/images/recomendado.png" alt="" />
            <h3>Nome da receita</h3>
            <p>descrição dos ingredientes que vão na receita</p>
          </div>
        </div>>-->

        
      </div>
    </section>

    <footer>
      <p>&copy; Seven Stars 2022. Todos os direitos reservados.</p>
    </footer>
    <!-- custom js file link  -->
    <!-- <script src="./assets/js/script.js"></script> -->
  </body>
</html>
