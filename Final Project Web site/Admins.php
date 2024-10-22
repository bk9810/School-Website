



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="shortcut icon" href="2.png"/>
    <style>
        body{
            background-color: #f3d2c1;
        }

        .btn-new{
            margin-top: 90px;
            padding-left: 630px;
        }
        .add h2{
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 60px;
            color: #001858;
            padding-left: 50px;
        }
        .add h2:hover{
            text-decoration: underline;
            color: maroon;
        }

        .ddd button{
                margin-top: 20px;
                font-size: 35px;
                background-color: gold;
                color: #001858;
                width: 300px;
                height: 50px;
                display: block;
                justify-content: center;
                align-items: center;
                border-radius: 40px;
}
        .ddd a{
            text-decoration: none;
            color: #001858;
        }
        .ddd a:hover{
            text-decoration: underline;
            color: white;
        }

        .ett button{
            
                margin-top: 20px;
                font-size: 35px;
                background-color: gold;
                color: #001858;
                width: 300px;
                height: 50px;
                border-radius: 40px;
        }
        .ett a{
            text-decoration: none;
            color: #001858;
        }
        .ett a:hover{
            text-decoration: underline;
            color: #f3d2c1;
        }

        .eoo button{
            margin-top: 20px;
                font-size: 35px;
                background-color: gold;
                color: #001858;
                width: 300px;
                height: 50px;
                border-radius: 40px;
        }
        .eoo a{
            text-decoration: none;
            color: #001858;
        }
        .eoo a:hover{
            text-decoration: underline;
            color: #f3d2c1;
        }
        
    </style>
</head>
<body>

        <div class="add">
            <h2>Admin Pages </h2>
        </div>
    <div class="btn-new">
    <div class="ddd">
    <button>
        <a href="http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=school_sports_db&table=sports">Sports</a>
    </button>
    </div>
    <br>

    <div class="ett">
        <button class="ettbtn">
            <a href="http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=school_event_db&table=events"> Events</a>
        </button>
        <br>
        <br>
        <button class="ettBtn">
            <a href="http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=school_event_db&table=news">News</a>
        </button>
    </div>
    

    <br>
    <div class="eoo">
        <button class="eoobtn">
            <a href="http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=school_event_db&table=homies"> Now Details </a>
        </button>
        <br>
        <br>
        <button>
            <a href="http://localhost/phpmyadmin/index.php?route=/sql&db=school_event_db&table=homee&pos=0"> UpComing Details </a>
        </button>

        
    </div>
    </div>
    
</body>
</html>