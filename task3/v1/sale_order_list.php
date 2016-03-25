<?php include('include/kernel.php') ?>
<?php include('include/database.php') ?>
<h1>Vendors</h1>
<hr/>
<?php @include('include/menu.php') ?>
<?php

$result = Database::getSaleOrders();

if ($result->num_rows > 0) {
    echo '<table border="1">';
    echo '  <tr>';
    echo '      <td>SalesOrderNumber</td>';
    echo '      <td>CustomerID</td>';
    echo '      <td>SalesPersonID</td>';
    echo '      <td>SubTotal</td>';
    echo '      <td>Status</td>';
    echo '      <td>OrderDate</td>';
    echo '      <td>AccountNumber</td>';
    echo '  </tr>';
    while($row = mysqli_fetch_assoc($result)) {
    	echo "<tr>";
        echo "  <td>" . $row["SalesOrderNumber"]. " </td>";
        echo "  <td>" . $row["CustomerID"]. "</td>";
        echo "  <td>" . $row["SalesPersonID"]. "</td>";
        echo "  <td>" . $row["SubTotal"]. "</td>";
        echo "  <td>" . $row["Status"]. "</td>";
        echo "  <td>" . $row["OrderDate"]. "</td>";
        echo "  <td>" . $row["AccountNumber"]. "</td>";
        echo "<tr>";
    }
    echo '</table>';
}
