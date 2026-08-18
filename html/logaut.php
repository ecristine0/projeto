<?php
session_start();
session_unset();   // Limpa todas as variáveis da sessão
session_destroy(); // Destrói a sessão no servidor

header("Location: login.php");
exit;
require_once "funcoes.php";
logout();
?>