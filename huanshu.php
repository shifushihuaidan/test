<?php
function alerts($mes,$url)
{
	echo "<script>alert('{$mes}');</script>";
	echo "<script>window.location='{$url}';</script>";
}
$id=$_GET['id'];
$sql="delete from bbook where bid=".$id." and rid=32";
//echo $sql;
$res=mysql_query($sql);
alerts("����ɹ�","duzhe.php?cc=���");
?>