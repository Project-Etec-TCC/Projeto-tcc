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
        <li class="breadcrumb-item active" aria-current="page">Dados Da Pizzaria</li>
    </ol>
    </nav>
    <h3>Dados Da Pizzaria</h3>

    <div class="container">
        <div class="container">
            <form>
                <div class="form-row">

                    <div class="form-group col-md-9">
                     <label for="inputEmail4">Razão social:</label>
                        <input type="razao" class="form-control" name="razao" id="inputEmail4" placeholder="Razão social">
                    </div>

                    <div class="form-group col-md-9">
                     <label for="inputEmail4">Nome da empresa:</label>
                        <input type="text" class="form-control" nome="nomeEmpresa" id="inputEmail4" placeholder="Nome da empresa">
                    </div>

                    <div class="form-group col-md-9">
                     <label for="inputEmail4">E-mail</label>
                        <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="E-mail">
                    </div>

                    <div class="form-group col-md-4">
                     <label for="inputEmail4">CPF/CNPJ:</label>
                        <input type="text" class="form-control" name="cpf_cnpj" id="inputEmail4" placeholder="CPF/CNPJ">
                    </div>
                    

                    <div class="form-group col-md-9">
                     <label for="inputEmail4">Inscrição Estadual:</label>
                        <input type="text" class="form-control" name="inscricao" id="inputEmail4" placeholder="Inscrição Estadual">
                    </div>

                    <div class="form-group col-md-7">
                     <label for="inputEmail4">Representante:</label>
                        <input type="text" class="form-control" name="representante" id="inputEmail4" placeholder="Representante">
                    </div>

                    <div class="form-group col-md-6">
                     <label for="inputEmail4">Bairro:</label>
                        <input type="text" class="form-control" name="bairro" id="inputEmail4" placeholder="Bairro">
                    </div>

                </div>

                <div class="form-group">
                    <label for="inputAddress">Endereço</label>
                    <input type="text" class="form-control" name="endereco" id="inputAddress" placeholder="Rua dos Bobos, nº 0">
                </div>

                <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Cidade</label>
                    <input type="text" class="form-control" name="endereco" id="inputCity">
                </div>

                    <div class="form-group col-md-4">
                    <label for="inputEstado">Estado</label>
                    <select id="inputEstado" class="form-control">
                        <option selected>Escolher...</option>
                        <option>SP</option>
                    </select>
                    </div>

                    <div class="form-group col-md-2">
                    <label for="inputCEP">CEP</label>
                    <input type="text" name="cep" class="form-control" id="inputCEP">
                    </div>

                    <div class="form-group col-md-9">
                     <label for="inputEmail4">Fone:</label>
                        <input type="text" class="form-control" name="fone" id="inputEmail4" placeholder="fone">
                    </div>

                </div>
                
               <!-- <div class="form-group">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Clique em mim
                    </label>
                    </div>-->
                </div> 

                <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
        </div>
    </div>

    </main><!-- /.container -->

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="js/jquery-3.js"></script>
    <script src="js/bootstrap.js"></script>


</body>

</html>