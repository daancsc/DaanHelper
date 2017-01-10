<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
    <title>木棉幫手</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/cwtexhei.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/cwtexming.css">
    <link rel="stylesheet" href="/css/font.css">
    <link rel="stylesheet" href="/css/main.css">
    <style>
        .navbar {
            background-color: transparent;
            margin: 0;
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
            <a href=""><img src="/css/image/talk.png"></a>
        </li>
        <li>
            <a href=""><img src="/css/image/note.png"></a>
        </li>
        <li>
            <a href="#"><img src="/css/image/RollCall.png"></a>
        </li>
        <li>
            <a href=""><img src="/css/image/setting.png"></a>
        </li>
    </ul>
    <table class="table">
       <thead>
            <tr>
                <td>日期</td>
                <td>時間</td>
                <td>狀態</td>
            </tr>
       </thead>
       <tbody>
        @foreach($list as $list)
            <tr>
                <td id='date'>
                    <p>{{$list->date}}</p>
                </td>
                <td id='time'>
                    <p>{{$list->time}}</p>
                </td>
                <td id='status'>
                    <p>{{$list->status}}</p>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <script>
        var Date = ["星期一", "星期二", "星期三", "星期四", "星期五", "星期六", "星期天"];
        var dv = ["mon", "tue", "wed", "thu", "fri", "sat", "sun"];
        var Time = ["早讀", "升旗", "第一節", "第二節", "第三節", "第四節", "午休", "第五節", "第六節", "第七節", "第八節"]; 
        var tv = ['morning', 'raising', '1', '2', '3', '4', 'rest', '5', '6', '7', '8'];
        var sv = ['OK', 'delay', 'lack', 'waste', 'ill', 'public', 'thing', 'funeral'];
        var Status = ['正常', '遲到', '缺課', '曠課', '病假', '公假', '事假', '喪假'];
        $('#date').each(function(i, date){
            var d = $(this).children().text();
            for(var j=0; j<dv.length;j++){
                //console.log(dv[j] + "," + d);
                if(dv[j] == d){
                    //conexsole.log(Date[j]);
                    $(this).children().text(Date[j]);
                }
            }
        })
        $('#time').each(function(i, time){
            var t = $(this).children().text();
            for(var j=0; j<tv.length; j++){
                if(tv[j] == t){
                    $(this).children().text(Time[j]);
                }
            }
        })
        $('#status').each(function(i, time){
            var s = $(this).children().text();
            for(var j=0; j<sv.length; j++){
                if(sv[j] == s){
                    $(this).children().text(Status[j]);
                }
            }
        })
    </script>
</body>

</html>