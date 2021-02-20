<?php
session_start();
include_once("./Database/conexao.php");

if (!$conn) {
    echo "<p> voce ja pode mexer MySQL</p>";
}

$doacoes = "SELECT d.id_doacoe AS numero, u.nome AS nome, u.email AS email,  d.data_nasc AS data, d.tel AS tel, d.endereco AS endereco, d.item AS item, d.tipo AS tipo
FROM usuarios AS u JOIN doacoes AS d WHERE d.id_usuario = u.id_usuario";

$datos = $conn->query($doacoes);




if (!isset($_SESSION['id_usuario'])) {
    header('location: login.php');
    exit;
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/estilo.css">
    <link rel="stylesheet" href="estilos/botao.css">
    <title>Formulario</title>
</head>

<body>
        <nav class="navbar navbar-light bg-info d-flex justify-content-between fixed-top">
            <div class="navIntro d-flex">
                <h5 class="bg-warning p-2 rounded">Bem-Vindo (a) <strong><?php echo $_SESSION['nome']?></strong></h5>   
            </div>
            <div class="navIntro mb-5 ">
                    <strong>
                        <a href="doacao.php" class="btn btn-white btn-animate btn-lg">DOAR</a>
                    </strong>
            </div>
            <div  class="navIntro d-flex">             
                <a class="text-dark" href="Database/sair.php"><h6 class="bg-warning ml-5 p-2 rounded"><strong>Sair</strong></h6></a>
            </div>
        </nav>

    <?php
        require('./frontend/components/Header.php');
    ?>

    <div class="jumbotron container mt-5">
        <h1 class="display-4">Tabela de Usuarios</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">IdDoacoes</th>
                    <th scope="col">nome</th>
                    <th scope="col">email</th>
                    <th scope="col">data nascimento</th>
                    <th scope="col">tel</th>
                    <th scope="col">endereco</th>
                    <th scope="col">item</th>
                    <th scope="col">tipo</th>
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($datos as $dato) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $dato["numero"]; ?></th>
                        <td><?php echo $dato["nome"]; ?></td>
                        <td><?php echo $dato["email"]; ?></td>
                        <td><?php echo $dato["data"]; ?></td>
                        <td><?php echo $dato["tel"]; ?></td>
                        <td><?php echo $dato["endereco"]; ?></td>
                        <td><?php echo $dato["item"]; ?></td>
                        <td><?php echo $dato["tipo"]; ?></td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
</body>

</html>