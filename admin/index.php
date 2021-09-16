<?php include ("verifica-logado.php");?>
<!DOCTYPE html>
<html lang="pt-br"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon/tcc.ico">

    <title>PizzaOn</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="../css/starter-template.css" rel="stylesheet">

    <!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/77f3dd62a7.js" crossorigin="anonymous"></script>

  </head>

  <body cz-shortcut-listen="true">

    <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
      <a class="navbar-brand" href="#">Admin</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Saiba mais <span class="sr-only">(atual)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="https://example.com/" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $_SESSION['nome'];?>
          </a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Editar perfil</a>
              <a class="dropdown-item" href="#">Alterar senha</a>
            </div>
          </li>
          <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Pesquisa" aria-label="Search">
          <button class="btn btn-success my-2 my-sm-0" type="submit">Pesquisar</button>
        </form>
        </ul>
        <div class="my-2 my-lg-0">
          <a href="logoff.php" class="btn btn-success"><i class="fas fa-sign-out-alt"></i> Sair</a>
        </div>
      </div>
    </nav>




    </main><!-- /.container -->

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="../js/jquery-3.js"></script>
    <script src="../js/bootstrap.js"></script>

  

</body></html>