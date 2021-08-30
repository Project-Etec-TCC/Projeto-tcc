<?php 

$codigoAtivacao = $_GET['codigoAtivacao'];

include("connection/conexao.php");

// consultar na tabela se o codigo existe
$sql = "SELECT cod_ativacao FROM tbl_login WHERE cod_ativacao=MD5('$codigoAtivacao') ";

$executaSql = $mysqli->query($sql);

// obter o total de linhas retornado pela consulta
$totalLinhas = $executaSql->num_rows;

if($totalLinhas == 1){

    // ativar a conta do usuario
    $ativaConta = "UPDATE tbl_login SET cod_ativacao='',
                                        status_login=1
                                    WHERE cod_ativacao=MD5('$codigoAtivacao') ";
    
    $executaAtivacao = $mysqli->query($ativaConta);

    echo "<p> Conta ativada com sucesso! </p>
          <p> <meta http-equiv='refresh' content='1;url=login.php'> Redirecionando... </p>";

}else{

    echo "Código de ativação inválido";

}
?>