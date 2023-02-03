<!DOCTYPE html>
<html lang="en">
<head>
    <title>Title</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="bstyle.css">


<table id="customers">
    <tr>
        <th>Handler</th>
        <th>Entry Time</th>
        <th>Out Time</th>

        <th>purpose for visiting</th>
        <th>visitor id</th>
        <th>Date</th>
        <th>Address</th>
        <th>Apartment</th>
        <th>Name</th>
        <th>Email</th>
        <th>Searcher</th>

        <th>Phone</th>

    </tr>




    <?php
    $conn = new mysqli('localhost', 'root', '', 'Visitor Management');

    if ($conn->connect_error){
        die("Connection failed: ". $conn-> connect_error);
    }
$Date=['Date'];
    $sql = "SELECT * FROM visitor WHERE Date='2020-10-12'AND Entry_Time BETWEEN '12:00:00' AND '18:00:00';";
    $result_1 = $conn-> query($sql);

    if ($result_1-> num_rows > 0){
        while  ($row = $result_1->fetch_assoc()){
            echo "<tr><td>".$row["handler"]."</td><td>".$row["Entry_Time"]."</td><td>".$row["Out_Time"]."</td><td>".$row["purpose_for_visiting"]."</td><td>".$row["visitor_id"]."</td><td>".$row["Date"]."</td><td>".$row["address"]."</td><td>".$row["apartment"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["searcher"]."</td><td>".$row["phone"]."</td></tr>\n";
        }
        echo "</table>";
    }
    else {
        echo "0 result";
    }

    $conn-> close();
    ?>
</table>
</body>
</html>


