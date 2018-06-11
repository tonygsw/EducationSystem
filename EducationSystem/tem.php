





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>登录界面</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<style>
div1{text-align:center}
</style>
<div class="div1">
    <form method="post" action="check_login_stuent.php">
        <table width="211" height="111" border="0" cellpadding="0" cellspacing="0">
            <caption>
用户登录
            </caption>
            <tr>
                <td width="69">学号：</td>
                <td width="142"><label for="textfield"></label>
                    <input name="student_no" type="text" id="textfield" size="15" /></td>
            </tr>
            <tr>
                <td>密码：</td>
                <td><label for="textfield2"></label>
                    <input name="student_password" type="password" id="textfield2" size="15" /></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="button" id="button" value="提交" /> &nbsp;&nbsp;
                    <input type="reset" name="button2" id="button2" value="重置" />
                </td>
            </tr>
        </table>
    </form>
    <p><a href="index.html">返回主界面</a></p>
    </div>
</body>
</html>



<div class="tab-content-inner" data-content="login">
    <form action="#">
        <div class="row form-group">
            <div class="col-md-12">
                <label for="username">学号</label>
                <input type="text" class="form-control" id="username">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
        </div>
    </form>
</div>