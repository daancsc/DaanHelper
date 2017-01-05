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
    <link rel="stylesheet" href="css/main.css">
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
            <a href=""><img src="css/image/talk.png"></a>
        </li>
        <li>
            <a href=""><img src="css/image/note.png"></a>
        </li>
        <li>
            <a href="rollCall/{{ $indentity }}"><img src="css/image/RollCall.png"></a>
        </li>
        <li>
            <a href="dashboard"><img src="css/image/setting.png"></a>
        </li>
    </ul>
</body>

</html>