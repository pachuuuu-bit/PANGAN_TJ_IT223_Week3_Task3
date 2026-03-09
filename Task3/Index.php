<?php
$conn = new mysqli('localhost', 'root', '', 'HR');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM view_employee_details");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>HR Employee Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background-color: #f5f5f5;
        }

        h2 {
            text-align: center;
            color: #000000;
            margin-bottom: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        th {
            background-color: #34da53;
            color: white;
            padding: 12px 15px;
            text-align: left;
        }

        td {
            padding: 10px 15px;
            border-bottom: 1px solid #ddd;
            vertical-align: top;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #0ce330c8;
        }
    </style>
</head>

<body>

    <h2><b>HR Employee Details</b></h2>

    <table>
        <tr>
            <th>Employee ID</th>
            <th>Name</th>
            <th>Job Title</th>
            <th>Employment Date</th>
            <th>Manager Name</th>
            <th>Department Name</th>
            <th>Location</th>
        </tr>

        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['Employee ID'] ?></td>
                <td><?= $row['Name'] ?></td>
                <td><?= $row['Job Title'] ?></td>
                <td><?= $row['Employment Date'] ?></td>
                <td><?= $row['Manager Name'] ?></td>
                <td><?= $row['Department Name'] ?></td>
                <td><?= $row['Location'] ?></td>
            </tr>
        <?php endwhile; ?>
    </table>

</body>

</html>

<?php
$conn->close();
?>