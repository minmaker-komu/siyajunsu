
<link rel="stylesheet" href="css/board.css">
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