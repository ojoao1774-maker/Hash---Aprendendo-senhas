<?php
// Inicia ou retoma a sessão atual para que o PHP possa manipulá-la
session_start();

// Destrói todos os dados associados à sessão atual (faz o logout do usuário)
session_destroy();

// Redireciona o navegador para a página inicial ou de login (index.php)
header("Location: index.php");

// Interrompe imediatamente a execução do script para evitar a execução de código posterior
exit;
?>
