<?php

include "../base.php";

$mail =  $_GET['mail'];
$forgot = $User->find(['email'=>$mail]);
if(!empty($forgot)){
    echo "你的密碼為：".$forgot['pw'];
}else{
    echo "查無帳號";
}

?>