<?php
$colors=array("k1"=>"red","k2"=>"blue","k3"=>"black");// k1 represent key
//asort($colors);
//arsort($colors);
//ksort($colors);
krsort($colors);
foreach($colors as $k=>$v){ //$k is a key its like index $v is value at $k
	echo "<br>key=".$k."----".$v;
}
?>