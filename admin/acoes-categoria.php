<?php session_start();

$categoria = $_POST['categoria'];
$operacao = $_POST['operacao'] ?: $_GET['operacao'];


$cod_login = $_SESSION['cod_login'];

if( $operacao == "cadastrar" ){

    
$sql = "INSERT INTO tbl_categoria (categoria, categoria_cadastrado_por)
                                    VALUES ('$categoria','$cod_login')";
$mensagem = "Categoria cadastrada com sucesso!";

}// fim do  operacao cadastrar



if($operacao == "editar"){
    //receber o codigo do registro a ser  editado
    $cod_categoria = $_POST['cod_categoria'];

    $sql = "UPDATE tbl_categoria SET categoria='$categoria'
                                        WHERE cod_categoria='$cod_categoria' ";
    
    $mensagem = "Categoria alterada com sucesso!";
    
}// fim do operacao editar



if ($operacao == "excluir") {
    //receber o código do registro que sera  excluido
    $cod_categoria = $_GET['cod_categoria'];
    
    $sql = "DELETE FROM tbl_categoria WHERE cod_categoria='$cod_categoria' ";

    $mensagem = "Categoria excluida com sucesso!";

}//fim do operacao excluir

// incluir a conexao
include("../connection/conexao.php");

//executar a instrução sql
$executa = $mysqli->query($sql);

if($executa){
    header("location:index.php?pg=lista-categorias&msg=$mensagem");
}else {
    header("location:index.php?pg=lista-categoria&msg=Erro ao executar, contate um administrador.");
}

?>