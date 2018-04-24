<?php
$a[] = "ridho arif utomo";
$a[] = "Bartra";
$a[] = "Crespo";
$a[] = "David";
$a[] = "Ezequiel";
$a[] = "Francesco";
$a[] = "Gilardino";
$a[] = "Hummels";
$a[] = "Ilkay";
$a[] = "Jerome";


$q = $_REQUEST["q"];

$hint = "";

if ($q !== "") {
	$q = strtolower($q);
	$len=strlen($q);
	foreach($a as $name) {
		if (stristr($q, substr($name, 0, $len))){
			if ($hint === "") {
				$hint = $name;
				}else{
					$hint .=", $name";
				}
			}
		}
	}
echo $hint === "" ? "no suggestion" : $hint;
?>
