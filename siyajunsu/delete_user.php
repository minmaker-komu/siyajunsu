<?php
// $idx = $_GET["idx"]

session_start();
$idx = $_SESSION['idx'];
// echo $idx;
// exit;


/*  DB 접속 */
$conn = mysqli_connect("localhost","root","ninja8898","siyajunsu");


/* 쿼리 작성 */
$sql = "delete from tb_userinfo where useridx = $idx;";
// echo $sql;
// exit;

/* 데이터베이스에 쿼리 전송 */
mysqli_query($conn, $sql);


/* 세션 삭제 */
unset($_SESSION["idx"]);
unset($_SESSION["username"]);
unset($_SESSION["userid"]);


/* DB(연결) 종료 */
mysqli_close($conn);


/* 리디렉션 */
echo "
    <script type=\"text/javascript\">
        alert(\"정상처리 되었습니다.\");
        location.href = \"../main.php\";
    </script>
";
?>