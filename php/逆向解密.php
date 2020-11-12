<?php
$a=" a1zLbgQsCESEIqRLwuQAyMwLyq2L5VwBxqGA3RQAyumZ0tmMvSGM2ZwB4tws";
$a=str_rot13($a);
$a=strrev($a);
$a=base64_decode($a);
function decode233($str)
{
    $b="";
    for($test=0;$test<strlen($str);$test++)
    {
        $b=$b.(chr(ord($str[$test])-1));
    }
    return $b;
}
 
echo strrev(decode233($a));
?>