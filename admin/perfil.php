<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon/tcc.ico">

    <title>PizzaOn</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="css/starter-template.css" rel="stylesheet">

    <!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/77f3dd62a7.js" crossorigin="anonymous"></script>
</head>

<body>



<main role="main" class="container">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Perfil</li>
    </ol>
    </nav>
    <h3>Perfil</h3>

    <div class="row">
        <div class="col-sm-4 offset-sm-4">
        <form>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Alterar imagem</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="nome" class="form-control" placeholder="Nome completo" aria-label="nome" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="text" name="email" class="form-control" placeholder="E-mail" aria-label="E-mail" aria-describedby="basic-addon1" readonly>
                    </div>

                    <div class="form-group text-right text-center">
                        <button type="submit" class="btn btn-primary">Atualizar</button>
                    </div>

                </form>
        </div>
    </div>

    </main><!-- /.container -->

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a p??gina carregar mais r??pido -->
    <script src="js/jquery-3.js"></script>
    <script src="js/bootstrap.js"></script>


</body>

</html>