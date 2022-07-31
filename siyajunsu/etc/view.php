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
            <strong>공지사항</strong>
            <p>공지사항을 빠르고 정확하게 안내해드립니다.</p>
        </div>
        <div class="board_view_wrap">
            <div class="board_view">
                <div class="title">
                    <?php
                       
                        $title = $_REQUEST["title"];
                        echo $title;
                    ?> 
                </div>
                <div class="info">
                    <dl>
                        <dt>번호</dt>
                        <dd>1</dd>
                    </dl>
                    <dl>
                        <dt>글쓴이</dt>
                        <dd>
                            <?php
                                $info = $_REQUEST['info'];
                                echo $info;
                            ?> 
                        </dd>
                    </dl>
                    <dl>
                        <dt>작성일</dt>
                        <dd>2021.1.16</dd>
                    </dl>
                    <dl>
                        <dt>조회</dt>
                        <dd>33</dd>
                    </dl>
                </div>
                <div>
                    

                </div>
                <div class="cont">
                    <!-- <img src= "<?php echo $_REQUEST['img']; ?>" > -->
                    <!-- <img src="img/nell.jpg"> -->
                    <p>
                        <?php
                        // $content = $_REQUEST['content'];
                        // $img = $_REQUEST['img'];
                        echo '<pre>';
                        echo $_REQUEST['content'];
                        echo '</pre>';
                                    
                    
                        // echo $img;
                        ?>
                    </p>
                        
                </div>
            <div class="bt_wrap">
                <a href="board.php" class="on">목록</a>
                <a href="edit.php">수정</a>
            </div>
        </div>
    </div>
</body>
</html>