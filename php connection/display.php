<?php
$mysqli = new mysqli("localhost", "root", "", "bookstore");
if($mysqli->connect_error) {
  exit('Could not connect');
}
$sql = "SELECT * FROM book WHERE name = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($cname, $cauthor, $cdesc,$cprice,$cedition);
$stmt->fetch();
$stmt->close();
echo "<table>";
echo "<tr>";
echo "<th>Name</th>";
echo "<td>" . $cname . "</td>";
echo "<th>Author</th>";
echo "<td>" . $cauthor . "</td>";
echo "<th>Description</th>";
echo "<td>" . $cdesc . "</td>";
echo "<th>Price</th>";
echo "<td>" . $cprice . "</td>";
echo "<th>Edition</th>";
echo "<td>" . $cedition . "</td>";
echo "</tr>";
echo "</table>";
?>