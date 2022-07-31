<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공연 후기</title>

    <link rel="stylesheet" href="../css/review2.css">
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

    <script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="../js/js-load.js"></script>
    <!-- <script type="text/javascript">
        $(window).on('load', function () {
            load('#js-load', '4');
            $("#js-btn-wrap .button").on("click", function () {
                load('#js-load', '4', '#js-btn-wrap');
            })
        });
        
        function load(id, cnt, btn) {
            var review_list = id + " .js-load:not(.active)";
            var review_length = $(review_list).length;
            var review_total_cnt;
            if (cnt < review_length) {
                review_total_cnt = cnt;
            } else {
                review_total_cnt = review_length;
                $('.button').hide();
            }
            $(review_list + ":lt(" + review_total_cnt + ")").addClass("active");
        } 
    </script> -->
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
            <a href="review_list.php">공연 후기</a>
            <a href="../siya/concert_view.php">공연장 시야</a>
            <a href="../recommend/cafe_list.php">주변 카페/식당 추천</a>
        </nav>
    </div>
    <div class="board_wrap">
        <div class="board_main">
            <div class="board_title">
                <strong>공연 후기</strong>
                <p>다양한 공연 후기를 남기는 게시판입니다.</p>
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
        
        <div class="bt_wrap">""
            <a href="review_write.php" class="on">등록</a>
        </div>
    </div>

    <!-- 게시물  -->
    <div class="contents" id="contents">
        <div id="js-load" class="list">
            <?php
                $conn = mysqli_connect("localhost","root","ninja8898","siyajunsu");
                $sql = "SELECT * FROM tb_review ORDER BY idx DESC";
                $res = mysqli_query($conn, $sql);

                while($row = mysqli_fetch_array($res)){
            ?>
                    <div class="container js-load">
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
                                            $date = $row['concert_date'];
                                            echo $date;
                                        ?>
                                    </h5>
                                </div>
                            </div> 
                        </div>
                    </div> <br>      
            <?php } ?> 
            <div id="js-btn-wrap" class="btn-wrap"> <a href="javascript:;" class="button">더보기</a> </div>
        </div>
        
        
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