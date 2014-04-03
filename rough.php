<?php
ini_set("display_errors",1);
$f=fopen("comment.txt","r+") or die('read');

//echo $data=file_get_contents("comment.txt");

$lines=array();
$x=0;
while(!feof($f))
{
$lines[$x]= fgets($f);
$x++;  
}
 print_r($lines);


/*$a = explode("\n", $data); 
foreach($a as $lines) {
    $lines = explode(' ', $lines); 
}*/

//$lines= preg_split("/[\n \s]/", $data );

$counter=0;
foreach($lines as $value) 
{ 
       if (preg_match("(#|//|/\*(.|[\r\n])*?\*/)", $value)) 
       //if (preg_match("(//|/\*)", $value)) 
    {
    	  	$counter++;
			echo "<br><br>".$counter.$value."<br>";
    }
}
echo "<br>Total number of comments are:-".$counter;
fclose($f);
?>