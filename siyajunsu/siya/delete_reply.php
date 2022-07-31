<?php
    session_start();
    $conn = mysqli_connect("localhost","root","ninja8898","siyajunsu");
    $id = $_GET['memoid'];

    $sql_check = "SELECT * FROM reply WHERE memoid=$id";
    $res_check = mysqli_fetch_array(mysqli_query($conn, $sql_check));
    // if($_SESSION['userid'] != $row['writer_id']){
    //     echo "<script>alert('권한이 없습니다!');";
    //     echo "window.history.back()</script>";
    //     exit;
    // }

    $sql = "
    DELETE FROM reply WHERE memoid=$id;
    ";

    $res = mysqli_multi_query($conn, $sql);
    $idx = $res_check['bid'];

    echo "<script>alert('댓글이 삭제되었습니다!');";
    echo "window.location.replace('view2.php?idx=$idx');</script>";
?>