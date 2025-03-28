<?php

$connection = new mysqli("localhost", "root", "password", "users_db");
$connectionError = $connection -> connect_error;

if ($connectionError) {
    die("Database connection issue: " . $connectionError);
}

$query = "SELECT id, name, email FROM users";
$stmt = $connection -> prepare($query);
$stmt -> execute();
$result = $stmt -> get_result();

// table border='1' is deprecated, therefore was changed to modern, CSS approach;
echo "<table style='border-width: 1px'>";
echo "<tr>
        <th>ID</th>
        <th>Imię</th>
        <th>Email</th>
      </tr>";

while ($row = $result -> fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['id']) . "</td>";
    echo "<td>" . htmlspecialchars($row['name']) . "</td>";
    echo "<td>" . htmlspecialchars($row['email']) . "</td>";
    echo "</tr>";
}

echo "</table>";

$stmt -> close();
$connection -> close();

?>