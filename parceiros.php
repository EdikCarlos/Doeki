<?php
session_start();

$id = $_SESSION["id_usuario"];
if($id == ""){
    $nome= "Convidado";
}else{
    $nome= $_SESSION['nome'];
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doeki | Parceiros</title>
    <link rel="stylesheet" href="./estilos/estilo.css">
    <link rel="stylesheet" href="estilos/botao.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-light bg-info d-flex justify-content-between fixed-top">
            <div class="navIntro d-flex">
                <h5 class="bg-warning p-2 rounded">Bem-Vindo (a) <strong><?php echo $nome ?></strong></h5>
            </div>
            <div class="navIntro mb-5">
                    <strong>
                        <a href="doacao.php" class="btn btn-white btn-animate btn-lg">DOAR</a>
                    </strong>
            </div>
            <div  class="navIntro d-flex"> 
            <?php
                if($id == ""){ ?>
                        <a class="text-dark" href="login.php"><h6 class="bg-warning mr-1 px-5 py-2 rounded"><strong>Login</strong></h6></a>
            <?php
                }else{
            ?>
                <a class="text-dark" href="Database/sair.php">
                    <h6 class="bg-warning mr-1 px-5 py-2 rounded"><strong>Sair</strong></h6>
                </a>
            <?php }?>
        </nav>
        
        <div class="ajuste">
        <?php
        require('./frontend/components/Header.php');
        ?>

    <div class="titParc container-fluid">
        <h1>Parceiros</h1>
    </div>
    <div class="container">
        <div class="blocoPc1">
            <div class="recode text-center container mr-1 col"><a href="https://fbrortopedia.com.br/loja/" target="_blank"><img class="imgP" src="imagens/fbr.jpg" alt="FBR"></a>
                <p>Criada em 5 de Maio de 2017, por Fabio Batista Rodrigues, especialista no seguimento ortopédico com uma sólida experiência de mais de 10 anos.
                    O histórico de seu fundador é marcado pelas inúmeras aulas, exposições e palestras ministradas nacionalmente e internacionalmente.
                    A filosofia está associada a maneira humanizada de nosso atendimento, por meio de uma assistência cuidadosa e focada no bem-estar do indivíduo. Reconhecendo assim, a importância e valorizando a vida.
                    Nós da FBR Ortopedia, somos reconhecidos pela preocupação com nossos clientes, e o oferecimento de tais soluções que minimizam as dificuldades por seu público-alvo. Procurando entender para atender, e com maestria.
                    Sendo assim, surge a FBR Ortopedia online, uma ferramenta com um extenso catálogo dos melhores produtos certificados em sua categoria. No portal online é possível fazer seus pedidos, e acompanhar nossa agenda de eventos, sem deixar de lado todo, nossa prestimosa assistência.</p>
                    <p style="color: red;">*** Caso você durante uma compra tanto na loja fisica como na online, citar o nome da Doeki, irá ganhar automaticamente 20% de desconto!!! ***</p>
            </div>

        </div>
    </div>
    <?php
            require('./frontend/components/Footer.php')
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>



</html>