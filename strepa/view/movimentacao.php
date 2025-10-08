<?php
     $title = "Movimentação";
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
            <h1>Movimentação </h1>
            <div class="input">
                <input type="text" name="hora" placeholder="hora" required>
                <input type="text" name="data" placeholder="data" required>
                <input type="text" name="quantidade" placeholder="quantidade" required>
                <input type="text" name="Presset" placeholder="Presset" required>
                <input type="text" name="id funcionario" placeholder="id funcionário" required>
                <input type="text" name="id ferramenta" placeholder="id ferramenta" required>
                <input type="text" name="id armário" placeholder="id armário" required>
                <input type="text" name="tipo" placeholder="tipo" required>
                <input type="text" name="quantidade atual" placeholder="quantidade atual" required>
                <input type="text" name="quantidade de reposição" placeholder="quantidade de reposição" required>
                
            </div>
            <div class="botoes">
                <button type="submit" id="enviarmovi" class="btn btn-danger" >enviar</button>
                
             
            </div>
            
    </div>
    <?php
     include '../partials/footer.php';  
     ?>
