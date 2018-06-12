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

if(!isset($_SESSION["userno"])||$_SESSION["role"]!="teacher")
{
    header("Location:../login_teacher.php");
    exit();
}
//包含数据库连接文件
include("../conn/db_conn.php");
include("../conn/db_func.php");

$teacher_no=$_SESSION['userno'];
$teacher_password0=$_POST['teacher_password0'];
$teacher_password1=$_POST['teacher_password1'];
$teacher_password2=$_POST['teacher_password2'];

if ($teacher_password1==$teacher_password2&&$teacher_password0==$_SESSION['password'])
{
    $UpdateTeacher_SQL="Update teacher set teacher_password='$teacher_password1' where teacher_no='$teacher_no'";
    $ChkLoginResult=db_query($conn,$UpdateTeacher_SQL);
    if($ChkLoginResult>0){
        echo"<script>";
        echo"alert(\"修改密码成功，请重新登录！\");";
        session_destroy();
        echo "location.href=\"../login_teacher.php\"";
        echo"</script>";

    }
    else{
        echo"<script>";
        echo"alert(\"修改失败！\");";
        echo "location.href=\"../tea/Changepwd.php\"";
        echo"</script>";
    }
}
else{
    if($student_password1!=$student_password2)
    {
        echo"<script>";
        echo"alert(\"前后两次密码不一致或者原密码错误，请重新修改！\");";
        echo "location.href=\"../tea/Changepwd.php\"";
        echo"</script>";
    }
    else
    {
        echo"<script>";
        echo"alert(\"原密码错误，请重新修改！\");";
        echo "location.href=\"../tea/Changepwd.php\"";
        echo"</script>";
    }

}

?>
</body>
</html>