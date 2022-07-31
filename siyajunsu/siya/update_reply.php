
<?php
    header("Content-Type: text/html; charset=UTF-8");
    session_start();
    //게시물 번호
    $bid = $_POST["bid"];
    //댓글 번호
    $memoid = $_POST["memoid"];
    //댓글 내용
    $memo = $_POST["memo"];
    //DB접속
    $conn = mysqli_connect("localhost","root","ninja8898","siyajunsu");
    //DB 한글 사용처리
    //mysqli_query ($conn, 'SET NAMES utf8');
    //댓글 수정
    $sql = "update reply set memo='$memo' where bid='$bid' and memoid='$memoid'";
    $res = $conn->query($sql);
    //댓글 수정 확인
    $sql2 = "select * from reply where bid='$bid' and memoid='$memoid' and memo='$memo'";
    $res2 = $conn->query($sql2);
    $row2=mysqli_fetch_array($res2);
    // //수정된 내용 출력
    // echo $row2['memo'];
    echo "<script>alert('댓글이 수정되었습니다!');";
    echo "window.location.replace('view2.php?idx=$bid');</script>";

?>
