<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbName = 'Students';
$connection = mysqli_connect($host,$username,$password,$dbName);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to database : " . mysqli_connect_error();
}
else
echo "<h1 style='text-align: center'>Connection successful...</h1>".'<br>';
$sql = "select * from student order by usn";
$resultSet = $connection->query($sql);
if ( $resultSet->num_rows > 0)
{
echo "<table border='1' style='margin: auto' >";
echo "<tr><th>USN</th><th>Name</th></tr>";
while($row = $resultSet->fetch_assoc()) {
echo "<tr>";
echo "<td>".$row["usn"]."</td>";
echo "<td>".$row["name"]."</td>"; echo "</tr>";
}
echo "</table>";
}
$resultSet->close();
$connection->close();
?>
