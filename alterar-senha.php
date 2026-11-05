<?php

// Inclui o arquivo de configuração e conexão com o banco de dados
include "config/database.php";

// Inclui o cabeçalho padrão da aplicação (menu, CSS, etc.)
include "includes/header.php";

// Inicializa as variáveis de mensagem de feedback vazias
$msg_sucesso = "";
$msg_erro = "";

// Verifica se o usuário NÃO está autenticado (se a variável de sessão não existe)
if (!isset($_SESSION['user_id'])) {
    // Redireciona o usuário não autenticado para a página inicial/login
    header("Location: index.php");
    // Interrompe a execução do script para garantir que o resto do código não seja executado
    exit;
}

// Armazena o ID do usuário logado em uma variável local para facilitar o uso no código
$user_id = $_SESSION['user_id'];

/*************   CODIFICAR A PARTIR DAQUI   *************/



?>

<div class="card" style="max-width: 450px; margin: 40px auto;">
    <h2>Alterar Minha Senha</h2>

    <?php if($msg_erro): ?>
        <p style="color:red; margin-bottom: 10px;"><?= $msg_erro ?></p>
    <?php endif; ?>

    <?php if($msg_sucesso): ?>
        <p style="color:green; margin-bottom: 10px;"><?= $msg_sucesso ?></p>
    <?php endif; ?>

    <form method="POST">
        
        <div>
            <label>Nova Senha:</label>
            <input type="password" name="nova_senha" required placeholder="Mínimo 6 caracteres">
        </div>
        <div>
            <label>Confirmar Nova Senha:</label>
            <input type="password" name="confirma_senha" required>
        </div>
        <button type="submit" class="btn btn-success">Atualizar Senha</button>
    </form>

   
</div>

<?php include "includes/footer.php"; ?>
