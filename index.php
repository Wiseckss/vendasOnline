<?php

    include('conexao.php');

    if(isset($_POST['email']) || isset($_POST['senha'])) {

        if(strlen($_POST['email']) == 0) {
            echo "Preencha seu e-mail";
        } else if(strlen($_POST['senha']) == 0) {
            echo "Preencha sua senha";
        } else {
    
            $email = $conexao->real_escape_string($_POST['email']);
            $senha = $conexao->real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM clientes WHERE email = '$email' AND senha = '$senha'";
            $sql_query = $conexao->query($sql_code) or die("Falha na execução do SQL: ". $conexao->error);
            
            $quantidade = $sql_query->num_rows;

            if($quantidade == 1){
                $cliente = $sql_query->fetch_assoc();

                if(!isset($_SESSION)){
                    session_start();
                }

                $_SESSION['idCliente'] = $cliente['idCliente'];
                $_SESSION['nome'] = $cliente['nome'];

                header("Location: painel.php");
                 
            }else{
                echo "Falha ao logar! E-mail ou senha incorretos";
            }
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login e Cadastro</title>
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
    </style>
</head>
<body>
    <div class="form-container">
        <img src="logotrend.png" alt="Logo Trend" width="150">
        <h2>Login</h2>
        <form action="" method="post">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br><br>

            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" required><br><br>

            <input type="submit" value="Entrar">
        </form>
        <br><br>
        <p>Não tem uma conta? <a href="cadastro.php">Cadastrar</a></p>
    </div>
</body>
</html>