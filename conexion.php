<?php
function returnConection(){
    $con = mysqli_connect("127.0.0.1","root","","Clinica");
    return $con;
}