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
$admin_teacher_no=$_POST['admin_teacher_no'];
$admin_teacher_password=$_POST['admin_teacher_password'];
$admin_teacher_name=$_POST['admin_teacher_name'];
$admin_teacher_department_no=$_POST['admin_teacher_department_no'];
$admin_teacher_tel=$_POST['admin_teacher_tel'];

//$Updatecourse_SQL="alter table course add ('$admin_course_no')";
$Updateteacher_SQL= "INSERT INTO teacher (`teacher_no`, `teacher_password`, `teacher_name`, `teacher_department_no`, `teacher_tel`) VALUES ('$admin_teacher_no','$admin_teacher_password','$admin_teacher_name','$admin_teacher_department_no','$admin_teacher_tel')";
//$Updatecourse_SQL= "INSERT INTO course (`course_no`, `course_place`, `course_maxnum`, `course_name`, `course_credit`, `course_time`) VALUES ('$admin_course_no','$admin_course_place','$admin_course_maxnum','$admin_course_name','$admin_course_credit','$admin_course_time')";
//$Updatecourse_SQL= "INSERT INTO course ( `course_teacher_no`) VALUES ('$admin_course_teacher_no')";
//$Updatecourse_SQL= "INSERT INTO course (`course_no`, `course_name`, `course_teacher_no`, `course_maxnum`, `course_credit`, `course_time`, `course_place`) VALUES ('$admin_course_no','$admin_course_name','$admin_course_teacher_no','$admin_course_maxnum','$admin_course_credit','$admin_course_time','$admin_course_place')";
//$Updatecourse_SQL="Update course set course_maxnum=155 where course_no='$admin_course_no'";
$ChkLoginResult=db_query($conn,$Updateteacher_SQL);


if($ChkLoginResult>0){
    echo"<script>";
    echo"alert(\"增加老师成功！\");";
    echo "location.href=\"../admin/a_addteacher.php\"";
    echo"</script>";

}
else{
    echo"<script>";
    echo"alert(\修改失败，请重试！\");";
    echo "location.href=\"../admin/a_addteacher.php\"";
    echo"</script>";
}


?>
</body>
</html>