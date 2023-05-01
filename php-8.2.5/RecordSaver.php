<?php
    	header('Access-Control-Allow-Origin: *');
        $foreName = $_POST[forename];

        $pdo = new \PDO("sqlite: vaccines.db");
        $st = $pdo->query("UPDATE patients SET where NHSNumber='".$nhsNo."'" );

        $st->execute();

?>