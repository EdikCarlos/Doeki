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
    <title>Doeki | Parceiros</title>
    <link rel="stylesheet" href="./estilos/estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
    
    <div class="informativo container-fluid">
        <h2> Informativo </h2>
        <p> As infomações aqui contidas, são meramente ilustrativas e possuem apenas o intuito educacional,
            não podendo em hipotese alguma serem interpretadas como verdadeiras ou com intuito de denotar a existencia
            de parcerias reais com as empresas
            citadas, não podendo desse modo serem aplicadas as sanções previstas nos art: 30 e 36 a 38 do cdc. </p>
    </div>
    <div class="titParc container-fluid">
        <h1>Parceiros</h1>
    </div>
    <div class="container">
        <div class="blocoPc1 row">
            <div class="recode text-center container mr-1 col"><img class="imgP" src="./imagens/logoRecode.png" alt="Recode">
                <p>A Recode é uma organização social que promove o empoderamento digital.
                    Por meio da criação e disseminação de metodologias de formação empreendedora e do uso de ferramentas
                    digitais,
                    busca ampliar o impacto de facilitadores em comunidades, escolas e bibliotecas e estimular o uso
                    ético,
                    consciente e cidadão da tecnologia.
                    Assim, empodera indivíduos para reprogramar realidades. Com 24 anos de atuação,
                    a Recode está presente em 7 países com 689 centros de empoderamento digital e já alcançou mais de
                    1,7
                    milhão de pessoas.</p>
            </div>
            <div class="aacd container mr-1 col"> <img class="imgP" src="./imagens/aacd.png" alt="Aacd">
                <p>Hoje, a AACD é referência em sua área de atuação, resultado de uma trajetória marcada
                    pelo compromisso com a excelência e pela dedicação à causa das pessoas com deficiência física.
                    “Não se trata de fazer caridade ou filantropia,
                    é preciso encarar a causa da reabilitação
                    como problema médico-social prioritário”
                </p>
            </div>
            <div class="lacre container col"><img class="imgP" src="./imagens/logoLacre.jpg" alt="Lacre">
                <p>Em 2013, aos nove anos de idade, Julia Macedo,
                    começou a juntar lacres de latinhas de alumínio para comprar e doar uma cadeira de rodas.
                    Foi assim que surgiu o Lacre do Bem,
                    um projeto que hoje é conduzido com o apoio de voluntários,
                    escolas e empresas parceiras por todo o Brasil.
                    "O todo é maior que a soma das partes."
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="blocoPc2 row">
            <div class="senac container mr-1 col "><img class="imgP" src="./imagens/logoSenac.jpg" alt="senac">
                <p>Desde 1946, o Serviço Nacional de Aprendizagem Comercial – Senac é o principal agente de educação
                    profissional voltado para o Comércio de Bens, Serviços e Turismo do País.

                    Hoje, está presente em mais de 1.800 municípios, de Norte a Sul do Brasil, onde mantém
                    infraestrutura de
                    ponta composta por mais de 600 unidades escolares, empresas pedagógicas e unidades móveis.
                    Seu portfólio contempla cursos presenciais e a distância, em diversas áreas do conhecimento, que vão
                    da
                    Formação Inicial e Continuada à Pós-graduação
                    e permitem ao aluno planejar sua carreira profissional em uma perspectiva de educação continuada.
                </p>
            </div>
            <div class="cren container mr-1 col"><img class="imgP" src="./imagens/logoCren.png" alt="Cren">
                <p>O CREN é um centro de referência internacional na área de educação nutricional e no tratamento de
                    distúrbios nutricionais primários (subnutrição e obesidade).
                    É um lugar que comprova quanto bem um alguém é capaz quando suas pretensões não são excessivas e
                    irreais, quando o objetivo não é o cumprimento de um plano delimitado,
                    e sim favorecer a pessoa e ajudá-la em suas necessidades.</p>
            </div>
            <div class="itau container col"> <img class="imgP" src="./imagens/logoItau.jpg" alt="Itaú" >
                <p>O Itaú Unibanco é a maior banco privado do Brasil, a maior instituição financeira da América Latina
                    e uma das maiores do mundo.
                    "Acreditamos que uma instituição financeira deve ajudar a realizar sonhos e investir em grandes
                    ideias.
                    Um banco incentiva pessoas a crescer e empresas a progredir. É assim que guiamos nossos negócios.
                    Nossa responsabilidade com o desenvolvimento do país está na essência de nossa atividade."
                </p>
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