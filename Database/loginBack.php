<?php

session_start();

include_once("conexao.php");


if (isset($_POST['email']) && isset($_POST['senha'])) {
    
    $email = mysqli_real_escape_string( $conn, $_POST['email'] ); 
    $senha = mysqli_real_escape_string( $conn, $_POST['senha']);
    $senha_cripto = md5($senha);


    // Execução da instrução SQL
    $res_consulta = "SELECT * from usuarios where email = '$email' AND senha = '$senha_cripto' LIMIT 1";

    $resultado_consulta = mysqli_query($conn, $res_consulta);
    $resultado = mysqli_fetch_assoc($resultado_consulta);

    if(isset($resultado)){
        
        $_SESSION['id_usuario'] = $resultado['id_usuario'];
        $_SESSION['nome'] = $resultado['nome'];
        $_SESSION['niveis_acesso_id'] = $resultado['niveis_acesso_id'];
        $_SESSION['email'] = $resultado['email'];

        if($_SESSION['niveis_acesso_id'] == "1"){
            header("Location: ../formulario.php");
        }elseif($_SESSION['niveis_acesso_id'] == "2"){
            header("Location: ../index.php");
        }else{
            header("Location: sobre.php");
        }

    }else{
        $_SESSION['loginErro'] = "Usuario ou senha Invalida";
        header("Location: ../login.php");
    }
} 