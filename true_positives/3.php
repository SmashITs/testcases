<?php
/*
 * Dynamic code invokation
 */
$class = '
class getInput{
    function getHttpGet($key){
        return $_GET[$key];
    }
};';
eval($class);
$obj = new getInput();
$id = $obj->getHttpGet('id');
echo file_get_contents($id);