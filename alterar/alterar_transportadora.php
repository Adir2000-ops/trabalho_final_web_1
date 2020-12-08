<?php

    if(!empty($_POST['descricao'])){
     $descricao = $_POST['descricao'];
     $codigo = $_POST['codigo'];

     $stmt = $conn->prepare("INSERT INTO desweb.transportadora (IDTransportadora,NomeCompanhia,Telefone) VALUES (:id,:d,:t)");
     $stmt->bindValue(':id', $codigo);
     $stmt->bindValue(':d', $nome);
     $stmt->bindValue(':t', $telefone;
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
         <label for="descricao">Nome Companhia</label>
         <input type="text" class="form-control" name="nome" id="nome" placeholder="Descrição">
     </div>
     <div class="form-group">
         <label for="descricao">Telefone</label>
         <input type="number" class="form-control" name="t" id="t" placeholder="Descrição">
     </div>
    
     <button type="submit" class="btn btn-info">Adicionar</button>
</form>
</body>
</html>