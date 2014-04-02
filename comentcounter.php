<?php
ini_set("display_errors",1);
$f=fopen("comment.txt","r+") or die('read');

echo $data= file_get_contents("comment.txt");  //to read file line by line

$pattern = '/(//|/*)/im';
$counter=0;

foreach ($data as $key => $value) 
{
    if (preg_match($pattern, $value)) 
    {
          $counter=$counter++;
    }
}
echo $counter;
fclose($f);
?>