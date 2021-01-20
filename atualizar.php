<?php

session_start();

// $link = mysqli_connect("localhost","root","","doeki");
$link = mysqli_connect("sql202.epizy.com", "epiz_27133760", "8XoIjZmXQh", "epiz_27133760_cadastro");

if (!$link) {
    die ("ERRO DE CONEXÃO").mysqli_connect_errno();
}

$id_usuario = $_SESSION['id_usuario'];
$descricao = $_POST['descricao'];

if ((isset($_POST['descricao']))) {

    $sql = "UPDATE comentarios SET descricao = '$descricao' WHERE id_usuario = $id_usuario";
    $result = $link->query($sql); 
    echo "
        <script>
            alert('Voce é legal')
            window.location.href ='depoimentos.php'
        </script>
    ";
    
}
?>