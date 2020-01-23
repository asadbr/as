<?php
$message='';
$send_frm='<form action="chat.php" method="post">
<input type="text" name="msg"> <input type="submit" value="send">
</form>';



if(isset($_POST['msg'])){
	$new_msg= htmlspecialchars($_POST['msg']);
	$fh=fopen("msg.txt", "a+") or die("unable to open the file");


$myfile= file_put_contents('msg.txt', new_msg.PHP_EOL, FILE_APPEND | LOCK_EX);
while ($line=fgets($fh)){
	$message.=$line;
}

fclose($fh);
}

echo $message."hr".$send_frm;

?>