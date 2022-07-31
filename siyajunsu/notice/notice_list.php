<!DOCTYPE html>
<?php session_start(); ?>
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
            <a href="notice_list.php">공지사항</a>
            <a href="../review/review_list.php">공연 후기</a>
            <a href="../siya/concert_view.php">공연장 시야</a>
            <a href="../recommend/cafe_list.php">주변 카페/식당 추천</a>
        </nav>
    </div>
    <div class="board_wrap">
        <div class="board_main">
            <div class="board_title">
                <strong>공지사항</strong>
                <p>공지사항을 빠르고 정확하게 안내드립니다.</p>
            </div>
            <!-- 검색 -->
            <div class="search">
                <form id="searchview" action="search_result.php" class="search_s" method="GET">
                    
                        <select name="cate" id="search_opt" onchange="info()">
                            <option value=title>제목</option>
                            <option value=content>내용</option>
                            <option value=name>작성자</option>
                        </select>
                    <input type="text" name="search" placeholder="검색어 입력" autocomplete="off">
                </form>
                <img src="https://s3.ap-northeast-2.amazonaws.com/cdn.wecode.co.kr/icon/search.png" onclick=searchview.submit()>                        
            </div>
        </div>          
        <!-- 상단 -->
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

                        if(isset($_GET['page'])){
                            $page = $_GET['page'];
                        } else {
                            $page = 1;
                        }
            
                        $sql = "SELECT * FROM tb_notice";
                        $res = mysqli_query($conn, $sql);

                        $total_post = mysqli_num_rows($res);
                        $per=5;

                        $start = ($page-1)*$per +1;
                        $start -= 1;

                        $sql_page = "SELECT * FROM tb_notice ORDER BY idx DESC limit $start, $per";
                        $res_page = mysqli_query($conn, $sql_page);

                        //$sql = "SELECT * FROM tb_notice ORDER BY idx DESC";
                        //$res = mysqli_query($conn, $sql);
                        //$row = mysqli_fetch_array($res);
        
                        while($row = mysqli_fetch_array($res_page)){
                            $rp_count = mysqli_query($conn,"SELECT COUNT(*) as cnt FROM reply WHERE bid='".$row['idx']."'");
                            $rp_result = mysqli_fetch_array($rp_count);
                            $rp_cnt = $rp_result['cnt'];
                            
                    ?>
                        <div>
                            <div class="num"><?php echo $row['idx'];?></div>
                            <div class="title">
                                <a href="notice_view.php?idx=<?=$row['idx']?>"><?php echo $row['title'];?></a>
                                
                                <?php if($rp_cnt > 0):?><span style="color:red;">[<?php echo $rp_cnt;?>]</span><?php endif?>
                                <?php if(($row['file']) != ""):?><img src="../img/image.png"><?php endif?>
                            
                            </div>
                            <div class="writer"><?php echo $row['writer_name'];?></div>
                            <div class="date">
                                <?php 
                                    $date = date_create($row['date']);
                                    echo date_format($date, "Y-m-d");
                                    
                                ?>
                            </div>
                            <div class="count"><?php echo $row['hit'];?></div>
                        </div>    
                    <?php } ?> 
                
                
            </div>
            <div class="board_page">
                <?php 
                    echo "<a class=\"bt first\" href=\"notice_list.php?page=1\"> << </a>";
                    $pre = $page - 1;
                    echo "<a class=\"bt prev\" href=\"notice_list.php?page=$pre\"> < </a>";

                    $total_page = ceil($total_post / $per);
                    $page_num = 1;

                    while($page_num <= $total_page){
                        if($page==$page_num){
                            echo "<a class=\"num on\" href=\"notice_list.php?page=$page_num\">$page_num </a>";
                        } else {
                            echo "<a class=\"num\" href=\"notice_list.php?page=$page_num\">$page_num </a>"; }
                        $page_num++;
                    }

                    $next = $page + 1;
                    echo "<a class=\"bt next\" href=\"notice_list.php?page=$next\"> > </a>";

                    echo "<a class=\"bt last\" href=\"notice_list.php?page=$total_page\"> >> </a>";

                    
                ?>
                
            </div>
            <div class="bt_wrap">
                <?php if($_SESSION['userid'] == "admin"){ ?>
                    <a href="notice_write.php" class="on">등록</a>
                <?php } else {} ?>
                
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