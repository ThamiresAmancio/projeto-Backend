<?php
const HOST = "localhost";
const USER = "root";
const PASSWORD = "2607";
const DATABASE = "icatalogo";

$conexao = mysqli_connect(HOST, USER, PASSWORD, DATABASE) or die(mysqli_connect_error());

// if($conexao == false){
//     echo mysqli_connect_error();
// }
?>