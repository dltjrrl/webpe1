<?php
	include "db.php";
	if(isset($_SESSION['userid'])){
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>PHP 프로그래밍 입문</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/main.css">
<link rel="stylesheet" type="text/css" href="./css/board.css">
<style>
* {margin: 0 auto;}
a {color:#333; text-decoration: none;}
.find {text-align:center; width:500px; margin-top:30px; }
#header-background{ width:100%; height:550px; background:url('./img/main_img.png'); }
</style>
</head>
<body>
<header id = "header-background">
    	<?php include "headerd.php";?>
    </header>
	<div class="find">
		<form method="post" action="member_modify_form.php">
			<?php
				$con = mysqli_connect("localhost", "user1", "12345", "sample");
                $sql    = "select * from members where id='{$_SESSION['userid']}'";
                $result = mysqli_query($con, $sql);
                $row    = mysqli_fetch_array($result);

                $pass = $row["pass"];
                $name = $row["name"];
								$job  = $row["job"];
								$dream = $row["dream"];

                $email = explode("@", $row["email"]);
                $email1 = $email[0];
                $email2 = $email[1];

					?>
			<h1>내 정보</h1>
			<p><a href="index.php">홈으로</a></p>
				<fieldset>
					<legend>마이페이지</legend>
						<table>
							<tr>
								<td>아이디</td>
								<td><input type="text" size="35" name="userid" value="<?php echo $_SESSION['userid'];?>" disabled></td>
							</tr>
							<tr>
								<td>비밀번호</td>
								<td><input type="password" size="35" name="pass" value="<?php echo $get_SESSION['pass'];?>" disabled></td>
							</tr>
                <tr>
								<td>이름</td>
								<td><input type="text" size="35" name="name" value="<?=$name?>"disabled></td>
							</tr>
							<tr>
								<td>이메일</td>
								<td><input type="text" size="9" name="email" value="<?=$email1?>" disabled>@
                                <input type="text" size="17" name="email" value="<?=$email2?>" disabled></td>
							</tr>
							<tr>
							<td>취업목표</td>
							<td><input type="text" size="35" name="job" value="<?=$job?>"disabled></td>
						</tr>

						<tr>
						<td>취업다짐</td>
						<td><input type="text" size="35" name="dream" value="<?=$dream?>"disabled></td>
					</tr>

						</table>
            <div class="registerAndFind">
						
						<a href="message_box.php?mode=rv">메일</a>
						<a href="member_modify_form.php">정보변경</a>
					</div>
			</fieldset>
			<?php  ?>
		</form>
	</div>
    <footer>
    	<?php include "footer.php";?>
    </footer>
</body>
</html>
<?php }else{
	echo "<script>alert('잘못된 접근입니다.'); history.back();</script>";
}
