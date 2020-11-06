<?php

$link = mysqli_connect("localhost","root","","cadastro");

if (!$link) {
    die ("ERRO DE CONEXÃO").mysqli_connect_errno();
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$descricao = $_POST['descricao'];

if ( isset($_POST['nome']) && isset($_POST['email']) && (isset($_POST['descricao']))) {

    $sql = "INSERT INTO testemunhos (nome, email, descricao) values ('$nome','$email','$descricao')";
    $result = $link->query($sql); 
    echo "
        <script>
            alert('Cadastro efetuado!!')
            window.location.href ='/www/DoekiOficial/depoimentos.php'
        </script>
    ";
    
}
?>