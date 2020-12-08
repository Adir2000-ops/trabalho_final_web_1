<? php
 require_once  "conexao.php" ;
 
if ( vazio ( $ _SESSION [ 'login' ])) {
?>


<!doctype html>
<html lang="pt-br">
 <head>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="cliente.php">Clientes</a>

    <a class="navbar-brand" href="regiao.php">Regiões</a>

    <a class="navbar-brand" href="transportadora.php">Transportadora</a>

    <a class="navbar-brand" href="funcionario.php">Funcionario</a>

    <a class="navbar-brand" href="sair.php">Sair</a>

    </a>
  </div>
</nav> 

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>