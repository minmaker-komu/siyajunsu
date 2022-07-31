<?php
	include "db.php";
	$uname = $_GET["username"];
	$sql = mq("select * from tb_userinfo where username='".$uname."'");
	$member = $sql->fetch_array();
	if($member==0)
	{
?>
	<div style='font-family: "GangwonEdu_OTFBoldA"';><?php echo $uname; ?>는 사용 가능한 닉네임 입니다.</div>
<?php 
	}else{
?>
	<div style='font-family: "GangwonEdu_OTFBoldA"; color:red;'><?php echo $uname; ?> 이미 존재하는 닉네임 입니다.<div>
<?php
	}
?>
<button value="닫기" onclick="window.close()">닫기</button>
<script>
</script>