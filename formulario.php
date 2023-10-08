<?php

    if(isseT($_POST['submit']))
    {
        print_r('Nome: ' . $_POST['name']);
        print_r('<br>');
        print_r('Email: ' . $_POST['email']);
        print_r('<br>');
        print_r('Senha: ' . $_POST['password']);
        print_r('<br>');
        print_r('Conforme a senha: ' . $_POST['confirmpassword']);

        include_once('config.php');

        $nome = $_POST['name'];
        $email = $_POST['email'];
        $senha = $_POST['password'];
        $confirme_senha = $_POST['confirmpassword'];

        $result = mysqli_query($conexao, "INSERT INTO formulario(nome,email,senha,confirm_senha) 
        VALUES('$nome', '$emai', '$senha', '$confirme_senha')");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
</head>
<body>
    <div class="container">
        <div class="form-image">
            <img src="image.png" alt="">
        </div>
        <div class="form">
            <form action="formulario.php" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>

                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="name">Primeiro nome</label>
                        <input type="text" name="name" id="name" placeholder="Digite seu nome" required>
                    </div>

                    <div class="input-box">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Digite seu email" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input type="password" name="password" id="password" placeholder="Digite sua senha" required>
                    </div>

                    <div class="input-box">
                        <label for="Confirmpassword">Confirme sua senha</label>
                        <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Digite sua senha" required>
                    </div>
                </div>

                <div class="continue-button">
                    <button><a href="#">Continuar</a></button>
                </div>
            </form>
        </div>
    </div>


</body>
</html>