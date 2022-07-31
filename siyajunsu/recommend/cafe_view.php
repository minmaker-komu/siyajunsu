<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항</title>
    <link rel="stylesheet" href="../css/board.css">
</head>
<body>
    <style>
        * {
            font-family: 'GangwonEdu_OTFBoldA';
            
        }
    </style>
    

    <div class="wrap">
        <!-- header-->
        <header>
            <div class="logo">
                
                <a href="../main.php">시야 준수</a>
                <img src="../img/spotlights.png" width=7%>
            </div>
            <div class="login">
                <?php if(!isset($_SESSION['userid'])){ ?>
                    <a href="../login.php">로그인/회원가입</a>
                <?php } else { ?>
                    <a href="../mypage.php">마이페이지</a> <?php }; ?>
            </div>
            
        </header>   
    </div>

    <div class="navbar">
        <nav>
                <a href="concert.php">공연장</a>
                <a href="ticketing.php">티켓팅</a>
                <a href="board.php">커뮤니티</a>
        </nav>
    </div>

    <div class="navbar2">
        <nav>
            <a href="../notice/notice_list.php">공지사항</a>
            <a href="../review/review_list.php">공연 후기</a>
            <a href="../siya/concert_view.php">공연장 시야</a>
            <a href="cafe_list.php">주변 카페/식당 추천</a>
        </nav>
    </div>
    
    <div class="board_wrap">
        <div class="board_title">
            <strong>주변 카페/식당 추천</strong>
            <p>공연장 주변의 카페와 식당 추천 후기를 올리는 게시판입니다.</p>
        </div>

        <?php
            $conn = mysqli_connect("localhost","root","ninja8898","siyajunsu");
            
            $sql = "SELECT * FROM tb_cafe where idx= $_GET[idx]";
            $res = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($res);
            $idx= $row['idx'];
            // 조회수 증가
            if($_SESSION['userid'] != $row['writer_id']){
                $sql_hit = "UPDATE tb_cafe SET hit=hit+1 WHERE idx=$idx";
                $res_hit = mysqli_query($conn, $sql_hit);
            }
            
            // 댓글 출력
            $bid=$_GET['idx'];
            $rs = $res->fetch_object();
            $query="select * from reply where status=1 and bid=".$row['idx']." order by memoid desc limit 8";
            $result =mysqli_query($conn, $query);
            $row2 = mysqli_fetch_array($result);
            
            
            $memo_result = $conn->query($query) or die("query error => ".$conn->error);
            
            while($mrs = $memo_result->fetch_object()){
                $memoArray[]=$mrs;
            }
            
        ?>
        <div class="board_view_wrap">
            <div class="board_view">
                <div class="title">
                    <?php echo $row['title'];?>
                </div>
                <div class="info">
                    <dl>
                        <dt>번호</dt>
                        <dd><?php echo $row['idx'];?></dd>
                    </dl>
                    <dl>
                        <dt>글쓴이</dt>
                        <dd>
                        <?php echo $row['writer_name'];?>
                        </dd>
                    </dl>
                    <dl>
                        <dt>작성일</dt>
                        <dd><?php echo $row['date'];?></dd>
                    </dl>
                
                    <dl>
                        <dt>공연장</dt>
                        <dd><?php echo $row['place'];?></dd>
                    </dl>
                    <dl>
                        <dt>공연날짜</dt>
                        <dd>
                        <?php echo $row['concert_date'];?>
                        </dd>
                    </dl>
                    <dl>
                        <dt>조회</dt>
                        <dd><?php echo $row['hit'];?></dd>
                    </dl>
                </div>
                
                <div>
                    

                </div>
                <div class="cont">
                    <p><?php echo $row['content'];?></p>
                    <?php 
                        if(!$row['file']){

                        } else{
                            $photoArr = explode(",",$row['file']);
                            for($i=0; $i<count($photoArr); $i++){
                                echo "<img src='../image/{$photoArr[$i]}'/>";
                            }
                        }
                    ?>
                        
                </div>
            </div>
            
            <div class="bt_wrap">
                <a href="notice_list.php" class="on">목록</a>
                <?php
                    if($_SESSION['userid'] == "admin"){ ?>
                        <a href="notice_update.php?idx=<?=$row['idx']?>">수정</a>
                        <a href="notice_delete.php?idx=<?=$row['idx']?>">삭제</a>
                <?php } ?>
            </div>
            
            <!-- 댓글 작성 형식 -->
            <div class="reply" id="reply">

                <div class="reply-component">
                    <form action="" class="reply-form" id="reply-form">
                        <div class="reply-info" >
                                <div class="rcol">
                                    <div class="inline reply-control"><input type="text" name="name" value="<?=$_SESSION['username']?>"></div>
                                </div>
                        </div>
                        <textarea class="form-control reply-textarea" id="contents" name="contents" placeholder="댓글을 작성해주세요." required></textarea>
                        <input type="hidden" name="idx" id="idx" value="<?=$idx?>" />
                        <div class="btn"style="margin-top: 8px" >
                            <button type="submit" class="right btn btn-primary" id="reply-btn">등록</button>
                        </div>      
                    </form>
                </div>
            </div>
            
            <iframe name="reply1" style="display:none;"></iframe>
            <div id="js-load">
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
            <!-- 더보기 버튼 생성 -->
              
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script>
        $("#reply-btn").click(function () {
    
            var data = {
                memo : $('#contents').val() ,
                bid : $('#idx').val()
            };
                $.ajax({
                    async : false ,
                    type : 'post' ,
                    url : 'replyDo.php' ,
                    data  : data ,
                    dataType : 'html',
                    error : function() {} ,
                    success : function(return_data) {
                        if(return_data=="member"){
                            alert('로그인 하십시오.');
                            return;
                        }else{
                            $("#reply").append(return_data);
                        }
                    }
            });
        });

        var rn1=0;
        function reply1update(rbs1) {
            //답글 수정란 항목을 감추어준다.
            if(rn1 != 0) {
                var reply1updateid = 'reply1updateid';
                document.getElementById('reply1updateid'+rn1).style.display = 'none';
                rn1=0;
            }
            //답글 수정란 항목을 나타나도록 만들어준다.
            document.getElementById('reply1updateid'+rbs1).style.display = 'block';
            rn1=rbs1;
        }

        //4강
        function reply1delete(rbs1) {
        if(rn1 != 0) {
        document.getElementById('reply1updateid'+rn1).style.display = 'none';
        rn1=0;
        }
        }

        //댓글 수정창 닫기
        function reply1updatecancel(rbs1) {
        document.getElementById('reply1updateid'+rbs1).style.display = 'none';
        rn1=0;
        }

        //댓글 번호를 전송한다.
        function reply1limitfunction(r1rni) {
        document.getElementById("reply1replynumid").value = r1rni;
        }
    </script>

</body>
</html>