<!DOCTYPE html>
<?php
# Open the File.
$handle = fopen("dummy.csv", "r");

if ($handle !== FALSE) {
    $nn = 0;
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $c = count($data);
        for ($x=0;$x<$c;$x++)
        {
            $csvarray[$nn][$x] = $data[$x];
        }
        $nn++;
    }
    fclose($handle);
}

//print_r($csvarray);

$a .= "&lt;dl class='faq' &gt;</br>";
foreach($csvarray as $keyText => $value) {
	$a .= "&lt;dt&gt;".$value[0]."&lt;/dt&gt;</br>";
	$a .= "&lt;dd style='display: block;'&gt;Ans:".$value[1]."&lt;/dt&gt;</br>";
}
$a .= "&lt;/dl&gt;";
foreach($csvarray as $keyText => $value) {
	$b .= "<dt>".$value[0]."</dt></br>";
	$b .= "<dd style='display: block;'>Ans:".$value[1]."</dd></br>";
}

echo $a;
echo "<br />";

echo $b;
  
?>