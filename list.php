<?php
require_once("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Data</title>
</head>
<body>
    <table width="400px" border=1>
        <tr align="left">
            <th>id</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Tgl Lahir</th>
        </tr>

        <?php
            $sql = "SELECT * FROM webdas";

            $result = mysqli_query($connection, $sql);
            $row = mysqli_num_rows($result);

            if ($row > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    $id = $row["id"];
                    echo "<tr>";
                    echo "<td>" . $row["nama"] . "</td>";
                    echo "<td>" . $row["nim"] . "</td>";
                    echo "<td>" . $row["tgl_lahir"] . "</td>";
                    echo "</tr>";
                }
            }else {
                echo "<tr><td colspan='4' align='center'>0 results.</td></tr>";
            }
        ?>

    </table>
</body>
</html>
