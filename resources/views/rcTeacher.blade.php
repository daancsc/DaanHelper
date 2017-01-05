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
                <input type="button" name="submit" class="btn btn-success btn-block" value="學生管理">
                <input type="button" name="submit" class="btn btn-info btn-block" value="缺勤管理">
            </div>
        </div>
    </div>
    <!--div id="search">
        @include('rollCall.search')
    </div>
    <div id="list">    
        <table class="table table-bordered table-responsive">
            <thead>
                <tr>
                    <td>學生</td>
                    @for($i=1; $i<=8; $i++)
                        @if($i==1)
                            <td>早讀</td>
                            <td>升旗</td>
                        @elseif($i==5)
                            <td>午休</td>
                        @endif
                        <td>第{{$i}}節</td>
                    @endfor
                    <td>操作</td>
                </tr>
            </thead>
            <tbody>
                @foreach($list as $list)
                    <tr>
                        <td>{{$list->nick}}</td>
                        @for($i=1; $i<=11; $i++)
                            <td>
                                <select>
                                    <option>正常</option>
                                    <option>遲到</option>
                                    <option>曠課</option>
                                    <option>缺勤</option>
                                    <option>病假</option>
                                    <option>公假</option>
                                    <option>事假</option>
                                    <option>喪假</option>
                                </select>
                            </td>
                        @endfor
                        <td><button class="btn btn-block">更新</button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div-->
</body>
</html>