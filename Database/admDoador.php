<?php

session_start();

include_once("../Database/conexao.php");

$id_usuario = $_SESSION['id_usuario'];
$data_nasc = $_POST['data_nasc'];
$tel = $_POST['tel'];
$endereco = $_POST['endereco'];
$item = $_POST['item'];
$tipo = $_POST['tipo'];

if(strlen($tel) > 3 && strlen($endereco) > 3 && isset($_POST['item']) && isset($_POST['tipo']) ){

    $sql = "INSERT INTO doacoes (id_usuario, data_nasc, tel, endereco, item, tipo)
            VALUES ('$id_usuario','$data_nasc', '$tel', '$endereco', '$item', '$tipo')";
    $conn->query($sql);

    echo "
        <script>
            alert('Doação efetuada com sucesso!');
            window.location.href = '../depoimentos.php';
        </script>
    ";
}else if (strlen($data_nasc <= 3)){
    echo "
        <script>
            alert ('Digite uma data de nascimento válida! ... tente de novo!')
            window.location.href = '../doacao.php'
        </script>
    ";
}else if (strlen($tel <= 3)){
    echo "
        <script>
            alert ('Digite um telefone válido para realizar o cadastro! ... tente de novo!')
            window.location.href = '../doacao.php'
        </script>
    ";
}else if (strlen($endereco <= 3)){
    echo "
        <script>
            alert ('Digite um endereço válido ... tente de novo!')
            window.location.href = '../doacao.php'
        </script>
    ";
}
?>