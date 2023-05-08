<?php
    header('Access-Control-Allow-Origin: *');
    $nhsNum = $_POST["NhsNo"];
	echo json_encode($nhsNum);
    $fName = $_POST["FORENAME"];
    $surname = $_POST["surname"];
    $DOB = $_POST["DOB"];
    $genderCode = $_POST["genderCode"];
    $postCode = $_POST["postCode"];

    $pdo = new \PDO("sqlite: vaccines.db");
    $st = $pdo->query("UPDATE patients SET Forename='".$fName."', Surname='".$surname."', PersonDOB='".$DOB."', GenderCode='".$genderCode."', Postcode='".$postCode."' WHERE NHSNumber='".$nhsNum."'");

    $st->execute();

    if($st)
    {
        echo json_encode('Data Updated');
    } else{
        echo json_encode('ERROR Data Not Updated');
    }
?>