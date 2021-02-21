<?php

<<<<<<< Updated upstream
session_start();

include_once("../Database/conexao.php");

$id_usuario = $_SESSION['id_usuario'];
=======
>>>>>>> Stashed changes
$data_nasc = $_POST['data_nasc'];
$tel = $_POST['tel'];
$endereco = $_POST['endereco'];
$item = $_POST['item'];
$tipo = $_POST['tipo'];

<<<<<<< Updated upstream
if(strlen($tel) > 3 && strlen($endereco) > 3 && isset($_POST['item']) && isset($_POST['tipo']) ){

    $sql = "INSERT INTO doacoes (id_usuario, data_nasc, tel, endereco, item, tipo)
            VALUES ('$id_usuario','$data_nasc', '$tel', '$endereco', '$item', '$tipo')";
    $conn->query($sql);
=======
if(isset($_POST['data_nasc']) && strlen($tel) > 5 && strlen($endereco) > 3 && isset($_POST['item']) && isset($_POST['tipo']) ){

    $link = mysqli_connect("localhost", "root", "", "doeki");
    // $link = mysqli_connect("sql202.epizy.com", "epiz_27133760", "8XoIjZmXQh", "epiz_27133760_cadastro");

    $sql = "INSERT INTO doacoes (data_nasc, tel, endereco, item, tipo)
            VALUES ('$data_nasc', '$tel', '$endereco', '$item', '$tipo')";
    $link->query($sql);
>>>>>>> Stashed changes

    echo "
        <script>
            alert('Doação efetuada com sucesso!');
<<<<<<< Updated upstream
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
=======
            window.location.href = '/inicio.php';
        </script>
    ";
}else if (strlen($data_nasc <= 3)){
    echo "
        <script>
            alert ('Digite uma data de nascimento válida! ... tente de novo!')
            window.location.href = '/doacao.php'
        </script>
    ";
}else if (strlen($tel <= 3)){
    echo "
        <script>
            alert ('Digite um telefone válido realizar o cadastro! ... tente de novo!')
            window.location.href = '/doacao.php'
        </script>
    ";
}else if (strlen($endereco = 3)){
    echo "
        <script>
            alert ('Digite um endereço válido ... tente de novo!')
            window.location.href = '/doacao.php'
>>>>>>> Stashed changes
        </script>
    ";
}
?>