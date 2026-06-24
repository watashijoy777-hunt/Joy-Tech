<?php
$arr=array("name"=>"Joy","age"=>33);
extract($arr);
echo $name . "<br>";
echo $age;
?>