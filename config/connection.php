<?php
    define('SITEURL', 'http://localhost/travel-agency/');
    function OpenCon(){
        $dbServerName = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "milos_naskovic_its_7_21";

        return $conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);
    }
