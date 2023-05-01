<?php
    	header('Access-Control-Allow-Origin: *');
        $foreName = $_POST[foreName];
        $surname = $_POST[surname];
        $DOB = $_POST[DOB];
        $genderCode = $_POST[genderCode];
        $postCode = $_POST[postCode];


        $pdo = new \PDO("sqlite: vaccines.db");
        $st = $pdo->query("UPDATE patients SET where NHSNumber='".$nhsNo."'" );

        $st->execute();

?>