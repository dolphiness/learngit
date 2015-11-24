<?php
	$sh = $_GET['sh'];
	mysql_connect('localhost','root','2737');
	mysql_query('set names utf8');
	mysql_query('use stu');
	$sql = "select longurl from saveurl where shorturl='$sh'";
	$res = mysql_query($sql);
	$list = mysql_fetch_row($res);
	$url = $list[0];
	//echo $url;exit;
	header("Location:$url");
?>