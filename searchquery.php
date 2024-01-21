<html>
<head>
    <title>Available Donors</title>
</head>
<body bgcolor="AntiqueWhite">
    <center><h1>AVAILABLE DONORS</h1></center>
    <table border="2" cellpadding="20" align="center">
        <tr bgcolor="red">
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>Blood Group</th>
            <th>Aadhar No.</th>
            <th>Mobile No</th>
            <th>E-Mail Id</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
        </tr>

        <?php
        $con = mysqli_connect('localhost', 'root', '', 'blood_donation_db', '3306');

        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }

        error_reporting(E_ALL);
        ini_set("display_errors", 1);

        $bloodgrp = $_POST['bd'];
        $city = $_POST['ct'];
        $state = $_POST['st'];

        $stmt = $con->prepare("SELECT * FROM registered_donors WHERE city = ? AND state = ? AND blood_group = ?");
        $stmt->bind_param("sss", $city, $state, $bloodgrp);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . htmlspecialchars($row["first_name"]) . "</td>
                        <td>" . htmlspecialchars($row["last_name"]) . "</td>
                        <td>" . htmlspecialchars($row["gender"]) . "</td>
                        <td>" . htmlspecialchars($row["dob"]) . "</td>
                        <td>" . htmlspecialchars($row["blood_group"]) . "</td>
                        <td>" . htmlspecialchars($row["aadhar"]) . "</td>
                        <td>" . htmlspecialchars($row["mobile"]) . "</td>
                        <td>" . htmlspecialchars($row["email"]) . "</td>
                        <td>" . htmlspecialchars($row["address"]) . "</td>
                        <td>" . htmlspecialchars($row["city"]) . "</td>
                        <td>" . htmlspecialchars($row["state"]) . "</td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='11'>No donors found</td></tr>";
        }

        $stmt->close();
        $con->close();
        ?>
    </table>
</body>
</html>
