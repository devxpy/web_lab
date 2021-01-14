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
        $rows[$row["usn"]] = array($row["name"], $row["marks"]);
        $sorted[] = $row["usn"];
    }
    echo "</table>";

    for ($i = 0; $i < count($sorted) - 1; $i++)
    {
        $min_idx = $i;
        for ($j = $i; $j < count($sorted); $j++)
        {
           if ($sorted[$j] < $sorted[$min_idx]) {
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
    foreach ($sorted as $usn)
    {
        $name = $rows[$usn][0];
        $marks = $rows[$usn][1];
        echo "<tr><td>".$usn."</td><td>".$name."</td><td>".$marks."</td></tr>";
    }
    echo "</table>";
?>