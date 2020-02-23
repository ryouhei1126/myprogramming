<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>確認画面</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<?php
// require_once(__DIR__ . '/../config/data.php');

$name = $_POST['name'];
$email2 = $_POST['email2'];
$message = $_POST['message'];
$check = $_POST['check'];
print '<ul>'."\n";
print '<li>';
if($name==''){
	print'お名前が入力されていません。';
}else{
	print'ようこそ、'.$name.'様';
}
print'</li>'."\n";
print '<li>';
if($email2==''){
	print'メールアドレスが入力されていません。';
}else{
	print'メールアドレス'.$email2;
}
print'</li>'."\n";
print '<li>';
if($message==''){
	print'お問い合わせ内容が入力されていません。';
}else{
	print'お問い合わせ内容'.$message;
}
print'</li>'."\n";

print '</ul>'."\n";

if($name=='' || $email2=='' || $message=='') {
print'<form>'."\n";
print'<input type="button" onClick="history.back()" value="戻る">'."\n";;
print'</form>'."\n";
}else{
print '<form action="thanks.php" method="post">'."\n";
print '<input type="hidden" name="name" value="'.$name.'">';
print '<input type="hidden" name="email2" value="'.$email2.'">';
print '<input type="hidden" name="message" value="'.$message.'">';
print '<input type="button" onClick="history.back()" value="戻る">'."\n";
print '<input type="submit" value="送信">'."\n";
print '</form>'."\n";
}
?>

</body>
</html>
