<?php
// Inclui o arquivo de configuração e conexão com o banco de dados
include "config/database.php";

// Inclui o cabeçalho padrão da aplicação (menu, CSS, etc.)
include "includes/header.php";

// Inicializa as variáveis de mensagem de feedback vazias
$msg_sucesso = "";
$msg_erro = "";


/*************   CODIFICAR A PARTIR DAQUI   *************/

?>

<div class="card" style="max-width: 400px; margin: 50px auto;">
    <h2 style="text-align: center; margin-bottom: 20px;">Acesso ao Sistema</h2>

    <?php if ($msg_erro): ?>
        <p style="padding: 10px; background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; border-radius: 4px; font-weight: bold; text-align: center;"><?= $msg_erro ?></p>
    <?php endif; ?>

    <form method="POST" action="index.php">
        <div style="margin-bottom: 15px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">CPF:</label>
            <input type="tel"
                name="cpf"
                required
                pattern="[0-9]{11}"
                inputmode="numeric"
                maxlength="11"
                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 11);"
                style="width: 100%; padding: 8px;"
                placeholder="Apenas 11 números">
        </div>

        <div style="margin-bottom: 20px;">
            <label style="display: block; font-weight: bold; margin-bottom: 5px;">Senha:</label>
            <input type="password" name="senha" required style="width: 100%; padding: 8px;" placeholder="Sua senha">
        </div>

        <button type="submit" class="btn btn-success" style="width: 100%;">Entrar</button>
    </form>

    <div style="margin-top: 15px; text-align: center;">
        <small>Não possui uma conta? <a href="cadastro.php">Cadastre-se aqui</a>.</small>
    </div>
</div>

<?php include "includes/footer.php"; ?>