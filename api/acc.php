<?php
include "../base.php";

$acc=$_GET['acc'];
$user=$User->find(['acc'=>$acc]);

if(!empty($user)){
    echo 1;
}else{
    echo 0;
}

?>