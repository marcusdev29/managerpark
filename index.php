<?php
session_start();
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - ManagerPark</title>
    <!--<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">-->
    <link rel="stylesheet" type="text/css" href="css/login1.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">ManagerPark</h3>
                    <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
                    <br>
                    <center>
                    <div class="box">
                        <form action="login.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <label> Usuário: </label>
                                    <input name="usuario" name="text" class="input is-large" autofocus="">
                                </div>
                            </div>
                            <br>
                            <div class="field">
                                <div class="control">
                                    <label> Senha: </label>
                                    <input name="senha" class="input is-large" type="password">
                                </div>
                            </div>
                            <br>
                            <input type="submit" name="Entrar" value="Entrar">
                        </form>
                    </div>
                    </center>
                </div>
            </div>
        </div>
    </section>
</body>

</html>