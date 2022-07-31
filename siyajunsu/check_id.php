<?php
	include "db.php";
	$uid = $_GET["userid"];
	$sql = mq("select * from tb_userinfo where userid='".$uid."'");
	$member = $sql->fetch_array();
	if($member==0)
	{
?>
	<div style='font-family: "GangwonEdu_OTFBoldA"';><?php echo $uid; ?>는 사용 가능한 아이디 입니다.</div>
<?php 
	}else{
?>
	<div style='font-family: "GangwonEdu_OTFBoldA"; color:red;'><?php echo $uid; ?> 이미 존재하는 아이디 입니다.<div>
<?php
	}
?>
<button value="닫기" onclick="window.close()">닫기</button>
<script>
</script>