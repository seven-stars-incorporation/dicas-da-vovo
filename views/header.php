<header>
      <a href="pesquisar-receitas.php" class="logo">Dica da Vovó</a>
      <form action="resultados.php" method="POST">
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

          <?php 
            $withoutLogin = '
            <ul>

              <li>
                <img src="./assets/images/login-box-fill.png" alt="" /><a href="../login.php"
                  >Login</a
                >
              </li>
              <li>
                <img src="./assets/images/logout.png" alt="" /><a href="../sing-up.php"
                  >Registro</a
                >
              </li>
            </ul>
            
            ';
            session_start();

            $withLogin = '
            <h3>Nome de usuário <br /><span>E-mail</span></h3>
              <ul>
                <li>
                  <img src="./assets/images/profile.png" alt="" /><a 
                  href="'.
                    (isset($_SESSION['isAdm']) == true ? "../private/adm/index.php" : "#")
                  .'"
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
            ';

            if(isset($_SESSION['idUser']) == true){
              echo($withLogin);
            }else{
              echo($withoutLogin);
            }

          ?>

          

        </div>
      </div>
      <script>
        function menuToggle() {
          const toggleMenu = document.querySelector(".menu");
          toggleMenu.classList.toggle("active");
        }
      </script>
    </header>
    