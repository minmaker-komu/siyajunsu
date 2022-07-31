<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
        session_start();
        $userId = trim($_POST['id']);
        $userPw= trim($_POST['pw']);
        $idSaveCheck = trim($_POST['idSaveCheck']);
  
        $db = new mysqli("localhost","root","ninja8898","siyajunsu");
        $db->set_charset("utf8");
      
        function mq($sql){
          global $db;
          return $db->query($sql);
        }

        if($_POST["id"] == "" || $_POST["pw"] == ""){
            echo '<script> alert("아이디나 패스워드 입력하세요"); history.back(); </script>';
        }
        else{
    
            //password변수에 POST로 받아온 값을 저장하고 sql문으로 POST로 받아온 아이디값을 찾습니다.
            $password = $_POST['pw'];
            $sql = mq("select * from tb_userinfo where userid='".$_POST['id']."'");
            $tb_userinfo = $sql->fetch_array();
            $hash_pw = $tb_userinfo['userpw']; //$hash_pw에 POST로 받아온 아이디열의 비밀번호를 저장합니다. 
        
            if(password_verify($password, $hash_pw)) //만약 password변수와 hash_pw변수가 같다면 세션값을 저장하고 알림창을 띄운후 main.php파일로 넘어갑니다.
            {
                $_SESSION['userid'] = $tb_userinfo["userid"];
                $_SESSION['username'] = $tb_userinfo["username"];
                $_SESSION['idx'] = $tb_userinfo["useridx"];
                echo $tb_userinfo['userid']."</br>";
                print_r($_SESSION);
            
        
                echo "<script>alert('로그인되었습니다.'); location.href='main.php';</script>";
            }else{ // 비밀번호가 같지 않다면 알림창을 띄우고 전 페이지로 돌아갑니다
                echo "<script>alert('아이디 혹은 비밀번호를 확인하세요.'); history.back();</script>";
            }
        }

        if ($idSaveCheck =="on"){
            setcookie('id',$userId,time()+(86400*30),'/');
        }else{
            setcookie('id',$userId,time()-(86400*30),'/');
            unset($_COOKIE['id']);
        }
    ?>
    
</body>
</html>


