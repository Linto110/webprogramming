<?php
$name = ["Rohit Sharma", "Virat Kohli", "Shubman Gill", "KL Rahul", "Suryakumar Yadav", "Hardik Pandya", "Ravindra Jadeja", "Ravichandran Ashwin", "Jasprit Bumrah", "Mohammed Shami", "Kuldeep Yadav"];
$role = ["Batsman(C)", "Batsman", "Batsman", "Batsman(Wk)", "Batsman", "All-rounder", "All-rounder", "All-rounder", "Bowler", "Bowler", "Bowler"];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Indian Cricket Team</title>
</head>

<body>
    <h1>INDIAN CRICKET TEAM</h1>
    <table border="1" width="400px">
        <tr>
            <th>No.</th>
            <th>Player Name</th>
            <th>Role</th>
        </tr>
        <?php
        for ($i = 0; $i < count($name); $i++) {
            echo "<tr><td>" . ($i + 1) . "</td><td>" . $name[$i] . "</td><td>" . $role[$i] . "</td></tr>";
        }
        ?>
    </table>
</body>

</html>