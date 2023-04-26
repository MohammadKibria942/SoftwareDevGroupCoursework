
<?php
	header('Access-Control-Allow-Origin: *');
	$nhsNo = $_POST['NhsNo'];

	
	$pdo = new \PDO("sqlite: vaccines.db");
	$st = $pdo->query("SELECT * from patients where NHSNumber='".$nhsNo."'"  );
     
    $st->execute();
	$cars = [];
	
	while ($car = $st->fetchObject()) {
		$cars[]=$car;
		
    }
	if(empty($cars)){
		echo json_encode("no records");
	}
	else
	{
		echo json_encode($cars);
	}
?>