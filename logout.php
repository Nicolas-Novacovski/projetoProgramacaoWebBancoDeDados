<?php
// Inicia a sessão (se ainda não estiver iniciada)
session_start();

// Limpa todas as variáveis de sessão
$_SESSION = array();

// Se necessário, destrói a sessão completamente
if (session_id() != '' || isset($_COOKIE[session_name()])) {
    // Limpa o cookie de sessão
    setcookie(session_name(), '', time() - 86400, '/');
}

// Destrói a sessão
session_destroy();

// Redireciona para a página de login (ou qualquer outra página)
header("Location: indexLogin.php");
exit;
?>
