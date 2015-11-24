<?php 
	$long = $_POST['long'];
	$short = dwz($long);
	mysql_connect('localhost','root','2737');
	mysql_query('set names utf8');
	mysql_query('use stu');
	$sql = "insert into saveurl values(default,'$long','$short')";
	mysql_query($sql);
	echo $short;



	function dwz($url){ 
		$code = sprintf('%u', crc32($url)); 
		$surl = ''; 
		while($code){ 
			$mod = $code % 62; 
			if($mod>9 && $mod<=35){ 
				$mod = chr($mod + 55); 
			}elseif($mod>35){ 
				$mod = chr($mod + 61); 
			} 
			$surl .= $mod; 
			$code = floor($code/62); 
		} 
		return $surl; 
	} 
?>