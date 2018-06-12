<!DOCTYPE HTML>
<?php
session_start();
//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION["userno"])||$_SESSION["role"]!='teacher')
{
    header("Location:../login_teacher.php");
    exit();
}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>成绩录入</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

    <!-- animate1.css -->
    <link rel="stylesheet" href="../css/animate1.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="../css/icomoon1.css">
    <!-- Themify Icons-->
    <link rel="stylesheet" href="../css/themify-icons1.css">
    <!-- bootstrap1  -->
    <link rel="stylesheet" href="../css/bootstrap1.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="../css/magnific-popup1.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="../css/owl.carousel.min1.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min1.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="../css/style1.css">

    <!-- Modernizr JS -->
    <script src="../js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="../js/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div class="gtco-loader"></div>

<div id="page">


    <div class="page-inner">
        <nav class="gtco-nav" role="navigation">
            <div class="gtco-container">

                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div id="gtco-logo"><a href="../index.html">成绩更新界面 <em>.</em></a></div>
                    </div>
                    <div class="col-xs-8 text-right menu-1">
                        <ul>
                            <li><a href="http://www.hnu.edu.cn/">湖大官网</a></li>
                            <li><a href="../index.html">回到主页</a></li>
                            <li class="btn-cta"><a href="#"><span>
                                        <?php
                                        echo $_SESSION['username'];
                                        ?>
                                    </span></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>

        <header id="gtco-header" class="gtco-cover" role="banner" style="background-image: url(../img/img_4.jpg)">
            <div class="overlay"></div>
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-12 col-md-offset-0 text-left">


                        <div class="row row-mt-15em">
                            <div class="col-md-7 mt-text animate1-box" data-animate1-effect="fadeInUp">
                                <span class="intro-text-small">Welcome to 成绩更新界面</span>
                                <h1>分分分,</h1>
                                <h1>学生的命根！</h1>

                            </div>
                            <div class="col-md-4 col-md-push-1 animate1-box" data-animate1-effect="fadeInRight">
                                <div class="form-wrap">
                                    <div class="tab">
                                        <ul class="tab-menu">
                                            <li class="gtco-second"><a href="#" data-tab="login">请输入以下信息：</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-content-inner active" data-content="signup">
                                                <form method="post"  action="check_update_grade.php">
                                                    <div class="row form-group">
                                                        <div class="col-md-12">
                                                            <label for="course_no">课程号</label>
                                                            <input  name="course_no" type="text" class="form-control" id="textfield1">
                                                        </div>
                                                    </div>

                                                    <div class="row form-group">
                                                        <div class="col-md-12">
                                                            <label for="student_no">学生学号</label>
                                                            <input  name="student_no" type="text" class="form-control" id="textfield2">
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-md-12">
                                                            <label for="grade">学生成绩</label>
                                                            <input  name="grade" type="text" class="form-control" id="textfield3">
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-md-12">
                                                            <input type="submit" class="btn btn-primary" value="Submit">
                                                        </div>
                                                    </div>


                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

    </div>

</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="../js/jquery.min1.js"></script>
<!-- jQuery Easing -->
<script src="../js/jquery.easing.1.31.js"></script>
<!-- bootstrap1 -->
<script src="../js/bootstrap.min1.js"></script>
<!-- Waypoints -->
<script src="../js/jquery.waypoints.min1.js"></script>
<!-- Carousel -->
<script src="../js/owl.carousel.min1.js"></script>
<!-- countTo -->
<script src="../js/jquery.countTo1.js"></script>
<!-- Magnific Popup -->
<script src="../js/jquery.magnific-popup.min1.js"></script>
<script src="../js/magnific-popup-options1.js"></script>
<!-- Main -->
<script src="../js/main.js"></script>

</body>
</html>














