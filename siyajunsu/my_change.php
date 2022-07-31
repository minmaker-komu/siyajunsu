<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css" />
    <title>마이페이지</title>

    <script>
	function check_pw() {
		var id = document.getElementById("id").innerHTML;
        var url = "check_pw.php?id=" + id;
		window.open(url, "chkpw", 'width=400,height=250, scrollbars=no, resizable=no');
	}
	function change_pw() {
		document.getElementById("pw").disabled = false;
		document.getElementById("pw_button").value = "확정";
		document.getElementById("pw_button").style.color = "hotpink";
		document.getElementById("pw_button").setAttribute("onclick", "decide_pw()");
	}
	function decide_pw() {
		document.getElementById("submit").disabled = false;
		document.getElementById("pw2").value = document.getElementById("pw").value;
		document.getElementById("pw").disabled = true;
		document.getElementById("pw_button").disabled = true;
		document.getElementById("pw_button").value = "확정됨";
		document.getElementById("pw_button").style.color = "#ccc";
	}

	function change_name() {
		document.getElementById("name").disabled = false;
		document.getElementById("name_button").value = "확정";
		document.getElementById("name_button").style.color = "hotpink";
		document.getElementById("name_button").setAttribute("onclick", "decide_name()");
	}
	function decide_name() {
		document.getElementById("submit").disabled = false;
		document.getElementById("name2").value = document.getElementById("name").value;
		document.getElementById("name").disabled = true;
		document.getElementById("name_button").disabled = true;
		document.getElementById("name_button").value = "확정됨";
		document.getElementById("name_button").style.color = "#ccc";
	}

	function change_email() {
		document.getElementById("email").disabled = false;
		document.getElementById("email_button").value = "확정";
		document.getElementById("email_button").style.color = "hotpink";
		document.getElementById("email_button").setAttribute("onclick", "decide_email()");
	}
	function decide_email() {
		document.getElementById("submit").disabled = false;
		document.getElementById("email2").value = document.getElementById("email").value;
		document.getElementById("email").disabled = true;
		document.getElementById("email_button").disabled = true;
		document.getElementById("email_button").value = "확정됨";
		document.getElementById("email_button").style.color = "#ccc";
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
                <?php if(!isset($_SESSION['userid'])){ ?>
                    <a href="login.php">로그인/회원가입</a>
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
                //include "db.php";
                session_start();
                if(!isset($_SESSION['userid'])) {
                            
                    echo "<script>alert('비회원입니다!');";
                    echo "window.location.href=\"../siyajunsu/main.php\";</script>";
                }
                else
                {
                    //echo $_SESSION['userid'];
                    $conn = mysqli_connect("localhost","root","ninja8898","siyajunsu");
                    $login_id = $_SESSION['userid'];
                    //echo $login_id;
                    $sql = "SELECT * FROM tb_userinfo WHERE userid='$login_id'";
                    $res = mysqli_fetch_array(mysqli_query($conn, $sql));
                    //echo mysqli_connect_error($conn);
                    echo mysqli_error($conn);
                }
            ?>
        </div>

        <div class=middle>
            <form method=post action="my_change_ok.php">  
                <table>
                    <tr>
                        <th>아이디</th>
                        <td><span id=id><?=$res['userid']?></span></td>
                    </tr>
                    <tr>
                        <th>비밀번호</th>
                        <td><input type=password name=pw id=pw disabled placeholder="필수 입력 사항입니다." value="<?=$res['userpw']?>"> <input type=button id=pw_button value="변경" onclick="check_pw();"></td>
                        <input type=hidden name=pw2 id=pw2 value="<?=$res['userpw']?>">
                    </tr>
                    <tr>
                        <th>이름</th>
                        <td><input type=text name=name id=name disabled placeholder="필수 입력 사항입니다." value="<?=$res['username']?>"> <input type=button id=name_button value="변경" onclick="change_name();"></td>
                        <input type=hidden name=name2 id=name2 value="<?=$res['username']?>">
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><input type="text" name=email id=email disabled value="<?=$res['useremail']?>"> <input type=button id=email_button value="변경" onclick="change_email();"></td>
                        <input type=hidden name=email2 id=email2 value="<?=$res['useremail']?>">
                    </tr>
                </table>
                <input disabled id=submit type=submit value="변경 완료">
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