<?php

session_start();

    unset(
        $_SESSION['id_usuario'],
        $_SESSION['nome'],
        $_SESSION['email'],
        $_SESSION['senha'],
        $_SESSION['niveis_acesso_id']
    );

    $_SESSION['logindeslogado'] = "Deslogado com sucesso";

    header("location: login.php");
?>

