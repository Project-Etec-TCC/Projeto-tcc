<?php @session_start();

// verifica se a variavel de sessão cod_login não existir direcionamos o usuario para a tela de login

if (!isset($_SESSION['cod_login'])) {
    header("location:../login.php");
}
?>