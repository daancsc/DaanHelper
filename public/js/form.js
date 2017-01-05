$(function(){
	var ok = [];
	function isEmail(email){
		var rule = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z]+$/;
		return email.search(rule)!=-1;
	}
	function lengthOk(str, len){
		if(str == "" || str == undefined) return false;
		return str.length>=len;
	}
	function isConfirm(str1, str2){
		if(str1 == "" || str2 == "" || str1 == undefined || str2 == undefined) return false;
		return str1 === str2;
	}
	$('input').focus(function(){
		var p = "."+$(this).attr('name');
		$(p).text("");
		$(this).css('border-color', 'blue');
	})
	$('input').blur(function(){
		var input = $(this).val(), name = $(this).attr('name'), p = "."+name;
		$(this).css('border-color', 'red');
		if(name=='pwd' && isConfirm(input, $("input[name='confirmPwd']").val())){
			console.log('OAO');
			$(".confirmPwd").text("");
			$("input[name='confirmPwd']").css('border-color', '');
		}
		if(input == ""){
			$(p).text("此欄不可為空");
		}else if(name=='email' && !isEmail(input)){
			$(p).text("請輸入合法信箱");
		}else if(name=='nick' && !lengthOk(input, 2)){
			$(p).text("暱稱至少為2個字");
		}else if(name=='pwd' && !lengthOk(input, 8)){
			$(p).text("密碼至少為8位數");
		}else if(name=='confirmPwd' && !isConfirm(input, $("input[name='pwd']").val())){
			$(p).text("兩次密碼不同");
		}else{
			$(p).text("");
			$(this).css('border-color', '');
		}
		if(isEmail($('input[name="email"]').val()) && 
		   lengthOk($('input[name="nick"]').val(),2) &&
		   lengthOk($('input[name="pwd"]').val(),8) &&
		   isConfirm($('input[name="confirmPwd"]').val(), $('input[name="pwd"]').val())){
			$("input[name='submit']").removeAttr('disabled');
		}else{
			$("input[name='submit']").attr('disabled', true);
		}
	})
})