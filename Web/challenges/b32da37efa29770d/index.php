<html>
<head>
welcome to simplexue
</head>
<body>
<?php

if($_POST[user] && $_POST[pass]) {
	$conn = mysql_connect("********, "*****", "********");
	mysql_select_db("phpformysql") or die("Could not select database");
	if ($conn->connect_error) {
		die("Connection failed: " . mysql_error($conn));
	} 
	$user = $_POST[user];
	$pass = md5($_POST[pass]);  //md5() 函数计算字符串的 MD5 散列。

	$sql = "select pw from php where user='$user'";
	$query = mysql_query($sql);
	if (!$query) {
		printf("Error: %s\n", mysql_error($conn));
		exit();
	}
	$row = mysql_fetch_array($query, MYSQL_ASSOC);
	//echo $row["pw"];
  
  	if (($row[pw]) && (!strcasecmp($pass, $row[pw]))) {  //如果 str1 小于 str2 返回 < 0； 如果 str1 大于 str2 返回 > 0；如果两者相等，返回 0。 
		echo "<p>Logged in! Key:************** </p>";
	}
	else {
    	echo("<p>Log in failure!</p>");
	}  
}

?>
<form method=post action=index.php>
<input type=text name=user value="Username">
<input type=password name=pass value="Password">
<input type=submit>
</form>
</body>
<a href="index.txt">
</html>