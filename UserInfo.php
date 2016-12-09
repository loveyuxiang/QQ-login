<?php
$YY_CODE_ID = $_GET['YY_CODE_ID'];
$QQ_json = file_get_contents("http://www.cn300.cn/API/QQ/DB.php?YY_CODE_ID=".$YY_CODE_ID);
$QQ_json_array = json_decode($QQ_json);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>获取QQ用户信息</title>
</head>
<body>
<div style=" line-height:25px; ">
昵称：<?php echo $QQ_json_array->nickname; ?><br />
性别：<?php echo $QQ_json_array->gender; ?><br />
省：<?php echo $QQ_json_array->province; ?><br />
市：<?php echo $QQ_json_array->city; ?><br />
年龄：<?php echo $QQ_json_array->year; ?><br /><br />
<img src="<?php echo $QQ_json_array->figureurl; ?>" /><br /><br />
<img src="<?php echo $QQ_json_array->figureurl_1; ?>" /><br /><br />
<img src="<?php echo $QQ_json_array->figureurl_2; ?>" /><br /><br />
<img src="<?php echo $QQ_json_array->figureurl_qq_1; ?>" /><br /><br />
<img src="<?php echo $QQ_json_array->figureurl_qq_2; ?>" /><br /><br />
json:
<textarea style="width:100%; height:200px;"><?php echo $QQ_json; ?></textarea>
</div>
</body>
</html>