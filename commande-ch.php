<?php
    if($_POST['checkliv']){
        $check=$_POST['checkliv'];
        if($check)
            echo '1';
        else
            echo '0';
    }
?>