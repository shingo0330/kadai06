<?php
$name=$_GET["name"];//$_GET["送信名"];
$mail=$_GET["mail"];//$_GET["送信名"];
$age=$_GET["age"];
$long=$_GET["long"];
$weight=$_GET["weight"];
$footsize=$_GET["footsize"];
//var_dump($_GET);
//echo $str;
?>

<?php 
$filename='data/data.txt';
$content = file_get_contents($filename);
$str_base=$content;
$str=explode("\n",$str_base);
$output=[];

for($i=0;$i<count($str);$i++)
{
    $output[]=explode(",",$str[$i]);
}
//print_r($output);
//var_dump($output);

//echo count(output)[,1];


foreach($output as $vals){
    //echo $vals[0].$vals[1].$vals[2].$vals[3];
    //echo '<br>';
}
//$file=dirname(__FILE__).'/data/data.txt';  \n
//$array=@file($file,FILE_IGNORE_NEW_LINES);
//print_r($array);
?>

<html>
<head>
<meta charset="utf-8">
<title>GET練習（受信）</title>
</head>

<body>
<h1>参加者アンケート結果</h1>
<table border="1">

    <tr>
        <th>お名前</th>
        <th>EMAIL</th>
        <th>年齢</th>
        <th>身長</th>
        <th>体重</th>
        <th>足サイズ</th>

    </tr>

    <?php foreach($output as $vals):?>
    <tr>
        <th><?php echo $vals[0];?></th>
        <th><?php echo $vals[1];?></th>
        <th><?php echo $vals[2];?></th>
        <th><?php echo $vals[3];?></th>
        <th><?php echo $vals[4];?></th>
        <th><?php echo $vals[5];?></th>

    </tr>
    <?php endforeach; ?>
</table>

<ul>
<li><a href="index.php">index.php</a></li>


</ul>
</body>
</html> 