<?php
session_start();

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
    <title>Doeki | Oficial</title>
    <link rel="stylesheet" href="estilos/estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div>
    
    <div class=" menu1 container-fluid">
            <div class="container-fluid">
                <a href="formulario.php" style="text-decoration: none; margin-left:30px;" class="text-white">*</a>
                <nav class="navbar navbar-expand-md navbar-light mt-1 mb-4" style="width: 100%;">
                    <button class="navbar-toggler bg-info" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <a href="index.php" class="mx-5 navbar-brand"><img class="logoDoacao" src="imagens/logoSimFundo.png" alt="logoDoeki" style="max-width: 180px;"></a>
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="text-primary nav-link" href="index.php"><span class="drop">H</span>ome</a>
                            </li>
                            <li class="nav-item">
                                <a class="text-primary nav-link" href="sobre.php"><span class="drop">S</span>obre</a>
                            </li>
                            <li class="nav-item">
                                <a class="text-primary nav-link" href="doacao.php"><span class="drop">D</span>oação</a>
                            </li>
                            <li class="nav-item">
                                <a class="text-primary nav-link" href="parceiros.php"><span class="drop">P</span>arceiros</a>
                            </li>
                            <li class="nav-item pr-5">
                                <a class="text-primary nav-link" href="depoimentos.php"><span class="drop">D</span>epoimentos</a>
                            </li>
                            <li class="nav-item text-primary">
                               <h5 class="ml-3 mb-0 pl-5 mt-4 text-white">Bem vindo, <?php echo $_SESSION['nome'] ?></h5>
                            </li>
                            <li class="nav-item text-primary pl-3 mt-4">
                            <a class="py-2 text-white h4" href="sair.php" >Sair</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="sobe">
            <hr class="bg-warning">
            <div class="container row" style="margin-left: 30px;">
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
            <div class="txtPoder container mt-4" style="width: 1000px;" >
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
                <iframe width="280" height="300"  src="https://www.youtube.com/embed/aww32PsnHQI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video3">
                <iframe width="280" height="300"  src="https://www.youtube.com/embed/9KIedVj9Aoc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="fim">
            <section class="fimPagina">
                <img src="estilos/imgFooter.svg" alt="BackGround-OndaAzul">
                <div class="txtDoeki">
                    <h3>Doeki</h3>
                    <p>Doar é muito mais que apenas entregar um item ou algum valor para outra pessoa, doar é colocar um
                        pouco de você na vida de outra pessoa, é poder ser a oração encarnada daquela pessoa, é poder
                        dar
                        uma esperança de mudança, dar um futuro, pequenas atitudes para nós são grandes realizações para
                        quem precisa, você pode ser a diferença, doe!</p>
                </div>
                <div class="endereco">
                    <h3 class="enderecoEsq">Endereço</h3>
                    <p>Rua Araújo, 355</p>
                    <p>Parque São Felipe</p>
                    <p>CEP: 04870-90</p>
                    <p>Tel: (11) 4192-8681</p>
                </div>
                <div class="botaoDoeaki">
                    <a href="doacao.php"><img class="doeaki" src="imagens/coracao.png" alt="DoeAki"></a>
                </div>
                <div class="facebook">
                    <img src="imagens/facebook.svg" alt="Facebook">
                    <p>Facebook.com/DoekiOficial</p>
                </div>
                <div class="insta">
                    <img src="imagens/instagram.svg" alt="Instagram">
                    <p>Instagram.com/DoekiOficial</p>
                </div>
                <div class="email">
                    <img src="imagens/gmail.svg" alt="Gmail">
                    <p>DoekiOficial@gmail.com</p>
                </div>
                <div class="whatsapp">
                    <img src="imagens/whatsapp 3.svg" alt="Whatsapp">
                    <p>(11) 97766-5544</p>
                </div>
                <hr class="bg-warning">
                <p>&copy;Doeki</p>
            </section>
        </div>



        <div class="container invisivelParceiros">
            <div class="finalSobre">
                <section class="fimInvisivel">
                    <hr class="bg-warning">
                    <div class="container row" style="margin-top: 150px;">
                        <div class="txtDoekiInvisivel col container mr-1 mb-1" style="background-color: rgba(203, 236, 247, 0.5);">
                            <h3>Doeki</h3>
                            <p>Doar é muito mais que apenas entregar um item ou algum valor para outra pessoa, doar é
                                colocar um
                                pouco de você na vida de outra pessoa, é poder ser a oração encarnada daquela pessoa, é
                                poder dar
                                uma esperança de mudança, dar um futuro, pequenas atitudes para nós são grandes
                                realizações
                                para
                                quem precisa, você pode ser a diferença, doe!</p>
                        </div>
                        <div class="enderecoInvisivel col container mr-1 mb-1" style="background-color: rgba(203, 236, 247, 0.5);">
                            <h3 class="enderecoEsq2">Endereço</h3>
                            <p>Rua Araújo, 355</p>
                            <p>Parque São Felipe</p>
                            <p>CEP: 04870-90</p>
                            <p>Tel: (11) 4192-8681</p>
                        </div>
                        <div class="botaoDoeaki2 col container mr-1 mb-1" style="background-color: rgba(203, 236, 247, 0.5);">
                            <a href="doacao.php"><img class="doeaki2" src="imagens/coracao.png" alt="DoeAki" style="width: 60%;"></a>
                        </div>
                    </div>
            </div>
            <div class="container row text-center">
                <div class="facebookInvisivel container col mr-1 mb-1" style="background-color: rgba(203, 236, 247, 0.5);">
                    <img src="imagens/facebook.svg" alt="Facebook">
                    <p>Facebook.com/DoekiOficial</p>
                </div>
                <div class="instaInvisivel container col mr-1 mb-1" style="background-color: rgba(203, 236, 247, 0.5);">
                    <img src="imagens/instagram.svg" alt="Instagram">
                    <p>Instagram.com/DoekiOficial</p>
                </div>
                <div class="emailInvisivel container col mr-1 mb-1" style="background-color: rgba(203, 236, 247, 0.5);">
                    <img src="imagens/gmail.svg" alt="Gmail">
                    <p>DoekiOficial@gmail.com</p>
                </div>
                <div class="whatsappInvisivel container col mr-1 mb-1" style="background-color: rgba(203, 236, 247, 0.5);">
                    <img src="imagens/whatsapp 3.svg" alt="Whatsapp">
                    <p>(11) 97766-5544</p>
                </div>
            </div>
            <div class="container text-center">
                <hr class="bg-warning">
                <p>&copy;Doeki</p>
                </section>
            </div>
        </div>
</body>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>