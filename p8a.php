<body>
    <form method="post" action="p8a.php">
        <caption><h2> calc </h2></caption>
        <table>
            <tr>
                <td>First number: </td>
                <td>
                    <input type="number" step="any" required name="num1" value="<?php echo $_POST['num1'] ?>">
                </td>
                <td rowspan="2">
                    <input type="submit" name="submit" value="Calculate">
                </td>
            </tr>
            <tr>
                <td>Second number: </td>
                <td>
                    <input type="number" step="any" required value="<?php echo $_POST['num2'] ?>" name="num2">
                </td>
        </table>
    </form>

    <?php
    if (isset($_POST['submit']))
    {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        if (is_numeric($num1) and is_numeric($num2))
        {
            echo "{$num1} + {$num2} = ".($num1 + $num2)."<br>";
            echo "{$num1} - {$num2} = ".($num1 - $num2)."<br>";
            echo "{$num1} * {$num2} = ".($num1 * $num2)."<br>";
            echo "{$num1} / {$num2} = ".($num1 / $num2)."<br>";
        }
        else
        {
            echo "<script>alert('Enter valid number!')</script>";
        }
    }
    ?>
</body>