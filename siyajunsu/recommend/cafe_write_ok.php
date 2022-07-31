<?php
    session_start();
    if(!isset($_SESSION['userid'])) {
        echo "<script>alert('권한이 없습니다.');";
        echo "window.location.replace('notice_list.php');</script>";
    }
    
    // 에러 정보를 할당
    $error = $_FILES['file']['error'];
    // 업로드가 진행되는 동안 tmp 디렉토리에 파일 저장됨
    // 자동 생성될 저장명을 tmp_file에 할당
    $tmpfile = $_FILES['file']['tmp_name'];
    $filenames = array();
    
    // 파일 원래 이름을 filename에 할당
    $filename = $_FILES['file']['name'];
    // 파일이 서버에 최종적으로 저장되었으면 하는 디렉토리의 경로를 folder에 할당해주고 filename을 붙여줌
    $folder = 'image/';  

    $countfiles = count($_FILES['file']['name']);

    for($i=0; $i<$countfiles; $i++){
        move_uploaded_file($tmpfile[$i], $folder.$filename[$i]); // 디렉토리에 저장하기
        array_push($filenames, $filename[$i]); // 가공해서 배열에 넣기
        $arrayString = implode(",", $filenames); // 배열을 문자열로 만들기
    }

    if( $error != UPLOAD_ERR_OK ){
        switch( $error ) {
                case UPLOAD_ERR_INI_SIZE:
                case UPLOAD_ERR_FORM_SIZE:
                    echo "<script>alert('파일이 너무 큽니다.');";
                        echo "window.history.back()</script>";
                        exit;
        }
    }

    $title = $_POST['title'];
    $place = $_POST['place'];
    $date = $_POST['concert_date'];
    $content = $_POST['content'];
    $writer_name = $_SESSION['username'];
    $writer_id = $_SESSION['userid'];
    $conn = mysqli_connect("localhost","root","ninja8898","siyajunsu");

    $sql = "INSERT INTO tb_cafe(title, content, place, concert_date, writer_name, writer_id, date, hit, file) VALUES ('$title', '$content','$place','$date', '$writer_name', '$writer_id', now(), 0, '$arrayString');";

    $res = mysqli_query($conn, $sql);

    if($res) {
        echo "<script>alert('추천게시물이 작성되었습니다.');";
        echo "window.location.replace('cafe_list.php');</script>";
    } else {
        echo mysqli_error($conn);
    }
?>