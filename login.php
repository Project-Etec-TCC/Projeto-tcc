<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon/tcc.ico">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">

        <h1>
            <a href="index.php">PizzaOn</a>
        </h1>
        <h2>
            <a>Login</a>
        </h2>

        <?php session_start();
            
            if (isset($_GET['erro']) ) {
                $dadosFormLogin = @$_SESSION['dadosFormLogin'];
                $erroLogin = @$_SESSION['mensagemErroLogin'];
            }
            
            ?>

        <form action="valida-login.php" method="POST" id="forLogin">
            <div class="input-field">
                <input type="mail" name="email" id="username"
                    placeholder="Email" value="<?php echo @$dadosFormLogin['email'];?>">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="password" name="senha"
                    placeholder="Senha">
                <div class="underline"></div>
            </div>

            <?php
                
                if (isset($erroLogin)) {
                    echo  "<ul class='alert alert-danger'>";

                    foreach ($erroLogin as $erro) {

                        echo "<li> $erro </li>";
                    }

                    echo "</ul>";
                }
                
                
                ?>

            <input type="submit" class="form-input" value="Continue">

             <p>
            <a href="recupera-senha.php" class="text-danger">Esqueceu a senha?</a>
            </p>

            <p>
            <a href="registro.php" class="text-danger">Criar uma conta</a>
             </p>

        </form>
    </main>
</body>
</html>