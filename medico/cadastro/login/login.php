<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meses Dourados</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <h1>Meses Dourados</h1>
        <div class="container">
            <div class="sign-up-content">
                <form method="POST" action = "logs.php" class="signup-form">
                    <h2 class="form-title">Você está entrando como Responsável</h2>

                    <div class="form-textbox">
                        <label for="email">Nome de Usuário</label>
                        <input type="text" name="username" id="username" />
                    </div>

                    <div class="form-textbox">
                        <label for="pass">Senha</label>
                        <input type="password" name="senha" id="username" />
                    </div>

                    <div class="form-textbox">
                        <input type="submit" name="submit" id="submit" class="submit" value="Entrar" />
                    </div>
                </form>

                <p class="loginhere">
                    Não Cadastrado? ?<a href="#" class="loginhere-link"> Cadastre-se</a>
                </p>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>