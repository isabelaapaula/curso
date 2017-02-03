<?php
include("conect.php")
if (isset($_POST)([cadastrarcurso])) {
	$curso = $_POST["nomecurso"]
	$statuscurso = $_POST["statuscurso"]
	};
	
	$sql = "INSERT INTO cursos()
		if ($conn->.query($sql)===TRUE) {
			echo("Adicionado com sucesso")"

			$conn->close();

		}
	$sql = "SELECT id,primeiro_nome,_ultimo_nome FROM alunos";

		$resul = $conn->query($sql);
	if ($resul->num_rows>0) {
		while ($row = $result->fetch_assoc()) {
			echo "id:".$row["id"]."-Nome:".$row["primeiro_nome"]."".$row["_ultimo_nome"]."<br>";
		}
		
	}
	     else
	     	echo "0 resultados";
	     $conn->close();

	$sql = "UPDATE nome_tabela
	SET nome_colUM = valor1,...
	WHERE nome_colTRES = outro_valor";
		echo "Atualizado";

	$sql = "DELETE FROM nome_tabela
	WHERE nome_colTRES = outro_valor";
	 	echo "Deletada";


?>