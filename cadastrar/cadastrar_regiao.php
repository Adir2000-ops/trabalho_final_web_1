<?php
  
    if(!empty($_POST['descricao'])){
     $descricao = $_POST['descricao'];
     $codigo = $_POST['codigo'];

     $stmt = $conn->prepare("INSERT INTO desweb.regiao (IDRegiao,DescricaoRegiao) VALUES (:id,:d)");
     $stmt->bindValue(':id', $codigo);
     $stmt->bindValue(':d', $descricao);
     $stmt->execute();
 ?>
 <script>
  window.location.href = "./regiao.php";
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
         <label for="descricao">Descrição</label>
         <input type="text" class="form-control" name="descricao" id="descricao" placeholder="Descrição">
     </div>
    
     <button type="submit" class="btn btn-info">Adicionar</button>
</form>
</body>
</html>