<?php
$class =  array
(
	"students"=>array("a","b"),
	"teacher"=>array("t1","t2"),
	"subject"=>array("java","html")
);

foreach($class as $key=>$value)
{
	for($i=0;$i<count($value);$i++)
	{
		echo $key."----".$i."<br>";
	}
}
?>