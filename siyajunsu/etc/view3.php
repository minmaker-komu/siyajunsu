<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항</title>
    <link rel="stylesheet" href="css/board.css">
</head>
<body>
    <style>
        * {
            font-family: 'GangwonEdu_OTFBoldA';
            
        }
    </style>
    

    <!-- 전체 영역 -->
    <div class="wrap">
        <!-- header-->
        <header>
            <div class="logo">
                
                <a href="main.php">시야 준수</a>
                <img src="img/spotlights.png" width=7%>
            </div>
            <div class="login">
                <a href="login.php">로그인</a>
            </div>
        </header>   
    </div>

    <div class="navbar">
        <nav>
                <a href="intro.php">소개</a>
                <a href="concert.php">공연장</a>
                <a href="ticketing.php">티켓팅</a>
                <a href="board.php">커뮤니티</a>
        </nav>
    </div>

    <div class="navbar2">
        <nav>
            <a href="board.php">공지사항</a>
            <a href="review.php">공연 후기</a>
            <a href="concert_view.php">공연장 시야</a>
            <a href="recommend.php">주변 카페/식당 추천</a>
        </nav>
    </div>
    
    <div class="board_wrap">
        <div class="board_title">
            <strong>공연 후기</strong>
            <p>다양한 공연 후기를 남기는 게시판입니다.</p>
        </div>

        <div class="view3_title">
            <strong><?php echo $_REQUEST['review_title'];?></strong>

            <h1><?php echo $_REQUEST['review_where'];?></h1>

            <h1><?php echo $_REQUEST['review_date'];?></h1>

            <img src= "<?php echo $_GET['review_img']; ?>" >

            <p><?php echo $_REQUEST['review_content'];?></p>

            

            
        </div>
        
        <div class="bt_wrap">
            <a href="recommend.php" class="on">목록</a>
            <a href="edit3.php">수정</a>
        </div>
        
    </div>
</body>
</html>