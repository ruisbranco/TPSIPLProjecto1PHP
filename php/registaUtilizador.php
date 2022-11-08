<?php
//obter dados do Furmulário

$nome = $_POST['nomeUser'];
$apelido = $_POST['apelido'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$morada = $_POST['mod'];
$morada2 = $_POST['mod2'];
$cidade = $_POST['cidadeUser'];
$distrito = $_POST['distritoUser'];
$cpostal = $_POST['cpUser'];
$datini = $_POST['datiniUser'];
$datfim = $_POST['datfinUser'];
$checkbox = $_POST['check'];

//escrever dados em ficheiro de texto
//criar ficheiro
$path = "../datafile/registo.txt";
$file = fopen($path,"a+");
if(file_exists($path)){
    $dados = "Nome: $nome $apelido\nEmail: $email\nPassword: $pass\nMorada: $morada, $morada2 - $cidade\nCodigo Posta: $cpostal - $cidade, $distrito\nData de Inicio: $datini\nData de Fim: $datfim\n#######################################\n";
    fwrite($file,$dados);
    echo "<script>alert('Dados Inseridos com sucesso');</script>";

}else{
    echo "<script>alert('Erro ao tentar abrir o Ficheiro');</script>";
}
fclose($file);


?>