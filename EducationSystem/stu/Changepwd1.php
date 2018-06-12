<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>完成修改密码操作</title>
</head>
<body>

<?php
session_start();
//检测是否登录，若没登录则转向登录界面

if(!isset($_SESSION["username"])||$_SESSION["role"]!="student")
{
    header("Location:../login_student.php");
    exit();
}
//包含数据库连接文件
include("../conn/db_conn.php");
include("../conn/db_func.php");

$student_no=$_SESSION['userno'];
$student_password0=$_POST['student_password0'];
$student_password1=$_POST['student_password1'];
$student_password2=$_POST['student_password2'];


if ($student_password1==$student_password2&&$student_password0==$_SESSION['password'])
{
    $UpdateStudent_SQL="Update student set student_password='$student_password1' where student_no='$student_no'";
    $ChkLoginResult=db_query($conn,$UpdateStudent_SQL);
    if($ChkLoginResult>0){
        echo"<script>";
        echo"alert(\"修改密码成功，请重新登录！\");";
        session_destroy();
        echo "location.href=\"../login_student.php\"";
        echo"</script>";

    }
    else{
        echo"<script>";
        echo"alert(\"修改失败！\");";
        echo "location.href=\"../stu/Changepwdd.php\"";
        echo"</script>";
    }
}
else{
    if($student_password1!=$student_password2)
    {
        echo"<script>";
        echo"alert(\"前后两次密码不一致或者原密码错误，请重新修改！\");";
        echo "location.href=\"../stu/Changepwdd.php\"";
        echo"</script>";
    }
    else
    {
        echo"<script>";
        echo"alert(\"原密码错误，请重新修改！\");";
        echo "location.href=\"../stu/Changepwdd.php\"";
        echo"</script>";
    }

}
?>
</body>
</html>