<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
</head>
<body>
<?php
session_start();
include("conn/db_conn.php");
include("conn/db_func.php");
global $conn;

$sno=$_POST['student_no'];
$password=$_POST['student_password'];


$ChkLogin="select * from student where student_no='$sno' and student_password='$password'";

$ChkLoginResult=db_query($conn,$ChkLogin);

$number=db_num_rows($ChkLoginResult);
$row=db_fetch_array($ChkLoginResult);

if($number>0){
    echo"<script>";
        echo  "进入";
        session_start();
        $_SESSION["userno"]=$sno;
        $_SESSION["username"]=$row['student_name'];
        $_SESSION["role"]="student";
        $_SESSION["password"]=$password;
        header("Location:stu/student_function.php");
    echo"</script>";
}else{
    echo"<script>";
    echo"alert(\"错误的用户名或者密码，请重新登录\");";
    echo"location.href=\"login_student.php\"";
    echo"</script>";
}
?>
</body>
</html>