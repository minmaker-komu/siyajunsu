<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>주변 카페/식당 추천</title>
    <link rel="stylesheet" href="../css/review.css">
    <script>
        function info() {
            var opt = document.getElementById("search_opt");
            var opt_val = opt.options[opt.selectedIndex].value;
            var info = ""
            if (opt_val=='title'){
                info = "제목을 입력하세요.";
            } else if (opt_val=='content'){
                info = "내용을 입력하세요.";
            } else if (opt_val=='name'){
                info = "작성자를 입력하세요.";
            }
            document.getElementById("search").placeholder = info;
        }
    </script>
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
                    <span style="font-size:17px; margin-right:10px;"><?php echo $_SESSION['username']?>님 환영합니다.</span>
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
            <a href="../notice/notice_list.php">공지사항</a>
            <a href="../review/review_list.php">공연 후기</a>
            <a href="../siya/concert_view.php">공연장 시야</a>
            <a href="cafe_list.php">주변 카페/식당 추천</a>
        </nav>
    </div>
    <div class="board_wrap">
        <div class="board_main">
            <div class="board_title">
                <strong>주변 카페/식당 추천</strong>
                <p>공연장 주변의 카페와 식당 추천 후기를 올리는 게시판입니다.</p>
            </div>
            <!-- 검색 -->
            <div class="search">
                    <form id="searchview" action="search_result.php" class="search_s" method="GET">
                            <select name="cate" id="search_opt" onchange="info()">
                                <option value=title>제목</option>
                                <option value=content>내용</option>
                                <option value=name>작성자</option>
                            </select>
                        <input type="text" id="search_box" name="search" placeholder="검색어 입력" autocomplete="off">
                    </form>
                    <img src="https://s3.ap-northeast-2.amazonaws.com/cdn.wecode.co.kr/icon/search.png" onclick=searchview.submit()>                        
            </div>
        </div>
        
        <div class="bt_wrap">
            <a href="cafe_write.php" class="on">등록</a>
        </div>
    </div>


    <div class="list">
        <?php
            $conn = mysqli_connect("localhost","root","ninja8898","siyajunsu");
            $sql = "SELECT * FROM tb_cafe ORDER BY idx DESC limit 4";
            $res = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_array($res)){
                $rp_count = mysqli_query($conn,"SELECT COUNT(*) as cnt FROM reply WHERE bid='".$row['idx']."'");
                $rp_result = mysqli_fetch_array($rp_count);
                $rp_cnt = $rp_result['cnt'];
                                    
        ?>
                <div class="container">
                    <div class="review">
                        <div>
                            <div class="review_img">
                                <img class="review_imgs" src="../img/<?php echo $row['file'];?>">
                            </div>
                            <div class="review_title">
                                <h3><a href="review_view.php?idx=<?=$row['idx']?>"><?php echo $row['title'];?></a></h3>
                            </div>
                            <div class="review_where"><h4><?php echo $row['place'];?></h4></div>
                            <div class="date">
                                <h5>
                                    <?php 
                                        $date = $row['cafe_date'];
                                        echo $date;
                                    ?>
                                </h5>
                            </div>
                        </div> 
                    </div>
                </div>        
        <?php } ?>             
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