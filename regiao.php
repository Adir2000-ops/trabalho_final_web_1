<?php
 require_once "conexao.php";
  
    $stmt = $conn->prepare("SELECT * FROM regiao");
    $stmt->execute();
    $resultado = $stmt->FetchAll();

       if(!empty($_GET['acao'])){
        $id = $_GET['id'];
        $stmt = $conn->prepare("DELETE FROM regiao WHERE IDRegiao = :id");
        $stmt->bindValue(':id', $id);
        $stmt->execute();
     ?>
     <script>
      window.location.href = "regiao.php";
     </script>
    <?php
    }
?>
 <html>
 <head>
 <link  rel="stylesheet" href="../bootstrap-4.5.3-dist_/css/bootstrap.min.css">
</head>
<body>
   <a href="cadastrar\cadastrar_regiao.php" class="btn btn-info">Adicionar</a>
   <table border="2" class="table table-striped">
       <tr>
        <td>Id</td>
        <td>Região</td>
        <td>Ações</td>
       </tr>
       <?php
        if(count($resultado)){
          foreach($resultado as $row){
        ?>
          <tr>
            <td><?=$row['IDRegiao']?></td>
            <td><?=$row['DescricaoRegiao']?></td>
            <td>
                <a href="alterar\alterar_regiao.php?&id=<?=$row['IDRegiao']?>">Alterar</a>
                <a href="?acao=deletar&id=<?=$row['IDRegiao']?>">Excluir</a>
            </td>
          </tr>  
        <?php
          }
        }else{
            echo"<tr><td colspan=-\"3\">Banco de Dados Vazio</td></tr>";
        }
       ?>
   </table>
   </body>
</html>