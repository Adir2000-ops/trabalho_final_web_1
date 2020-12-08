<?php
  require_once "conexao.php";
    if(!empty($_POST['nome'])){
     $nome = $_POST['nome'];
     $codigo = $_POST['codigo'];
     $telefone = $_POST['telefone'];

     $stmt = $conn->prepare("INSERT INTO desweb.transportadoras (IDTransportadora,NomeConpanhia,Telefone) VALUES (:id,:nome,:tel)");
     $stmt->bindValue(':id', $codigo);
     $stmt->bindValue(':nome', $nome;
     $stmt->bindValue(':tel', $telefone);
     $stmt->execute();
 ?>
 <script>
  window.location.href = "./transportadora.php";
 </script>
<?php
}

?>
<html>
 <head>
 <link  rel="stylesheet" href="../bootstrap-4.5.3-dist_/css/bootstrap.min.css">
</head>
<body>
<form method="post">
     <div class="form-group">
         <label for="codigo">Código</label>
         <input type="number" class="form-control" name="codigo" id="codigo" placeholder="Código">
     </div>
     <div class="form-group">
         <label for="descricao">Nome</label>
         <input type="text" class="form-control" name="name" id="nome" placeholder="Nome">
     </div>
     <div class="form-group">
         <label for="descricao">Telefone</label>
         <input type="number" class="form-control" name="telefone" id="telefone" placeholder="Telefone">
     </div>
    
     <button type="submit" class="btn btn-info">Adicionar</button>
</form>
</body>
</html>