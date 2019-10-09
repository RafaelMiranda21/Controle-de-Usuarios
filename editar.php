<?php
 require 'config.php';


if(isset($_GET['id']) && !empty($_GET['id'])){
  $id = addslashes($_GET['id']);
  $sql = "SELECT * FROM usuarios WHERE id =:id";
  $sql = $pdo->prepare($sql);
    $sql->bindValue(':id',$id);
    $sql->execute();
    if($sql->rowCount() > 0){
      $dado = $sql->fetch();
    }else{
       header("Location: index.php");
    } 
 }else{
     header("Location: index.php");
 }



if(isset($_POST['nome']) && empty($_POST['nome']) == false){
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

   $sql = "UPDATE usuarios SET nome=:nome , email=:email ,senha=:senha WHERE id = :id";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':nome',$nome);
    $sql->bindValue(':email',$email);
    $sql->bindValue(':senha',$senha);
    $sql->bindValue(':id',$id);
    $sql->execute();


    header("Location: index.php");
 }




 

?>

<form method="POST">
  Nome:</br>
  <input type="text" name="nome" autofocus value="<?php echo $dado['nome'];?>"></br></br>
  E-mail:</br>
  <input type="email" name="email" value="<?php echo $dado['email'];?>"></br></br>
  Senha:</br>
  <input type="password" name="senha"></br></br>
  <input type="submit" value="Atualizar">

</form>
