<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항</title>
    <link rel="stylesheet" href="../css/board.css">
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
            document.getElementById("search_box").placeholder = info;
        }
    </script>
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
        <div class="board_main">
            <div class="board_title">
                <strong>공연장 시야</strong>
                <p>공연장 별 시야 사진을 올리는 게시판입니다.</p>
            </div>
            <div class="search">
                <?php
                    session_start();
                    $conn = mysqli_connect("localhost","root","ninja8898","siyajunsu");
                    $cate = $_GET['cate'];
                    $search = $_GET['search'];
                ?>
                <form action="search_result.php" class="search_s" method="GET">
                    <select name="cate" id="search_opt" onchange="info()">
                        <option value=title>제목</option>
                        <option value=content>내용</option>
                        <option value=name>작성자</option>
                    </select>
                    <input type="text" name="search" value="<?=$search;?>" autocomplete="off" placeholder="검색어를 입력하세요." required="required">
                    <input type=image src="https://s3.ap-northeast-2.amazonaws.com/cdn.wecode.co.kr/icon/search.png">

                </form>
                    
                    
            </div>
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
                
                <!-- 게시물 -->
                
                    <?php
                        $conn = mysqli_connect("localhost","root","ninja8898","siyajunsu");
                        switch($cate){
                            case "title":
                                $sql = "SELECT * FROM tb_siya WHERE title LIKE '%$search%' ORDER BY idx DESC";
                                break;
                            case "content":
                                $sql = "SELECT * FROM tb_siya WHERE content LIKE '%$search%' ORDER BY idx DESC";    
                                break;
                            case "name":
                                $sql = "SELECT * FROM tb_siya WHERE writer_name LIKE '%$search%' ORDER BY idx DESC";    
                                break;
                        }
                        
                        $res = mysqli_query($conn, $sql);

                        while($row = mysqli_fetch_array($res)){
                    ?>
                        <div>
                            <div class="num"><?php echo $row['idx'];?></div>
                            <div class="title"><a href="view2.php?idx=<?=$row['idx']?>"><?php echo $row['title'];?></a></div>
                            <div class="writer"><?php echo $row['writer_name'];?></div>
                            <div class="date"><?php echo $row['date'];?></div>
                            <div class="count"><?php echo $row['hit'];?></div>
                        </div>    
                    <?php } ?> 
                
                
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
                <a href="write2.php" class="on">등록</a>
                <!-- <a href="#">수정</a> -->
            </div>
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