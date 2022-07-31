<!DOCTYPE html>
<?php
    session_start();
?>
<html lang="ja">
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--[if lt IE 9]>
<script src="../common/js/html5shiv.js"></script>
<![endif]-->
<meta name="viewport" content="width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=no"/>
<meta name="format-detection" content="telephone=no">
<title>더보기(MORE) 버튼을 눌러 일정갯수의 리스트 더 보기</title>
<link type="text/css" rel="stylesheet" href="https://nanati.me/common/css/A.reset.css+js-load.css,Mcc.JLEXNajHNZ.css.pagespeed.cf.Z34sx_n4da.css" media="screen"/>

<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/js-load.js"></script>
</head>

<body>
<header>
  <h1>더보기(MORE) 버튼을 눌러 일정갯수의 리스트 더 보기</h1>
</header>
<?php
            $conn = mysqli_connect("localhost","root","ninja8898","siyajunsu");
            
            $sql = "SELECT * FROM tb_siya where idx= 40";
            $res = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($res);
            $idx= $row['idx'];
            // 조회수 증가
            if($_SESSION['userid'] != $row['writer_id']){
                $sql_hit = "UPDATE tb_siya SET hit=hit+1 WHERE idx=$idx";
                $res_hit = mysqli_query($conn, $sql_hit);
            }
            
            // 댓글 출력
            $bid=40;
            // $result = $conn->query("select * from board where bid=".$bid) or die("query error => ".$conn->error);
            $rs = $res->fetch_object();
            $query="select * from reply where status=1 and bid=".$row['idx']." order by memoid desc";
            $result =mysqli_query($conn, $query);
            $row2 = mysqli_fetch_array($result);
            
            $memo_result = $conn->query($query) or die("query error => ".$conn->error);
            $savenum="0";
            $count="0";
            
            while($mrs = $memo_result->fetch_object()){
                $count++;
                $memoArray[]=$mrs;
                if($count=="5"){
                    //맨 처음 불러온 댓글중 가장 최상단에 출력된 댓글의 번호를 저장한다.
                    $savenum=$row2['memoid'];
                }
            }
            
        ?>

<div id="contents">
  <div id="js-load" class="list">
  <?php 
                // 댓글 출력
                if(isset($memoArray)){
                    foreach($memoArray as $ma){
            ?>
                <div class="card mb-4 js-load" style="max-width: 100%;margin-top:20px; border-bottom: 1px solid #ddd; ">
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
    
  </div>
  <div id="js-btn-wrap" class="btn-wrap"> <a href="javascript:;" class="button">더보기</a> </div>
  
</div>
</body>
</html>
