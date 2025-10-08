<?php
    //  Conexão com o DB
    require_once('conexao.php');
    // Buscar o conteúdo das variáveis 'usuario' e 'senha'
    @session_start();
    $title = "Funcionário";
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
        <form action="criarf.php" method="POST">
            <h1>Funcionário</h1>
            <div class="input">
                <input type="text" name="matricula" placeholder="matrícula" required>
                <input type="text" name="nome" placeholder="nome" required>
                <input type="text" name="id_dep" placeholder="id departamento" required>
                <input type="text" name="funcao" placeholder="função" required>
                <input type="text" name="contato" placeholder="contato" required>
                <input type="text" name="status" placeholder="status" required>
            
            </div>
            <div class="botoes">
                <button type="submit" id="enviarfun" class="btn btn-danger" >enviar</button>
              
            
            </div>
            
    </div>
    <?php
    include '../partials/footer.php';  
    ?>