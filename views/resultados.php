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
          require_once("../models/Ingrediente.php");
          $ingrediente = new Ingrediente();
          $listIngredientes = explode(',', $_POST['search']);
          $listIds = array();
          $listNames = array();
          foreach($ingrediente->listar($listIngredientes) as $ingre){
              array_push($listIds, $ingre["idIngrediente"]);
              array_push($listNames, $ingre["nomeIngrediente"]);
          }
          require_once("../models/Receita.php");
          $receita = new Receita();
          $listReceitas = $receita->readWithIds($listIds);
          foreach($listReceitas as $recet){
            //$recet["nomeReceita"]
              $box = "
                <div class='box'>
                <!-- foto da receita -->
                <img class='image' src='../{$recet["caminhoImg"]}' alt='' />
                <div class='content'>
                  <img src='./assets/images/recomendado.png' alt='' />
                  <h3>{$recet["nomeReceita"]}</h3>
                  <p>Ingredientes: {}</p>
                </div>
              </div>
              
              ";

              echo($box);
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
