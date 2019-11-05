<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>홈페이지제작 티클럽 www.tclub.co.kr 폼메일발송 action </title>
</head>
<body>

 <?php
        $mailTo		=	"tjrdnjs3878@naver.com";
	    // 받는사람 메일 주소;
        $mailFrom	=	"sk01038781180@gmail.com";	
        // 보내는사람 메일주소 
        $name = $_POST['name'] ;
        $phone = $_POST['phone'] ;
        $email = $_POST['email'] ;
        $domain = $_POST['domain'] ;
        $content = $_POST['content'] ;
        $mailSubject = "The mail Title.";
        $mailContent = '보낸사람 :'.$_POST['name'].'<br>'
		.'전화번호:'.$_POST['phone'].'<br>'
		.'Email : '.$_POST['email'].'<br>'
		.'도메인유뮤:'.$_POST['domain'].'<br>'
		. '홈페이지설명 :'.$_POST['content'];

        $mailHeader = "From: $mailFrom\r\n";
        $mailHeader .= "MIME-Version: 1.0\r\n";
        $mailHeader .= "Content-type: text/html; charset=euc-kr\r\n";
		$mailHeader.= 'Cc: confer1@naver.com' . "\r\n"; //참고수신인
        $mailHeader.= 'Bcc: confer2@gmail.com' . "\r\n"; //참고수신인2

        $mailResult = mail ($mailTo, $mailSubject,$mailContent, $mailHeader,'-f'.$mailFrom);
		
		 echo 'Dear '.''.$name.'<br>';
		 echo 'Thanks for submitting the form.<br />';
  echo 'Your name is ' . $name.'<br>';
  echo 'Your phone number is ' . $phone . '<br />';
  echo 'Your email is: ' . $email . '<br />';
  echo 'Have domain?: ' . $domain . '<br />';
  echo 'Your content is: ' . $content . '<br />';
 
        if (true == $mailResult) {
                echo "Success 메일이 발송되었읍니다.";
        }
        else {
                echo "Failuare 메일이 발송되지 않았읍니다.";
        }
         ?>
         
         </body>
</html>
