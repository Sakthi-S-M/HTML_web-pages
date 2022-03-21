<?php
$mysqli = new mysqli("localhost", "root", "", "searchstudent");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT * FROM detail WHERE Rollno = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($cRollno, $cName, $Department);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>Rollno</th>";
echo "<td>" . $cRollno . "</td>";
echo "<th>Name</th>";
echo "<td>" . $cName . "</td>";
echo "<th>Department</th>";
echo "<td>" . $Department . "</td>";
echo "</tr>";
echo "</table>";
?>