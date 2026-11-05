<?php
// Inclui o arquivo responsável pela conexão com o banco de dados
include "config/database.php";

// Inclui o arquivo de cabeçalho (layout visual, navegação, scripts CSS, etc.)
include "includes/header.php";

// Verifica se a variável de sessão 'user_id' NÃO está definida (usuário não logado)
if (!isset($_SESSION['user_id'])) {
    // Redireciona o usuário de volta para a página inicial ou de login
    header("Location: index.php");
    // Encerra imediatamente a execução do script por segurança
    exit;
}

// Atribui o ID do usuário logado a uma variável local para uso posterior
$user_id = $_SESSION['user_id'];

// Inicializa a variável de mensagem (feedback visual) vazia
$msg = "";

?>


<div class="card">
    <h2>Sistema de acesso ao usuário</h2>
    <?php if($msg): ?>
        <p style="padding:10px; background:#d4edda; color:#155724; border:1px solid #c3e6cb; border-radius:4px; font-weight:bold; margin-bottom:15px;"><?= $msg ?></p>
    <?php endif; ?>
    
    
</div>



<?php include "includes/footer.php"; ?>