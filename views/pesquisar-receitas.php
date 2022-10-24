<!DOCTYPE html>
<html lang="pt-BR">
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
    <!-- header section starts  -->
    <header>
      <a href="#" class="logo">Dica da Vovó</a>
      <form action="../search/listaReceitas.php" method="POST">
      <div class="search-box">
        <input
          type="text"
          class="search-text"
          id="searchText"
          name="search"
          placeholder="Busque por receitas"
        />
        <button href="#" type="submit" class="search-btn"
          ><img
            src="./assets/images/loupe.png"
            alt="lupa"
            height="20"
            width="20"
        /></button>
      </div>
      </form>

      <div class="action-user">
        <div class="profile" onclick="menuToggle();">
          <img src="./assets/images/profile.png" alt="" />
        </div>
        <div class="menu">
          <h3>Nome de usuário <br /><span>E-mail</span></h3>
          <ul>
            <li>
              <img src="./assets/images/profile.png" alt="" /><a href="#"
                >Meu perfil</a
              >
            </li>
            <li>
              <img src="./assets/images/editar.png" alt="" /><a href="#"
                >Editar</a
              >
            </li>
            <li>
              <img src="./assets/images/logout.png" alt="" /><a href="#"
                >Sair</a
              >
            </li>
          </ul>
        </div>
      </div>
      <script>
        function menuToggle() {
          const toggleMenu = document.querySelector(".menu");
          toggleMenu.classList.toggle("active");
        }
      </script>
    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">
      <div class="content">
        <h3>Siga as dicas da vovó</h3>
        <p>
          Busque receitas pelo nome dos ingredientes que você tem acesso, e a
          vovó mostrará diversas receitas onde eles poderão ser utilizados. E o
          melhor: <span>de maneira saudável</span>.
        </p>
      </div>

      <div class="image">
        <img src="./assets/images/vovo.png" alt="" />
      </div>
    </section>

    <!-- home section ends -->

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

    <footer>
      <p>&copy; Seven Stars 2022. Todos os direitos reservados.</p>
    </footer>
    <!-- custom js file link  -->
    <script src="./assets/js/script.js"></script>
  </body>
</html>