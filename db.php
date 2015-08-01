<?php
	$link = mysql_connect("localhost","root","123456") or exit( mysql_error() );
	mysql_select_db("ajax_submit",$link) or die("db連線失敗");
	mysql_query("set names utf8");
?>