<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>確認画面</title>
<link href="style.css" rel="stylesheet" media="screen, print">
</head>
<body>
<?php

require_once(__DIR__ . '/../config/config.php');


 $dsn = 'mysql:dbhost=us-cdbr-iron-east-04.cleardb.net;dbname=heroku_e2844c210070f6f';
 $user = 'bc8dd8298dbbaa';
 $password = 'a7b4239e';
 $dbh = new PDO($dsn, $user, $password);
 $dbh->query('SET NAMES UTF8');

 // $dsn = 'mysql:dbhost=localhost;dbname=dotinstall_sns_php';
 // $user = 'dbuser';
 // $password = 'mu4uJsif';
 // $dbh = new PDO($dsn, $user, $password);
 // $dbh->query('SET NAMES UTF8');


 $name = $_POST['name'];
 $email2 = $_POST['email2'];
 $message = $_POST['message'];

 $name = htmlspecialchars($name);
 $email2 = htmlspecialchars($email2);
 $message = htmlspecialchars($message);

	print $name.'様<br>'."\n";
	print 'お問い合わせ、ありがとうございました。<br>'."\n";
	print 'お問い合わせ内容『'.$message.'』を<br>'."\n";
	print $email2.'にメールで送りましたのでご確認ください。'."\n";

 $mail_sub = 'お問い合わせを受け付けました。';
 $mail_body = $name."様、ご協力ありがとうございました。";
 $mail_body = html_entity_decode($mail_body,ENT_QUOTES,"UTF-8");
 $mail_head = 'From:xxx@gmail.com';
 mb_language('Japanese');
 mb_internal_encoding("UTF-8");
 mb_send_mail($email2,$mail_sub,$mail_body,$mail_head);

//inquiryではなくusers?
 $sql = 'INSERT INTO users(name, email2, message) VALUES(:name, :email2, :message)';
 $stmt = $dbh->prepare($sql);
 $params = array(
               ":name" => $name,
               ":email2" => $email2,
               ":message" => $message
           );
 $stmt->execute($params);


//disconnect
 $dbh = null;
?>

 <input type="button" onclick="location.href='http://192.168.33.10:8000/'" value="戻る">

</body>
</html>
