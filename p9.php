<html>
<body>
<?php
    $states = "Mississippi Alabama Texas Massachusetts Kansas";
    $states = explode(' ', $states);

    foreach ($states as $c) {
        echo "{$c} ";

        if (preg_match("/(xas)$/", $c))
            $states_list[0] = $c;
        else if (preg_match("/^(k)(.*)(s)$/i", $c))
            $states_list[1] = $c;
        else if (preg_match("/^(M)(.*)(s)$/", $c))
            $states_list[2] = $c;
        else if (preg_match("/(a)$/", $c))
            $states_list[3] = $c;
    }
    echo "<br>";

    for ($i = 0; $i < count($states_list); $i++) {
        echo "statesList[$i] = $states_list[$i]<br>";
    }

?>
</body>
</html>