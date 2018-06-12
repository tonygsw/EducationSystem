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

if(!isset($_SESSION["username"])||$_SESSION["role"]!="admin")
{
    header("Location:../login_admin.php");
    exit();
}
//包含数据库连接文件
include("../conn/db_conn.php");
include("../conn/db_func.php");

$admin_no=$_SESSION['userno'];
$admin_password0=$_POST['admin_password0'];
$admin_password1=$_POST['admin_password1'];
$admin_password2=$_POST['admin_password2'];


if ($admin_password1==$admin_password2&&$admin_password0==$_SESSION['password'])
{
    $Updateadmin_SQL="Update admin set admin_password='$admin_password1' where admin_no='$admin_no'";
    echo $Updateadmin_SQL;
    $ChkLoginResult=db_query($conn,$Updateadmin_SQL);
    if($ChkLoginResult>0){
        echo"<script>";
        echo"alert(\"修改密码成功，请重新登录！\");";
        session_destroy();
        echo "location.href=\"../login_admin.php\"";
        echo"</script>";

    }
    else{
        echo"<script>";
        echo"alert(\"修改失败！\");";
        echo "location.href=\"../admin/Changepwd.php\"";
        echo"</script>";
    }
}
else{
    if($admin_password1!=$admin_password2)
    {
        echo"<script>";
        echo"alert(\"前后两次密码不一致或者原密码错误，请重新修改！\");";
        echo "location.href=\"../admin/Changepwd.php\"";
        echo"</script>";
    }
    else
    {
        echo"<script>";
        echo"alert(\"原密码错误，请重新修改！\");";
        echo "location.href=\"../admin/Changepwd.php\"";
        echo"</script>";
    }

}

?>
</body>
</html>