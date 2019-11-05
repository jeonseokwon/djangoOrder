<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>홈페이지제작 티클럽 tclub.co.kr 폼메일발송폼</title>
  <link rel="stylesheet" type="text/css" href="../../aaa/email/style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <style type="text/css">
         a:link { color: black; text-decoration: none;}
         a:visited { color: black; text-decoration: none;}
         a:hover { color: black; text-decoration: none;}
         
  </style>
</head>
<body>
	<a href="./board_list.php">
<div style="background:linear-gradient(45deg, rgba(254, 246, 210, 0.53) 0%, rgba(254, 246, 210, 0.53) 14.286%,
rgba(221, 240, 216, 0.53) 14.286%, rgba(221, 240, 216, 0.53) 28.572%,rgba(188, 233, 223, 0.53) 28.572%, 
rgba(188, 233, 223, 0.53) 42.858%,rgba(156, 227, 229, 0.53) 42.858%, rgba(156, 227, 229, 0.53) 57.144%,
rgba(123, 220, 235, 0.53) 57.144%, rgba(123, 220, 235, 0.53) 71.42999999999999%,rgba(90, 214, 242, 0.53) 71.43%, 
rgba(90, 214, 242, 0.53) 85.71600000000001%,rgba(57, 207, 248, 0.53) 85.716%, rgba(57, 207, 248, 0.53) 100.002%),
linear-gradient(135deg, rgb(246, 99, 200) 0%, rgb(246, 99, 200) 12.5%,rgb(223, 98, 196) 12.5%, 
rgb(223, 98, 196) 25%,rgb(199, 97, 192) 25%, rgb(199, 97, 192) 37.5%,rgb(176, 96, 188) 37.5%, rgb(176, 96, 188) 50%,
rgb(152, 95, 184) 50%, rgb(152, 95, 184) 62.5%,rgb(129, 94, 180) 62.5%, rgb(129, 94, 180) 75%,rgb(105, 93, 176) 75%, 
rgb(105, 93, 176) 87.5%,rgb(82, 92, 172) 87.5%, rgb(82, 92, 172) 100%);">
	<h1 class="display-4" align="center">board_list.php</h1>
     <?php
    $conn = mysqli_connect("localhost", "root", "", "test");
    //커넥션 객체 생성 확인
    if($conn){
        echo "<h5 align='center'>연결 성공</h5>";
    } else  { 
        // 에러시 메세지를 뿌려주고 종료 시킴
        die("<h5 align='center'>연결 실패 : ".mysqli_error())." </h5>";
    }
    //페이징 작업을 위한 테이블 내 전체 행 갯수 조회 쿼리
    $sqlCount = "SELECT count(*) FROM board"; //보드의 전체 행수
    $resultCount = mysqli_query($conn, $sqlCount); //resultSet과 유사
    if($rowCount = mysqli_fetch_array($resultCount)){
        $totalRowNum = $rowCount["count(*)"]; //php는 지역 변수를 밖에서
    }
    //행 갯수 조회 쿼리가 실행됐는지 여부
    if($resultCount){
        echo "<h5 align='center'>행 갯수 조회 성공 : ".$totalRowNum."</h5>";
    } else {
        echo "<h5 align='center'>결과 없음 : ".mysqli_error($conn)." </h5>";
    }
        
    $sql = "SELECT board_no, board_title, board_user,
                     board_date FROM board order by
                     board_no desc";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    ?>
    <br>
    </div>
    </a>
  <h2>이메일 주소: tjrdnjs3878@naver.com</h2>

  <p>게시판 문의</p>
  <form method="post" action="./form_mail_action.php">
  <fieldset>
  <legend>게시판 문의</legend>
    
      <label for="name">이름</label>
      <input style="border:#000 solid thin" type="text" id="name" name="name"><br>
      <!--style="border:#000 solid thin": 선색으로 가는 검은색을 적용-->
      
      <label for="phone">전화번호</label>
      <input style="border:#000000 solid thin"  type="text" id="phone" name="phone"><br>
      
      <label for="email">이메일</label>
      <input style="border:#000 solid thin"  type="email" id="email" name="email"><br>
      
      <label for="confer">참고사이트</label>
      <input style="border:#000 solid thin"  type="text" id="confer" name="confer"><br>
      
      <label for="domain">도메인유무</label>
      <input style="border:#000 solid thin"  type="text" id="domain" name="domain"><br>
      <br>
      <textarea name="content" cols="50" rows="20"  id="content" style="border:#000 solid thin" ></textarea><br>
      <input type="button" value="돌아가기"onclick="history.back();">
      <input type="submit" value="전송" name="submit">
    
    </fieldset>
  </form>
  <br><br><br><br><br>
	<footer style="color:#ffffff; background:linear-gradient(219deg,rgba(246,246,246,.02) 0,rgba(246,246,246,.02) 20%,
	rgba(225,225,225,.02) 20%,rgba(225,225,225,.02) 40%,rgba(136,136,136,.02) 40%,rgba(136,136,136,.02) 60%,
	rgba(216,216,216,.02) 60%,rgba(216,216,216,.02) 80%,rgba(35,35,35,.02) 80%,rgba(35,35,35,.02) 100%),
	linear-gradient(299deg,rgba(213,213,213,.02) 0,rgba(213,213,213,.02) 20%,rgba(150,150,150,.02) 20%,
	rgba(150,150,150,.02) 40%,rgba(161,161,161,.02) 40%,rgba(161,161,161,.02) 60%,rgba(186,186,186,.02) 60%,
	rgba(186,186,186,.02) 80%,rgba(28,28,28,.02) 80%,rgba(28,28,28,.02) 100%),linear-gradient(50deg,rgba(157,157,157,.02) 0,
	rgba(157,157,157,.02) 16.667%,rgba(147,147,147,.02) 16.667%,rgba(147,147,147,.02) 33.334%,rgba(42,42,42,.02) 33.334%,
	rgba(42,42,42,.02) 50.001%,rgba(214,214,214,.02) 50.001%,rgba(214,214,214,.02) 66.668%,rgba(34,34,34,.02) 66.668%,
	rgba(34,34,34,.02) 83.335%,rgba(211,211,211,.02) 83.335%,rgba(211,211,211,.02) 100.002%),
	linear-gradient(278deg,rgba(79,79,79,.03) 0,rgba(79,79,79,.03) 20%,rgba(217,217,217,.03) 20%,rgba(217,217,217,.03) 40%,
	rgba(5,5,5,.03) 40%,rgba(5,5,5,.03) 60%,rgba(200,200,200,.03) 60%,rgba(200,200,200,.03) 80%,rgba(125,125,125,.03) 80%,
	rgba(125,125,125,.03) 100%),linear-gradient(274deg,rgba(235,235,235,.03) 0,rgba(235,235,235,.03) 12.5%,rgba(100,100,100,.03) 12.5%,
	rgba(100,100,100,.03) 25%,rgba(44,44,44,.03) 25%,rgba(44,44,44,.03) 37.5%,rgba(228,228,228,.03) 37.5%,rgba(228,228,228,.03) 50%,
	rgba(36,36,36,.03) 50%,rgba(36,36,36,.03) 62.5%,rgba(72,72,72,.03) 62.5%,rgba(72,72,72,.03) 75%,rgba(30,30,30,.03) 75%,
	rgba(30,30,30,.03) 87.5%,rgba(109,109,109,.03) 87.5%,rgba(109,109,109,.03) 100%),linear-gradient(90deg,#232323,#232323);">
		<div class="container">
			<br>
			<div class="row" style="font-size:15px;">
				<div class="col-sm-2" style="text-align:center;">Copyright &copy;2019<br>전석원(Jeon Seokwon)</div>
				<div class="col-sm-4"><p>명칭: 비젼<br>등록번호: 가00000 | 등록연월일: 2019. 09. 04<br>발행인: 전석원 | 편집인: 전석원</p></div>
				<div class="col-sm-2"><p style="text-align:center;">문의</p>
					<div class="list-group">
						<a href="form_mail.php" class="list-group-item">이메일 보내기</a>
						<a href="#" class="list-group-item">010-1234-5678</a>
						
					</div>
				</div>
				<div class="col-sm-2"><p style="text-align:center;">빠른 이동</p>
					<div class="list-group">
						<a href="https://www.youtube.com/" class="list-group-item">유튜브</a>
						<a href="https://www.naver.com/" class="list-group-item">네이버</a>
					</div>
				</div>
				<div class="col-sm-2"><p style="text-align:center;"><span class="glyphicon glyphicon-ok"></span>&nbsp;by 전석원</p></div>
			</div>
		</div>
		<br><br><br><br>
	</footer>
</body>
</html>
