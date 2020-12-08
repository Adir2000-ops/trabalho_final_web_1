<?php
 require_once  "conexao.php" ;

 $stmt = $conn->prepare("SELECT * FROM clientes");
 $stmt->execute();
 $resultado = $stmt->FetchAll();

 if(!empty($_GET['acao'])){
     $id = $_GET['id'];
     $stmt = $conn->prepare("DELETE FROM clientes WHERE IDCliente = :id");
     $stmt->bindValue(':id', $id);
     $stmt->execute();
 }
     ?>

 <!doctype html>
 <html lang="pt-br">
  <head>
   <link   rel = " stylesheet " href = " ../bootstrap-4.5.3-dist_ / css / bootstrap.min.css ">
  </head>
<body>
   <a href = " ./cadastrar_cliente.php " class =" btn btn-info "> Adicionar </a>
   <table border ="2" class = "table table-stripes">
       <tr>
        <td> Id </td>
        <td> NomeCompanhia </td>
        <td> NomeContato </td>
        <td> Endereçõ </td>
        <td> Cidade </td>
        <td> Ações </td>
       </tr >
       <?php
        if ( count ( $resultado )) {
          foreach ( $resultado  as  $row ) {
        ?>
          <tr>
            <td> <?=$row [ 'IDCliente' ] ?> </td>
            <td> <?=$row [ 'NomeCompanhia' ] ?> </td>
            <td> <?=$row [ 'NomeContato' ] ?> </td>
            <td> <?=$row [ 'Endereco' ] ?> </td>
            <td> <?=$row [ 'Cidade' ] ?> </td>
            <td>
                <a  href ="alterar\alterar_cliente.php?&Id=<?=$row['IDCliente']?>" > Alterar </a>
                <a  href ="?Acao=deletar&id=<?=$row['IDCliente']?>" > Excluir </a>
            </td >
          </ tr >  
        <?php
          }
        } else {
            echo "<tr> <td colspan = -\"3\"> Banco de Dados Vazio</td> </tr>" ;
        }
        ?>
    </table>
  </body>
</html>