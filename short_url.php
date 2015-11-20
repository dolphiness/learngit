/*
php 生成短网址 

原理： 

1.将原网址做crc32校验，得到校验码。 

2.使用sprintf('%u') 将校验码转为无符号数字。 

3.对无符号数字进行求余62操作（大小写字母+数字等于62位），得到余数后映射到62个字符中，将映射后的字符保存。（例如余数是10，则映射的字符是A，0-9对应0-9，10-35对应A-Z，35-62对应a-z） 

4.循环操作，直到数值为0。 

5.将所有映射后的字符拼接，就是短网址后的code。 
*/
<?p
/** 生成短网址 
* @param String $url 原网址 
* @return String 
*/ 
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