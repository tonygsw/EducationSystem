<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>完成注册</title>
</head>
<body>

<?php
session_start();
//检测是否登录，若没登录则转向登录界面

if(!isset($_SESSION["username"])||$_SESSION["role"]!="teacher")
{
    header("Location:../login_teacher.php");
    exit();
}
//包含数据库连接文件
include("../conn/db_conn.php");
include("../conn/db_func.php");

$student_no=$_POST['student_no'];
$student_name=$_POST['student_name'];
$student_sex=$_POST['student_sex'];
$student_class=$_POST['student_class'];
$student_depart=$_POST['student_depart'];
$student_entertime=date("Y-m-d");

$UpdateStudent_SQL="INSERT into
student(student_no,student_name,student_entertime,student_class,student_depart,student_sex) 
values('$student_no','$student_name','$student_entertime','$student_class','$student_depart','$student_sex');";

$ChkLoginResult=db_query($conn,$UpdateStudent_SQL);

if($ChkLoginResult>0){
    echo"<script>";
    echo"alert(\"注册成功，又新增一名学生哦！\");";
    echo "location.href=\"teacher_function.php\"";
    echo"</script>";

}
else{
    echo"<script>";
    echo"alert(\"注册失败，请重新注册！！\");";
    echo "location.href=\"../tea/add.php\"";
    echo"</script>";
}

?>
</body>
</html>