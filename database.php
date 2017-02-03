<?php
	$conn = new mysqli($servername,$username,$password,$dbname)

	if($conn-connect_error)
		die("falha:".$conn->connect_error);

	$sql = "CREATE TABLE alunos (
		id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		nome_aluno VARCHAR(50) NOT NULL,
		curso_id INT(3) DEFAULT NULL,
		email_aluno VARCHAR(50) NOT NULL UNIQUE
	)";

	$sql = "CREATE TABLE cursos(
		id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		nome_curso VARCHAR(50) NOT NULL,
		status_curso TINYINT(1) NOT NULL (DEFAULT 1)
	)";
	

	if ($conn->query($sql)==TRUE) 
		echo("Tabela criada com sucesso");

	else
		echo "Error".$conn->error;

	$conn->close();
?>