<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입완료</title>
    <link rel="stylesheet" href="css/join2.css" />
    
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
        
        <div class="mainimg">
            <img src="img/nell.jpg" width=30% />
            <p>
                <?php
                    $name = $_POST["username"];
                    $id = $_POST["userid"];
                    $pw = $_POST["userpw"];
                    $hash = password_hash($pw,PASSWORD_DEFAULT);
                    $email = $_POST["useremail"];

                    $conn=mysqli_connect("127.0.0.1","root","ninja8898","siyajunsu");
                    // db에 넣기
                    $join = "insert into tb_userinfo (userid, userpw, username, useremail) values ('$id','$hash','$name','$email')";
                    if($conn -> query($join)) {
                        echo $name.'님 가입을 환영합니다.';
                    }

                    //conn_close($conn);
                    
                ?>
                <!-- <?php
                    session_start();
                    if( isset( $_SESSION[ 'username' ] ) ) {
                        $jb_login = TRUE;
                    }
                ?> -->
            </p>
               
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