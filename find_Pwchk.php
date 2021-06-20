<?php
    session_start();
    header('Content-Type: text/html; charset=UTF-8');
    
    $db = new mysqli("localhost","user1", "12345", "sample");
    $db->set_charset("utf8");
  
    function mq($sql){
      global $db;
      return $db->query($sql);
    }
    if($_POST["id"] == "" ){
            echo '<script> alert("항목을 입력하세요"); history.back(); </script>';
        }else{

        $userid = $_POST['id'];

    $sql = mq("select * from members where id = '{$userid}'");
    $result = $sql->fetch_array();

    if($result["id"] == $userid){
        echo "<script>alert('회원님의 PW는 ".$result['pass']."입니다.'); history.back();</script>";
    }else{
    echo "<script>alert('없는 계정입니다.'); history.back();</script>";
    }
    }
    session_unset(); 
?>