<?php 

$link = mysqli_connect("localhost","root","","pre_cadastro_usuario");

if (!$link) {
    die ("Sem conecão").mysqli_connect_errno();
}else {
    echo "Conectado com Sucesso!";
}


$nome = $_POST['nome1'];
$sobrenome = $_POST['sobrenome1'];
$data_nasc = $_POST['datanasc1'];
$cel = ['tel1'];
$endereco = ['endereco1'];
$doacao = ['equipamento1'];
$descricao_doacao = ['descricao1'] ;






echo "$nome <br>";
echo "$sobrenome <br>";
echo "$data_nasc <br>";
echo "$cel <br>";
echo "$endereco <br>";
echo "$doacao <br>";
echo "$descricao_doacao <br>";


?>