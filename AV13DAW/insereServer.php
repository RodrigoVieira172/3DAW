<?php
$servername = "localhost";
$username = "3daw";
$password = "mysql123";
$dbname = "3dawTest";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {		
	$nome = $_POST["nome"];
	$mat = $_POST["matricula"];
	$cpf = $_POST["cpf"];
	$dtNasc = $_POST["dtNasc"];
	$sql = "INSERT into Alunos (mat, NOME, cpf, DataNascimento) 
	values (" . $mat . ", '" . $nome . "', '" . $cpf . "', '" . $dtNasc .  "')";
	if ($conn->query($sql) === TRUE) {
		include "sucesso.php";
	} else {
		include "falha.php";
	}
} else {
	include "falha.php";
}		

$conn->close();
?>