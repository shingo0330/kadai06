<?php
include("inc/func.php");
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $a=0; 
 
    if($name==""){
        $name = "<span style='color:red;'>未入力</span>";
     

    }
    if($mail==""){
        $mail = "<span style='color:red;'>未入力</span>";
    
    }
    ?>
<html>
<head>
<meta charset="utf-8">
<title>POST（受信）</title>
</head>
<body>
お名前：<?=h($name)?>
EMAIL：<?=h($mail)?>
<ul>
<li><a href="post.php" style="display:<?=$a?>;">index.php</a></li>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>