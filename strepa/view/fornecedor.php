<?php
     $title = "Fornecedor";
     include '../partials/header.php';
    ?>

    <header class="header">    
        
    <nav class="navbar">
    <div class="container-fluid">
    <a class="navbar-brand" href="">
      <img src="https://cdn.lugc.link/fdff2030-93b1-4aa0-8eb2-c73b4abfe77c/-/preview/265x70/-/format/auto/" alt="Logo STREPARAVA" class="d-inline-block align-text-top">
    </a>
  </div>
    </nav>
    </header>
    <div class="inserir">
        <form action="processa.php" method="POST">
            <h1>Fornecedor</h1>
            <div class="input">
                <input type="text" name="nome" placeholder="nome" required>
                <input type="text" name="contato" placeholder="contato" required>
                <input type="text" name="endereco" placeholder="endereço" required>
                

            </div>
            <div class="botoes">
                <button type="submit"class="btn btn-danger" id="enviarfor" >enviar</button>
                <button type="submit"class="btn btn-danger" id="arquivarfor">arquivar</button>
              

            </div>
        </form>
    </div>
    <?php
  include '../partials/footer.php';  
  ?>
