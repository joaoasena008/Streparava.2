<?php
    //  Conexão com o DB
    require_once('conexao.php');
    // Buscar o conteúdo das variáveis 'usuario' e 'senha'
    @session_start();

    // Essas linhas recebem os dados enviados por um formulário HTML via método POST.
    // $id = $_POST['id']; 
    $matricula = $_POST['matricula'];
    $nome = $_POST['nome']; 
    $id_dep = $_POST['id_dep']; 
    $funcao = $_POST['funcao']; 
    $contato = $_POST['contato']; 
    $status = $_POST['status']; 

        // Aqui é criada a instrução SQL de inserção de dados. INSERT INTO - variáveis do banco de dados
        // VALUES: variáveis locais que foram modificadas pelo POST do form
    try {
        $query = "INSERT INTO streparava.funcionarios (matricula, nome, departamento_id, funcao, contato, status)
        VALUES ( :matricula, :nome, :id_dep, :funcao, :contato, :status)";
        // $pdo é o objeto de conexão com o banco de dados.
        // prepare() faz o pré-processamento da query, para permitir a ligação dos parâmetros e garantir segurança.
        $stmt=$pdo->prepare(query: $query);
        // Cada linha associa o valor da variável PHP ($id, $nome, etc.) ao respectivo placeholder da query SQL (:id,
        // $stmt->bindParam(':id', $id);
        $stmt->bindParam(':matricula', $matricula);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':id_dep', $id_dep);
        $stmt->bindParam(':funcao', $funcao);
        $stmt->bindParam(':contato', $contato);
        $stmt->bindParam(':status', $status);

        $stmt->execute();
            echo "Dados salvos";
    } catch (Exception $e) {
        echo "Falha ao iniciar";
        echo '<br>';
        echo $e;
    }
?>