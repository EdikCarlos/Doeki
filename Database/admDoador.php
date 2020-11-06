<?php
$email = $_POST['email'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$data_nasc = $_POST['data_nasc'];
$tel = $_POST['tel'];
$endereco = $_POST['endereco'];
$item = $_POST['item'];
$tipo = $_POST['tipo'];

if( strlen($email) > 3 && strlen($nome) > 3 && strlen($sobrenome) > 3 && isset($_POST['data_nasc']) && strlen($tel) > 5 && strlen($endereco) > 3 && isset($_POST['item']) && isset($_POST['tipo']) ){

    $link = mysqli_connect("localhost", "root", "", "cadastro");

    $sql = "INSERT INTO usuarios (email, nome, sobrenome, data_nasc, tel, endereco, item, tipo)
            VALUES ('$email', '$nome', '$sobrenome', '$data_nasc', '$tel', '$endereco', '$item', '$tipo')";
    $link->query($sql);

    echo "
        <script>
            alert('Cadastro Efetuado!');
            window.location.href = '/www/DoekiOficial/inicio.php';
        </script>
    ";
}else if (strlen($email <= 3)){
    echo "
        <script>
            alert ('Digite um email válido para realizar o cadastro! ... tente de novo!')
            window.location.href = '/www/DoekiOficial/doacao.php'
        </script>
    ";
}
?>