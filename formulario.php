<?php
include_once("./Database/conexao.php");

if (!$conn) {
    echo "<p> voce ja pode mexer MySQL</p>";
}
$doacoes = "SELECT d.id_doacoe AS numero, u.nome AS nome, u.email AS email,  d.data_nasc AS data, d.tel AS tel, d.endereco AS endereco, d.item AS item, d.tipo AS tipo
FROM usuarios AS u JOIN doacoes AS d WHERE d.id_usuario = u.id_usuario";

$datos = $conn->query($doacoes);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/estilo.css">
    <title>Formulario</title>
</head>

<body>
    <div class="container-fluid">
        <div class="menu2">
            <nav class="navbar navbar-expand-md navbar-dark mt-1 mb-4" style="background-color: rgba(255, 236, 234, 0.6); width: 100%;">
                <button class="navbar-toggler bg-primary" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <a href="index.php" class="mx-5 navbar-brand"><img class="logoDoacao" src="imagens/logoSimFundo.png" alt=""></a>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="text-dark nav-link" href="inicio.php"><span class="drop">H</span>ome</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-dark nav-link" href="sobre.php"><span class="drop">S</span>obre</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-dark nav-link" href="doacao.php"><span class="drop">D</span>oação</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-dark nav-link" href="parceiros.php"><span class="drop">P</span>arceiros</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-dark nav-link" href="depoimentos.php"><span class="drop">D</span>epoimentos</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

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