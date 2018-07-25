<?php
	$_LEVEL = 1;
	function open_level($level){
		$_LEVEL = 1;
		if ($level == "debug"){
			$_LEVEL = 0;
		}
		if ($level == "info"){
			$_LEVEL = 1;
		}
		if ($level == "error"){
			$_LEVEL = 2;
		}
	}
	function log2log($level, $data){
		$file  = '/serverlog/log'.date("Y-m-d").'.txt';//要写入文件的文件名（可以是任意文件名），如果文件不存在，将会创建一个
		$content = $level." ".date('[y-m-d h:i:s'],time())." ".$data."\n";  
		if($f  = file_put_contents($file, $content,FILE_APPEND)){// 这个函数支持版本(PHP 5) 
			echo "写入成功。<br />";
		}
	}
	
	function debug($data){
		if ($_LEVEL == 0){
			log2log("[debug]", $data);
		}
	}
	function info($data){
		if ($_LEVEL <= 1){
			log2log("[info]", $data);
		}
	}
	function error($data){
		if ($_LEVEL <= 2){
			log2log("[error]", $data);
		}
	}


?>