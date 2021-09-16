<?php session_start();

// destruir todas as variaveis de sessao
session_destroy();

header("location:../login.php");
?>