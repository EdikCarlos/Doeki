<?php
session_start();
include_once("./Database/conexao.php");
if(!isset($_SESSION['id_usuario'])){
    header('Location: index.php');
}else{
    $depos = $conn->query("SELECT * FROM comentarios JOIN usuarios WHERE fk_usuario = id_usuario ORDER BY id_comentario DESC");
} 

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
    <link rel="stylesheet" href="./estilos/estilo.css">
    <title>Depoimentos</title>
</head>

<body>

    <nav class="navbar navbar-light bg-info">
        <div class="navIntro d-flex ">
            <h5 class="bg-warning p-2 rounded">Bem-Vindo (a) <strong><?php echo $_SESSION['nome']?></strong></h5>   
        </div>
        <div  class="navIntro d-flex ">             
            <a class="text-dark" href="sair.php"><h6 class="bg-warning ml-5 p-2 rounded"><strong>Sair</strong></h6></a>
        </div>
    </nav>
    
    <?php
        require('./frontend/components/Header.php');
    ?>

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


    <main class="container">

        <form class="container text-primary " action="comentarios.php" method="post">
            <input class="col-9 form-control pl-3" type="text" name="post" placeholder="No que você está pensando, <?php echo $_SESSION['nome'] ?>?">
            <button class="col-3 btn p-2 btn-danger m-2" type="submit">Publicar</button>
        </form>



        <div class="container text-center">
            <h1>Comentarios</h1>
        </div>
        <div class="container">

        <?php
        foreach ($depos as $depo) {
            ?>
            <div class="container">
                <hr class="container bg-info">
                <hr class="container bg-info">
                <div>
                    <h6>Usuario : </h6>
                    <h5 class="ml-3 mb-0" ><?php echo $depo["nome"]; ?></h5>
                </div>
                <div>
                    <h6>Comentario : </h6>
                    <p><?php echo $depo["descricao"]; ?></p>
                </div>


                <div class="row">
                    <form action="atualizar.php" method="post">
                        <input class="col-xm-5" type="text" name="descricao"> <button class=" col-xm-5 btn btn-warning" type="submit">Alterar Comentário</button>
                    </form>
                    
                    <button class="btn btn-danger col-xm-2 ml-3" onclick="confirmar()">Deletar Comentario</button>
                </div>

            </div>
        <?php } ?>

        <div class="container">
            <hr class="container bg-info">
            <hr class="container bg-info">
        </div>
    </main>
    
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

    <script>
        function confirmar() {
            let confirmacao = confirm("Você realmente deseja deletar o comentário?");

            if(confirmacao == true){
                location.href = "removeComentario.php?id_usuario=" + <?php echo $_SESSION["id_usuario"] ?>
            }
        }
    </script
</body>



</html>