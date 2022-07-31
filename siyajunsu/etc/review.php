<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공연 후기</title>
    <link rel="stylesheet" href="css/review.css">
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
        <div class="search">
            <input type="text" placeholder="검색어 입력">
            <img src="https://s3.ap-northeast-2.amazonaws.com/cdn.wecode.co.kr/icon/search.png">
        </div>
    </div>

    <!-- <div class="modal">
        <div class="modal_wrap">
          <div class="img">
            <img src="img/nell.jpg" />
          </div>
          <div class="example">
            <h3>LET THE HOPE SHINE IN</h3>
            <h4>올림픽홀</h4>
            <h5>2020.10.25</h5>
          </div>
        </div>
    </div> -->

    <div class="list">
        <!-- 1번 -->
        <form action="view3.php" method="GET">
            <div class="container">
                <div class="review">
                    <div class="review_img">
                        <input type="image" name="review_img" src="img/nell.jpg">
                    </div>
                    <div class="review_title">
                        <h3>LET THE HOPE SHINE IN</h3>
                    </div>
                    <div class="review_where">
                        <h4>올림픽홀</h4>
                    </div>
                    <div class="date">
                        <h5>2020.10.25</h5>

                    </div>
                    <input type="hidden" name="review_title" value="LET THE HOPE SHINE IN">
                    <input type="hidden" name="review_date" value="2020.10.25">
                    <input type="hidden" name="review_where" value="올림픽홀">
                    <input type="hidden" name="review_img" value="img/nell.jpg">
                    <input type="hidden" name="review_content" value="코로나시국 콘서트">

                </div>     
            </div>
        </form>
        <!-- 2번 -->
        <form action="view3.php" method="GET">
            <div class="container">
                <div class="review">
                    <div class="review_img">
                        <input type="image" name="review_img" src="img/concert1.jpg">
                    </div>
                    <div class="review_title">
                        <h3>2022 MONSTA X NO LIMIT US TOUR</h3>
                    </div>
                    <div class="review_where">
                        <h4>올림픽체조경기장</h4>
                    </div>
                    <div class="date">
                        <h5>2022.05.09</h5>

                    </div>
                    <input type="hidden" name="review_title" value="2022 MONSTA X NO LIMIT US TOUR">
                    <input type="hidden" name="review_date" value="2022.05.09">
                    <input type="hidden" name="review_where" value="올림픽체조경기장">
                    <input type="hidden" name="review_img" value="img/concert1.jpg">
                    <input type="hidden" name="review_content" value="공연 어쩌구">

                </div>     
            </div>
        </form>

        <form action="view3.php" method="GET">
            <div class="container">
                <div class="review">
                    <div class="review_img">
                        <input type="image" name="review_img" src="img/concert2.jpg">
                    </div>
                    <div class="review_title">
                        <h3>제28회 드림콘서트</h3>
                    </div>
                    <div class="review_where">
                        <h4>잠실종합운동장 주경기장</h4>
                    </div>
                    <div class="date">
                        <h5>2022.06.18</h5>

                    </div>
                    <input type="hidden" name="review_title" value="제28회 드림콘서트">
                    <input type="hidden" name="review_date" value="2022.06.18">
                    <input type="hidden" name="review_where" value="잠실종합운동장 주경기장">
                    <input type="hidden" name="review_img" value="img/concert2.jpg">
                    <input type="hidden" name="review_content" value="오랜만에 하는 드림콘서트">

                </div>     
            </div>
        </form>

        <form action="view3.php" method="GET">
            <div class="container">
                <div class="review">
                    <div class="review_img">
                        <input type="image" name="review_img" src="img/concert3.jpg">
                    </div>
                    <div class="review_title">
                        <h3>‘Goodbye, Hello’ in NELL’S ROOM 2021</h3>
                    </div>
                    <div class="review_where">
                        <h4>잠실학생체육관</h4>
                    </div>
                    <div class="date">
                        <h5>2021.12.31</h5>

                    </div>
                    <input type="hidden" name="review_title" value="‘Goodbye, Hello’ in NELL’S ROOM 2021">
                    <input type="hidden" name="review_date" value="2021.12.31">
                    <input type="hidden" name="review_where" value="잠실학생체육관">
                    <input type="hidden" name="review_img" value="img/concert3.jpg">
                    <input type="hidden" name="review_content" value="2021년의 마지막 날에 콘서트를 했다.">

                </div>     
            </div>
        </form>
    </div>

    <div class="list">
        <!-- 1번 -->
        <form action="view3.php" method="GET">
            <div class="container">
                <div class="review">
                    <div class="review_img">
                        <input type="image" name="review_img" src="img/concert4.jpg">
                    </div>
                    <div class="review_title">
                        <h3>‘Goodbye, Hello’ in NELL’S ROOM 2021</h3>
                    </div>
                    <div class="review_where">
                        <h4>잠실학생체육관</h4>
                    </div>
                    <div class="date">
                        <h5>2022.01.02</h5>

                    </div>
                    <input type="hidden" name="review_title" value="‘Goodbye, Hello’ in NELL’S ROOM 2021">
                    <input type="hidden" name="review_date" value="2022.01.02">
                    <input type="hidden" name="review_where" value="잠실학생체육관">
                    <input type="hidden" name="review_img" value="img/concert4.jpg">
                    <input type="hidden" name="review_content" value="2022년에 본 첫 콘서트">

                </div>     
            </div>
        </form>
        <!-- 2번 -->
        <form action="view3.php" method="GET">
            <div class="container">
                <div class="review">
                    <div class="review_img">
                        <input type="image" name="review_img" src="img/concert10.jpg">
                    </div>
                    <div class="review_title">
                        <h3>PEAK FESTIVAL 2022</h3>
                    </div>
                    <div class="review_where">
                        <h4>난지한강공원</h4>
                    </div>
                    <div class="date">
                        <h5>2022.05.28</h5>

                    </div>
                    <input type="hidden" name="review_title" value="PEAK FESTIVAL 2022">
                    <input type="hidden" name="review_date" value="2022.05.28">
                    <input type="hidden" name="review_where" value="난지한강공원">
                    <input type="hidden" name="review_img" value="img/concert10.jpg">
                    <input type="hidden" name="review_content" value="조승연 짱 넬 짱">

                </div>     
            </div>
        </form>

        <form action="view3.php" method="GET">
            <div class="container">
                <div class="review">
                    <div class="review_img">
                        <input type="image" name="review_img" src="img/concert6.jpg">
                    </div>
                    <div class="review_title">
                        <h3>2022 KIM SUNG KYU CONCERT</h3>
                    </div>
                    <div class="review_where">
                        <h4>잠실실내체육관</h4>
                    </div>
                    <div class="date">
                        <h5>2022.04.24</h5>

                    </div>
                    <input type="hidden" name="review_title" value="2022 KIM SUNG KYU CONCERT">
                    <input type="hidden" name="review_date" value="2022.04.24">
                    <input type="hidden" name="review_where" value="올림픽체조경기장">
                    <input type="hidden" name="review_img" value="img/concert6.jpg">
                    <input type="hidden" name="review_content" value="첫 함성 콘서트~~!">

                </div>     
            </div>
        </form>

        <form action="view3.php" method="GET">
            <div class="container">
                <div class="review">
                    <div class="review_img">
                        <input type="image" name="review_img" src="img/concert7.jpg">
                    </div>
                    <div class="review_title">
                        <h3>NELL’S SEASON 2022 ‘Singles’</h3>
                    </div>
                    <div class="review_where">
                        <h4>유니버설아트센터</h4>
                    </div>
                    <div class="date">
                        <h5>2022.05.08</h5>

                    </div>
                    <input type="hidden" name="review_title" value="NELL’S SEASON 2022 ‘Singles’">
                    <input type="hidden" name="review_date" value="2022.05.08">
                    <input type="hidden" name="review_where" value="유니버설아트센터">
                    <input type="hidden" name="review_img" value="img/concert7.jpg">
                    <input type="hidden" name="review_content" value="어버이날에 콘서트 보는 나는 불효녀">

                </div>     
            </div>
        </form>
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