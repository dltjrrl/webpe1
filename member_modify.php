<?php
    $id = $_GET["id"];

    $job = $_POST["job"];
    $dream = $_POST["dream"];
    $pass = $_POST["pass"];
    $name = $_POST["name"];
    $email1  = $_POST["email1"];
    $email2  = $_POST["email2"];


    $email = $email1."@".$email2;

    $con = mysqli_connect("localhost", "user1", "12345", "sample");
    $sql = "update members set pass='$pass', name='$name' , email='$email', job='$job', dream='$dream'";
    $sql .= " where id='$id'";
    mysqli_query($con, $sql);

    mysqli_close($con);

    echo "
	      <script>
	          location.href = 'index.php';
	      </script>
	  ";
?>
