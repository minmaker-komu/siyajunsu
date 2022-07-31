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
        <div class="board_list_wrap">
            <div class="board_list">
                <div class="top">
                    <div class="num">번호</div>
                    <div class="title">제목</div>
                    <div class="writer">글쓴이</div>
                    <div class="date">작성일</div>
                    <div class="count">조회</div>
                </div>
                <div>
                    <div class="num">5</div>
                    <div class="title">
                        <form action="view.php" method ="GET">
                            <!-- <p onclick="location.herf="view2.php?title=유니버설아트센터+1층+A구역+4열+시야&info=와녕&img.x=108&img.y=48&content=유니버설아트센터+1층+A구역+4열+시야입니다.+공연장이+좁은+만큼+사이드여도+잘보입니다." name="title">유니버설아트센터 1층 A구역 4열 시야</p> -->
                            
                            <input type="hidden" name="title" value="블루스퀘어 업데이트 준비중">
                            <input type="hidden" name="info" value="관리자">
                            <!-- <input type="hidden" name="img" value="img/siya1.jpg"> -->
                            <input type="hidden" name="content" value="-------블루스퀘어 정보 업데이트 준비중입니다-----">
                            <!-- <input type="image" src="img/nell.jpg"> -->
                            
                            <a href="view.php?title=블루스퀘어+업데이트+준비중&info=관리자&content=-------블루스퀘어+정보+업데이트+준비중입니다-----&x=246&y=177">블루스퀘어 업데이트 준비중 </a>

                        </form>
                        
                    </div>
                    <!-- <div class="title"><a href="view.php">블루스퀘어 업데이트 준비중</a></div> -->
                    <div class="writer">관리자</div>
                    <div class="date">2022.07.04</div>
                    <div class="count">2</div>
                </div>
                <div>
                    <div class="num">4</div>
                    <div class="title">
                        <form action="view.php" method ="GET">
                            <!-- <p onclick="location.herf="view2.php?title=유니버설아트센터+1층+A구역+4열+시야&info=와녕&img.x=108&img.y=48&content=유니버설아트센터+1층+A구역+4열+시야입니다.+공연장이+좁은+만큼+사이드여도+잘보입니다." name="title">유니버설아트센터 1층 A구역 4열 시야</p> -->
                            
                            <input type="hidden" name="title" value="올림픽공원 업데이트 준비중">
                            <input type="hidden" name="info" value="관리자">
                            <!-- <input type="hidden" name="img" value="img/siya1.jpg"> -->
                            <input type="hidden" name="content" value="-------올림픽공원 정보 업데이트 준비중입니다-----">
                            <!-- <input type="image" src="img/nell.jpg"> -->
                            
                            <a href="view.php?title=올림픽공원+업데이트+준비중&info=관리자&content=-------올림픽공원+정보+업데이트+준비중입니다-----&x=246&y=177">올림픽공원 업데이트 준비중 </a>

                        </form>
                    </div>
                    <!-- <div class="title"><a href="view.php">올림픽 공원 업데이트 준비중</a></div> -->
                    <div class="writer">관리자</div>
                    <div class="date">2022.07.03</div>
                    <div class="count">14</div>
                </div>
                <div>
                    <div class="num">3</div>
                    <div class="title">
                        <form action="view.php" method ="GET">
                            <!-- <p onclick="location.herf="view2.php?title=유니버설아트센터+1층+A구역+4열+시야&info=와녕&img.x=108&img.y=48&content=유니버설아트센터+1층+A구역+4열+시야입니다.+공연장이+좁은+만큼+사이드여도+잘보입니다." name="title">유니버설아트센터 1층 A구역 4열 시야</p> -->
                            
                            <input type="hidden" name="title" value="주변 카페/식당 추천 글 양식">
                            <input type="hidden" name="info" value="관리자">
                            <!-- <input type="hidden" name="img" value="img/siya1.jpg"> -->
                            <input type="hidden" name="content" value="카페/식당 글양식입니다.">
                            <!-- <input type="image" src="img/nell.jpg"> -->
                            
                            <a href="view.php?title=주변 카페/식당 추천 글 양식&info=관리자&content=카페/식당 글양식입니다&x=246&y=177">주변 카페/식당 추천 글 양식</a>

                        </form>
                    </div>
                    <!-- <div class="title"><a href="view.php">주변 카페/식당 추천 글 양식</a></div> -->
                    <div class="writer">관리자</div>
                    <div class="date">2022.06.30</div>
                    <div class="count">15</div>
                </div>
                <div>
                    <div class="num">2</div>
                    <div class="title">
                        <form action="view.php" method ="GET">
                            <!-- <p onclick="location.herf="view2.php?title=유니버설아트센터+1층+A구역+4열+시야&info=와녕&img.x=108&img.y=48&content=유니버설아트센터+1층+A구역+4열+시야입니다.+공연장이+좁은+만큼+사이드여도+잘보입니다." name="title">유니버설아트센터 1층 A구역 4열 시야</p> -->
                            
                            <input type="hidden" name="title" value="공연 후기 글 양식">
                            <input type="hidden" name="info" value="관리자">
                            <!-- <input type="hidden" name="img" value="img/siya1.jpg"> -->
                            <input type="hidden" name="content" value="공연 후기 글 양식입니다.">
                            <!-- <input type="image" src="img/nell.jpg"> -->
                            
                            <a href="view.php?title=공연 후기 글 양식&info=관리자&content=공연 후기 글 양식입니다.&x=246&y=177">공연 후기 글 양식</a>

                        </form>
                    </div>
                    <!-- <div class="title"><a href="view.php">공연 후기 글 양식</a></div> -->
                    <div class="writer">관리자</div>
                    <div class="date">2022.06.29</div>
                    <div class="count">26</div>
                </div>
                <div>
                    <div class="num">1</div>
                    <div class="title">
                        <form action="view.php" method ="GET">
                            <!-- <p onclick="location.herf="view2.php?title=유니버설아트센터+1층+A구역+4열+시야&info=와녕&img.x=108&img.y=48&content=유니버설아트센터+1층+A구역+4열+시야입니다.+공연장이+좁은+만큼+사이드여도+잘보입니다." name="title">유니버설아트센터 1층 A구역 4열 시야</p> -->
                            
                            <input type="hidden" name="title" value="공연장 시야 글 양식">
                            <input type="hidden" name="info" value="관리자">
                            <!-- <input type="hidden" name="img" value="img/siya1.jpg"> -->
                            <input type="hidden" name="content" value="시야사진을 꼭 첨부해주세요">
                            <!-- <input type="image" src="img/nell.jpg"> -->
                            
                            <a href="view.php?title=공연장 시야 글 양식&info=관리자&content=시야사진을 꼭 첨부해주세요&x=246&y=177">공연장 시야 글 양식</a>

                        </form>
                    </div>
                    <!-- <div class="title"><a href="view.php">공연장 시야 글 양식</a></div> -->
                    <div class="writer">관리자</div>
                    <div class="date">2022.06.29</div>
                    <div class="count">43</div>
                </div>
            </div>
            <div class="board_page">
                <a href="#" class="bt first"><<</a>
                <a href="#" class="bt prev"><</a>
                <a href="#" class="num on">1</a>
                <a href="#" class="num">2</a>
                <a href="#" class="num">3</a>
                <a href="#" class="num">4</a>
                <a href="#" class="num">5</a>
                <a href="#" class="bt next">></a>
                <a href="#" class="bt last">>></a>
            </div>
            <div class="bt_wrap">
                <a href="write.php" class="on">등록</a>
                <!--<a href="#">수정</a>-->
            </div>
        </div>
    </div>
</body>
</html> 