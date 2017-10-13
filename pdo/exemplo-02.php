<?php
	//PARA SQL SERVER
	//tipo de banco, nome, local, usuario e senha(sem espaço entre mysql,db e host)
	$conn = new PDO("sqlsrv:Database=dbphp7;server=SIRIUS\DATUM;ConnectionPooling=0","sa","datumcorp");

	//statement
	$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

	$stmt->execute();

	//fetchAll = Retorna todas as linhas (registros) como um array
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

	foreach ($results as $row) {
		//key=nome da coluna e value é o valor digitado dentro dela
		foreach ($row as $key => $value) {
			echo "<strong>" . $key . "</strong> ".$value. "<br/>";
		}
		echo "========================================<br/>";
	}
	
	// json_encode = print_r
	echo json_encode($results);
?>