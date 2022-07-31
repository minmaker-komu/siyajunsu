<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항</title>
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
            <strong>주변 카페/식당 추천</strong>
            <p>공연장 주변의 카페와 식당 추천 후기를 올리는 게시판입니다.</p>
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
        <form action="view4.php" method="GET">
            <div class="container">
                <div class="review">
                    <div class="review_img">
                        <input type="image" name="food_img" src="img/food8.jpg">
                    </div>
                    <div class="review_title">
                        <h3>이자와</h3>
                    </div>
                    <div class="review_where">
                        <h4>용산역</h4>
                    </div>
                    <div class="date">
                        <h5>2020.10.25</h5>

                    </div>
                    <input type="hidden" name="food_title" value="이자와">
                    <input type="hidden" name="food_date" value="2020.10.25">
                    <input type="hidden" name="food_img" value="img/food8.jpg">
                    <input type="hidden" name="food_where" value="용산역">
                    <input type="hidden" name="food_content" value="맛있다">

                </div>     
            </div>
        </form>

        <form action="view4.php" method="GET">
            <div class="container">
                <div class="review">
                    <div class="review_img">
                        <input type="image" name="food_img" src="img/food7.jpg">
                    </div>
                    <div class="review_title">
                        <h3>HOOKED</h3>
                    </div>
                    <div class="review_where">
                        <h4>롯데콘서트홀</h4>
                    </div>
                    <div class="date">
                        <h5>2022.01.08</h5>

                    </div>
                    <input type="hidden" name="food_title" value="HOOKED">
                    <input type="hidden" name="food_date" value="2022.01.08">
                    <input type="hidden" name="food_img" value="img/food7.jpg">
                    <input type="hidden" name="food_where" value="롯데콘서트홀">
                    <input type="hidden" name="food_content" value="공연시작 전에 가볍게 먹기 좋다">

                </div>     
            </div>
        </form>

        <form action="view4.php" method="GET">
            <div class="container">
                <div class="review">
                    <div class="review_img">
                        <input type="image" name="food_img" src="img/food13.jpg">
                    </div>
                    <div class="review_title">
                        <h3>타르타르</h3>
                    </div>
                    <div class="review_where">
                        <h4>롯데콘서트홀</h4>
                    </div>
                    <div class="date">
                        <h5>2021.12.21</h5>

                    </div>
                    <input type="hidden" name="food_title" value="타르타르">
                    <input type="hidden" name="food_date" value="2020.10.25">
                    <input type="hidden" name="food_img" value="img/food13.jpg">
                    <input type="hidden" name="food_where" value="롯데콘서트홀">
                    <input type="hidden" name="food_content" value="타르트가 맛있다">

                </div>     
            </div>
        </form>

        <form action="view4.php" method="GET">
            <div class="container">
                <div class="review">
                    <div class="review_img">
                        <input type="image" name="food_img" src="img/food10.jpg">
                    </div>
                    <div class="review_title">
                        <h3>칸다소바</h3>
                    </div>
                    <div class="review_where">
                        <h4>홍대</h4>
                    </div>
                    <div class="date">
                        <h5>2021.11.24</h5>

                    </div>
                    <input type="hidden" name="food_title" value="칸다소바">
                    <input type="hidden" name="food_date" value="2020.10.25">
                    <input type="hidden" name="food_img" value="img/food10.jpg">
                    <input type="hidden" name="food_where" value="홍대">
                    <input type="hidden" name="food_content" value="맛있다">

                </div>     
            </div>
        </form>
        

        <!-- <div class="container">
            <div class="review">
                <div class="review_img">
                    <img src="img/nell.jpg">
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

            </div>     
        </div> -->

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