<html>
<head>
    <title>Blood Donor's Registration List</title>
</head>
<body>
    <center><h1>Blood Donor's Registration List</h1></center>
    <table border="2" cellpadding="30" align="center">
        <tr>
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

        $query = "SELECT * FROM registered";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
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
            echo "<tr><td colspan='11'>No record found</td></tr>";
        }

        mysqli_close($con);
        ?>
    </table>
</body>
</html>
