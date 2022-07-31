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
        <div class="board_write_wrap">
            <div class="board_write">
                <div class="title">
                    <dl>
                        <dt>제목</dt>
                        <dd><input type="text" placeholder="제목 입력" value="글 제목이 들어갑니다"></dd>
                    </dl>
                </div>
                <div class="info">
                    <dl>
                        <dt>글쓴이</dt>
                        <dd><input type="text" placeholder="글쓴이 입력" value="김이름"></dd>
                    </dl>
                    <dl>
                        <dt>비밀번호</dt>
                        <dd><input type="password" placeholder="비밀번호 입력" value="1234"></dd>
                    </dl>
                </div>
                <div class="cont">
                    <textarea placeholder="내용 입력">
                            글 내용이 들어갑니다.
                            글 내용이 들어갑니다.
                            글 내용이 들어갑니다.
                            글 내용이 들어갑니다.
                            글 내용이 들어갑니다.
                            글 내용이 들어갑니다.
                            글 내용이 들어갑니다.
                            글 내용이 들어갑니다.
                    </textarea>
                </div>
            </div>
            <div class="bt_wrap">
                <a href="view.php" class="on">수정</a>
                <a href="view.php">취소</a>
            </div>
        </div>
    </div>
</body>
</html>