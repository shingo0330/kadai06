<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>include/読み込み関数</title>
</head>
<body>
    <?php include("inc/head.html");?>
    <?php include("inc/menu.html");?>
    <?php include("inc/foot.html");?>
<?php
echo date("Y");
echo date("m");
echo date("d");
?>

if(date("H")>=10 && date("H")<=20 ){
 echo'<style>body
     {background:black;}</style>
}else{
    
}
    
</body>
</html>