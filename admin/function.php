<?php

    function confirm($result){

        global $connection;

        if(!$result){

            die("failed" . mysqli_error($connection));
    
        }

    }

?>