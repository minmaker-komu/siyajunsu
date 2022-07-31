<!DOCTYPE html>
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
            <a href="../notice/notice_list.php">공지사항</a>
            <a href="../review/review_list.php">공연 후기</a>
            <a href="concert_view.php">공연장 시야</a>
            <a href="../recommend/cafe_list.php">주변 카페/식당 추천</a>
        </nav>
    </div>
    <div class="board_wrap">
        <div class="board_title">
            <strong>공연장 시야</strong>
            <p>공연장 별 시야 사진을 올리는 게시판입니다.</p>
        </div>
        <?php
            session_start();
            $id = $_GET['idx'];
            $conn = mysqli_connect("localhost","root","ninja8898","siyajunsu");
            $sql = "SELECT * FROM tb_siya where idx= $_GET[idx]";
            
            $res = mysqli_fetch_array(mysqli_query($conn, $sql));
            if($_SESSION['userid'] != $row['writer_id']){
                echo "<script>alert('권한이 없습니다!');";
                echo "window.history.back()</script>";
                exit;
            }
        ?>
        <div class="board_write_wrap">
            <div class="board_write">

            <form action="update2_ok.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="board_write_wrap">
                    <div class="board_write">
                        <div class="title">
                            <dl>
                                <dt>제목</dt>
                                <dd><input type="text" name ="title" value='<?=$res['title']?>'></dd>
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
                        <input type="submit" href="concert_view.php" class="on" value="수정">
                        <!-- <a href="view2.php" class="on">등록</a> -->
                        <a href="view2.php">취소</a>
                    </div>
                </div>
            </form>

            <!-- <form method="post" action="update_ok.php" enctype="multipart/form-data" autocomplete="off">
                <p><input class=textform type=text size=25 name=title value='<?=$res['title']?>' required></p>
                <p><textarea class=textform cols=35 rows=15 name=content><?=$res['content'];?></textarea></p>
                <div class="bt_wrap">
                    <input type="submit" href="concert_view.php" class="on" value="등록">
                    <a href="view2.php">취소</a>
                </div>
                <input type="hidden" name=id value=<?=$id?>>
            </form>
            
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
                </div> -->
            </div>
            <!-- <div class="bt_wrap">
                <input type="submit" href="concert_view.php" class="on" value="등록">
                <a href="view2.php">취소</a>
            </div> -->
        </div>
    </div>
</body>
</html>