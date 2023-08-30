<?php

$conn = mysqli_connect('localhost','shanto','shanto123','register');

if(!$conn){
    echo 'failed connect: ' . mysqli_connect_error();
}

?>