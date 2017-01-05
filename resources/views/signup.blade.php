<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
    <title>木棉幫手</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/cwtexhei.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/cwtexming.css">
    <link rel="stylesheet" href="css/font.css">
    <script type="text/javascript" src="js/form.js"></script>
    <style>
        .navbar {
            background-color: transparent;
        }
        p{
        	margin:0;
        }
    </style>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">木棉幫手</a>
			</div>
		</div>
	</nav>
	<center>
	<div style="margin: auto;" class="panel panel">
		<div class="panel-heading">
			<img src="css/icon.png" class="img-responsive" style="width: 50%;">
		</div>
		<div class="panel-body">
			<form action="signup" method="post">
			    <div class="input input-group">
					<span class="input-group-addon">身份</span>
					<select class="form-control" name="indentity">
                        <option value="student" selected>學生</option>
					    <option value="teacher">老師</option> 
					</select>
				</div>
				<script type="text/javascript">
					$('select[name=indentity]').change(function(){
						if($('select[name=indentity]').val()=='teacher') $('#stu').hide();
						else $('#stu').show();
					})
				</script>
				<div id='stu'>
					<div class="input input-group">
						<span class="input-group-addon">班級</span>
						<select class="form-control" name="class">
							<option value="1">電機甲班</option>
							<option value="2">電機乙班</option>
							<option value="3">電子甲班</option>
							<option value="4">電子乙班</option>
							<option value="5">資訊甲班</option>
							<option value="6">資訊乙班</option>
							<option value="7">控制甲班</option>
							<option value="8">控制乙班</option>
							<option value="9">機械甲班</option>
							<option value="10">機械乙班</option>
							<option value="11">製圖甲班</option>
							<option value="12">製圖乙班</option>
							<option value="13">冷凍甲班</option>
							<option value="14">冷凍乙班</option>
							<option value="15">汽車甲班</option>
							<option value="16">汽車乙班</option>
							<option value="17">建築甲班</option>
							<option value="18">建築乙班</option>
							<option value="19">圖傳甲班</option>
							<option value="20">圖傳乙班</option>
							<option value="21">綜高忠</option>
							<option value="22">綜高孝</option>
							<option value="23">綜高仁</option>
							<option value="24">綜高愛</option>
							<option value="25">綜職</option>
						</select>
						<select class="form-control" name="grade">
							<option value="gradeOne">一年級</option>
							<option value="gradeTwo">二年級</option>
							<option value="gradeTherr">三年級</option>
						</select>
					</div>
				</div>
				<div class="input input-group">
						<span class="input-group-addon">姓名</span>
						<input type="text" id="name" name="name" placeholder="請輸入真實姓名" class="form-control">
					</div>	
				<div class="input input-group">
					<span class="input-group-addon">信箱</span>
					<input type="text" id="email" name="email" placeholder="請輸入Email" class="form-control">
				</div>
				<p class="email" style="color: red;"></p>
				<div class="input input-group">
					<span class="input-group-addon">暱稱</span>
					<input type="text" id="nick" name="nick" placeholder="請輸入暱稱" class="form-control">
				</div>
				<p class="nick" style="color: red;"></p>
				<div class="input input-group">
					<span class="input-group-addon">密碼</span>
					<input type="password" id="pwd" name="pwd" placeholder="請輸入密碼" class="form-control">
				</div>
				<p class="pwd" style="color: red;"></p>
				<div class="input input-group">
					<span class="input-group-addon">驗證</span>
					<input type="password" id="confirmPwd" name="confirmPwd" placeholder="請重新輸入密碼" class="form-control">
				</div>
				<p class="confirmPwd" style="color: red;"></p>
			   	<input type="hidden" name="_token" value="<?php echo csrf_token();?>"></p>
				<div class="input">
					<input type="submit" value="註冊帳號" name="submit" class="btn btn-info btn-block" disabled>
					<a href="login" class="btn btn-danger btn-block">回登入頁</a>
				</div>
			</form>
		</div>
	</div>
	</center>
</body>
</html>