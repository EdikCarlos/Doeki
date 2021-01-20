<!DOCTYPE html>
<html lang="pt-BR">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!--Início Bootstrap -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   <!-- Fim Bootstrap -->

   <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@900&display=swap" rel="stylesheet">
   <title>Doeki</title>
</head>

<body>


   <div class="container row">
      <div class="container col bg-info" style="height: 635px;">
         <form class="container border border-light rounded 
               shadow  bg-white rounded " method="POST" action="loginBack.php" style="width: 380px; height:350px;margin-top: 100px;">
            <h4 class="tituloForm text-center mt-4">
               Login!
            </h4>
            <div class="form-group px-5">
               <label for="email">Endereço de email:</label>
               <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Digite seu email" required>

            </div>
            <div class="form-group px-5">
               <label for="senha">Senha:</label>
               <input type="password" class="form-control" name="senha" id="senha" placeholder="Escreva sua senha" required>
            </div>
            <div class="form-group px-5">
                  <a href="cadastro.php">Faça seu cadastro</a>
            </div>
            <div class="text-center">
               <button type="submit" class="btn btn-info">Entrar</button>
            </div>
      </div>
      </form>
      <div class="container-fluid col-3" style="margin-left: 30px;">
         <div class="container text-center" style="margin:40px auto 100px 50px;">
            <button class="btn btn-info btn-block" style="width:300px;height:60px;"> <a href="sobre.php" class="text-white" style="text-decoration: none;">Venha nos conhecer!</a></button>
         </div>
         <img class="imagemInicio  " src="./imagens/logoInicio.png" alt="Imagem bonecos" style="width: 400px ;">
      </div>
   </div>
</body>


</html>