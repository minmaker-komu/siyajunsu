<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <link rel="stylesheet" href="css/login.css" />
    <script>
        function checkid(){
            var userid = document.getElementById("userid").value;
            if(userid)
            {
                url = "check_id.php?userid="+userid;
                    window.open(url,"chkid","width=300,height=100");
                }else{
                    alert("아이디를 입력하세요");
                }
        }
        function checkname(){
            var username = document.getElementById("username").value;
            if(username)
            {
                url = "check_name.php?username="+username;
                    window.open(url,"chkname","width=300,height=100");
                }else{
                    alert("닉네임을 입력하세요");
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
    <div class="wrap">
        <!-- header-->
        <header>
            <div class="logo">
                
                <a href="main.php">시야 준수</a>
                <img src="img/spotlights.png" width=7%>
            </div>
    
        </header>   
        
        <div class="login_section">
            <h1>회원가입</h1>

            <form action="request.php" name="regiform" method="POST" onsubmit="return sendit()">
            <!-- <form action="request.php" name="regiform" method="POST"> -->
                <p><input type="text" name="username" id="username" placeholder="닉네임" required></p>
                <input type="button" value="중복검사" onclick="checkname();" />
                <p><input type="text" name="userid" id="userid" class="check" placeholder="아이디" required></p>
                <input type="button" value="중복검사" onclick="checkid();" />
                <p><input type="password" name="userpw" id="userpw" placeholder="비밀번호" required></p>
                <p><input type="password" name="userpw_ch" id="userpw_ch" placeholder="비밀번호 확인" required></p>
                <p><input type="text" name="useremail" id="useremail" placeholder="이메일" required></p>
                <p><input type="submit" value="회원 가입"></p>
                
            </form>

        </div>

    </div>
    <!-- 입력값 체크하는 js 스크립트 -->
    <script src="regist.js"></script>
    
    <!-- <section class="content">
        <div id="test" onload="document.getElementById(test).style.opacity='1'">
          <h1>공연 <br /></h1>
          <p>Sookmyung Women's University for Fate</p>
        </div>
    </section> -->

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