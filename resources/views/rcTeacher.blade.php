<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
    <title>木棉幫手</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/cwtexhei.css">
    <link rel="stylesheet" href="/DaanHelper/public/css/bootstrap.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/cwtexming.css">
    <link rel="stylesheet" href="/DaanHelper/public/css/font.css">
    <link rel="stylesheet" href="/DaanHelper/public/css/main.css">
    <style>
        h1{
            text-align: center;
        }
        .navbar {
            background-color: transparent;
            margin: 0;
        }
        td{
            text-align: center;
            vertical-align: center;
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
    <ul class="nav">
        <li>
            <a href=""><img src="/DaanHelper/public/css/image/talk.png"></a>
        </li>
        <li>
            <a href=""><img src="/DaanHelper/public/css/image/note.png"></a>
        </li>
        <li>
            <a href="#"><img src="/DaanHelper/public/css/image/RollCall.png"></a>
        </li>
        <li>
            <a href="../dashboard"><img src="/DaanHelper/public/css/image/setting.png"></a>
        </li>
        </ul>
        <div style="margin: auto;" class="panel panel">
            <div class="panel-body">
                <div class="input">
                    <input type="button" name="submit" class="btn btn-success btn-block" value="班級管理" id='cla'>
                    <input type="button" name="submit" class="btn btn-info btn-block" value="缺勤管理" id='man'>
                    <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
                </div>
            </div>
        </div>
        
        <div id="class" class="panel-body">
            <div class="input input-group">
                <span class="input-group-addon">日期</span>
                <select class="form-control" name="week" id="week">
                    <option value="mon">星期一</option>
                    <option value="tue">星期二</option>
                    <option value="wed">星期三</option>
                    <option value="thu">星期四</option>
                    <option value="fri">星期五</option>
                    <option value="sta">星期六</option>
                    <option value="sun">星期日</option>
                </select>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <td>時間</td>
                        <td>任課班級</td>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $time = ["早讀", "升旗", "第一節", "第二節", "第三節", "第四節", "午休", "第五節", "第六節", "第七節", "第八節"]; 
                        $val = ['morning', 'raising', '1', '2', '3', '4', 'rest', '5', '6', '7', '8'];
                    ?>
                    @for($i=0;$i<11;$i++)
                        <tr>
                            <td><?php echo $time[$i];?></td>
                            <td id=<?php echo $val[$i];?>>
                                <select class="form-control" name="class">
                                    <option value="none">沒課</option>
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
                                <select class="form-control" name="grade" id="grade">
                                    <option value="none">沒課</option>
                                    <option value="gradeOne">一年級</option>
                                    <option value="gradeTwo">二年級</option>
                                    <option value="gradeThree">三年級</option>
                                </select>
                            </td>
                        </tr>
                    @endfor 
                </tbody>
            </table>
        </div>
        <div id="manage" class="panel-body">
            <div class="input input-group">
                <span class="input-group-addon">時間</span>
                <select class="form-control" name="date" id="date">
                    <option value="mon">星期一</option>
                    <option value="tue">星期二</option>
                    <option value="wed">星期三</option>
                    <option value="thu">星期四</option>
                    <option value="fri">星期五</option>
                    <option value="sta">星期六</option>
                    <option value="sun">星期日</option>
                </select>
                <select class="form-control" name="time" id="time">
                    @for($i=0;$i<11;$i++)
                        <option value="<?php echo $val[$i];?>"><?php echo $time[$i];?></option>
                    @endfor
                </select>
            </div>
            <div id="mng">
                
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var token = $('input[name=_token]').val();
        $(function(){
            $('#class').hide();
            $('#manage').hide();
            init();
        })
        $('#cla').click(function(){
            $('#class').show();
            $('.table').hide();
            $('#manage').hide();
        })
        $('#man').click(function(){
            $('#class').hide();
            $('#manage').show();
        })
        function manage(date, time){
            $.ajax({
                url:"search",
                type:"POST",
                data:{'_token':token, 'date':date, 'time':time},
                dataType:"text",
                success:function(msg){
                    if(msg == "null"){
                        console.log("OA");
                        $('#mng').html("<h1>本節沒有任課班級</h1>");
                    }else if(msg == "[]"){
                        $('#mng').html("<h1>任課班級沒有學生註冊</h1>");
                    }else{
                        var data = JSON.parse(msg);
                        var sta = ['OK', 'delay', 'lack', 'waste', 'ill', 'public', 'thing', 'funeral'];
                        var status = ['正常', '遲到', '缺課', '曠課', '病假', '公假', '事假', '喪假'];
                        var table = "<table class='table'><thead><tr><td>學生姓名</td><td>出勤紀錄</td></tr></thead>";
                        for(var i=0; i<data.length; i++){
                            table += "<tr><td>"+data[i]['name']+"</td><td id='"+data[i]['email']+"'><select class='form-control' name='status'>";
                            for(var j=0; j<status.length; j++){
                                table += "<option value='"+sta[j]+"'>"+status[j]+"</option>";
                            }
                            table += "</select></tr>";
                        }
                        $('#mng').html(table);
                        init();
                    }
                }
            })
        }
        function init(){
            $('select[name=status]').change(function(){
                console.log('OAO');
                var email = $(this).parent().attr('id');
                var status = $(this).val();
                var date = $('select[name=date]').val();
                var time = $('select[name=time]').val();
                $.ajax({
                    url:'addStatus',
                    type:'post',
                    data:{'_token':token ,'email':email, 'date':date, 'time':time, 'status':status},
                    dataType:'text',
                    success: function(msg){
                        console.log(msg);
                    }
                })
            })
        }
        $('select[name=date]').change(function(){
            var date = $(this).val();
            var time = $('select[name=time]').val();
            manage(date, time);
        })
        $('select[name=time]').change(function(){
            var date = $('select[name=date]').val();
            var time = $(this).val();
            manage(date, time);
        })
        $('select[name=week]').change(function(){
            $('.table').show();
            $('select[name=class]').val('none');
            $('select[name=grade]').val('none');
            var date = $('select[name=week]').val();
            $.ajax({
                url: 'class',
                type: 'post',
                data: {'_token':token, 'date':date},
                dataType: 'text',
                success: function(msg){
                    var data = JSON.parse(msg);
                    for(var i=0; i<data.length; i++){
                        console.log(data[i]);
                        $("#"+data[i]['time']+">"+"select[name=class]").val(data[i]['class']);
                        $("#"+data[i]['time']+">"+"select[name=grade]").val(data[i]['grade']);
                    }
                }
            })
        })
        function addNew(grade, Class, date, time){
            $.ajax({
                url: "add",
                type: "post",
                data: {'_token':token, 'date':date, 'time':time, 'class':Class, 'grade':grade},
                dataType: "text",
                success: function(msg){
                    console.log(msg);
                }
            })
        }
        $('select[name=class]').change(function(){
            var id = $(this).parent().attr('id');
            var Class = $(this).val();
            var grade = $("#" + id + " > #grade").val();
            var date = $('#week').val();
            var time = id;
            addNew(grade, Class, date, time);
        })
        $('select[name=grade]').change(function(){
            var id = $(this).parent().attr('id');
            var Class = $("#" + id + " > select[name=class]").val();
            var grade = $(this).val();
            var date = $('#week').val();
            var time = id;
            addNew(grade, Class, date, time);
        })
    </script>
</body>

</html>