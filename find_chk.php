<?php
	include "db.php";
    if($_POST["name"] == "" ){
            echo '<script> alert("항목을 입력하세요"); history.back(); </script>';
        }else{

        $username = $_POST['name'];

    $sql = mq("select * from members where name = '{$username}'");
    $result = $sql->fetch_array();

    if($result["name"] == $username){
        echo "<script>alert('회원님의 ID는 ".$result['id']."입니다.'); history.back();</script>";
    }else{
    echo "<script>alert('없는 계정입니다.'); history.back();</script>";
    }
    }
?>