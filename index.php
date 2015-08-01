<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<title>AJAX Submit</title>
	<link rel="shortcut icon" href="../img/icon4.ico"> 
	</head>

<body>
	<form id="myForm" action="userInfo.php" method="post">
	姓名: <input type="text" name="name" placeholder="大名寫這兒唷" required><br><br>
	暱稱: <input type="text" name="nickname" placeholder="小名寫這兒唷" required><br><br>
	興趣: <input type="text" name="habit" placeholder="留個興趣讓大家認識你" required><br><br>
	性別: <input type="radio" name="gender" value="男" checked>男性
		  <input type="radio" name="gender" value="女">女性<br><br>
	食趣: <select name="fav_food">
			<option value="中式炒麵">中式炒麵</option>
			<option value="中式便當">中式便當</option>
			<option value="西式麵食">西式麵食</option>
			<option value="西式燉飯">西式燉飯</option>
		  </select><br><br>

	<button id="sub">儲存</button>
</form>


<span id="result"></span>

<script type="text/javascript" src="jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="my_script.js"></script>
</body>
</html>
