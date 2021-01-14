<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "weblab";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn)
        die("Connection failed! ".mysqli_connect_error());

    $result = $conn->query("SELECT * FROM students");

    echo "<b>Before sorting:</b>";
    echo "<table>";
    echo "<tr><th>USN</th><th>NAME</th><th>MARKS</th></tr>";
    while ($row = $result->fetch_assoc())
    {
        echo "<tr><td>".$row["usn"]."</td><td>".$row["name"]."</td><td>".$row["marks"]."</td></tr>";
        $sorted[] = $row;
    }
    echo "</table>";

    $sort_key = "usn";
    for ($i = 0; $i < count($sorted) - 1; $i++)
    {
        $min_idx = $i;
        for ($j = $i; $j < count($sorted); $j++)
        {
           if ($sorted[$j][$sort_key] < $sorted[$min_idx][$sort_key]) {
                $min_idx = $j;
           }
        }

        $temp = $sorted[$min_idx];
        $sorted[$min_idx] = $sorted[$i];
        $sorted[$i] = $temp;
    }

    echo "<b>After sorting:</b>";
    echo "<table>";
    echo "<tr><th>USN</th><th>NAME</th><th>MARKS</th></tr>";
    foreach ($sorted as $row)
    {
        echo "<tr><td>".$row["usn"]."</td><td>".$row["name"]."</td><td>".$row["marks"]."</td></tr>";
    }
    echo "</table>";
?>