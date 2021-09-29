<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
  <li class="breadcrumb-item active" aria-current="page">Categorias</li>
  </ol>
</nav>
<div class="card mb-5">
   <div class="row card-body">
    <div class="col-sm-9">
      <h4>Categoria</h4>
    </div>

    <div class="col-sm-3">
      <a href="index.php?pg=form-categoria&operacao=cadastrar" title="Nova Categoria">
        <i class="far fa-plus-square"></i> Nova Categoria
      </a>	
    </div>
  </div>
</div>

<?php
if (isset($_GET['msg'])) {
  echo "<div class'alert alert-sucess'>".$_GET['msg']."</div>";
}


?>

<table class="table table-condensed">
  <thead>
    <tr>
      <th scope="col">cod Categoria</th>
      <th scope="col">Categoria</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>

  <tbody>
<?php
//cria a consulta para exibir as categorias
$sql = "SELECT * FROM tbl_categoria";

//incluir a conexao
include("../connection/conexao.php");

//executar a instrução sql
$executa = $mysqli->query($sql);

// obter o numero de linhas retornado pela consulta
$totalLinhas = $executa->num_rows;

//se o total de linhas for menor que 1, exibir uma mensagem
if ( $totalLinhas < 1 ) {
  echo "<tr>
          <td colspan='4'>Não existem categorias cadastradas.</td>
        </tr> ";
}else {
  //obter os dados retornado pela consulta
  

  while ($dados = $executa->fetch_assoc() ) {
    # code...


?>

    <tr>
      <td scope="col"><?php echo $dados['cod_categoria']?></td>
      <td scope="col"><?php echo $dados['categoria']?></td>
      <td scope="col">
        <a href="index.php?pg=form-categoria&operacao=editar&cod_categoria=<?php echo $dados['cod_categoria'];?>"> 
         editar
        </a>  
      </td>
      <td scope="col">
        <a href="acoes-categoria.php?operacao=excluir&cod_categoria=<?php echo $dados['cod_categoria'];?>"> excluir </a> 
      </td>
    </tr>

    <?php }//fim do while
       }//fim do else ?>
 </tbody>	
</table>