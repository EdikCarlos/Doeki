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
    <title>Doeki | Sobre</title>
    <link rel="stylesheet" href="estilos/estilo.css">
    <link rel="stylesheet" href="estilos/botao.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
        <nav class="navbar navbar-light bg-info d-flex justify-content-between fixed-top">
            <div class="navIntro d-flex">
                <h5 class="bg-warning p-2 rounded">Bem-Vindo (a) <strong><?php echo $_SESSION['nome']?></strong></h5>   
            </div>
            <div class="navIntro mb-5 ">
                    <strong>
                        <a href="#" class="btn btn-white btn-animate btn-lg">DOAR</a>
                    </strong>
            </div>
            <div  class="navIntro d-flex">             
                <a class="text-dark" href="Database/sair.php"><h6 class="bg-warning ml-5 p-2 rounded"><strong>Sair</strong></h6></a>
            </div>
        </nav>

    <?php
      require('./frontend/components/Header.php')
    ?>

    <section class="quemSomos container" style="min-width: 200px;">
        <h2> Quem Somos</h2>
        <p class="textoQuemSomos container">
            Desenvolvemos esse projeto através de um programa realizado pela Recode uma organização social que
            promove o
            empoderamento digital. <br><br>
            Nosso projeto tem como objetivo resolver uma necessidade social através da tecnologia. No Brasil de
            acordo
            com o Censo de 2010 através do IBGE,
            quase<b> 45 milhões de Brasileiros são deficientes, </b>cerca de 24% da população. <br><br>
            Pensando nisso, elaboramos um website, visando à necessidade social voltada para as pessoas com
            deficiência
            física,
            nosso projeto tem como solução intermediar doações de aparelhos (cadeiras de rodas, cadeiras de banho,
            muletas, bengalas,
            ou quaisquer outros tipos de acessórios para deficientes) sendo novos ou usados, porém em bom estado.
        </p>
        Link: <a href="https://www2.camara.leg.br/atividade-legislativa/comissoes/comissoes-permanentes/cpd/arquivos/cinthia-ministerio-da-saude" target="_blank">https://www2.camara.leg.br/atividade-legislativa/comissoes/comissoes-permanentes/cpd/arquivos/cinthia-ministerio-da-saude</a>

    </section>
    <hr class="divisoriaSobre bg-warning">
    <h2>Planejamento Estratégico</h2>
    <section class="row text-center planEstrat" >

            <h3 class="h3Sobre"> Missão</h3>
            <div class=" col-sm-4 container missao">
                <p class="textoMissao">Levar ao mundo um espirito solidário e parceiro,
                    promovendo a equidade e a
                    empatia, além do respeito as diferenças.</p>

            </div>

            <h3 class="h3Sobre">Visão</h3>
            <div class="col-sm-4 container visao">
                <p class="textoVisao"> Criar uma ponte entre quem possui equipamentos e
                    quem necessita , de forma
                    simples, direta e segura.</p>
            </div>
        
            <h3 class="h3Sobre">Propósito</h3>
            <div class=" col-sm-4 container proposito">
                <p class="textoProposito">Impulsionar o deficiente para uma qualidade de
                    vida melhor.</p>

            </div>

            <h3 class="h3Sobre"> Valores</h3>
            <div class="col-sm-4 container valores">
                <p class="textoValores">Comprometimento, cooperação, empatia, ética,
                    segurança, confiabilidade e
                    mentalidade de transformação social.</p>
            </div>

    </section>
    <hr class="divisoriaSobre bg-warning">
    <h2>A Doeki atende principalmente a ODS:</h2>
    <section class="ods container" style="text-align: center;">
        <div>
            <!-- <a href="https://brasil.un.org/pt-br/sdgs/1" target="_blank"><img class=" col mt-1 mr-1 " src="./imagens/ODS1.png" alt="ODS1" style="width: 250px;"></a> -->
            <a href="https://brasil.un.org/pt-br/sdgs/3" target="_blank"><img class="ods3" src="./imagens/ODS3.png" alt="ODS3" style="width: 320px;"></a>
            <!-- <a href="https://brasil.un.org/pt-br/sdgs/10" target="_blank"><img class=" col mt-1 mr-1" src="./imagens/ODS10.png" alt="ODS10" style="width: 250px;"></a> -->
            <!-- <a href="https://brasil.un.org/pt-br/sdgs/11" target="_blank"><img class="col mt-1 mr-1" src="./imagens/ODS11.png" alt="ODS11" style="width: 250px;"></a> -->
            <!-- <a href="https://brasil.un.org/pt-br/sdgs/12" target="_blank"><img class="col mt-1 mr-1" src="./imagens/ODS12.png" alt="ODS12" style="width: 250px;"></a> -->
        </div>
        <p class="saberMais container"><strong>Para saber mais sobre essa ODS, clique na imagem acima.</strong></p>
    </section>
        <hr class="bg-warning">
        <div class="container">
            <h2>Objetivos de desenvolvimento sustentável</h2>
            <p class="textoODS">Adotada durante a Cúpula das Nações Unidas sobre o Desenvolvimento Sustentável,
                realizada pela ONU,
                a Agenda de Objetivos de Desenvolvimento Sustentável (ODS)
                é composta por 17 objetivos e 169 metas a serem atingidos
                pelos países-membros até 2030.
                A Agenda foi construída levando em consideração as diferentes realidades,
                capacidades e níveis de desenvolvimento das nações.<strong>Para conhecer todas as ODS clique na imagem
                    abaixo!</strong>
            </p>
        </div>
        <div class="container text-center">
            <a href="https://brasil.un.org/pt-br/sdgs" target="_blank"><img class="container mt-4" style="max-width: 900px;" src="imagens/odsCompleto.png" alt="Tabela-ODS"></a>
        </div>
     
        <?php
            require('./frontend/components/Footer.php')
        ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>


</html>