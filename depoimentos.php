<?php
// $link = mysqli_connect("localhost", "root", "", "cadastro");
$link = mysqli_connect("sql202.epizy.com", "epiz_27133760", "8XoIjZmXQh", "epiz_27133760_cadastro");
if (!$link) {
    echo "<p> voce ja pode mexer MySQL</p>";
}

$consulta = "SELECT * FROM testemunhos";
$datos = $link->query($consulta);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./estilos/estilo.css">
    <title>Depoimentos</title>
</head>

<body>
    <div class="container-fluid">
        <div class="menu2">
            <nav class="navbar navbar-expand-md navbar-dark mt-1 mb-4" style="background-color: rgba(255, 236, 234, 0.6); width: 100%;">
                <button class="navbar-toggler bg-primary" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <a href="inicio.php" class="mx-5 navbar-brand"><img class="logoDoacao" src="imagens/logoSimFundo.png" alt=""></a>
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

    <div class="row">
            <div class="testemunho container col">
                <img src="./imagens/AmigoCadeira.png" alt="">
                <h4>Depoimento: Juan Garcia</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, deleniti facere amet ut sunt corporis beatae similique explicabo, odit hic, et magni rem. Necessitatibus deleniti explicabo fuga, voluptates neque odit?</p>
            </div>
            <div class="testemunho container col">
                <img src="./imagens/amigo1.png" alt="">
                <h4>Depoimento: Pedro José</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, deleniti facere amet ut sunt corporis beatae similique explicabo, odit hic, et magni rem. Necessitatibus deleniti explicabo fuga, voluptates neque odit?</p>
            </div>
            <div class="testemunho container col">
                <img src="./imagens/amiga2.png" alt="">
                <h4>Depoimento: Mariana Pereira</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, deleniti facere amet ut sunt corporis beatae similique explicabo, odit hic, et magni rem. Necessitatibus deleniti explicabo fuga, voluptates neque odit?</p>
            </div>
    </div>
    <div class="row">
            <div class="testemunho container col">
                <img src="./imagens/amigo3.png" alt="">
                <h4>Depoimento: Márcio Silva</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, deleniti facere amet ut sunt corporis beatae similique explicabo, odit hic, et magni rem. Necessitatibus deleniti explicabo fuga, voluptates neque odit?</p>
            </div>
            <div class="testemunho container col">
                <img src="./imagens/amiga4.png" alt="">
                <h4>Depoimento: Maria José</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, deleniti facere amet ut sunt corporis beatae similique explicabo, odit hic, et magni rem. Necessitatibus deleniti explicabo fuga, voluptates neque odit?</p>
            </div>
            <div class="testemunho container col">
                <img src="./imagens/amigo5.png" alt="">
                <h4>Depoimento: Sebastião Ferreira</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, deleniti facere amet ut sunt corporis beatae similique explicabo, odit hic, et magni rem. Necessitatibus deleniti explicabo fuga, voluptates neque odit?</p>
            </div>
    </div>

    <div class="container text-primary my-4">
        <h4 class="text-center">DEIXE SEU DEPOIMENTO :</h4>
    </div>
    <!-- <form action="./Database/testemunhos.php" method="post"> Chamndo na pasta do database-->
    <form action="Database/testemunhos.php" method="post" class="container text-primary ">

        <div class="form-group">
            <label for="Nome">Nome:</label>
            <input type="text" class="form-control" name="nome" id="exampleFormControlInput1" placeholder="Digite seu nome">
        </div>
        <div class="form-group">
            <label for="Email">Endereço de email</label>
            <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Mensagem</label>
            <textarea class="form-control" name="descricao" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <input type="submit">
    </form>

    <div class="container text-center">
        <h1>Comentarios</h1>
    </div>
    <div class="container">
    <?php
    $con = 1;
    while ($fila = mysqli_fetch_array($datos)) {
    ?>
        <div class="container">
            <hr class="container bg-info">
            <hr class="container bg-info">
            <div>
                <h6>Usuario : </h6>
                <p><?php echo $fila["nome"]; ?></p>
            </div>
            <div>
                <h6>Comentario : </h6>
                <p><?php echo $fila["descricao"]; ?></p>
            </div>
        </div>

    <?php $con = $con + 1;
    } ?>
    <div class="container">
        <hr class="container bg-info">
        <hr class="container bg-info">
    </div>
    </div>




    <div class="fim col container-fluid" style="width: 100%; margin-left:-150px; margin-top:-1900px;">
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




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>



</html>