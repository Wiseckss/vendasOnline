<?php
   // include('cadastrar.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            text-align: center;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            width: 300px;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 80%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        label {
            text-align: left;
        }
    </style>
</head>
<body>
<div class="form-container">
        <img src="logotrend.png" alt="Logo Trend" width="150">
        <h2>Cadastro</h2>
        <form action="cadastrar.php" method="post" id="cadastro-form">
            <label for="nome">Nome Completo:</label>
            <input type="text" name="nome" id="nome" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" required>

            <input type="submit" value="Cadastrar">
        </form>
        <p>
        <a href="index.php">Login</a>
        </p>
</body>
</html>
