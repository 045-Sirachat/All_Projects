<?php
    $host='localhost';
    $username='root';
    $password='';
    $db='testfe';

    $con = new mysqli($host, $username, $password, $db);

    if($con->connect_error){
        die('error:('.$con->connect_errno .')'.$con->connect_error);
    }else{
        echo 'connect success';
    }
    $conn->set_charset('utf8');
    ?>