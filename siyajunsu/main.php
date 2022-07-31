<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css" />
    <title>시야 준수</title>
</head>

<body>

    <style>
        * {
            font-family: 'GangwonEdu_OTFBoldA';
            
        }
    </style>
    
    <div class="wrap">
        <!-- header-->
        <header>
            <div class="logo">
                
                <a href="main.php">시야 준수</a>
                <img src="img/spotlights.png" width=7%>
            </div>
            <div class="login">
                <?php if(!isset($_SESSION['userid'])){ ?>
                    <a href="login.php">로그인/회원가입</a>
                <?php } else { ?>
                    <span style="font-size:17px; margin-right:10px;"><?php echo $_SESSION['username']?>님 환영합니다.</span>
                    <a href="mypage.php">마이페이지</a> <?php }; ?>
            </div>
            
        </header>   
    </div>

    <div class="navbar">
        <nav>
                <a href="concert/concert.php">공연장</a>
                <a href="ticketing/ticketing.php">티켓팅</a>
                <a href="notice/notice_list.php">커뮤니티</a>
        </nav>
    </div>
    <div class="mainimg">
        <img src="img/nell.jpg" width=60% />
    </div>

    <footer>
        <div class="footer">
            <p>
                ⓒ Siya Junsu Since 2022 All Rights Reserved.</br>
                Designers & Developers<br>
                정민영
            </p>
        </div>
    </footer> 
</body>
</html>