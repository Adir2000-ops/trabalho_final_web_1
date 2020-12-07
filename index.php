<?php  
    require_once "./conexao.php";


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
         window.location.href = "./home.php.php";
        </script>
       <?php
     }

}

?>
<html>
 <head>
 <link  rel="stylesheet" href="../bootstrap-4.5.3-dist_/css/bootstrap.min.css">
</head>
<body>
<form method="post">
     <div class="form-group">
         <label for="email">E-mail</label>
         <input type="text" class="form-control" name="email" id="email" placeholder="E-mail">
     </div>
     <div class="form-group">
         <label for="senha">Senha</label>
         <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
     </div>
     <button type="submit" class="btn btn-info">Login</button>
</form>
</body>
</html>