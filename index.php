<html>

<meta charset="utf-8">
<link href="assets/css/template.css" type="text/css" rel="stylesheet"/>

</html>
<?php

   require 'config.php'; 
?>
<body>
 <div>
   <h1>Controles de usuarios</h1>
</div>

    <table width ="100%" >
       <tr>
          <th>Nome</th>
          <th>Email</th>
          <th>Ações</th>
       </tr>
    
         <?php
            $sql = "SELECT * FROM usuarios";
            $sql = $pdo->query($sql);
            if($sql->rowCount() > 0){
                 foreach ($sql->fetchAll() as $usuarios) {
                  echo'<tr>';
                  echo'<td>'.$usuarios['nome'].'</td>';
                  echo'<td id="email">'.$usuarios['email'].'</td>';
                  echo'<td><a href="editar.php?id='.$usuarios['id'].'">Editar</a> - <a href="deletar.php?id='.$usuarios['id'].'">Deletar</a></td>';
                  echo'</tr>';
                 }

            }else{
              echo"Não há usuários cadastrados!!";
            }
         ?>
      


    </table>
    <div>
       <a href="adicionar.php">Adicionar Usuário</a>
    </div>
</body>
