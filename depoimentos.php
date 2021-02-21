<?php
session_start();
include_once("./Database/conexao.php");

$id = $_SESSION["id_usuario"];
if($id == ""){
    $nome= "Convidado";
}else{
    $nome= $_SESSION['nome'];
}


$depos = $conn->query("SELECT * FROM comentarios JOIN usuarios WHERE fk_usuario = id_usuario ORDER BY id_comentario DESC");


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./estilos/estilo.css">
    <link rel="stylesheet" href="estilos/botao.css">
    <title>Depoimentos</title>
</head>

<body>

        <nav class="navbar navbar-light bg-info d-flex justify-content-between fixed-top">
            <div class="navIntro d-flex">
                <h5 class="bg-warning p-2 rounded">Bem-Vindo (a) <strong><?php echo $nome?></strong></h5>
            </div>
            <div class="navIntro mb-5 ">
                    <strong>
                        <a href="doacao.php" class="btn btn-white btn-animate btn-lg">DOAR</a>
                    </strong>
            </div>
            <div  class="navIntro d-flex"> 
            <?php
                if($id == ""){ ?>
                        <a class="text-dark" href="login.php"><h6 class="bg-warning mr-1 px-5 py-2 rounded"><strong>Login</strong></h6></a>
            <?php
                }
            ?>
                <a class="text-dark" href="Database/sair.php"><h6 class="bg-warning mr-1 px-5 py-2 rounded"><strong>Sair</strong></h6></a>
            </div>
        </nav>

    
    <?php
        require('./frontend/components/Header.php');
    ?>
    <div class="container">
        <div class="row">
            <div class="testemunho container col">
                <img src="./imagens/AmigoCadeira.png" alt="">
                <h4> Juan Garcia</h4>
                <p>Um serviço de primeira! O sistema é simplesmente maravilhoso: intuitivo, bonito e moderno. Superou todas as minhas expectativas.</p>
            </div>
            <div class="testemunho container col">
                <img src="./imagens/amigo1.png" alt="">
                <h4>Pedro José</h4>
                <p>A Doeki tem respondido a todas as minhas solicitações e questões com profissionalismo e eficácia notável. Sente-se que para além da tecnologia há um relacionamento humano fundamental na partilha de conhecimentos e na vida.</p>
            </div>
            <div class="testemunho container col">
                <img src="./imagens/amiga2.png" alt="">
                <h4> Mariana Pereira</h4>
                <p>Estou muito satisfeita com a aquisição desse grande benefício pra minha filha.Quando conheci esse site pensei logo... Vou fazer meu cadastro para minha filha ter mais acessibilidade.</p>
            </div>
        </div>
        <div class="row">
            <div class="testemunho container col">
                <img src="./imagens/amigo3.png" alt="">
                <h4> Márcio Silva</h4>
                <p>O sistema é extremamente fácil, além do resultado final do site ter sido ótimo, a Doeki nos trouxe uma solução de baixo custo, outro ponto positivo é o suporte que sempre atende muitíssimo bem.</p>
            </div>
            <div class="testemunho container col">
                <img src="./imagens/amiga4.png" alt="">
                <h4> Maria José</h4>
                <p>Plataforma flexível que atende as necessidades do cliente. Todas as demandas solicitadas foram atendidas em tempo. Suporte técnico excelente, sempre pronto a atender. Parabéns pela serviço oferecido e vida longa e próspera para a família Doeki</p>
            </div>
            <div class="testemunho container col">
                <img src="./imagens/amigo5.png" alt="">
                <h4> Sebastião Ferreira</h4>
                <p>Agradeço pela oportunidade e as portas de minha casa estarão sempre abertas para o que for necessário para o projeto da Doeki</p>
            </div>
        </div>

    </div>

    <div class="container text-primary my-4">
        <h4 class="text-center">DEIXE SEU DEPOIMENTO :</h4>
    </div>


    <main class="container">

        <div class=container>
            <form class="container text-primary row" action="Database/comentarios.php" method="post">
                    <input class="col-9 form-control pl-3" type="text" name="post" placeholder="No que você está pensando, <?php echo $nome ?>?">
                    <?php
                        if($id != ""){ ?>
                            <button class="col-2 btn p-2 btn-success ml-2" type="submit">Publicar</button>
                        <?php } else { ?>
                            <button class="col-2 btn p-2 btn-warning ml-2">
                            <a class="text-decoration-none text-dark" href="cadastro.php"><strong>Faça seu cadastro</strong></a>
                            </button>
                        <?php } ?>

                </form>
        </div>

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

                <!-- Botoes de Alteracao e Delete comentarios -->

                    <?php 
                        if($id != ""){ ?>
                            <div class="row">
                            <form action="Database/atualizar.php" method="post">
                                <input class="col-xm-5" type="text" name="descricao"> <button class=" col-xm-5 btn btn-warning" type="submit">Alterar Comentário</button>
                            </form>
                            
                            <button class="btn btn-danger col-xm-2 ml-3" onclick="confirmar()">Deletar Comentario</button>
                        </div>
                    <?php }?>
                

                <!-- Fin -->

            </div>
        <?php } ?>

        <div class="container">
            <hr class="container bg-info">
            <hr class="container bg-info">
        </div>
    </main>
    
    </div>
     

     
    <?php
            require('./frontend/components/Footer.php')
    ?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script>
        function confirmar() {
            let confirmacao = confirm("Você realmente deseja deletar o comentário?");

            if(confirmacao == true){
                location.href = "Database/removeComentario.php?id_usuario=" + <?php echo $_SESSION["id_usuario"] ?>
            }
        }
    </script>
</body>



</html>