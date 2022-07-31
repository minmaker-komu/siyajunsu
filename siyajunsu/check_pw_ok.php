<?php
    session_start();
    $conn = mysqli_connect("localhost","root","ninja8898","siyajunsu");
    $id = $_GET['id'];
    $pw = $_POST['pw'];

    $sql = "SELECT * FROM tb_userinfo WHERE userid='$id'";
    $res = mysqli_fetch_array(mysqli_query($conn, $sql));

    if($_SESSION['userid'] != $id){
        echo "<script>alert('권한이 없습니다!');";
        echo "window.location.href='../main.php';</script>";
    } else {
        
        if(password_verify($pw, $res['userpw'])){
            echo "<script>alert('새 비밀번호를 입력해주세요!');";
            echo "opener.parent.change_pw(); window.close();</script>";
        } else {
            echo "<script>alert('비밀번호가 틀립니다.');";
            echo "opener.parent.location='mypage.php'; window.close();</script>";
        }
    }
?>