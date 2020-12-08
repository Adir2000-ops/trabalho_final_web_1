<?php
  require_once "./conexao.php";

  if(!empty($_POST['email']) && !empty($_POST['senha'])){

    $pdo =new PDO();
    $stmt = $pdo->prepare('SELECT NOME, LOGIN, SENHA FROM USUARIO WHERE LOGIN = : login AND SENHA = : senha');
    $stmt -> bindParam(': login', $_POST['email']); 
    $stmt -> bindParam(': senha', $_POST['senha']);
    $stmt -> execute();
    $sql = $stmt -> fetch(PDO::FETCH_ASSOC);
    var_dump($sql);


    if(!empty($_SESSION['login'])){
        ?>
        <script>
         window.location.href = "./home.php";
        </script>
       <?php
     }
    
   if(!empty($_POST['email']) && !empty($_POST['senha'])){
     $email = $_POST['email'];
     $senha = $_POST['senha'];

     $stmt = $conn->prepare("SELECT * FROM usuario WHERE email = :e AND senha = :s");
     $stmt->bindValue(':e', $email);
     $stmt->bindValue(':s', $senha);
     $stmt->execute();
     $usuario = $stmt->fetch();

     if(!empty($usuario)){
        $_SESSION['login'] = $usuario['id'];
        ?>
        <script>
         window.location.href = "./home.php";
        </script>
       <?php
     }

}

?>