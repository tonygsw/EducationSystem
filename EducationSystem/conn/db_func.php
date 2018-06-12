<?php
	function db_query($con,$sqlstr)	{
		return mysqli_query($con,$sqlstr);}
	function db_num_rows($res)	{return mysqli_num_rows($res);}
//mysql_num_rows是PHP语言的中的函数，其表示取得结果集中行的数目。此命令只对SELECT语句有效。
//要取得被 INSERT，UPDATE 或者 DELETE 查询所影响到的行的数目，用 mysql_affected_rows()。
	function db_fetch_array($res)	{return mysqli_fetch_array($res);}
	function db_fetch_object($res)	{return mysqli_fetch_object($res);}
	function db_data_seek($res,$num){return mysqli_data_seek($res,$num);}
?>
