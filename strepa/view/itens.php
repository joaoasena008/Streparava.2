<?php
     $title = "Itens";
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
        <form action="processa.php" method="post">
            <h1>Cadastro de itens</h1>
            <div class="input">
                <input type="text" name="nome" placeholder="id item" required>
                <input type="text" name="re" placeholder="Quantidade solicitada" required>
                <input type="text" name="cargo" placeholder="Quantidade aprovada" required>
                <input type="text" name="periodo" placeholder="Valor" required>
             
            </div>
            <div class="botoes">
                <button type="submit" id="enviaritens" class="btn btn-danger" >Enviar</button>
                
            </div>
    <?php
     include '../partials/footer.php';  
     ?>