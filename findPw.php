<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>PHP 프로그래밍 입문</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/login.css">
<script>
        function pw_ch(){
            if (!findPw.id.value) {
          alert("아이디를 입력하세요!");
          findPw.id.focus();
          return;
      }

else{

    findPw.submit();

}
        }
    </script>
<style>
#header-background{ width:100%; height:550px; background:url('./img/main_img.png'); }
a {color:#333; text-decoration: none;}
.find {text-align:center; width:500px; margin-top:30px; }
</style>
</head>
<body>
	<header id="header-background">
    	<?php include "header.php";?>
    </header>
	<section>
		
    <body>
        <center>
            <h1>비밀번호 찾기</h1><br>
            <form id="findPw" method='post' action='find_Pwchk.php'>
            ID  &nbsp;&nbsp;
            <input type=text size=20 name="id">
            <br><br>
            <input type=button onclick=pw_ch() value='찾기'>
        </center>
    </body>
	</section>
	<footer>
    	<?php include "footer.php";?>
    </footer>
</body>
</html>
