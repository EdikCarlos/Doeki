<?php
session_start();

include_once("./Database/conexao.php");

$id = $_SESSION['id_usuario'];

if ($id == "") {
    $nome = "Convidado";
} else {
    $nome = $_SESSION['nome'];
}

$nro_usuarios = "SELECT COUNT(*) AS nro FROM usuarios";
$total_usuarios = $conn->query($nro_usuarios);

$nro_doadores = "SELECT COUNT(*) AS nro FROM usuarios AS u JOIN doacoes AS d WHERE u.id_usuario = d.id_usuario AND d.tipo = 'doador'";
$total_doadores = $conn->query($nro_doadores);

$nro_beneficiaros = "SELECT COUNT(*) AS nro FROM usuarios AS u JOIN doacoes AS d WHERE u.id_usuario = d.id_usuario AND d.tipo = 'beneficiario'";
$total_beneficiarios = $conn->query($nro_beneficiaros);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doeki | Oficial</title>
    <link rel="stylesheet" href="estilos/estilo.css">
    <link rel="stylesheet" href="estilos/botao.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
        <div>
        <nav class="navbar navbar-light bg-info d-flex justify-content-between fixed-top">
            <div class="navIntro d-flex">
                <h5 class="bg-warning p-2 rounded">Bem-Vindo (a) <strong><?php echo $nome ?></strong></h5>
            </div>
            <div class="navIntro mb-5">
                <strong>
                    <a href="doacao.php" class="btn btn-white btn-animate btn-lg">DOAR</a>
                </strong>
            </div>
            <div class="navIntro d-flex">
                <?php
                if ($id == "") { ?>
                    <a class="text-dark" href="login.php">
                        <h6 class="bg-warning mr-1 px-5 py-2 rounded"><strong>Login</strong></h6>
                    </a>
                <?php
                }else{
                ?>
                <a class="text-dark" href="Database/sair.php">
                    <h6 class="bg-warning mr-1 px-5 py-2 rounded"><strong>Sair</strong></h6>
                </a>
                <?php }?>
            </div>
        </nav>
        </div>
        <div class="ajuste">
        <?php
        require('./frontend/components/Header.php');
        ?>
        </div>
        <div class="container mt-5">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="imagens/index1.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="imagens/squad_6.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="imagens/maos.png" alt="Third slide">
                    </div>
                </div>
            </div>
        </div>


        <hr class="bg-warning">

        <div class="container p-4" style="text-align: center;">
            <h2>Dados da Doeki</h2>
            <p style="background-color: rgba(203, 236, 247, 0.5);min-width:250px;">Abaixo a Doeki apresenta alguns dados de seu site, como a quantidade de visitantes, a quantidade de pessoas que fizeram uma doação e a quantidade de pessoas que foram ajudadas com essa iniciativa! </p>
            <div class="container row">
                <div class="p-4 col-4" style="background-color: rgba(203, 236, 247, 0.5);min-width:250px;">
                    <h3>Usuarios</h3>
                    <?php
                    foreach ($total_usuarios as $total_usuario) {
                    ?>
                        <h4><?php echo $total_usuario["nro"]; ?> pessoas</h4>
                    <?php } ?>
                    <p>A Doeki no ultimo mês teve <?php echo $total_usuario["nro"]; ?> visitante(s)! Voltem sempre e mudem mais vidas =D </p>
                </div>
                <div class="p-4 ml-1 col-4" style="background-color: rgba(203, 236, 247, 0.5);min-width:250px;">
                    <h3>Doadores</h3>
                    <?php
                    foreach ($total_doadores as $total_doador) {
                    ?>
                        <h4><?php echo $total_doador["nro"]; ?> pessoas</h4>
                    <?php } ?>
                    <p>Não temos palavras para agradecer, graças a ajuda de todos a Doeki já teve <?php echo $total_doador["nro"]; ?> doações desde sua inauguração até hoje!!! Muito obrigado! </p>
                </div>
                <div class="p-4 ml-1 col-3" style="background-color: rgba(203, 236, 247, 0.5);min-width:250px;">
                    <h3>Beneficiarios</h3>
                    <?php
                    foreach ($total_beneficiarios as $total_beneficiario) {
                    ?>
                        <h4><?php echo $total_beneficiario["nro"]; ?> pessoas</h4>
                    <?php } ?>
                    <p>Com a sua ajuda a Doeki mudou a vida de <?php echo $total_beneficiario["nro"]; ?> pessoas! Vamos aumentar ainda mais esse número =D</p>
                </div>
            </div>
        </div>


        <div class="sobe">
            <hr class="bg-warning">
            <div class="container" style="text-align: center;">
                <h2 class="container text-center">Resumo da solução</h2>
                <div class="txtResumo container col text-center" style="background-color: rgba(203, 236, 247, 0.5);min-width:250px;">
                    <p>- Sabe aquele equipamento que está parado no cantinho da sua casa?</p>
                    <p>- Ele pode ser a solução para a mudança da vida de outra pessoa.</p>
                    <p>- Basta você se cadastrar em nosso site e iremos fazer a ponte entre você e a pessoa.</p>
                    <p>- O processo todo será seguro e ao final você receberá uma foto da pessoa ajudada com seu
                        equipamento,
                        para que você tenha certeza de que ele foi entregue para quem realmente precisava.</p>
                    <p>- Lembre-se, doar é o maior ato de humanidade que podemos ter, e nosso pagamento são as emoções que
                        iremos dar e receber.</p>
                </div>
                <div class="imgResumo container col">
                    <img class="amigos container mt-1" src="imagens/cadeiranteAmigo.jpg" alt="Amigos" style="max-width:570px;height:400px;">
                </div>
            </div>
        </div>
        <hr class="bg-warning">
        <div class="poderMudar container" style="text-align: center;">
            <h2>O poder de mudar uma vida!</h2>
            <div class="txtPoder container mt-4" style="width: 1000px;">
                <p>Doar é muito mais que apenas entregar um item ou algum valor para outra pessoa, doar é colocar um
                    pouco
                    de você na vida de outra pessoa, é poder ser a oração encarnada daquela pessoa, é poder dar uma
                    esperança de mudança, dar um futuro, pequenas atitudes para nós são grandes realizações para quem
                    precisa, você pode ser a diferença, doe!</p>
            </div>
            <div class="video1">
                <iframe width="280" height="300" src="https://www.youtube.com/embed/TFqqA4m1u_c" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video2">
                <iframe width="280" height="300" src="https://www.youtube.com/embed/aww32PsnHQI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video3">
                <iframe width="280" height="300" src="https://www.youtube.com/embed/9KIedVj9Aoc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

        <?php
        require('./frontend/components/Footer.php')
        ?>

</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>