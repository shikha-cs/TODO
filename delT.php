<?php
include 'connection.php';

$query = "DELETE FROM tasktable WHERE TASKNAME='$taskName'";
$data = mysqli_query($conn, $query);
if($data)
{
    echo "Task Deleted";
}
else
{
    echo "Error";
}
?>