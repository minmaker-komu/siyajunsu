<?php
    session_start();
    $conn = mysqli_connect("localhost","root","ninja8898","siyajunsu");
    $id = $_GET['idx'];

    $sql_check = "SELECT * FROM tb_cafe WHERE idx=$id";
    $res_check = mysqli_fetch_array(mysqli_query($conn, $sql_check));
    // if($_SESSION['userid'] != $row['writer_id']){
    //     echo "<script>alert('권한이 없습니다!');";
    //     echo "window.history.back()</script>";
    //     exit;
    // }

    $sql = "DELETE FROM tb_cafe WHERE idx=$id; ";

    $res = mysqli_multi_query($conn, $sql);

    echo "<script>alert('게시물이 삭제되었습니다!');";
    echo "window.location.replace('cafe_list.php');</script>";
?>