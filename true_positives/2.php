<?php
/*
 * Second Order
 */
function store($line){
    file_put_contents("/tmp/out.txt", $line);
}
function read(){
    return file_get_contents("/tmp/out.txt");
}
$line = $_GET["file"];

store($line);

$input = read();

echo system("echo '".$input."'");