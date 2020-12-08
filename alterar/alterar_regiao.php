<?php

  if(!empty($_GET['id'])){
     $id = $_GET['id'];   
    
     $stmt = $conn->prepare("SELECT * FROM regiao WHERE IDRegiao = :id");
     $stmt->bindValue(':id', $id);
     $stmt->execute();
     $regiao = $stmt->fetch();   
   }
   if(!empty($_POST['descricao'])){
     $descricao = $_POST['descricao'];
     $codigo = $_POST['codigo'];

     $stmt = $conn->prepare("UPDATE desweb.regiao SET IDRegiao = :id , DescricaoRegiao = :d WHERE IDRegiao = :codigo");
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
 <!doctype html>
 <html lang="pt-br">
 <link  rel="stylesheet" href="../bootstrap-4.5.3-dist_/css/bootstrap.min.css">
</head>
<body>
<form method="post">
     <div class="form-group">
         <label for="codigo">Código</label>
         <input type="number" class="form-control" name="codigo" id="codigo" placeholder="Código" value="<?= $regiao['IDRegiao'] ?>">
     </div>
     <div class="form-group">
         <label for="descricao">Descrição</label>
         <input type="text" class="form-control" name="descricao" id="descricao" placeholder="Descrição" value="<?= $regiao['DescricaoRegiao'] ?>">
     </div>
    
     <button type="submit" class="btn btn-info">Alterar</button>
</form>
</body>
</html>