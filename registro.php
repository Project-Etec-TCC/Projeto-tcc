<!DOCTYPE html>
<html lang="pt-br">

<!-- comentario  -->

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="icon" href="favicon/pw3.ico"> -->

    <title>Criar conta</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="css/starter-template.css" rel="stylesheet">

    <!-- FONTAWESOME -->
    <script src="js/fontawesome.js" crossorigin="anonymous"></script>

</head>

<body>

    <main class="container">

            <div class="input-field">
            <h2>
                <a>Cadastrar</a>
            </h2>
                <p class="login-box-msg text-center">Crie sua conta gratuita</p>

                <?php session_start();
                if (isset($_GET['erro'])) {
                    $dadosForm = $_SESSION['dadosForm'];
                    $erro = @$_SESSION['erro'];
                }

                ?>
                <form action="cria-conta.php" method="post" id="formCriaConta">
                    <div class="input-group mb-3">
                        <input type="text" name="nome" placeholder="Nome completo" aria-label="nome" aria-describedby="basic-addon1"
                        value="<?php echo @$dadosForm['nome'];?>">
                        <div class="underline"></div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" name="email" placeholder="E-mail" aria-label="E-mail" aria-describedby="basic-addon1"
                        value="<?php echo @$dadosForm['email'];?>">
                        <div class="underline"></div>
                    </div>


                    <div class="input-group mb-3">
                        <input type="number"  name="numero" placeholder="Insira seu n??mero"    aria-label="numero" aria-describedby="basic-addon1"
                        value="<?php echo @$dadosForm['numero'];?>">
                        <div class="underline"></div>
                    </div>



                    <div class="input-group mb-3">
                        <input type="password" name="senha" id="senha" placeholder="Senha" aria-label="Senha" aria-describedby="basic-addon1"
                        value="<?php echo @$dadosForm['senha'];?>">
                        <div class="underline"></div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" name="confirmaSenha" placeholder="Repita a senha" aria-label="Repita a senha" aria-describedby="basic-addon1"
                        value="<?php echo @$dadosForm['confirmaSenha'];?>">
                        <div class="underline"></div>
                    </div>

                    <?php if(@$dadosForm['termos']=='on'){
                        $checked="checked='checked'";
                    }?>
                    <div class="input-group mb-3">
                        <input type="checkbox" name="termos" class="form-check-input" id="termos" <?php echo @$checked; ?>>
                        <label class="form-check-label" for="exampleCheck1">Aceitar os <a href="#" data-toggle="modal" data-target="#modalTermos">termos</a></label>
                    </div>

                    <?php if(isset($_GET['erro'])){
                        echo "<ul class='alert alert-danger'>";
                            foreach($_SESSION['mensagemErro'] as $erro){
                                echo "<li>
                                        $erro
                                      </li>";
                            }
                        echo "</ul>";
                    }?>

                    <div class="form-group text-right">
                        <button type="submit" class="form-input" value="Continue">Cadastrar</button>
                    </div>

                          
                </form>

                <p class="mb-1">
                    <a href="login.php">J?? tenho uma conta</a>
                </p>

            </div>

    </main><!-- /.container -->

    <!-- Modal -->
    <div class="modal fade" id="modalTermos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Termos site PW3</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint animi optio quaerat, dolorem fugit voluptas id, quos ducimus at alias eius quae voluptatibus provident perspiciatis aut molestiae iste magni cumque.</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore voluptatum non accusamus ea ad ab provident molestiae, porro sed. Delectus facere, pariatur eveniet iusto unde numquam repellendus consectetur commodi ducimus?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

        <!-- Plugin jquery.mask.min -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

        <script type="text/javascript">
        $(numero).mask("(00) 0000-0000");
        </script>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a p??gina carregar mais r??pido -->
    <script src="js/jquery-3.js"></script>
    <script src="js/bootstrap.js"></script>
        <!-- Adicionar jquery validate -->
        <script src="jquery-validation/dist/jquery.validate.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#formCriaConta').validate({
                rules: {
                    nome: {
                        required: true
                    },
                    numero: {
                        required: true,
                        minlength: 9,
                        maxlength: 9
                    },
                    email: {
                      required: true,
                      email: true
                    },
                    senha: {
                      required: true,
                      minlength: 6
                    }, 
                    confirmaSenha: {
                      equalTo: "#senha"
                    },
                    termos: {
                        required: true
                    },
                },
                messages: {
                    nome: {
                        required: "O campo nome ?? obrigat??rio"
                    },
                    numero: {
                        required: "Esse campo ?? obrigat??rio",
                        minlength: "O numero deve ter no m??nimo 9 caracteres",
                        maxlength: "O numero deve conter no maximo 9 caracteres"
                    },
                    email: {
                      required: "Informe o seu e-mail",
                      email: "Utilize um e-mail v??lido"
                    },
                    senha: {
                      required: "A senha ?? obrigat??ria",
                      minlength: "A senha deve ter no m??nimo 6 caracteres"
                    },
                    confirmaSenha: {
                      equalTo: "Senhas n??o conferem"
                    },
                    termos: {
                        required: "Voc?? deve aceitar os temos para criar a conta"
                    },
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    
                    if (element.prop("type") === "checkbox") {
                        error.insertAfter(element.next("label"));
                    } else {
                        error.insertAfter(element);
                    }
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
</body>

</html>