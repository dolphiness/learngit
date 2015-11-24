<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>title</title>
</head>
<body>
长网址：<input type="text" id="long" value=""/>
<input type="button" value="获取" id="button" /><br/><br/>
短网址：<span id="short"></span>
</body>
 <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
 <script type="text/javascript">
 	
 	
 	
 	$('#button').click(function(){
 		var long = $('#long').val();
 		$.post('change.php',{'long':long},function(msg){
 			$('#short').html('i-t.cn/'+msg+'.html');
 		},'text');
 	});
 </script>
</html>