<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "av1";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {		
	$matricula = $_POST["matricula"];
	$nome = $_POST["nome"];
	$cpf = $_POST["cpf"];
	$dataNascimento = $_POST["dataNascimento"];
	$sql = "INSERT into aluno (matricula, nome, cpf, dataNascimento) 
	values (" . $matricula . ", '" . $nome . "', '" . $cpf . "', '" . $dataNascimento .  "')";
	if ($conn->query($sql) === TRUE) {
		include 'sucesso.php';
	} else {
		include "falha.php";
	}
} else {
	include "falha.php";
}

$conn->close();
?>