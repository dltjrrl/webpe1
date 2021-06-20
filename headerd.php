<?php
    
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";
    if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
    else $userlevel = "";
    if (isset($_SESSION["userpoint"])) $userpoint = $_SESSION["userpoint"];
    else $userpoint = "";
?>
        <div id="top">
            <h3>
                <a href="index.php">취업대기조</a>
            </h3>
            <ul id="top_menu">
<?php
    if(!$userid) {
?>
                <li><a href="member_form.php">회원가입</a> </li>
                <li> | </li>
                <li><a href="login_form.php">로그인</a></li>
<?php
    } else {
                $logged = $username."(".$userid.")님[Level:".$userlevel.", Point:".$userpoint."]";
?>
                <li><?=$logged?> </li>
                <li> | </li>
                <li><a href="logout.php">로그아웃</a> </li>
                <!--<li> | </li>
                <li><a href="member_modify_form.php">정보수정</a></li>-->
                <li> | </li>
                <li><a href="mypage.php">마이페이지</a></li>
<?php
    }
?>

<?php
    if($userlevel==1) {
?>
                <li> | </li>
                <li><a href="admin.php">관리자모드(15장)</a></li>
<?php
    }
?>
            </ul>
        </div>


            <ul id = "main-menu">
                <li><a href="index.php">홈</a></li>
                <li><a href="board_list.php">공지</a>
                   <ul id="sub-menu">
                      <li><a href="board_list.php">학과공지</a></li>
                      <li><a href="board_list.php">채용정보</a></li>
                   </ul>
                </li>
                <li><a href="board_form.php">취업게시판</a>
                  <ul id="sub-menu">
                     <li><a href="board_list.php">자유게시판</a></li>
                     <li><a href="board_list.php">취업게시판</a></li>
                     <li><a href="board_list.php">취업 후기</a></li>
                     <li><a href="board_list.php">자료공유</a></li>
                  </ul></li>
                <li><a href="index.php">취업현황</a>
                  <ul id="sub-menu">
                     <li><a href="board_list.php">뉴스</a></li>
                     <li><a href="http://localhost/part3/index.php#footer_content">취업사이트</a></li>
                  </ul></li>
            </ul>
