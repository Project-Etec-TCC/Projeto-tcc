<?php 
session_start();

$nome = $_POST['nome'];
$email = $_POST['email'];
$numero = $_POST ['numero'];
$senha = $_POST['senha'];
$confirmaSenha = $_POST['confirmaSenha'];
$termos = $_POST['termos'];

$_SESSION['dadosForm'] = $_POST;
$_SESSION['mensagemErro'] = array();

include("connection/conexao.php");

// verificar se o usuario ja existe
$consultaUsuario = "SELECT * FROM tbl_login WHERE email='$email' ";
$executaConsultaUsuario = $mysqli->query($consultaUsuario);
$totalConsultaUsuario = $executaConsultaUsuario->num_rows;

if($totalConsultaUsuario > 0){
   $_SESSION['mensagemErro'][] = "Este e-mail já esta em uso. Tente outro";
}

if(strlen($nome)<1){
   $_SESSION['mensagemErro'][] = "O campo nome é obrigatório";
}
if(strlen($numero)<1){
   $_SESSION['mensagemErro'][] = "O campo numero é obrigatório";
}
if(strlen($email)<1){
   $_SESSION['mensagemErro'][] = "O campo e-mail obrigatório";
}
if(strlen($senha)<6){
   $_SESSION['mensagemErro'][] = "O campo senha deve ter no mínico 6 caracteres";
}
if($senha<>$confirmaSenha){
   $_SESSION['mensagemErro'][] = "Senhas não conferem";
}
if(!isset($termos)){
   $_SESSION['mensagemErro'][] = "Você deve aceitar os temos para criar a conta";
}


if(sizeof($_SESSION['mensagemErro'])>0){
    header("location:registro.php?erro=1");
}else{
    
   // destruir a session com as mensagens de erro e os dados do formulario
   unset($_SESSION['mensagemErro']);
   unset($_SESSION['dadosForma']);

   //gravar os dados do usuario
   $sqlGravaUsuario = "INSERT INTO tbl_login (nome,email,numero,senha,tipo_usuario,status_login)
                                      VALUES ('$nome','$email','$numero',MD5('$senha'),'user',0)";
   
   $executaGravaUsuario = $mysqli->query($sqlGravaUsuario);

   // obter o ultimo codigo gerado na tabela
   $codigoLogin = $mysqli->insert_id;

   // gerar o codigo de ativaca
   $codigoAtivacao = time().$codigoLogin;

   // atualizar o usuario com o codigo de ativacao
   $atualizaCodAtivacao = "UPDATE tbl_login SET cod_ativacao=MD5('$codigoAtivacao') 
                                             WHERE cod_login=$codigoLogin ";

   $executaAtualizaCodAtivacao = $mysqli->query($atualizaCodAtivacao);

   echo "<p> Conta criada com sucesso! </p>
         <p> Agora você deve <a href='ativa-conta.php?codigoAtivacao=$codigoAtivacao'> Ativar </a> a sua conta para começar a usar o sistema. </p>";

}

?>