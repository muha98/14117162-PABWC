<?php
$data=array("lanime","aduh","qifuat","toda","anevi","samid","kifuat");
sort($data);

$length=count($data);
for($x=0;$x<$length;$x++)
{
    echo $data[$x];
    echo "<br>";
}
?>
