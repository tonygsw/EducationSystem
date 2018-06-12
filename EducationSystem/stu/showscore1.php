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
$ShowCourse_sql="SELECT * from grade,course where grade.course_no=course.course_no and student_no='$student_no' ORDER BY course.course_no";
$ShowCourseResult=db_query($conn,$ShowCourse_sql);
?>
<!-- FlatFy Theme - Andrea Galanti /-->
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="courese">
    <meta name="author" content="tonygsw">

    <title>湖南大学 – 成绩查询</title>
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Google Web Font -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>

    <!-- Custom CSS-->
    <link href="../css/general.css" rel="stylesheet">

    <!-- Owl-Carousel -->
    <link href="../css/custom.css" rel="stylesheet">
    <link href="../css/owl.carousel.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <linnk href="../css/owl.theme.css" rel="stylesheet">
        <lik href="../css/animate.css" rel="stylesheet">

            <!-- Magnific Popup core CSS file -->
            <link rel="stylesheet" href="../css/magnific-popup.css">

            <script src="../js/modernizr-2.6.2.min.js"></script>  <!-- Modernizr /-->
</head>

<body id="home">

<!-- Preloader -->
<div id="preloader">
    <div id="status"></div>
</div>

<!-- FullScreen -->
<div class="intro-header">
    <div class="col-xs-12 text-center abcen1">
        <h3 class="h3_home wow fadeIn" data-wow-delay="0.4s">个人成绩</h3>
        <h3 class="h3_home wow fadeIn" data-wow-delay="0.6s">好好学习，天天向上</h3>
        <ul class="list-inline intro-social-buttons">
            <li id="clean"><a href="../conn/CleanSession.php" class="btn  btn-lg mybutton_cyano wow fadeIn" data-wow-delay="0.8s"><span class="network-name">退出登录</span></a>
            </li>
            <li id="index" ><a href="../index.html" class="btn  btn-lg mybutton_standard wow swing wow fadeIn" data-wow-delay="1.2s"><span class="network-name">返回主页</span></a>
            </li>
        </ul>
        <table width="610" border="0" align="center" cellpadding="0" cellspacing="1">
            <tr bgcolor="#0066CC">
                <td width="80" align="center"><a class="form-control">课程编码</a></td>
                <td width="220" align="center"><a class="form-control">课程名</a></td>
                <td width="220" align="center"><a class="form-control">成绩</a></td>
            </tr>
            <?php
            if(db_num_rows($ShowCourseResult)>0){
                $number=db_num_rows($ShowCourseResult);
                if(empty($_GET['p']))
                    $p=0;
                else {$p=$_GET['p'];}
                $check=$p +10;
                for($i=0;$i<$number;$i++){
                    $row=db_fetch_array($ShowCourseResult);
                    if($i>=$p && $i < $check){
                        if(1)
                            echo"<tr bgcolor='#DDDDDD'>";
                        else
                            echo"<tr>";
                        echo"<td width='220'> <a class='h3_home wow fadeIn'>".$row['course_no']."</a></td>";
                        echo"<td width='220'> <a class='h3_home wow fadeIn'>".$row['course_name']."</a></td>";
                        echo"<td width='220'> <a class='h3_home wow fadeIn'>".$row['grade']."</a></td>";

                        echo"</tr>";
                        $j=$i+1;
                    }
                }
            }
            ?>
        </table>
    </div>
</div>




<!-- JavaScript -->
<script src="../js/jquery-1.10.2.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/owl.carousel.js"></script>
<script src="../js/script.js"></script>
<!-- StikyMenu -->
<script src="../js/stickUp.min.js"></script>
<script type="text/javascript">
    jQuery(function($) {
        $(document).ready( function() {
            $('.navbar-default').stickUp();

        });
    });

</script>
<!-- Smoothscroll -->
<script type="text/javascript" src="../js/jquery.corner.js"></script>
<script src="../js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<script src="../js/classie.js"></script>
<script src="../js/uiMorphingButton_inflow.js"></script>
<!-- Magnific Popup core JS file -->
<script src="../js/jquery.magnific-popup.js"></script>
</body>

</html>