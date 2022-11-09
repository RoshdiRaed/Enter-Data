<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 10px;
        }
    </style>
</head>

<body>

    <!-- <table style="margin-bottom: 20px;"></table> -->


    <?php

    for ($i = 0; $i < 1; $i++) {


        $conn = new mysqli("localhost", "root", "", "types");

        $st = $conn->query("select * from table2");

        if ($st->num_rows > 0) {
            while ($row = $st->fetch_assoc()) {
                echo "<table style='margin-bottom: 20px;'>
                <tr>
            <th>ID</th>
            <th id='user'>User</th>
            <th id='pass'>password</th>
            <th id='email'>E-mail</th>
            </tr>" .
                    "<tr style='margin-left: 20px;'>" . "<td id='id'>" . $row["id"] . "</td>" .
                    "<td id='fname'>" .
                    $row["user"] .
                    "</td>" .
                    "<td id='id'>" .
                    $row["pass"] .
                    "</td>" .
                    "<td id='id'>" .
                    $row["email"] .
                    "</td>" .
                    "</tr>" .
                    "</table>";
                //? echo

            }
        } else {
            echo "0 results";
        }
        $conn->close();
    }

    ?>

</body>

</html>