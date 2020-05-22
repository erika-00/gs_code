<?php
function h($value){
 return htmlspecialchars($value, ENT_QUOTES);
}
$flg = 0;
$name = $_POST["name"];
$mail = $_POST["mail"];


$ary = array("$name","$mail");
$str = implode(',',$ary);

var_dump($str);

//File書き込み
//課題　名前とメールの変数をカンマ区切りの文字列にしてファイルに書き込めるようにして下さい
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $str."\r\n");//例） yamazaki , test@test.jp
fclose($file);//確認のURL localhost/php01/post.php
?>


<html>
<head>
<meta charset="utf-8">
<title>POST（受信）</title>
</head>
<body>
<!-- お名前：<?php echo $name; ?>
EMAIL：<?php echo $mail; ?> -->
<?php 
   if ($flg == 0) {
 ?>
   <button>登録</button>
<?php
  }
?>

<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>