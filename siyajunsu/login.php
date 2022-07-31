<!DOCTYPE html>
<?php
    #쿠키에서 로그인정보 불러오기#
    if (isset($_COOKIE['id'])){
        $userId = $_COOKIE['id'];
        $idSaveCheck = "checked";
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css" />
    <title>로그인</title>

    <script>
        function check(){
            // id값이 비어있으면 실행.
            const id = document.loginform.id;
            if(id.value == '') {
                alert('아이디를 입력해주세요.');
                userid.focus();
                return false;
            }

            // pw값이 비어있으면 실행.
            const pw = document.loginform.pw;
            if(pw.value == '') {
                alert('비밀번호를 입력해주세요.');
                userid.focus();
                return false;
            }
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
    
        </header>   
        <div class="navbar">
            <nav>
                    <a href="concert/concert.php">공연장</a>
                    <a href="ticketing/ticketing.php">티켓팅</a>
                    <a href="notice/notice_list.php">커뮤니티</a>

            </nav>
        </div>

        <div class="login_section">
            <h1 class="login_title">로그인</h1>

            <form action="check_login.php" name= "loginform" method="POST">
                
                <p><input type="text" name="id" id="id" placeholder="아이디" value="<?=$userId?>" required style="width: 167px; height: 28px;"></p>
                <p><input type="password" name="pw" placeholder="비밀번호" required style="width: 167px; height: 28px;"></p>
                <input type="checkbox" id="idSaveCheck" name="idSaveCheck" <?=$idSaveCheck?>>
                <span class="on">아이디 저장하기</span>

                <p><input class="login_btn" onclick='check()' type="submit" value="로그인" style="width: 167px; height: 28px;"></p>
                
                
            </form>
            <form action="join.php">
                <p><input type="button" value="회원가입" style="width: 167px; height: 28px;" onclick="location.href='join.php'"></p>
            </form>

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