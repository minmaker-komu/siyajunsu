<!DOCTYPE html>
<html>
<body>
<div id="send">
<?php
header("Content-Type: text/html; charset=UTF-8");
session_start();
$boardnum = $_POST["reply1boardnum"];
$replynum = $_POST["reply1replynum"];
$conn = mysqli_connect("localhost","root","ninja8898","siyajunsu");
mysqli_query ($conn, 'SET NAMES utf8');
$sql="SELECT * FROM reply WHERE bid=$boardnum and memoid<$replynum ORDER BY reply.memoid DESC LIMIT 5";
$res = $conn->query($sql);
$row2 = mysqli_fetch_array($res);

$memo_result = $conn->query($sql) or die("query error => ".$conn->error);
$savenum="0";
$count="0";
            
while($mrs = $memo_result->fetch_object()){
    $count++;
    $memoArray[]=$mrs;
    echo "돌아";
    if($count=="5"){
        //맨 처음 불러온 댓글중 가장 최상단에 출력된 댓글의 번호를 저장한다.
        $savenum=$row2['memoid'];
        echo $savenum;
    }
// }
// while($row=mysqli_fetch_array($res)) {
//     echo "돌아";
//     $count++;
//     if($count=="5") {
//         if($savenum=="0") {
//             $savenum=$row['memoid'];
//             echo $savenum;
//         }
//     }

}?>
<?php 
                // 댓글 출력
                if(isset($memoArray)){
                    echo "돌아라";
                    foreach($memoArray as $ma){
                        echo "돌으시오";
            ?>
                <div class="card mb-4" id="replys" style="max-width: 100%;margin-top:20px; border-bottom: 1px solid #ddd; ">
                    <div class="row g-0">
                        <div class="col-md-12">
                            <div class="card-body">
                                <!-- 닉네임이랑 작성날짜 -->
                                <p class="card-text2" style="margin-bottom:5px;"><?php echo $ma->username;?> / <?php echo $ma->regdate;?></p>
                                <!-- 댓글 내용 -->
                                <p class="card-text" id="reply1text" style="font-size:15px; margin-bottom:10px;"><?php echo $ma->memo;?></p>
                            </div>
                            <!-- 댓글 수정삭제 -->
                            <div class="btn">
                                <span class="update_btn" style="margin-bottom:10px">
                                    <?php
                                        $user=$ma->userid;
                                        if(isset($_SESSION['username'])) {
                                        if($_SESSION['userid'] == $user){ ?>
                                            <!-- <?php //echo "<span onclick='reply1update(".$row2['memoid'].")'>수정 </span>"; ?> -->
                                            <!-- 이거누르면 수정하는 란 뜨게 하기 -->
                                            
                                            <span onclick="reply1update(<?php echo $ma->memoid;?>)">수정 </span>
                                            
                                    <?php } ?>
                                    <?php } ?>
                                </span>
                                <?php 
                                    $id = $ma->memoid; // 댓글 아이디
                                    $mm = $ma->memo; // 댓글 내용
                                    
                                   
                                    echo "<fieldset id='reply1updateid".$id."' style='margin-top:20px; margin-bottom:10px; display:none;'>"; 
                                ?>
                                    <legend>댓글 수정</legend>
                                    <?php echo "<form id='reply1updateformid".$id."' action='update_reply.php' method='post' >"; ?>
                                    <!-- <form id="'reply1updateformid'+$id" action='update_reply.php' method='post' > -->
                                        <input type="hidden" name="bid" value="<?=$idx?>">
                                        <input type="hidden" name="memoid" value="<?=$id?>">
                                        <input type="textarea" name="memo" value="<?=$mm?>" style="width:100%; margin-top:10px; margin-bottom:10px;">
                                    </form>
                                    <?php echo "<button style='float:right; border:1px solid; background:none; margin-right:5px; margin-bottom:5px;' onclick='reply1updatecancel(".$id.")'>취소</button>"; ?>
                                    <?php echo "<button style='float:right; border:1px solid; background:none; margin-right:5px; margin-bottom:5px;' onclick='reply1updateformid".$id.".submit()'>댓글 수정</button>";?>
                                    <!-- <button style="float:right; border:1px solid; background:none; margin-right:5px; margin-bottom:5px;" onclick="document.getElementById('reply1updateformid'+$id).submit();">댓글 수정</button> -->
                                    <!-- <button style="float:right; border:1px solid; background:none; margin-right:5px; margin-bottom:5px;" onclick="document.getElementById('reply1updateformid$id').submit();">댓글 수정</button> -->
                                </fieldset>
                                <span class="delete_btn" style="margin-bottom:10px">
                                    <?php
                                        if(isset($_SESSION['username'])) {
                                        if($_SESSION['userid'] == $user){ ?>
                                            <a href="delete_reply.php?memoid=<?=$ma->memoid?>">삭제</a>
                                    <?php } ?>
                                    <?php } ?>
                                </span>

                            </div>
                            
                            
                        </div>
                    </div>
                </div>
                <?php }?>
            <?php }?>
<?php
//더보기
$sql2="SELECT * FROM reply WHERE bid=$boardnum and memoid<$replynum ORDER BY reply.memoid DESC";
$res2 = $conn->query($sql2);
if($res2->num_rows > 0) {
echo "<p id='rcb' style='text-align:center;' onclick=\"this.style.display='none';+reply1moreid.submit();\">더보기</p>";
}
?>
</div>
<script>
parent.document.getElementById("replys").innerHTML += document.getElementById("send").innerHTML;
parent.document.getElementById("reply1replynumid").value = <?php echo $savenum; ?>;
</script>
</body>
</html>