<?php

session_start();
include_once("conexao.php");


if (!$conn) {
    die ("ERRO DE CONEXÃO").mysqli_connect_errno();
}

$id_usuario = $_SESSION['id_usuario'];
$descricao = $_POST['descricao'];

if ((isset($_POST['descricao']))) {

    $sql = "UPDATE comentarios SET descricao = '$descricao' WHERE fk_usuario = $id_usuario";
    $result = $conn->query($sql); 
    echo "
        <script>
            alert('Voce alterou seu comentario')
            window.location.href ='../depoimentos.php'
        </script>
    ";
    
}
?>