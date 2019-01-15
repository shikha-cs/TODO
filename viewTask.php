<!DOCTYPE html>
<html>
<head>
<title>View Task</title>
</head>
<body>

<h1>TODO CHALLENGE</h1>
<h2>View Tasks</h2>

<style>
td{
    padding: 10px;
}
</style>

<?php
include 'connection.php';

$query = "SELECT taskName, taskDate, progress FROM tasktable";
$data = mysqli_query($conn, $query);
$totalRows = mysqli_num_rows($data);

if($totalRows != 0)
{
    ?>

    <table>
    <tr>
        <th>Task Name</th>
        <th>Date</th>
        <th>Progress</th>
    </tr>

    <?php
    while($result = mysqli_fetch_assoc($data))
    {
         echo "<tr>
                <td>".$result["taskName"]."</td>
                <td>".$result["taskDate"]."</td>
                <td>".$result["progress"]."</td>
            </tr>";
    }
}
else
{
    echo "No records found!";
}
?>
</table>
<br><br>
  <a href="home.html">Main Menu
<br><br>

</body>
</html>