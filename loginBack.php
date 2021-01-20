<?php

session_start();

$email = $_POST['email']; 
$senha = $_POST['senha'];

if (strlen($email) > 3 && strlen($senha) > 3) {
    
    $senha_cripto = md5($senha);

    // $conn = mysqli_connect("localhost", "root", "", "doeki");
    $conn = mysqli_connect("sql202.epizy.com", "epiz_27133760", "8XoIjZmXQh", "epiz_27133760_cadastro");

    // Execução da instrução SQL
    $resultado_consulta = $conn->query("SELECT * from usuarios where email = '$email' AND senha = '$senha_cripto'");

    // $usuarios = Retorno da consulta no banco de dados
    $usuarios = mysqli_fetch_assoc($resultado_consulta);

    $_SESSION['nome'] = $usuarios["nome"];
    $_SESSION['email'] = $usuarios["email"];
    $_SESSION['id_usuario'] = $usuarios["id_usuario"];

    
    header('Location: index.php');
}else {
    echo "
        <script>
            alert('E-mail ou senha inválidos!')
            location.href = 'login.php'
        </script>
    ";
}