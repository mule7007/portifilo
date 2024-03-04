<!DOCTYPE html>
<html>
<head>
    <title>Full Name</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $fullName = $firstName . ' ' . $lastName;

        echo "<h2>Full Name:</h2>";
        echo "<p>First Name: $firstName</p>";
        echo "<p>Last Name: $lastName</p>";
        echo "<p>Full Name: $fullName</p>";
    }
    ?>
</body>
</html>