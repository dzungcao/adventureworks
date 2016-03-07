<h1>Welcome to AdventureWorks</h1>
<?php
//Connect to database and display the data
$conn = mysqli_connect('localhost', 'root', '123456', 'adventureworks');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$result = mysqli_query($conn, 'SELECT * FROM person limit 100');
if ($result->num_rows > 0) {
    echo '<table border="1">';
    while($row = mysqli_fetch_assoc($result)) {
    	echo "<tr>";
        echo "  <td>" . $row["BusinessEntityID"]. " </td>";
        echo "  <td>" . $row["Title"]. "</td>";
        echo "  <td>" . $row["FirstName"]. "</td>";
        echo "  <td>" . $row["MiddleName"]. "</td>";
        echo "  <td>" . $row["LastName"]. "</td>";
        echo "<tr>";
    }
    echo '</table>';
}
mysqli_close($conn);