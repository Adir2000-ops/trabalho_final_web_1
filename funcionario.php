<?php
 require_once  "conexao.php" ;

 $stmt = $conn->prepare("SELECT * FROM funcionarios");
 $stmt->execute();
 $resultado = $stmt->FetchAll();

 if(!empty($_GET['acao'])){
     $id = $_GET['id'];
     $stmt = $conn->prepare("DELETE FROM funcionarios WHERE IDFuncionario = :id");
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
   <a href = " ./cadastrar_funcionario.php " class =" btn btn-info "> Adicionar </a>
   <table border ="2" class = "table table-stripes">
       <tr>
        <td> Id </td>
        <td> Sobrenome </td>
        <td> Nome </td>
        <td> Titulo </td>
        <td> TituloCoresia </td>
        <td> DataNasc </td>
        <td> DataAdmisão </td>
        <td> Endereço </td>
        <td> Ações </td>
       </tr >
       <?php
        if ( count ( $resultado )) {
          foreach ( $resultado  as  $row ) {
        ?>
          <tr>
            <td> <?=$row [ 'IDFuncionario' ] ?> </td>
            <td> <?=$row [ 'Sobrenome' ] ?> </td>
            <td> <?=$row [ 'Nome' ] ?> </td>
            <td> <?=$row [ 'Titulo' ] ?> </td>
            <td> <?=$row [ 'TituloCortesia' ] ?> </td>
            <td> <?=$row [ 'DataNac' ] ?> </td>
            <td> <?=$row [ 'DataAdmissao' ] ?> </td>
            <td> <?=$row [ 'Endereco' ] ?> </td>
            <td>
                <a  href ="alterar\alterar_funcionario.php?&Id=<?=$row['IDFuncionario']?>" > Alterar </a>
                <a  href ="?Acao=deletar&id=<?=$row['IDFuncionario']?>" > Excluir </a>
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