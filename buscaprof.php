<?php

header('Access-Control-Allow-Origin: *');

$connect = new PDO("mysql:host=localhost;dbname=id20457711_bancobrenda", "id20457711_brendalauramarini", "p~fJpQj3RZhplSOu");

$received_data = json_decode(file_get_contents("php://input"));

$data = array();

if($received_data->query != '')
{
	$query = "
	SELECT * FROM fatec_professores 
	WHERE first_name LIKE '%".$received_data->query."%' 
	OR endereco LIKE '%".$received_data->query."%' 
	ORDER BY id DESC
	";
}
else
{
	$query = "
	SELECT * FROM fatec_professores 
	ORDER BY id DESC
	";
}

$statement = $connect->prepare($query);

$statement->execute();

while($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	$data[] = $row;
}

echo json_encode($data);

?>