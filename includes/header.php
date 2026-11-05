<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operação Cata-Treco - Prefeitura Municipal de Pontal de Areia</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <link rel="manifest" href="manifest.json">
</head>
<body>
    <header class="header-banner">
        <div class="header-container">
            <div class="brand">
                <img src="assets/img/logo.png" alt="Sistema de usuários">
                <div>
                    <h1>Sistema de Usuários</h1>
                    <small>Acesse seu perfil</small>
                </div>
            </div>
            <?php if(isset($_SESSION['user_id'])): ?>
                <div class="user-menu">
                    Olá, <strong><?= htmlspecialchars($_SESSION['user_nome']) ?></strong> | 
                    <a href="alterar-senha.php">Alterar Senha</a> |
                    <a href="logout.php" style="color:red;">Sair</a>
                </div>
            <?php endif; ?>
        </div>
    </header>
    <main>
