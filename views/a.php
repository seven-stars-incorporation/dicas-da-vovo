<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dicas da Vovó</title>
  <!-- remixicon -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- font awesome cdn link  -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
  />
  <link rel="stylesheet" type="text/css" href="./assets/css/all.min.css" />

  <!-- custom css file link -->
  <link rel="stylesheet" href="./assets/css/style.css" />
  <link rel="stylesheet" href="./assets/css/main.css">
  <script src="./assets/js/main.js" defer></script>
</head>

<body>
  <header>
    <nav>
      <div class="nav-item">
        <!-- logo -->
        <div class="logo">
          <img src="./assets/images/vovo.png" alt="" style="width: 64px;">
          <span>Dicas da Vovó</span>
        </div>
      </div>

      <!-- <div class="nav-item">
        <a href="">Receitas</a>
        <a href="">Safra</a>
      </div> -->

      <div class="nav-item">
        <!-- sign-in | sign-up -->
        <!-- or -->
        <!-- if exists session = show user actions -->
        <?php
          $withoutLogin = "
          <div class='what-to-do'>
            <a class='sign-in' href='../login.php'>Entrar</a>
            <a class='sign-up' href='../sign-up.php'>Criar conta</a>
          </div>
          ";

          session_start();
          
          $withLogin = "
          <div class='what-to-do'>
            <a class='sign-in' href='".(isset($_SESSION['isAdm']) == true ? "../private/adm/index.php" : "#")."'>Perfil</a>
          </div>
          ";
          
          if(isset($_SESSION['idUser']) == true){
            echo($withLogin);
          }else{
            echo($withoutLogin);
          }
        ?>

        
      </div>
    </nav>
  </header>

  <div class="container">
    <div class="search-container">
      <div class="search-box">
        <div class="icon-search" id="icon-search">
          <i class="ri-search-2-line ri-xl"></i>
        </div>
        <form style="width: 100%" action="resultados.php" method="POST">
          <input class="search-input" type="search" name="search-input" id="search-input" placeholder="Ingredientes...">
          <input type="hidden" name="ingredientList" id="hidden-input">
        </form>
        
        <div class="icon-remove" onclick="removeAll();">
          <i class="ri-close-circle-fill ri-xl"></i>
        </div>
      </div>

      <div class="search-suggestion">
        <ul class="suggestion-list" id="suggestion-box">

         <!-- <li class="suggestion-item">
            <div class="add-item">
              <img src="./assets/images/icons/add-fill.svg" alt="Icone adicionar">
              <span>Nome do item</span>
            </div>
            <span class="add">Adicionar</span>
          </li>

          <li class="suggestion-item">
            <div class="add-item">
              <img src="./assets/images/icons/add-fill.svg" alt="Icone adicionar">
              <span>Nome do item</span>
            </div>
            <span class="add">Adicionar</span>
          </li> -->

        </ul>
      </div>
    </div>

    <!-- notificar o usuario -->
    <div class="notification-list-add">{Nome do ingrediente} foi adicionado a lista</div>
    <div class="notification-list-remove">Ingredientes removidos da lista</div>

        <!-- speciality section starts  -->

        <section class="speciality" id="speciality">
      <h1 class="heading">Receitas <span>recomendadas</span></h1>

      <div class="box-container">
        <div class="box">
          <!-- foto da receita -->
          <img class="image" src="./assets/images/exemplo.jpg" alt="" />
          <div class="content">
            <img src="./assets/images/recomendado.png" alt="" />
            <h3>Nome da receita</h3>
            <p>descrição dos ingredientes que vão na receita</p>
          </div>
        </div>
        <div class="box">
          <!-- foto da receita -->
          <img class="image" src="./assets/images/exemplo.jpg" alt="" />
          <div class="content">
            <img src="./assets/images/recomendado.png" alt="" />
            <h3>Nome da receita</h3>
            <p>descrição dos ingredientes que vão na receita</p>
          </div>
        </div>
        <div class="box">
          <!-- foto da receita -->
          <img class="image" src="./assets/images/exemplo.jpg" alt="" />
          <div class="content">
            <img src="./assets/images/recomendado.png" alt="" />
            <h3>Nome da receita</h3>
            <p>descrição dos ingredientes que vão na receita</p>
          </div>
        </div>
      </div>
    </section>

    <!-- speciality section ends -->

    <section class="speciality" id="speciality">
      <h1 class="heading">Feitas com <span>ingredientes da época</span></h1>

      <div class="box-container">
        <div class="box">
          <!-- foto da receita -->
          <img class="image" src="./assets/images/exemplo.jpg" alt="" />
          <div class="content">
            <img src="./assets/images/colheita.png" alt="" />
            <h3>Nome da receita</h3>
            <p>descrição dos ingredientes que vão na receita</p>
          </div>
        </div>
        <div class="box">
          <!-- foto da receita -->
          <img class="image" src="./assets/images/exemplo.jpg" alt="" />
          <div class="content">
            <img src="./assets/images/colheita.png" alt="" />
            <h3>Nome da receita</h3>
            <p>descrição dos ingredientes que vão na receita</p>
          </div>
        </div>
        <div class="box">
          <!-- foto da receita -->
          <img class="image" src="./assets/images/exemplo.jpg" alt="" />
          <div class="content">
            <img src="./assets/images/colheita.png" alt="" />
            <h3>Nome da receita</h3>
            <p>descrição dos ingredientes que vão na receita</p>
          </div>
        </div>
      </div>
    </section>

    <section class="speciality" id="speciality">
      <h1 class="heading">Receitas <span>Salgadas</span></h1>

      <div class="box-container">
        <div class="box">
          <!-- foto da receita -->
          <img class="image" src="./assets/images/exemplo.jpg" alt="" />
          <div class="content">
            <img src="./assets/images/salada.png" alt="" />
            <h3>Nome da receita</h3>
            <p>descrição dos ingredientes que vão na receita</p>
          </div>
        </div>
        <div class="box">
          <!-- foto da receita -->
          <img class="image" src="./assets/images/exemplo.jpg" alt="" />
          <div class="content">
            <img src="./assets/images/salada.png" alt="" />
            <h3>Nome da receita</h3>
            <p>descrição dos ingredientes que vão na receita</p>
          </div>
        </div>
        <div class="box">
          <!-- foto da receita -->
          <img class="image" src="./assets/images/exemplo.jpg" alt="" />
          <div class="content">
            <img src="./assets/images/salada.png" alt="" />
            <h3>Nome da receita</h3>
            <p>descrição dos ingredientes que vão na receita</p>
          </div>
        </div>
      </div>
    </section>

    <section class="speciality" id="speciality">
      <h1 class="heading">Receitas <span>Doces</span></h1>

      <div class="box-container">
        <div class="box">
          <!-- foto da receita -->
          <img class="image" src="./assets/images/exemplo.jpg" alt="" />
          <div class="content">
            <img src="./assets/images/bolo.png" alt="" />
            <h3>Nome da receita</h3>
            <p>descrição dos ingredientes que vão na receita</p>
          </div>
        </div>
        <div class="box">
          <!-- foto da receita -->
          <img class="image" src="./assets/images/exemplo.jpg" alt="" />
          <div class="content">
            <img src="./assets/images/bolo.png" alt="" />
            <h3>Nome da receita</h3>
            <p>descrição dos ingredientes que vão na receita</p>
          </div>
        </div>
        <div class="box">
          <!-- foto da receita -->
          <img class="image" src="./assets/images/exemplo.jpg" alt="" />
          <div class="content">
            <img src="./assets/images/bolo.png" alt="" />
            <h3>Nome da receita</h3>
            <p>descrição dos ingredientes que vão na receita</p>
          </div>
        </div>
      </div>
    </section>
  </div>
</body>

<script>
  //COMUNICAÇÃO SQL-PHP COM JAVASCRIPT
  <?php
    require_once("../models/Ingrediente.php");

    $ingredienteClass = new Ingrediente();
    $listIngrediente  = $ingredienteClass->listar();
    $json = json_encode($listIngrediente);
  ?>
  const ingredientesOBJ = <?php echo($json); ?>

  var search = document.getElementById('search-input');
  var hiddenInput = document.getElementById('hidden-input');
  var suggestionBox = document.getElementById('suggestion-box');
  var valInput;
  
  search.onkeyup = ()=>
  {
    suggestionBox.innerHTML = '';
    
    valInput = search.value;
    ingredientesOBJ.filter(nameFilter);
    
  }

  function nameFilter(ingrediente) 
  {
    let name = ingrediente['nomeIngrediente'].toLowerCase();
    let occurrences = name.split(valInput.toLowerCase()).length -1;
    if(occurrences == 1 && occurrences > 0 && valInput.length > 2)
    {
      addItem(ingrediente['nomeIngrediente'], ingrediente['idIngrediente']);
    }

  }

  function addItem(name, id)
  {
    li = document.createElement('li');
    li.className = 'suggestion-item';
    div = document.createElement('div');
    div.className = 'add-item';
    img = document.createElement('img');
    img.src = './assets/images/icons/add-fill.svg';
    img.alt = 'Icone adicionar';
    span = document.createElement('span');
    span.innerText = name;
    span2 = document.createElement('span');
    span2.innerText = 'Adicionar';
    span2.className = 'add';

    div.appendChild(img);
    div.appendChild(span);
    li.appendChild(div);
    li.appendChild(span2);
    suggestionBox.appendChild(li);

    li.onclick = ()=>
    {
      hiddenInput.value += id + ',';
      suggestionBox.innerHTML = '';
      search.value = '';
    }
  }

  function removeAll()
  {
    hiddenInput.value = '';
    suggestionBox.innerHTML = '';
    search.value = '';
  }
</script>
</html>