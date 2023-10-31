<?php

    session_start();
    include('conexao.php');
        
    $nome = mysqli_real_escape_string($conexao,trim($_POST['nome']));
    $email = mysqli_real_escape_string($conexao,trim($_POST['email']));
    $senha = mysqli_real_escape_string($conexao,trim($_POST['senha']));

    $sql_code = "select count(*) as total from clientes where email = '$email'";

    $sql_code = "INSERT INTO clientes (nome,email,senha) VALUES ('$nome','$email','$senha')";

    if($conexao->query($sql_code) === TRUE){
        $_SESSION['status_cadastro'] = TRUE;
    }

    $conexao->close();
    header('Location: index.php');
    exit;
?>