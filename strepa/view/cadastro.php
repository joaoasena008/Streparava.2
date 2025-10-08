<?php
// Criar variaveis globais 
@session_start();
// Verificar se o post foi realizado(setado)
if(isset($_POST['user']) && isset($_POST['psw'])){
    // Verificar se o usuario e a senha estao corretos
    // Criar variavel local para receber usuário e senha dos 'inputs'
    $usuario=$_POST["user"];
    $senha=$_POST['psw'];
    if($usuario == "joao" && $senha =="123"){
        echo '<script>window.location="./principal.php"</script>';
    }
    // Se errado:
    else{
        echo '<script>alert("Usuário ou Senha incorretos")</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- arquivo de estilo -->
     <link rel="stylesheet" href="./estilo/index.css">
     <!-- icone -->
    <link rel="shortcut icon" href="./img/icone.png" type="image/x-icon">
    <title>Cadastro</title>
</head>
<body>
    <!--  creat divs.forms,inputs and buttons-->
      <div class="login">
        <div class="titulo">cadastro de usuário</div>
        <form method="POST" class="log">
            <input type="text" placeholder="id" name="id" required>
            <input type="text" placeholder="perfil" name="perfil" required>
            <input type="text" placeholder="usuário" name="user" required>
            <input type="password" placeholder="senha" name="psw"required>
            <button type="submit">entrar</button>
        </form>
      </div>
</body>
</html>