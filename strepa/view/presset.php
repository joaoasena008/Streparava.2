 <?php
        $title = "Inventário";
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
            <h1>Presset</h1>
            <div class="input">
               <input type="text" name="id ferramenta" placeholder="id ferramenta" required>
                <input type="text" name="quantidade" placeholder="quantidade" required>
                <input type="text" name="data" placeholder="data" required>
                <input type="text" name="quantidade mínima" placeholder="quantidade mínima" required>
                <input type="text" name="id ferramenta" placeholder="id ferramenta" required>
                <input type="text" name="quantidade" placeholder="quantidade" required>
                <input type="text" name="data" placeholder="data" required>
                <input type="text" name="quantidade mínima" placeholder="quantidade mínima" required>
                <input type="text" name="quantidade máxima" placeholder="quantidade máxima" required>
               
            </div>
            <div class="botoes">
                <button type="submit" id="enviarpres" class="btn btn-danger" >enviar</button>
                <button type="submit" id="arquivarpres" class="btn btn-danger" >arquivar</button>
            </div>
            
    </div>
    <?php
     include '../partials/footer.php';  
     ?>