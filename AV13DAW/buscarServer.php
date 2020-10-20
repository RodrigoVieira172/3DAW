<?php
$servername = "localhost";
$username = "3daw";
$password = "mysql123";
$database = "3DawAv1";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<h1>Excluir o aluno?</h1>
<form action="excluir_aluno_server.php" method="POST">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {		
	$mat = $_POST["matricula"];
	$sql = "SELECT mat, NOME, cpf, DataNascimento FROM Alunos where mat = " . $mat; 
	$resultado = $conn->query($sql);
	
	if ($resultado->num_rows > 0) {

		while ($linha = mysqli_fetch_assoc($resultado)) {
			echo "<b>Mat:</b> " . $linha["mat"] . "<br><b> Nome:</b> " . $linha["NOME"] . "<br> <b>CPF:</b> " . $linha["cpf"] . "<br> <b>Data Nasc:</b> ". $linha["DataNascimento"] . "<br> ";
			echo "<input type=hidden name='matricula' value =  " . $linha["mat"] . "><br> ";
			echo "<input type='submit' value='Excluir'/>";
		}

	} else {
        echo "Aluno não encontrado";
        include "opcoes.php";
	}
} else {
	echo "Metodo errado";
}		
$conn->close();
?>
</form>