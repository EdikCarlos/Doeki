<?php

// $link = mysqli_connect("localhost","root","","cadastro");
$link = mysqli_connect("sql202.epizy.com", "epiz_27133760", "8XoIjZmXQh", "epiz_27133760_cadastro");

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
            window.location.href ='/depoimentos.php'
        </script>
    ";
    
}
?>