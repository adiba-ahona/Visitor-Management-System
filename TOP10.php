<!DOCTYPE html>
<html lang="en">
<head>
    <title>Title</title>
    <style>
        body{
            background-color: #fff3cd;
        }
        table, th, td, font{
            border: 1px solid black;
            width: 1100px;
            background-color: lightblue;
            font-family: Sans-Serif;
        }
    </style>
</head>
    <body>
    <center>
        <H1>Top 10 Visitors</H1>
        <table>
            <tr>
                <th>Handler</th>
                <th>Name</th>
                <th>Address</th>
                <th>Apartment</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Time Visits</th>
            </tr>

            <?php
            $conn = new mysqli('localhost', 'root', '', 'Visitor Management');
            if ($conn->connect_error){
                die("Connection failed: ". $conn-> connect_error);
            }
            $sql = "SELECT handler, name, address, apartment, email, phone, count(*) FROM visitor Group by visitor_id ORDER BY count(*) desc LIMIT 10";
            $result_1 = $conn-> query($sql);

            if ($result_1-> num_rows > 0){
                while  ($row = $result_1->fetch_assoc()){
                    echo "<tr><td>".$row["handler"]."</td><td>".$row["name"]."</td><td>".$row["address"]."</td><td>".$row["apartment"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["count(*)"]." Times</td></tr>";
                }
                echo "</table>";
            }
            else {
                echo "0 result";
            }

            $conn-> close();
            ?>

        </table>
    </center>
    </body>
</html>
