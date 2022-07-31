<!DOCTYPE html>
<?php
    session_start();
    if(!isset($_SESSION['userid'])) {
        echo "<script>alert('로그인을 해주세요');";
        echo "window.location.replace('notice_list.php');</script>";
    }
    elseif($_SESSION['userid'] != "admin") {
        echo "<script>alert('권한이 없습니다.');";
        echo "window.location.replace('notice_list.php');</script>";
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항</title>
    <link rel="stylesheet" href="../css/board.css">
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
                
                <a href="../main.php">시야 준수</a>
                <img src="../img/spotlights.png" width=7%>
            </div>
            <div class="login">
                <?php if(!isset($_SESSION['userid'])){ ?>
                    <a href="../login.php">로그인/회원가입</a>
                <?php } else { ?>
                    <a href="../mypage.php">마이페이지</a> <?php }; ?>
            </div>
            
        </header>   
    </div>

    <div class="navbar">
        <nav>
                <a href="concert.php">공연장</a>
                <a href="ticketing.php">티켓팅</a>
                <a href="board.php">커뮤니티</a>
        </nav>
    </div>

    <div class="navbar2">
        <nav>
            <a href="notice_list.php">공지사항</a>
            <a href="../review/review_list.php">공연 후기</a>
            <a href="../siya/concert_view.php">공연장 시야</a>
            <a href="../recommend/cafe_list.php">주변 카페/식당 추천</a>
        </nav>
    </div>
    <div class="board_wrap">
    <div class="board_title">
                <strong>공지사항</strong>
                <p>공지사항을 빠르고 정확하게 안내드립니다.</p>
            </div>
        <form action="notice_write_ok.php" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="board_write_wrap">
                <div class="board_write">
                    <div class="title">
                        <dl>
                            <dt>제목</dt>
                            <dd><input type="text" name ="title" placeholder="제목 입력"></dd>
                        </dl>
                    </div>
                    
                    <div class="cont">
                        <textarea name="content" placeholder="내용 입력"></textarea>
                    </div>
                    <!-- 이미지 업로드 -->
                    <div><input class=file id="input-file" type=file name=file[] multiple ></div>
                </div>
                <div class="bt_wrap">
                    <input type="submit" href="concert_view.php" class="on" value="등록">
                    <a href="review.php">취소</a>
                </div>
            </div>
        </form>
        
    </div>
</body>
</html>