
<?php
  
  session_start();

  //SESSÃO É UM VÍNCULO ENTRE NAVEGADOR DO USUÁRIO E O SERVIDOR BACK-END
/**
 * bom para guardar a autenticação
 * 
 */

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../styles-global.css" />
  <link rel="stylesheet" href="./novo.css" />
  <title>Administrar Produtos</title>
</head>
<body>
<header>
    <input type="search" placeholder="Pesquisar" />
  </header>
  <div class="content">
    <section class="produtos-container">
      <main>
        <form class="form-produto" method="POST" action="../productsActions.php">
        <input type="hidden" name="acao" value="inserir"/>
          <h1>Cadastro de produto</h1>
           <?php
           //verificase existe os erros
                if(isset($_SESSION["erros"])){
                foreach($_SESSION["erros"] as $erro){
            ?>
              <li><?=$erro?></li>
            <?php
              }
              //eliminar da seção os erros já mostrado
              unset($_SESSION["erros"]);
            }  
            ?>
          <div class="input-group span2">
            <label for="descricao">Descrição</label>
            <input type="text" id="descricao" name="descricao" required>
            
          </div>
          <div class="input-group">
            <label for="peso">Peso</label>
            <input type="text" id="peso" name="peso"  required>
          </div>
          <div class="input-group">
            <label for="quantidade">Quantidade</label>
            <input type="text" id="quantidade" name="quantidade" required>
          </div>
          <div class="input-group">
            <label for="cor">Cor</label>
            <input type="text" id="cor"name="cor" required>
          </div>
          <div class="input-group">
            <label for="tamanho">Tamanho</label>
            <input type="text" id="tamanho" name="tamanho">
          </div>
          <div class="input-group">
            <label for="valor">Valor</label>
            <input type="text" id="valor" name="valor" required>
          </div>
          <div class="input-group">
            <label for="desconto">Desconto</label>
            <input type="text" id="desconto" name="desconto" >
          </div>
          <button onclick="javascript:window.location.href = '../'">Cancelar</button>
          <button>Salvar</button>       
        </form>
      </main>
    </section>
  </div>
  <footer>
    SENAI 2021 - Todos os direitos reservados
  </footer>
</body>

</html>