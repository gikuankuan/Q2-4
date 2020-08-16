<?php
include "../base.php";

$pw=$_GET['pw'];
$acc=$_GET['acc'];
$user=$User->find(['acc'=>$acc,'pw'=>$pw]);

if(empty($user)){
    echo 0;
}else{
    echo 1;
    $_SESSION['login']=$acc;
}

?>