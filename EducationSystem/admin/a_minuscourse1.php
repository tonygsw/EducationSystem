<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>完成课程增删操作</title>
</head>
<body>

<?php
session_start();
//检测是否登录，若没登录则转向登录界面

if(!isset($_SESSION["username"])||$_SESSION["role"]!="admin")
{
    header("Location:../login_admin.php");
    exit();
}
//包含数据库连接文件
include("../conn/db_conn.php");
include("../conn/db_func.php");

$admin_no=$_SESSION['username'];
$admin_course_no=$_POST['admin_course_no'];

$Updatecourse_SQL="delete from course where course_no = '$admin_course_no' ";

$ChkLoginResult=db_query($conn,$Updatecourse_SQL);


if($ChkLoginResult>0){
    echo"<script>";
    echo"alert(\"删除课程成功！\");";
    echo "location.href=\"../admin/a_minuscourse.php\"";
    echo"</script>";

}
else{
    echo"<script>";
    echo"alert(\修改失败，请重试！\");";
    echo "location.href=\"../admin/a_minuscourse.php\"";
    echo"</script>";
}

?>
</body>
</html>