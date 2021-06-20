<script src="./js/slide.js"></script>
<div class="slideshow-container">

      <!-- Full-width images with number and caption text -->
      <div class="mySlides fade">
        <div class="numbertext">1 / 6</div>
      <a href="http://www.daejonilbo.com/news/newsitem.asp?pk_no=1474184" target="_blank"><img src="./img/slide1.png" style="width:100%"></a>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">2 / 6</div>
      <a href="http://job.hannam.ac.kr/sub3/menu_1.html?Link=http%3A%2F%2Funiboard.hannam.ac.kr%2Fservlet%2Fcontroller.helpdesk.UniboardServlet%3Fp_process%3Dview%26p_bdseq%3D848%26p_seq%3D2117" target="_blank" ><img src="./img/slide2.png" style="width:100%"></a>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">3 / 6</div>
      <a href="http://ce.hannam.ac.kr/sub5/menu_1.html" target="_blank"><img src="./img/slide3.png" style="width:100%"></a>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">4 / 6</div>
      <a href="https://view.asiae.co.kr/article/2021031013052830576" target="_blank"><img src="./img/slide4.png" style="width:100%"></a>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">5 / 6</div>
      <a href="https://www.inflearn.com/?utm_source=naver&utm_medium=cpm&utm_campaign=brand&utm_content=main&n_media=27758&n_query=%EC%9D%B8%ED%94%84%EB%9F%B0&n_rank=1&n_ad_group=grp-a001-04-000000018876572&n_ad=nad-a001-04-000000135811482&n_keyword_id=nkw-a001-04-000003361152887&n_keyword=%EC%9D%B8%ED%94%84%EB%9F%B0&n_campaign_type=4&n_contract=tct-a001-04-000000000381505&n_ad_group_type=5&NaPm=ct%3Dkpgz06eo%7Cci%3D0zu00026SpvuLr1a7uYH%7Ctr%3Dbrnd%7Chk%3D3e9c44dd52148da8cea9c5c6853992f533b26f47" target="_blank"><img src="./img/slide5.png" style="width:100%"></a>
      </div>

      <div class="mySlides fade">
      <div class="numbertext">6 / 6</div>
        <a href="https://www.fnnews.com/news/202103290927366228" target="_blank"><img src="./img/slide6.png" style="width:100%"></a>
      </div>

      <!-- Next and previous buttons -->
      <a class="prev" onclick="moveSlides(-1)">&#10094;</a>
      <a class="next" onclick="moveSlides(1)">&#10095;</a>
    </div>
    <br/>

    <!-- The dots/circles -->
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(0)"></span>
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
      <span class="dot" onclick="currentSlide(4)"></span>
      <span class="dot" onclick="currentSlide(5)"></span>
    </div>

        <div id="main_content">



            <div id="latest">
                <h4> <a href="./board_list.php">학과공지</a></h4>
                <li id = "tag">
                    <span>제목</span>
                    <span>작성자</span>
                    <span>게시일</span>
                  </li>
                <ul>
<!-- 최근 게시 글 DB에서 불러오기 -->
<?php
    $con = mysqli_connect("localhost", "user1", "12345", "sample");
    $sql = "select * from board order by num desc limit 5";
    $result = mysqli_query($con, $sql);

    if (!$result)
        echo "게시판 DB 테이블(board)이 생성 전이거나 아직 게시글이 없습니다!";
    else
    {
        while( $row = mysqli_fetch_array($result) )
        {
          if (isset($_GET["page"]))
            $page = $_GET["page"];
          else
            $page = 1;

            $num         = $row["num"];
            $regist_day = substr($row["regist_day"], 0, 10);
?>
                <li>

                    <span><a href="board_view.php?num=<?=$num?>&page=<?=$page?>"><?=$row["subject"]?></a></span>
                    <span><?=$row["name"]?></span>
                    <span><?=$regist_day?></span>
                </li>



<?php
        }

    }
?>
</ul>
            </div>
            <div id="latest1">
                <h4> <a href="./board_list.php">채용정보</a></h4>
                <li id = "tag">
                    <span>제목</span>
                    <span>작성자</span>
                    <span>게시일</span>
                  </li>
                <ul>
  <!-- 최근 게시 글 DB에서 불러오기 -->
  <?php
    $con = mysqli_connect("localhost", "user1", "12345", "sample");
    $sql = "select * from board order by num desc limit 5";
    $result = mysqli_query($con, $sql);

    if (!$result)
        echo "게시판 DB 테이블(board)이 생성 전이거나 아직 게시글이 없습니다!";
    else
    {
        while( $row = mysqli_fetch_array($result) )
        {
          if (isset($_GET["page"]))
            $page = $_GET["page"];
          else
            $page = 1;

            $num         = $row["num"];
            $regist_day = substr($row["regist_day"], 0, 10);
  ?>
                <li>

                    <span><a href="board_view.php?num=<?=$num?>&page=<?=$page?>"><?=$row["subject"]?></a></span>
                    <span><?=$row["name"]?></span>
                    <span><?=$regist_day?></span>
                </li>
  <?php
        }
    }
  ?>
            </div>
            <div id="latest2">
                <h4> <a href="./board_list.php">자유게시판</a></h4>
                <li id = "tag">
                    <span>제목</span>
                    <span>작성자</span>
                    <span>게시일</span>
                  </li>
                <ul>
  <!-- 최근 게시 글 DB에서 불러오기 -->
  <?php
    $con = mysqli_connect("localhost", "user1", "12345", "sample");
    $sql = "select * from board order by num desc limit 5";
    $result = mysqli_query($con, $sql);

    if (!$result)
        echo "게시판 DB 테이블(board)이 생성 전이거나 아직 게시글이 없습니다!";
    else
    {
        while( $row = mysqli_fetch_array($result) )
        {
          if (isset($_GET["page"]))
            $page = $_GET["page"];
          else
            $page = 1;

            $num         = $row["num"];
            $regist_day = substr($row["regist_day"], 0, 10);
  ?>
                <li>

                    <span><a href="board_view.php?num=<?=$num?>&page=<?=$page?>"><?=$row["subject"]?></a></span>
                    <span><?=$row["name"]?></span>
                    <span><?=$regist_day?></span>
                </li>
  <?php
        }
    }
  ?>
            </div>
            <div id="latest3">
                <h4> <a href="./board_list1.php">취업게시판</a></h4>
                <li id = "tag">
                    <span>제목</span>
                    <span>작성자</span>
                    <span>게시일</span>
                  </li>
                <ul>
  <!-- 최근 게시 글 DB에서 불러오기 -->
  <?php
    $con = mysqli_connect("localhost", "user1", "12345", "sample");
    $sql = "select * from board1 order by num desc limit 5";
    $result = mysqli_query($con, $sql);

    if (!$result)
        echo "게시판 DB 테이블(board)이 생성 전이거나 아직 게시글이 없습니다!";
    else
    {
        while( $row = mysqli_fetch_array($result) )
        {
          if (isset($_GET["page"]))
            $page = $_GET["page"];
          else
            $page = 1;

            $num         = $row["num"];
            $regist_day = substr($row["regist_day"], 0, 10);
  ?>
                <li>

                    <span><a href="board_view1.php?num=<?=$num?>&page=<?=$page?>"><?=$row["subject"]?></a></span>
                    <span><?=$row["name"]?></span>
                    <span><?=$regist_day?></span>
                </li>
  <?php
        }
    }
  ?>
            </div>


            <ul>
              <div class="content_img">
            <a href="https://www.saramin.co.kr/zf_user/" target="_blank"><li> <img src="./img/saramin.png"></li></a>
              </div>
              <div class="content_img">
            <a href="https://www.work.go.kr/seekWantedMain.do" target="_blank"><li> <img src="./img/worknet.png"></li></a>
              </div>
              <div class="content_img">
            <a href="https://www.jobkorea.co.kr/ "target="_blank"><li> <img src="./img/jabkorea.png"></li></a>
              </div>
              <div class="content_img">
            <a href="https://www.jobplanet.co.kr/contents" target="_blank"><li> <img src="./img/jobplanet.png"></li></a>
              </div>
            </ul>


            <div id = "job_bar">
                        <?php
                           	$con = mysqli_connect("localhost", "user1", "12345", "sample");
                            $sql    = "select * from members where id='$userid'";
                            $result = mysqli_query($con, $sql);
                            $row    = mysqli_fetch_array($result);

                            mysqli_close($con);
                        ?>

                        <?php
                            if(!$userid) {
                        ?>
                                        <span></span>
                        <div id = "job_bar1"> <?php
                      } else {
                                $job = $row["job"];
                                $dream = $row["dream"];
                        ?>
                        <ul>
                          <li><b>취업목표</b></li>
                          <li><?=$job?></li> <br>
                          <li><b>취업다짐</b></li>
                          <li><?=$dream?></li>
                        </ul>

                        <?php
                            }
                        ?>
                      </div>
            </div>



        </div>
