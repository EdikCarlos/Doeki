<?php

session_start();

include_once("conexao.php");

$comentario = $_POST['post'];
$id = $_SESSION['id_usuario'];

if (!$conn) {
    die ("ERRO DE CONEXÃO").mysqli_connect_errno();
}

if (strlen($comentario) > 0) {

    $result = $conn->query("INSERT INTO comentarios (fk_usuario, descricao) VALUES ($id, '$comentario')");

    if($result == true){
        echo "
            <script>
                alert('Agradecemos muito por seu depoimento =D')
                location.href = '../depoimentos.php'
            </script>
        ";
    }else{
        echo "
                <script>
                    alert('Não foi possível cadastrar a postagem!')
                    window.location.href ='../depoimentos.php' 
                </script>
            ";
    } 
}else{
    echo "
        <script>
            alert('Digite algo para postar!')
            location.href = '../depoimentos.php'
        </script>
    ";
}
?>