<?php
    try {
        $cnx= new PDO('mysql:host=localhost;dbname=sgcn','root','');
        $reppr= $cnx->query ('SELECT  * FROM produit');
        $repcl= $cnx->query ('SELECT  * FROM client');
        $repch= $cnx->query ('SELECT  * FROM chariot');
        $repdm= $cnx->query ('SELECT  * FROM demande');
    } catch (expectation $e) {
        echo 'erreur ! '.$e->getmessage().'';
    }
?>