<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
  <li class="breadcrumb-item"><a href="index.php?pg=lista-categorias">Categorias</a></li>
  <li class="breadcrumb-item active" aria-current="page">Cadastro de Categoria</li>
  </ol>
</nav>

<?php

//receber via get a operação
$operacao = $_GET['operacao'];

if ( $operacao == "editar") {
  $cod_categoria = $_GET['cod_categoria'];

  //cria a consulta
  $sql = "SELECT * FROM tbl_categoria WHERE cod_categoria='$cod_categoria' ";

  //incluir a conexao
  include("../connection/conexao.php");

  //executar a consulta
  $executa = $mysqli->query($sql);

  //obter os dados  da consulta
  $dados = $executa->fetch_assoc();
}
?>

<div class="row">
  <div class="col-sm-4">
    <form action="acoes-categoria.php" method="POST">
      
      <div class="form-group">
        <label for="categoria">Categoria</label>
        <input type="text" class="form-control" id="categoria" placeholder="Informe o nome da categoria" name="categoria" required value="<?php echo @$dados['categoria'];?>">
      </div>

      <!-- Campo para armazenar o código da categoria na operação "editar" -->
      <input type="hidden" name="cod_categoria" value="<?php echo $dados['cod_categoria'];?>">
      
      <input type="hidden" name="operacao" value="<?php echo $operacao;?>">

      <button type="submit" class="btn btn-primary">Salvar</button>

    </form>
  </div>
</div>