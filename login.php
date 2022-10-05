<?php 

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Login</title>
</head>
<body>
<form class="formulario" action="index.php" method="POST">
        <h1>Login</h1>

        <h2 class="formulario__titulo">E-mail:</h2>
        <input type="text" name="email" id="email" placeholder="Insira o seu e-mail" class="formulario__input" required>

        <h2 class="formulario__titulo">Senha:</h2>
        <input type="password" name="senha" id="senha" placeholder="Insira a sua senha" class="formulario__input" required>

        <button class="formulario__botao" type="submit">Enviar</button>
    </form>

    <script src="index.js"></script>
</body>
</html>