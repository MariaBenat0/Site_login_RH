<?php

if($_SERVER ["REQUEST_METHOD"] == "POST"){
   $username = $_POST ['username'];
   $senha = $_POST ['senha'];

   include "conexao.php";

   $sql = "SELECT * FROM funcionarios
           WHERE username =  '$username'
           AND senha = '$senha'";

   $resultado = mysqli_query ($con, $sql);

   if(mysqli_num_rows ($resultado) > 0) {
      echo "Liberado!" ;
      header ('location: home.html');
   } else {
      echo "Usuario ou senha invalidos!";
      echo "<br>";
      echo "<br>";
      echo "<a href= 'index.html' > Voltar </a>";
   }

}  