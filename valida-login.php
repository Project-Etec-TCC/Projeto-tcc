<?php session_start();
// receber os campos do formulario
$email = $_POST['email'];
$senha = $_POST['senha'];

$_SESSION['dadosFormLogin'] = $_POST; //armazena  todos os dados vindos via POST
$_SESSION['mensagemErroLogin'] = array();// array para armazenar as mensagens de login

if (strlen($email) < 1 ) {
    $_SESSION['mensagemErroLogin'][] = "O campo e-mail é obrigatório";
}

if (strlen($senha) < 1 ) {
    $_SESSION['mensagemErroLogin'][] = "O campo senha é obrigatório";
}

//incluir a conexao
include("connection/conexao.php");

// consulta para verificar se o email/senha existem na tabela de login
$consultaLogin = "SELECT * FROM tbl_login 
                                WHERE email='$email'
                                AND senha =MD5('$senha')";


//executar a consulta
$executaConsulta = $mysqli->query($consultaLogin);

//total de linhas retornado pela consulta
$totalLinhas = $executaConsulta->num_rows;

// obter os dados do select
$dadosUsuario = $executaConsulta->fetch_assoc();



if ($totalLinhas < 1) {
    $_SESSION['mensagemErroLogin'][] = "Usúario ou senha inválidos!";
}

if ($dadosUsuario['status_login'] == 0 && $totalLinhas > 0) {

    $cod_ativacao = $dadosUsuario['cod_ativacao'];

    $mensagem = "Você ainda não ativou a sua conta. <a href='ativa-conta.php?codigoAtivacao=$cod_ativacao'> Ativar agora </a>";

    $_SESSION['mensagemErroLogin'][] = $mensagem;

    
}




if (sizeof($_SESSION['mensagemErroLogin']) > 0 ) {
    header("location:login.php?erro=1");

}else {

    unset($_SESSION['mensagemErroLogin']);
    unset($_SESSION['dadosFormLogin']);
    //armazenar alguns dados em variaveis de sessao e direcionar o usuario para area administrativa

    //armazenar codigo do usuario
    $_SESSION['cod_login'] = $dadosUsuario['cod_login'];

    //nome do usuario
    $_SESSION['nome'] = $dadosUsuario['nome'];

    header("location:admin/index.php");
}
?>