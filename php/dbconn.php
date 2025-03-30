<?php

    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "userinfo";
    $conn = "";

    try{
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    }
    catch(mysqli_sql_exception){
    }

    function clean_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>