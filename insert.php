<?php
mb_internal_encoding("UTF8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");

$pdo->exec("insert into contactform (name,mail,age,comments) values
('".$_POST['name']."','".$_POST['mail']."','".$_POST['age']."','".$_POST['comments']."');");

?>

<!DOCTYPE HTML>
<html lang="ja">
    
<head>
    <meta carset="UTF-8">
    <title>お問い合わせフォームを作る</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
  </head>
    
<body>
    <h1>お問合わせフォーム</h1>
    
    <div class="confirm">
    <p>
        お問い合わせ有難うございました。<br> ３営業日以内に担当者よりご連絡差し上げます。
    </p>
    </div>
    
</body>


</html>