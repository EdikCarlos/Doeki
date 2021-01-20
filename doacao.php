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
    <title>Doeki | Doação</title>
    <link rel="stylesheet" href="estilos/estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="menu2">
            <nav class="navbar navbar-expand-md navbar-dark mt-1 mb-4" style="background-color: rgba(255, 236, 234, 0.6); width: 100%;">
                <button class="navbar-toggler bg-primary" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <a href="index.php" class="mx-5 navbar-brand"><img class="logoDoacao" src="imagens/logoSimFundo.png" alt="" style="max-width: 200px;"></a>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="text-dark nav-link" href="index.php"><span class="drop">H</span>ome</a>
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


    <div class="passos row container-fluid">
        <div class="imgApertar container col text-center">
            <img src="imagens/cliqueCoracao.svg" alt="Clicar-no-Coração" width="150px">
            <p>1º Clique se tiver algo que queira doar</p>
        </div>
        <div class="imgPonteiro container col text-center">
            <img src="imagens/ponteiro.svg" alt="Ponteiro" width="150px">
            <p>2º Preencha o formulário no Doeki</p>
        </div>
        <div class="imgUniao container col text-center">
            <img src="imagens/Maos.svg" alt="Mão-Ajudando" width="150px">
            <p>3º Fazemos a ponte para quem realmente precisa</p>
        </div>
        <div class="imgMaoCoracao container col text-center">
            <img src="imagens/coraMao.svg" alt="Mão-Coração" width="150px">
            <p>4º Onde a sua doação</p>
        </div>
        <div class="imgCadeiranteFeliz container col text-center">
            <img src="imagens/caderinha.svg" alt="Cadeirante-Feliz" width="150px">
            <p>5º Transforma a vida de alguém.</p>
        </div>
    </div>
    <hr class="divisoriaDoacoes bg-warning">

    <div class="formulario container">

        <h2 class="txtFormulario">Escolha uma opção para que nós possamos te ajudar ! =)</h2>










<!-- formulario -->
        <form method="POST" action="Database/admDoador.php">
        <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Nome:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $_SESSION['nome']?>" placeholder="<?php echo $_SESSION['nome']?>" id="inputPassword3" style="background-color: lightblue;">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" value="<?php echo $_SESSION['email']?>" placeholder="<?php echo $_SESSION['email']?>" id="inputPassword3" style="background-color: lightblue;">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Data de Nascimento:</label>
                <div class="col-sm-3">
                    <input type="date" class="form-control" name="data_nasc" id="inputPassword3" style="background-color: lightblue;">
                </div>
                <label for="inputPassword3" class="col-sm-2 col-form-label">Telefone:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="tel" placeholder="Ex.(11)95675-4312" id="inputPassword3" style="background-color: lightblue;">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Endereço:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="endereco"  placeholder="Endereço" id="inputPassword3" style="background-color: lightblue;">
                </div>
            </div>
            <h5>Qual é o item que você quer doar ou receber? <br> (Se for um Parceiro não marque nada na caixa).</h5>
            <div class="row my-4">
                <div class=" col-sm-3 form-check">
                    <input class="form-check-input" type="checkbox" value="CadeiradeBanho"  id="gridRadios1" value="option1">
                    <label class="form-check-label" for="gridRadios1">
                        Cadeira de Banho
                    </label>
                </div>
                <div class=" col-sm-3 form-check">
                    <input class="form-check-input" type="checkbox" name="item" value="CadeiradeRodas" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">
                        Cadeira de Rodas
                    </label>
                </div>
                <div class=" col-sm-3 form-check">
                    <input class="form-check-input" type="checkbox" name="item" value="Muleta" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">
                        Muleta
                    </label>
                </div>
                <div class=" col-sm-3 form-check">
                    <input class="form-check-input" type="checkbox" name="item" value="Bengala" id="gridCheck1" value="option2">
                    <label class="form-check-label" for="gridRadios2">
                        Bengala
                    </label>
                </div>
            </div>
            <h5 class="mt-5 mb-3">Escolha a opção que te representa!</h5>
            <div class="row mb-3">
                <div class="col-sm-4 ">
                    <div class="form-check">
                        <input class="form-check-input"  type="radio" name="tipo" value="doador" id="gridCheck1" checked>
                        <label class="form-check-label" for="gridCheck1">
                            Doador
                        </label>
                    </div>
                </div>
                <div class="col-sm-4 ">
                    <div class="form-check">
                        <input class="form-check-input"  type="radio" name="tipo" value="beneficiario" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1">
                            Beneficiário
                        </label>
                    </div>
                </div>
                <div class="col-sm-4 ">
                    <div class="form-check">
                        <input class="form-check-input" name="tipo" type="radio" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1">
                            Parceiro
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <input class="botaoEnviar btn btn-warning col-lg-12" name="submit" type="submit" href="/Doeki_backend/inicio.php">
            </div>
        </form>
        <div class="finalDoacao">
            <section class="fimDoacao">
                <img src="estilos/imgFooter.svg" alt="BackGround-OndaAzul">
                <div class="txtDoeki">
                    <h3>Doeki</h3>
                    <p>Doar é muito mais que apenas entregar um item ou algum valor para outra pessoa, doar é colocar um
                        pouco de você na vida de outra pessoa, é poder ser a oração encarnada daquela pessoa, é poder dar
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
                <div class="email mb-3">
                    <img src="imagens/gmail.svg" alt="Gmail">
                    <p>DoekiOficial@gmail.com</p>
                </div>
                <div class="whatsapp mb-3">
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
                        <div class="botaoDoeaki2 col container" style=" background-color: rgba(203, 236, 247, 0.5); ">
                            <a href="doacao.php"><img class="doeaki2" src="imagens/coracao.png" alt="DoeAki" style="width: 60%;"></a>
                        </div>
                    </div>
            </div>
            <div class="container row text-center mt-1">
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


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>