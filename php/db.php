<?php

function Createdb(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bookstore";

    // Create connection
    $con = mysql_connect($servername, $username, $password, $dbname);

    // Check Connection
}