<?php
	$fp=fopen("plainText.txt","r");
	if(!$fp){
		echo "Can't open this text file!";
	}
	else{
		$data = fread($fp, filesize("plainText.txt"));
		$encrypt = strrev($data);
		$decrypt = strrev($encrypt);
		echo "Plain text: ".$data."<br />";
		echo "Encrypted text: ".$encrypt."<br />";
		echo "Decrypted text: ".$decrypt;
	}
?>