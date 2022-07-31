<?php
    session_start();
    $conn = mysqli_connect("localhost","root","ninja8898","siyajunsu");
    $login_id = $_SESSION['userid'];

    $sql_pre = "SELECT * FROM tb_userinfo WHERE userid='$login_id'";
    $res_pre = mysqli_fetch_array(mysqli_query($conn, $sql_pre));

    $pw = $_POST['pw2'];
    $name = $_POST['name2'];
    $email = $_POST['email2'];

    $pw_pre = $res_pre['userpw'];
    $name_pre = $res_pre['username'];
    $email_pre = $res_pre['useremail'];

    $change_cnt = 0;

    if($pw==""){
        echo "<script>alert('비밀번호는 비울 수 없습니다!');";
        echo "window.location.href='my_page.php';</script>";
        exit;
    } else if($name==""){
        echo "<script>alert('이름은 비울 수 없습니다!');";
        echo "window.location.href='my_page.php';</script>";
        exit;
    }

    if($pw!=$pw_pre){
        $change_cnt++;
    }
    if($name!=$name_pre){
        $change_cnt++;
    }
    if($email!=$email_pre){
        $change_cnt++;
    }

    if($change_cnt==0){
        echo "<script>alert('변경 사항이 없습니다!');";
        echo "window.location.href='my_page.php';</script>";
        exit;
    }
    $hash = password_hash($pw,PASSWORD_DEFAULT);
    $sql = "UPDATE tb_userinfo SET userpw='$hash', username='$name', useremail='$email' WHERE userid='$login_id'";
    $res = mysqli_query($conn, $sql);

    if($res){
        echo "<script>alert('정보를 수정했습니다!');";
        echo "window.location.href='mypage.php';</script>";
    }
?>
<meta http-equiv="refresh" content="0;url=mypage.php">