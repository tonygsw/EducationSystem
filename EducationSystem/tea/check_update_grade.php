<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
</head>
<body>
<?php
include("../conn/db_conn.php");
include("../conn/db_func.php");
global $conn;
session_start();
$teacher_no=$_SESSION['userno'];
$course_no=$_POST['course_no'];
$student_no=$_POST['student_no'];
$grade=$_POST['grade'];

echo $course_no,$student_no,$grade;

$CheckCourse_sql="select * from course where course_teacher_no = '$teacher_no' and course_no = '$course_no'";
$CheckCourseResult=db_query($conn,$CheckCourse_sql);
$number=db_num_rows($CheckCourseResult);
$row=db_fetch_array($CheckCourseResult);

echo $row['course_name'];

if($number!=0){//先看老师能不能对这个课程操作，能，再看学生对不对

    $Check_sql="select * from grade where student_no='$student_no' and course_no='$course_no'";
    $CheckResult=db_query($conn,$Check_sql);
    $number=db_num_rows($CheckResult);
    $row=db_fetch_array($CheckResult);

    if($number!=0){//学生存在，可以更新成绩

        $UpdateGrade="update grade set grade='$grade' where student_no='$student_no' and course_no='$course_no'";
        $UpdateGradeResult=db_query($conn,$UpdateGrade);

        $number=db_num_rows($UpdateGradeResult);
        $row=db_fetch_array($UpdateGradeResult);

        if($number<=0){//因为是插入了一行
            echo"<script>";
            echo  "已插入";
            header("Location:showgrade.php");//插入成功以后跳转显示grade表格
            echo"</script>";
        }else{//插入不成功
            echo"<script>";
            echo"alert(\"输入信息有误，请重新输入\");";
            echo"location.href=\"update_grade.php\"";
            echo"</script>";
        }
    }else {//不是，返回输入界面
        echo "<script>";
        echo "alert(\"输入信息有误，请重新输入！\");";
        echo"location.href=\"update_grade.php\"";
        echo "</script>";
    }
}else{//找不到则报错，出现警示框，重新输入
    echo"<script>";
    echo"alert(\"您不能对这门课程进行操作！\");";
 //   echo"location.href=\"update_grade.php\"";
    echo"</script>";
}

?>
</body>
</html>