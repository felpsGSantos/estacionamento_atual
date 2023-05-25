<?php
session_start();


include ('conectar_db.php');

$nome = $_POST['nome'];
$nasc=$_POST['nasc'];
$email=$_POST['email'];
$num=$_POST['num'];
$sexo=$_POST['sexo'];
$cpf=$_POST['cpf'];



$marca=$_POST['marca'];
$nump=$_POST['nump'];
$mod=$_POST['mod'];
$cor=$_POST['cor'];
$cat=$_POST['cat'];

$sqlc = "INSERT INTO tbclientes (nomeCli, nascimento, email, telefoneCli, sexo,cpf)
VALUES ('$nome', '$nasc','$email','$num','$sexo','$cpf')";

$sqlv = "INSERT INTO tbveiculos (modeloVeic, placaVeic, catVeic, corVeic, marca) 
VALUES ('$mod','$nump','$cat','$cor','$marca')";

$resultc = mysqli_query($conexao,$sqlc);
$resultv = mysqli_query($conexao,$sqlv);


//echo '<script>alert("Cadastro concluido com sucessius")</script>';

$_SESSION['cadastrado'] = '<script>alert("Cadastro concluido com sucessius")</script>';
$_SESSION['cad']=true;

header("Location:atendimento.php");

?>