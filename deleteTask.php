<!DOCTYPE html>
<html>
<head>
<title>Delete Task</title>
</head>
<body>

<h1>TODO CHALLENGE</h1>
<h2>Delete Tasks</h2>

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

<form action="" method="GET">
  To delete a task, type in the Task Name and click submit.<br></br>
  Task Name:
  <input type="text" name="taskName">
  <br><br>

  <input type="submit" name="submit">
  <input type="button" name="Clear All" value="Clear All">
  <br><br>
  <a href="home.html">Main Menu</a href>
  <br><br>
</form>

<?php
if(isset($_GET['submit']))
{
  $tN = $_GET['taskName'];

  if($tN!="")
  {
    $query = "DELETE FROM tasktable WHERE TASKNAME='$tN'";
    $result = mysqli_query($conn, $query);

    if($result)
    {
        echo "Task Deleted";
    }
  }
  else
  {
    echo "All fields are Required!";
  }
}

if(isset($_GET['button']))
{

    $query = "DELETE FROM tasktable";
    $result = mysqli_query($conn, $query);

    echo "Table Cleared";
}
?>
</body>
</html>