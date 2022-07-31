<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        * {
            font-family: 'GangwonEdu_OTFBoldA';
            
        }
    </style>
    <?php
        session_start();

        $conn = mysqli_connect("localhost","root","ninja8898","siyajunsu");
        $id= $_GET["id"];
    ?>
    <div class=top><h2>비밀번호 변경</h2></div>
    <div class=middle>
        <form method="post" action="check_pw_ok.php?id=<?=$id?>" autocomplete="off">
            <p style="font-family: 'GangwonEdu_OTFBoldA'; font-size:25px;">현재 비밀번호를 입력하세요.</p>
            <p><input style="text-align:center;" placeholder="Password" class=textform type=password name=pw></p>
            <p><input type=submit value=확인></p>
        </form>
    </div>
</body>
</html>



