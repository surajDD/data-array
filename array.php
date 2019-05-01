<?php
define("y",100);//3rd para is optional for case insensitivity it is false by default
echo y;//100
//echo Y;

define("x",100,true);//3rd para is optional for incase sensitivity = true
echo x;//100
echo X;//100

$colors=array("red","red","green","blue","black");
$arr=array_slice($colors,2,-1);
array_splice($colors,1,0,"white");
array_splice($colors,2,1);
var_dump("$colors");//use to check type of variable	
sort($colors);//sort(acending order)
rsort($colors);//reverse sort(decending sort)
$str="<ul>";
for($i=0;$i<count($colors);$i++){
	$str.="<li>".$i."</li>";
}
echo $str;
?>
<style>
ul{
	color:blue;
}
</style>