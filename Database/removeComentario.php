<?php

session_start();

include_once("conexao.php");

$id_usuario = $_GET['id_usuario'];

if ($id_usuario = $_SESSION['id_usuario']) {

    $result = $conn->query("DELETE FROM comentarios WHERE fk_usuario = $id_usuario");


    if ($result == true) {

        echo "
            <script>
                alert('Comentario excluído com sucesso!')
                window.location.href = '../depoimentos.php'
            </script>
            ";
    } else {
        echo "
                <script>
                    alert('Não foi possível Deletar o comentario!')
                    window.location.href = '../depoimentos.php'
                </script>
            ";
    }
} else {

    echo "
                <script>
                    alert('Não foi possível Deletar o comentario!')
                    window.location.href = '../index.php'
                </script>
            ";
}
