<?php
echo "<h1>REFRESH PAGE</h1>";
$file = 'count.txt';

if (!file_exists($file)) {
    fclose(fopen($file, "w"));
    $c = 0;
} else {
    $c = file_get_contents($file);
}

file_put_contents($file, $c + 1);
echo "No. of visitors: $c";
?>