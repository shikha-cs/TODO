<?php
include 'connection.php'
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Task</title>
</head>
<body>

<h1>TODO CHALLENGE</h1>
<h2>Add Task</h2>

<form action="" method="GET">
  Task Name:
  <input type="text" name="taskName">
  <br><br>

  Date:
  <input type="date" name="taskDate">
  <br><br>

  Progress:
  <select name="progress">
    <option value=" "> </option>
    <option value="started">Started</option>
    <option value="inprogress">In Progress</option>
    <option value="pending">Pending</option>
    <option value="pending">Late</option>
    <option value="completed">Completed</option>
  </select>
  <br><br>
  <input type="submit" name="submit" value="Submit">
  <br><br>
</form>

<?php
if(isset($_GET['submit']))
{
  $tN = $_GET['taskName'];
  $tD = $_GET['taskDate'];
  $tP = $_GET['progress'];

  if($tN!="" && $tD!="" && $tP!="")
  {
    $query = "INSERT INTO tasktable VALUES ('$tN', '$tD', '$tP')";
    $result = mysqli_query($conn, $query);

    if($result)
    {
        echo "Task Added";
    }
  }
  else
  {
    echo "All fields are Required!";
  }
}
?>
  <a href="home.html">Main Menu
  <br><br>
</body>
</html>