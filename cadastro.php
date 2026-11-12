<?php
// Inclui o arquivo de configuração e conexão com o banco de dados
include "config/database.php";

// Inclui o cabeçalho padrão da aplicação (menu, CSS, etc.)
include "includes/header.php";

// Inicializa as variáveis de mensagem de feedback vazias
$msg_sucesso = "";
$msg_erro = "";


/*************   CODIFICAR A PARTIR DAQUI   *************/


if ($_SERVER ["REQUEST_METHOD"] == "POST")
    {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $cpf = $_POST["cpf"];
        $telefone = $_POST["telefone"];
        $senha = $_POST["senha"];
        $hash_senha = password_hash($senha,PASSWORD_DEFAULT);
        $sql = $conexao -> prepare ("INSERT INTO usuarios");
    }
/*
Alecrim
Alecrim dourado
Que nasceu no campo 
Sem ser semeado

Alecrim
Alecrim dourado 
Que nasceu no campo
Sem ser semeado
*/


?>

<div class="card" style="max-width: 500px; margin: 30px auto;">
    <h2>Cadastro de Usuário</h2>

    <?php if($msg_erro): ?>
        <p style="padding:10px; background:#f8d7da; color:#721c24; border:1px solid #f5c6cb; border-radius:4px; font-weight:bold;"><?= $msg_erro ?></p>
    <?php endif; ?>

    <?php if($msg_sucesso): ?>
        <p style="padding:10px; background:#d4edda; color:#155724; border:1px solid #c3e6cb; border-radius:4px; font-weight:bold;"><?= $msg_sucesso ?></p>
        <a href="index.php" class="btn btn-success" style="display:inline-block; text-align:center; margin-top:10px; text-decoration:none;">Ir para o Login</a>
    <?php else: ?>

    <form method="POST" action="cadastro.php">
        <div style="margin-bottom: 15px;">
            <label style="display:block; font-weight:bold; margin-bottom:5px;">Nome Completo:</label>
            <input type="text" name="nome" required style="width: 100%; padding: 8px;" placeholder="Digite seu nome completo">
        </div>

        <div style="margin-bottom: 15px;">
            <label style="display:block; font-weight:bold; margin-bottom:5px;">E-mail:</label>
            <input type="email" name="email" required style="width: 100%; padding: 8px;" placeholder="seuemail@exemplo.com">
        </div>

        <div style="margin-bottom: 15px;">
            <label style="display:block; font-weight:bold; margin-bottom:5px;">CPF:</label>
            <input type="tel" 
                   name="cpf" 
                   required 
                   pattern="[0-9]{11}" 
                   inputmode="numeric"
                   maxlength="11"
                   oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 11);" 
                   style="width: 100%; padding: 8px;" 
                   placeholder="Apenas 11 números (ex: 12345678900)">
        </div>

        <div style="margin-bottom: 15px;">
            <label style="display:block; font-weight:bold; margin-bottom:5px;">Telefone / WhatsApp:</label>
            <input type="tel" 
                   name="telefone" 
                   required 
                   pattern="[0-9]{10,11}" 
                   inputmode="numeric"
                   maxlength="11"
                   oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 11);" 
                   style="width: 100%; padding: 8px;" 
                   placeholder="Apenas números com DDD (máx 11 dígitos)">
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display:block; font-weight:bold; margin-bottom:5px;">Senha:</label>
            <input type="password" name="senha" required style="width: 100%; padding: 8px;" placeholder="Crie uma senha de acesso">
        </div>

        <button type="submit" class="btn btn-success" style="width: 100%;">Cadastrar</button>
    </form>

    <div style="margin-top: 15px; text-align: center;">
        <small>Já possui uma conta? <a href="index.php">Faça login aqui</a>.</small>
    </div>

    <?php endif; ?>
</div>

<?php include "includes/footer.php"; ?>