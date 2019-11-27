<?php
include 'dbconnexion.php';
    $cid=$_GET['cid'];
    $pid=$_GET['pid'];
    $qtt=$_POST['qtt'];
    $qttt=$qtt;
    $ch=$cnx->query('SELECT * FROM chariot');
    while($chariot=$ch->fetch()){
        if(($chariot['cid']==$cid)&&($chariot['pid']==$pid)){
            $cnx->query('UPDATE `chariot` SET `qtt`='.$qttt.' WHERE `pid`='.$pid.' AND `cid`='.$cid.'');
        }
    }
    header ('Location : /chariot.php?cid='.$cid.'');
?>