<?php 

 $conn = mysql_connect("127.0.0.1","root","") or die("���ݿ����Ӵ���".mysql_error());
 mysql_select_db("info_db",$conn) or die("���ݿ���ʴ���".mysql_error());
 mysql_query("set names utf8");
?>