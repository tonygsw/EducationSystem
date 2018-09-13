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
$admin_course_name=$_POST['admin_course_name'];
$admin_course_teacher_no=$_POST['admin_course_teacher_no'];
$admin_course_credit=$_POST['admin_course_credit'];
$admin_course_time=$_POST['admin_course_time'];
$admin_course_place=$_POST['admin_course_place'];

$Updatecourse_SQL= "INSERT INTO course (course_no, course_place, course_name,course_teacher_no, course_credit,course_time) 
VALUES ('$admin_course_no','$admin_course_place','$admin_course_name','$admin_course_teacher_no','$admin_course_credit','$admin_course_time')";
$ChkLoginResult=db_query($conn,$Updatecourse_SQL);
//echo $Updatecourse_SQL;

if($ChkLoginResult>0){
    echo"<script>";
    echo"alert(\"增加课程成功！\");";
    echo "location.href=\"../admin/a_addcourse.php\"";
    echo"</script>";

}
else{
    echo"<script>";
    echo"alert(\修改失败，请重试！\");";
    echo "location.href=\"../admin/a_addcourse.php\"";
    echo"</script>";
}
?>
</body>
</html>