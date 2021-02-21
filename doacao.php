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
    <title>Doeki | Doação</title>
    <link rel="stylesheet" href="estilos/estilo.css">
    <link rel="stylesheet" href="estilos/botao.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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


<<<<<<< Updated upstream
<?php
    if($id != ""){ ?>

    <h2 class="txtFormulario">Escolha uma opção para que nós possamos te ajudar !</h2>

    <!-- formulario -->
    <div class="container">
    <form method="POST" action="Database/admDoador.php">
=======









<!-- formulario -->
        <form method="POST" action="Database/admDoador.php">
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
                    <input type="text" class="form-control" name="tel" placeholder="Ex.(00) 00000-0000"
                    onkeypress="$(this).mask('(00) 00000-0000')" id="inputPassword3" style="background-color: lightblue;">
=======
                    <input type="text" class="form-control" name="tel" placeholder="Ex.(11)95675-4312" id="inputPassword3" style="background-color: lightblue;">
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
                    <input class="form-check-input" type="checkbox" name="item" value="CadeiradeBanho"  id="gridRadios1" value="option2">
=======
                    <input class="form-check-input" type="checkbox" value="CadeiradeBanho"  id="gridRadios1" value="option1">
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
                <input class="botaoEnviar btn btn-warning col-lg-12" name="submit" type="submit">
=======
                <input class="botaoEnviar btn btn-warning col-lg-12" name="submit" type="submit" href="/Doeki_backend/inicio.php">
>>>>>>> Stashed changes
            </div>
        </form>
    </div>

<<<<<<< Updated upstream
=======












        <!-- <form method="POST" action="Database/admDoador.php">
>>>>>>> Stashed changes

    <?php }else{ ?>
        <button class="btn btn-danger rounded"><a href="login.php" class="text-white text-decoration-none"><h1>Faça seu cadastro para você poder doar ou receber um item</h1></a></button>
    <?php } ?>


<hr>

        <div style="margin-left: -194px; margin-right: -194px">
            <?php
                require('./frontend/components/Footer.php')
            ?>
        </div>

        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
        </script>

</body>

</html>