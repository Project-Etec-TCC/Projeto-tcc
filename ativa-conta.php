<?php 

$codigoAtivacao = $_GET['codigoAtivacao'];

include("connection/conexao.php");

// consultar na tabela se o codigo existe
$sql = "SELECT * FROM tbl_login WHERE cod_ativacao=MD5('$codigoAtivacao') OR cod_ativacao='$codigoAtivacao' ";

$executa_sql = $mysqli->query($sql);

// obter o total de linhas retornado pela consulta
$totalLinhas = $executa_sql->num_rows;

//dados do select
$dadosUsuario = $executa_sql->fetch_assoc();

if($totalLinhas == 1){

    // ativar a conta do usuario
    $ativaConta = "UPDATE tbl_login SET cod_ativacao='',
                                        status_login=1
                                    WHERE cod_login='".$dadosUsuario['cod_login']."' ";
    
    $executaAtivacao = $mysqli->query($ativaConta);

    echo "<p> Conta ativada com sucesso! </p>
          <p> <meta http-equiv='refresh' content='1;url=login.php'> Redirecionando... </p>";

}else{

    echo "Código de ativação inválido";

}
?>