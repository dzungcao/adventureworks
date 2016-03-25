<?php include('include/kernel.php') ?>
<?php include('include/database.php') ?>
<h1>Vendors</h1>
<hr/>
<?php @include('include/menu.php') ?>
<?php

$result = Database::getEmployees();

if ($result->num_rows > 0) {
    echo '<table border="1">';
    echo '  <tr>';
    echo '      <td>BusinessEntityID</td>';
    echo '      <td>NationalIDNumber</td>';
    echo '      <td>LoginID</td>';
    echo '      <td>OrganizationNode</td>';
    echo '      <td>OrganizationLevel</td>';
    echo '      <td>JobTitle</td>';
    echo '      <td>BirthDate</td>';
    echo '      <td>MaritalStatus</td>';
    echo '      <td>Gender</td>';
    echo '  </tr>';
    while($row = mysqli_fetch_assoc($result)) {
    	echo "<tr>";
        echo "  <td>" . $row["BusinessEntityID"]. " </td>";
        echo "  <td>" . $row["NationalIDNumber"]. "</td>";
        echo "  <td>" . $row["LoginID"]. "</td>";
        echo "  <td>" . $row["OrganizationNode"]. "</td>";
        echo "  <td>" . $row["OrganizationLevel"]. "</td>";
        echo "  <td>" . $row["JobTitle"]. "</td>";
        echo "  <td>" . $row["BirthDate"]. "</td>";
        echo "  <td>" . $row["MaritalStatus"]. "</td>";
        echo "  <td>" . $row["Gender"]. "</td>";
        echo "<tr>";
    }
    echo '</table>';
}
