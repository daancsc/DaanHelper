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
        </ul-->
        <div style="margin: auto;" class="panel panel">
            <div class="panel-body">
                <div class="input">
                    <input type="button" name="submit" class="btn btn-success btn-block" value="班級管理">
                    <input type="button" name="submit" class="btn btn-info btn-block" value="缺勤管理">
                </div>
            </div>
        </div>
        <div id="class">
            <div class="panel-body">
                <form action="classManage" method="post">
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
                            <option value="gradeThree">三年級</option>
                        </select>
                    </div>
                    <div class="input input-group">
                        <span class="input-group-addon">時間</span>
                        <select class="form-control" name="week">
                            <option value="mon">星期一</option>
                            <option value="tue">星期二</option>
                            <option value="wed">星期三</option>
                            <option value="thu">星期四</option>
                            <option value="fri">星期五</option>
                            <option value="sta">星期六</option>
                            <option value="sun">星期日</option>
                        </select>
                        <select class="form-control" name="time">
                            <option value="">早讀</option>
                            <option value="">升旗</option>
                            <option value="">第一節</option>
                            <option value="">第二節</option>
                            <option value="">第三節</option>
                            <option value="">第四節</option>
                            <option value="">午休</option>
                            <option value="">第五節</option>
                            <option value="">第六節</option>
                            <option value="">第七節</option>
                            <option value="">第八節</option>
                        </select>
                    </div>
                    <br>
                    <div class="input">
                        <input type="submit" value="新增" name="submit" class="btn btn-info btn-block">
                    </div>
                </form>
            </div>
            <div id="late">

            </div>
    </div>
</body>

</html>