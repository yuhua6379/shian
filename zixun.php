<?php

	// require("common.php");


	$file  = '/serverlog/log'.date("Y-m-d").'.txt';//要写入文件的文件名（可以是任意文件名），如果文件不存在，将会创建一个
		$content = "[error]"." ".date('[y-m-d h:i:s]',time())." "."adadasd00000000000"."\n";  
		$f= 'SD';
		if($f  = file_put_contents($file, $content,FILE_APPEND)){// 这个函数支持版本(PHP 5) 
			echo "写入成功。<br />";
		}else{
			echo $f;
		}

	// $file  = 'log'.date("Y-m-d").'.txt';//要写入文件的文件名（可以是任意文件名），如果文件不存在，将会创建一个
	// $content = "第一次写入的内容\n";  
	// if($f  = file_put_contents($file, $content,FILE_APPEND)){// 这个函数支持版本(PHP 5) 
	// 	echo "写入成功。<br />";
	// }

	// $name = $_POST["name"];
	// $phone = $_POST["phone"];

	// $yuchan_year = $_POST["year"];
	// $yuchan_month = $_POST["month"];
	// $yuchan_day = $_POST["day"];

	// $zixun_desc = $_POST["zixun_desc"];

	// debug($name." ".$phone);


?>