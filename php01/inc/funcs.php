<?php
// 関数
function h($str){
    $s = htmlspecialchars($str,ENT_QUOTES);
    return $s;
}