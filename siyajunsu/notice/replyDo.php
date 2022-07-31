<?php
    session_start();
    $conn = mysqli_connect("localhost","root","ninja8898","siyajunsu");
    if(!$_SESSION['userid']){
        echo "member";
        exit;
    }
    

    $memo = $_POST['memo'];
    $bid = $_POST['bid'];
    $memoid = $_POST['memoid']??0;

    $sql= "INSERT INTO reply(bid, pid, userid, username, memo, status) VALUES (".$bid.", ".$memoid.", '".$_SESSION['userid']."', '".$_SESSION['username']."', '".$memo."', 1)";

    $result=$conn->query($sql);
    // $res = mysqli_query($conn, $sql);
    // $row = mysqli_fetch_array($res);
    //if($result)$last_memoid = $conn -> insert_id;
    // echo "<div class=\"card mb-4\" style=\"max-width: 100%;margin-top:20px;\">
    // <div class=\"row g-0\">
    //     <div class=\"col-md-12\">
    //     <div class=\"card-body\">
    //     <p class=\"card-text\">".$memo."</p>
    //     <p class=\"card-text\"><small class=\"text-muted\">".$_SESSION['userid']." / now</small></p>
    //     </div>
    // </div>
    // </div>
    // </div>";
 
?>




