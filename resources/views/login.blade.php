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
    <style>
        .navbar {
            background-color: transparent;
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
			<img src="css/icon.png" class="img-responsive" style="width: 60%;">
		</div>
		<div class="panel-body">
			<form action="login" method="post" id="form">
				<p style="color: red" id="msg"></p>
				<div class="input input-group">
					<span class="input-group-addon">使用者帳號</span>
			   		<input type="text" id="email" name="email" placeholder="email" class="form-control">
			   	</div>
			   	<div class="input input-group">
			   		<span class="input-group-addon">使用者密碼</span>
			   		<input type="password" id="pwd" name="pwd" placeholder="password" class="form-control">
			   	</div>
				<input type="hidden" name="_token" value="<?php echo csrf_token();?>"></p>
				<p id="error"></p>
				<div class="input">
			   		<input type="button" name="submit" class="btn btn-info btn-block" value="登入帳號">
			   		<a href="signup" class="btn btn-danger btn-block">註冊帳號</a>
			  	</div>
			</form>
		</div>
	</div>
	</center>
	<script type="text/javascript">
		$("input[name='submit']").click(function(){
			$.ajax({
				url: "login",
				type: "post", 
				data: $('form').serialize(),
				dataType: "text",
				success: function(msg){
					if(msg=="false"){
						$("#msg").text("使用者帳號或密碼錯誤");
					}else{
						location.href = "login";
					}
				}
			});
		})
	</script>
</body>
</html>