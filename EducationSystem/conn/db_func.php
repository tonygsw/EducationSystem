<?php
	function db_query($con,$sqlstr)	{
		return mysqli_query($con,$sqlstr);}
	function db_num_rows($res)	{return mysqli_num_rows($res);}
	function db_fetch_array($res)	{return mysqli_fetch_array($res);}
	function db_fetch_object($res)	{return mysqli_fetch_object($res);}
	function db_data_seek($res,$num){return mysqli_data_seek($res,$num);}
?>
