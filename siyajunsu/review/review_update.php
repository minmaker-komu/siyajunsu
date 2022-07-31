<!DOCTYPE html>
<?php 
    session_start(); 
    if(!isset($_SESSION['userid'])){
        echo "<script>alert('권한이 없습니다!');";
        echo "window.history.back()</script>";
        exit;
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공연 후기</title>
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
            <a href="../notice/notice_list.php">공지사항</a>
            <a href="review_list.php">공연 후기</a>
            <a href="../siya/concert_view.php">공연장 시야</a>
            <a href="../recommend/cafe_list.php">주변 카페/식당 추천</a>
        </nav>
    </div>
    <div class="board_wrap">
    <div class="board_title">
            <strong>공연 후기</strong>
            <p>다양한 공연 후기를 남기는 게시판입니다.</p>
        </div>
        <?php
            
           
            $id = $_GET['idx'];
            $conn = mysqli_connect("localhost","root","ninja8898","siyajunsu");
            $sql = "SELECT * FROM tb_review where idx= $_GET[idx]";
            
            $res = mysqli_fetch_array(mysqli_query($conn, $sql));
            
        ?>
        <div class="board_write_wrap">
            <div class="board_write">

            <form action="review_update_ok.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="board_write_wrap">
                    <div class="board_write">
                        <div class="title">
                            <dl>
                                <dt>제목</dt>
                                <dd><input type="text" name ="title" value='<?=$res['title']?>'></dd>
                            </dl>
                        </div>
                        <div class="info" >
                            <dl>
                                <dt>공연장소</dt>
                                <dd><input type="text" name ="place" value='<?=$res['place']?>'></dd>
                            </dl>
                            <dl>
                                <dt>공연날짜</dt>
                                <dd><input type="text" name ="concert_date" value='<?=$res['concert_date']?>'></dd>
                            </dl>
                        </div>
                        
                        <div class="cont">
                            <textarea name="content"><?=$res['content'];?></textarea>
                        </div>
                        <div>
                            <?php if(!$res['file']){
                                } else{ ?>
                                    <?= $res['file']?>
                            <?php } ?>
                        </div>
                        
                        <div><input class=file id="input-file" type=file value="<?=$res['file']?>" name=file[] multiple></div>
                        <input type="hidden" name=idx value=<?=$id?>>
                    </div>
                    <div class="bt_wrap">
                        <input type="submit" href="review_list.php" class="on" value="수정">
                        <a href="review_view.php">취소</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>