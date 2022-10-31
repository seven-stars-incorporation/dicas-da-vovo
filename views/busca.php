    
    <!-- joga sempre dentro de uma div.container -->
    
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