<html>
<body>
    <?php
        function display($m) {
            foreach ($m as $x) {
                echo "<br>";
                foreach ($x as $y) {
                    echo "{$y} ";
                }
            }
            echo "<br><br>";
        }

		$m1 = [[1,2,3],[4,5,6],[7,8,9]];
		$m2 = [[7,8,9],[4,5,6],[1,2,3]];

		echo "m1:";
		display($m1);
		echo "m2:";
		display($m2);

		for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                $t[$i][$j] = $m1[$j][$i];
            }
		}
		echo "Transpose of m1:";
		display($t);

		for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                $m[$i][$j] = 0;
                for ($k = 0; $k < 3; $k++) {
                    $m[$i][$j] += $m1[$i][$k] * $m2[$k][$j];
                }
            }
		}
		echo "m1 x m2";
		display($m);

		for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                $a[$i][$j] = $m1[$i][$j] + $m2[$i][$j];
            }
        }
		echo "m1 + m2";
		display($a);
    ?>
</body>
</html>