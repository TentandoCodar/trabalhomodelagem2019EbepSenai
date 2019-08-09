<?php
  require('./php/functions.php');
  /*$servidor = '127.0.0.1:3306';
  $usuario = 'root';
  $passwd = '';
  $bd = 'Alexandria';

  $user = "instrutor";
  $password = "1234";
  $con = mysql_connect($servidor,$usuario,$passwd) or die ("Não foi possivel connectar ao servidor");
  $select = mysql_select_db($bd) or die("Sem acesso ao banco de dados");

  $result = login($user,$password);

  $data = mysql_fetch_assoc($result);
  $email = $data['email'];

  if(mysql_num_rows($result) > 0){
      echo "Consegui logar:$email";

  }
  else{
    echo "Usuario ou senha incorretos";
  }*/

  email('bibliotecaalexandriagrupo18@gmail.com','','Isso e um teste','Teste message')



 ?>
