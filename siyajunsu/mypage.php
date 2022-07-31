<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css" />
    <title>마이페이지</title>
    
</head>
<body>
    <style>
        * {
            font-family: 'GangwonEdu_OTFBoldA';
            
        }
    </style>

    <!-- 전체 영역 -->
    <div class="wrap">
        
        <header>
            <div class="logo">
                
                <a href="main.php">시야 준수</a>
                <img src="img/spotlights.png" width=7%>
            </div>
            <div class="login">
                <?php if(!isset($_SESSION['userid'])){ ?>
                    <a href="../login/login.php">로그인/회원가입</a>
                <?php } else { ?>
                    <a href="mypage.php">마이페이지</a> <?php }; ?>
            </div>
            
        </header>   

        <div class="navbar">
            <nav>
                <a href="concert/concert.php">공연장</a>
                <a href="ticketing/ticketing.php">티켓팅</a>
                <a href="notice/notice_list.php">커뮤니티</a>
            </nav>
        </div>

        <div class="mypage_section">
            <h1 class="mypage_title">마이페이지</h1>
            <?php
                if(!isset($_SESSION['userid'])) {
                            
                    echo "<script>alert('로그인을 해주세요');";
                    echo "window.location.href=\"main.php\";</script>";
                }
                else
                {
                    $conn = mysqli_connect("localhost","root","ninja8898","siyajunsu");
                    $login_id = $_SESSION['userid'];
                    $sql = "SELECT * FROM tb_userinfo WHERE userid='$login_id'";
                    $res = mysqli_fetch_array(mysqli_query($conn, $sql));
                    echo mysqli_error($conn);
                }
            ?>

            

        </div>
        <div style="text-align:center;">
                <table class="my_info" style="text-align:center; margin:auto; padding:20px;">
                    
                    <tr>   
                        <th>이름</th>
                        <td><?=$res['username']?></td>
                    </tr>
                    <tr>
                        <th>아이디</th>
                        <td><?=$res['userid']?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?=$res['useremail']?></td>
                    </tr>       
                </table>
            
            <button onclick="location.href='my_change.php'">회원 정보 변경</button>

            <button onclick="location.href='logout.php'">로그아웃</button>
            <button onclick="location.href='delete_user.php'">회원탈퇴</button>
        </div>

        <!-- <div class="my_writing" style="text-align:center; margin:auto;">
            <p>내가 쓴 글</p>
            <?php
                        // $conn = mysqli_connect("localhost","root","ninja8898","siyajunsu");

                        // if(isset($_GET['page'])){
                        //     $page = $_GET['page'];
                        // } else {
                        //     $page = 1;
                        // }
            
                        // $sql = "SELECT * FROM tb_siya, tb_review, tb_";
                        // $res = mysqli_query($conn, $sql);

                        // $total_post = mysqli_num_rows($res);
                        // $per=5;

                        // $start = ($page-1)*$per +1;
                        // $start -= 1;
                        // $id = $_SESSION['userid'];
                        // $sql_page = "SELECT * FROM tb_siya WHERE tb_siya.writer_id='$id' limit $start, $per";
                        // $res_page = mysqli_query($conn, $sql_page);

                        // //$sql = "SELECT * FROM tb_notice ORDER BY idx DESC";
                        // //$res = mysqli_query($conn, $sql);
                        // //$row = mysqli_fetch_array($res);
        
                        // while($row = mysqli_fetch_array($res_page)){
                        //     $rp_count = mysqli_query($conn,"SELECT COUNT(*) as cnt FROM reply WHERE bid='".$row['idx']."'");
                        //     $rp_result = mysqli_fetch_array($rp_count);
                        //     $rp_cnt = $rp_result['cnt'];
                            
                    ?>
                        <div>

                            <div class="title">
                                <a href="view2.php?idx=<?//=//$row['idx']?>"><?php //echo $row['title'];?></a>
                                
                            
                            </div>
                            <div class="date">
                                <?php 
                                    //$date = date_create($row['date']);
                                    //echo date_format($date, "Y-m-d");
                                ?>
                            </div>
                            <div class="count">조회수 <?//php echo $row['hit'];?></div>
                        </div>    
                    <?php //} ?>

            
        </div>
        <div class="board_page">
                <?php 
                    // echo "<a class=\"bt first\" href=\"mypage.php?page=1\"> << </a>";
                    // $pre = $page - 1;
                    // echo "<a class=\"bt prev\" href=\"mypage.php?page=$pre\"> < </a>";

                    // $total_page = ceil($total_post / $per);
                    // $page_num = 1;

                    // while($page_num <= $total_page){
                    //     if($page==$page_num){
                    //         echo "<a class=\"num on\" href=\"mypage.php?page=$page_num\">$page_num </a>";
                    //     } else {
                    //         echo "<a class=\"num\" href=\"mypage.php?page=$page_num\">$page_num </a>"; }
                    //     $page_num++;
                    // }

                    // $next = $page + 1;
                    // echo "<a class=\"bt next\" href=\"mypage.php?page=$next\"> > </a>";

                    // echo "<a class=\"bt last\" href=\"mypage.php?page=$total_page\"> >> </a>";

                    
                ?>
                
            </div>
        
        

    </div> -->
    

    

    
    
    

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