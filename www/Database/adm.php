<?php
$link = mysqli_connect("localhost","root","","cadastro");

if(!$link){
    die ("Error de conexão!").mysqli_connect_errno();      
}

$email = $_POST['email'];
$senha = $_POST['senha'];
$conf_senha = $_POST['conf_senha'];


if(isset($_POST['email']) && (isset($_POST['senha']) == isset($_POST['conf_senha']))){
    
    $email = $_POST['email'];
    $senha =md5($_POST['senha']);

    $sql = "INSERT INTO inicios(email,senha) VALUES('$email','$senha')";
    
    $result = $link->query($sql); 
    
    echo "
        <script>
            alert('Cadastro efetuado!!')
            window.location.href = '/www/DoekiOficial/inicio.php'
        </script>
    ";
}
?>