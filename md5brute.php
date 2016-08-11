<?php
	/*
		Brute MD5
		Coded By Pablo Santhus
		09/08/2016
	*/
		error_reporting(0);
		set_time_limit(0);
		echo banner();

function banner(){

echo "  
                ..:::::::::..          
           ..:::aad8888888baa:::..      
        .::::d:?88888888888?::8b::::.           
      .:::d8888:?88888888??a888888b:::.       
    .:::d8888888a8888888aa8888888888b:::.       
   ::::dP::::::::88888888888::::::::Yb::::       
  ::::dP:::::::::Y888888888P:::::::::Yb::::         
 ::::d8:::::::::::Y8888888P:::::::::::8b::::        
.::::88::::::::::::Y88888P::::::::::::88::::.      
:::::Y8baaaaaaaaaa88P:T:Y88aaaaaaaaaad8P:::::      
:::::::Y88888888888P::|::Y88888888888P:::::::      
::::::::::::::::888:::|:::888::::::::::::::::      
`:::::::::::::::8888888888888b::::::::::::::'       
 :::::::::::::::88888888888888::::::::::::::      
  :::::::::::::d88888888888888:::::::::::::        
   ::::::::::::88::88::88:::88::::::::::::       
    `::::::::::88::88::88:::88::::::::::'          
      `::::::::88::88::P::::88::::::::'          
        `::::::88::88:::::::88::::::'    
           ``:::::::::::::::::::''     
     	        ``:::::::::''    
     	        PABLO SANTHUS

\n"; 
print"\n";
echo "MD5 Brute \n";
echo "Criado Por Pablo Santhus \n";
echo "Ajuda: php md5brute.php -h\n";
print "\n";
}

$files = $argv[4];
$md5 = $argv[2];

$fileline = file($files);

if(isset($argv[1]) && $argv[1] == "-s" && $argv[3] == "-w"){
	foreach($fileline as $file){
		$file = str_replace("\r", "", $file);
		$file = str_replace("\n", "", $file);
		$line = md5($file);
		if($hash == false){ 
			if($md5 == $line){
				print "------------------------------------------------ \n";
				print "\n";
				echo " [+] MD5 cracked: " .$file. " : " .$md5. "\n";
				print "\n";
				print "------------------------------------------------ \n";
				$hash = true;
				exit;
			}else{
				echo "[-] MD5 NOT cracked: " .$file. "\n";
				$hash = false;
			}
		}
	}
	print "\n";
	if($hash == false){echo "Ops nao foi possivel crackear sua senha! \nverifique se " .$md5. " e realmente MD5!" ;}
	print "\n";
}


if($argv[1] == "-d"){
	$encrypt = md5($argv[2]);
	print "\n";
		print "\n";
		print "--------------------------------------------------------- \n";
		print "\n";
		echo "[+] MD5 Encrypted: " . $encrypt . " : ".$argv[2];
		print "\n";
		print "---------------------------------------------------------\n";
		print "\n";
}
if($argv[1] == "-h"){
	help();
}



function help(){
	print "\n";
	echo "		options[-s, -w, -d, -h] \n";
	print "\n";

	echo " -s" ."     ". "Adicionar uma hash MD5\n"; 
	echo " -w" ."     ". "Adicionar uma wordlist\n";
	echo " -d" ."     ". "Encriptar texto para MD5\n";
	echo " -h" ."     ". "Ajuda";

	print "\n";
	print "\n";

	echo " exemplo: php md5brute.php -s 7e4b64eb65e34fdfad79e623c44abd94 -w wordlist.txt \n";
	echo " exemplo: php md5brute.php -d pablo\n";
	echo " exemplo: php md5brute.php -h\n";
	print "\n";
}
	
?>