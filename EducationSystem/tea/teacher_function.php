<?php
session_start();
//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION["username"]))
{
    header("Location:../login_student.php");
    exit();
}
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
    <meta name="description" content="学生功能选择界面">
    <meta name="author" content="HUN-goodgoodstudy-gswycf">

    <title>湖南大学 – 学生功能选择界面</title>

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
    <link href="../css/owl.theme.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">

    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <script src="../js/modernizr-2.6.2.min.js"></script>  <!-- Modernizr /-->
</head>

<!-- NavBar-->
<nav class="navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://www.hnu.edu.cn/">湖南大学</a>
        </div>

        <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
            <ul class="nav navbar-nav">

                <li class="menuItem">欢迎
                    <?php
                    echo $_SESSION["username"]
                    ?>
                    老师</li>
            </ul>
        </div>

    </div>
</nav>

<!-- What is --><!--style="border-top: 0"-->
<div id="Whoarewe" class="content-section-b"  style="background-image: url(../img/img_10.jpg)">
    <div class="container">

        <div class="col-md-6 col-md-offset-3 text-center wrap_title">
            <h2>功能选择界面</h2>
            <p class="lead" style="margin-top:0">老师辛苦了</p>

        </div>

        <div class="row">
            <div class="col-sm-4 wow fadeInDown text-center">
                <img class="rotate" src="../img/student/course.jpg" alt="Generic placeholder image">
                <h3>课表查询</h3>
                <p class="lead">
                    <a href="showcourse.php">查看自己负责的课程</a>
                </p>

                <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
            </div><!-- /.col-lg-4 -->

            <div class="col-sm-4 wow fadeInDown text-center">
                <img  class="rotate" src="../img/student/grade.png" alt="Generic placeholder image">
                <h3>成绩录入</h3>
                <p class="lead">
                    <a href="showgrade.php">录入成绩</a>
                </p>
                <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
            </div><!-- /.col-lg-4 -->

            <div class="col-sm-4 wow fadeInDown text-center">
                <img  class="rotate" src="../img/icon/retina.svg" alt="Generic placeholder image">
                <h3>同班同学</h3>
                <p class="lead">查看班级情况</p>
                <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
            </div><!-- /.col-lg-4 -->

        </div><!-- /.row -->

        <div class="row tworow">

            <div class="col-sm-4  wow fadeInDown text-center">
                <img class="rotate" src="../img/icon/laptop.svg" alt="Generic placeholder image">
                <h3>院系老师查询</h3>
                <p class="lead">
                    <a href="#">查看本院老师</a>
                </p>
                <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
            </div><!-- /.col-lg-4 -->

            <div class="col-sm-4 wow fadeInDown text-center">
                <img  class="rotate" src="../img/icon/map.svg" alt="Generic placeholder image">
                <h3>密码修改</h3>
                <p class="lead">修改登录密码</p>
                <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
            </div><!-- /.col-lg-4 -->

            <div class="col-sm-4 wow fadeInDown text-center">
                <img  class="rotate" src="../img/icon/browser.svg" alt="Generic placeholder image">
                <h3>回到主页</h3>
                <p class="lead">
                    <a href="../index.html">主页</a>
                </p>
                <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
            </div><!-- /.col-lg-4 -->

        </div><!-- /.row -->
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

