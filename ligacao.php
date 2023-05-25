<?php 


// inclui a ligação com o banco de dados
include('conectar_db.php');


//atribui os campos preenchidos às variaveis
$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, "senha");
//$incorreto = true;
//atribui às variaveis a linha de comando do banco de dados
// neste bloco de codigo estou verificando se ha o email digitado e puxando o id(codFunc)
//do usuario referente a este email
$sqlid="SELECT codFunc FROM tbfuncionarios WHERE emailFunc='$email'";
$resultid= mysqli_query($conexao, $sqlid);
$arrayid = mysqli_fetch_array($resultid) ;//or die("<script>alert('Seu E-mail esta incorreto')</script>");
$logarrayid = $arrayid['codFunc'];

//atribui às variaveis a linha de comando do banco de dados
//no caso ele só vai continuar se o email e a senha forem compativeis com o
//mesmo usuario
$sqlemail ="SELECT emailFunc FROM tbfuncionarios WHERE emailFunc='$email' AND codFunc='$logarrayid'";
$sqlsenha ="SELECT senhaFunc FROM tbfuncionarios WHERE senhaFunc='$senha' AND codFunc='$logarrayid'";

// faz com que as linhas do banco de dados sejam execultadas
$resultemail= mysqli_query($conexao, $sqlemail);
$resultsenha=mysqli_query($conexao, $sqlsenha);

// atribui o resultado de apenas uma linha por campo da tabela acima buscado e atribui o resultado a vetores
$arrayemail = mysqli_fetch_array($resultemail) ;
$arraysenha = mysqli_fetch_array($resultsenha) ;

// pega o resultado e atribui a uma variavel o resultado que esta compativel com o banco
$logarrayemail = $arrayemail['emailFunc'];
$logarraysenha= $arraysenha['senhaFunc'];

// verificando se os campos do HTML foram preenchidos


  //se nao for o caso faz a verificação se o que foi digitado é a mesma coisa que esta no banco de dados
  // e se email esta igual a senha
  //$logarrayemail == $email && $logarraysenha == $senha
if($email==$logarrayemail && $senha==$logarraysenha){
    header("Location:home.php");
    exit;
  
  }else{
    
    header("Location:index.php?incorreto= Login incorreto");
    exit;
    
  }






?>