<html>
<head>
<meta charset="utf-8">
<title>POST練習</title>
</head>
<body>
<form action="write.php" method="post">
<style>
h1{
    text-align: center;
}
p{
	text-align: center;
	font-size: large;
	color:azure;
	text-shadow:1px 1px 1px black;
}
div{
	background-color: pink;
}

</style>
<div>
<h1>参加者アンケート</h1>
	<p>お名前: <input type="text" name="name"></p> 
	<p> EMAIL: <input type="text" name="mail"></p>
	<p> 年齢  ：<input type="text" name="age"></p>
	<p> 身長  ：<input type="text" name="long"></p>
	<p> 体重  ：<input type="text" name="weight"></p>
	<p> 足サイズ  ：<input type="text" name="footsize"></p>
	<p><input type="submit" value="送信"></p>
	</div>	
</form>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>