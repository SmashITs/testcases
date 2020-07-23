<?php
/**
 * Dead Branch
 */
$needle = "test";

$file = "/etc/passwd";

if(strpos($needle, "x") !== False) {
    // sink
    $file = $_GET['file'];
}

echo file_get_contents($file);
