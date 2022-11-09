<?php

    // $us = $_GET["user"];
    // $pa = $_GET["pass"];
    // $em = $_GET["email"];
    $id = $_GET["id"];
    $fn = $_GET["fname"];
    $fpa = $_GET["fpassword"];
    $gm = $_GET["gmail"];

$conn = new mysqli("localhost", "root", "", "types");

$st = $conn->query("insert into table2(id,fname,pass,email) Values('$id', '$fn','$fpa','$gm')");

if ($st > 0) {

echo "DONE";
} else {
echo "ERROR";
}
$conn->close();
