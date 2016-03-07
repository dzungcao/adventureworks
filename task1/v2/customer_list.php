<?php include('include/database.php') ?>
<h1>Customers</h1>
<a href="home.php">Back</a>
<?php

$result = Database::getCustomers();

if ($result->num_rows > 0) {
    echo '<table border="1">';
    echo '  <tr>';
    echo '      <td>CustomerID</td>';
    echo '      <td>PersonID</td>';
    echo '      <td>StoreID</td>';
    echo '      <td>TerritoryID</td>';
    echo '      <td>AccountNumber</td>';
    echo '      <td>ModifiedDate</td>';
    echo '  </tr>';
    while($row = mysqli_fetch_assoc($result)) {
    	echo "<tr>";
        echo "  <td>" . $row["CustomerID"]. " </td>";
        echo "  <td>" . $row["PersonID"]. "</td>";
        echo "  <td>" . $row["StoreID"]. "</td>";
        echo "  <td>" . $row["TerritoryID"]. "</td>";
        echo "  <td>" . $row["AccountNumber"]. "</td>";
        echo "  <td>" . $row["ModifiedDate"]. "</td>";
        echo "<tr>";
    }
    echo '</table>';
}