<?php

	include('db.php');  //include_once 只限定讀取一次
	header("Content-Type:text/html; charset=utf-8");

	$name = $_POST['name'];
	$nickname = $_POST['nickname'];
	$habit = $_POST['habit'];
	$gender = $_POST['gender'];
	$fav_food = $_POST['fav_food'];

	if($name=null && $nickname=null && $habit=null &&  $gender=null && $fav_food=null)
	   echo '<script>alert("有資訊沒寫下來唷 !");</script>';

	$sql="INSERT INTO userinfo (name, nickname, habit, gender, fav_food) 
    	  VALUES('$name','$nickname', '$habit', '$gender', '$fav_food')";

	if(mysql_query("$sql"))
	   echo '<script>alert("OK ! 輸入成功");</script>';
	else
   	   echo '<script>alert("OOPS.. 輸入失敗");</script>';

?>
