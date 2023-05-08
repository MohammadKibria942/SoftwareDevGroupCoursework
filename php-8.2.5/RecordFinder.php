
<?php
	header('Access-Control-Allow-Origin: *');
	$nhsNo = $_POST['NhsNo'];
	$notFound = "no records";

	
	$pdo = new \PDO("sqlite: vaccines.db");
	$st = $pdo->query("SELECT * from patients where NHSNumber='".$nhsNo."'");
     
    $st->execute();
	$cars = [];//chaneg this
	
	while ($car = $st->fetchObject()) {
		$cars[]=$car;
		
    }
	if(empty($cars)){
		echo json_encode(0);
	}
	else
	{
		echo json_encode($cars);
	}
?>