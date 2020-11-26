<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'itfserver.mysql.database.azure.com', 'chotiphat@itfserver', '038397207Mill', 'worklab3', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['comment'];
$id = $_GET['id'];

$sql = "INSERT INTO guestbook (Name , Comment) VALUES ('$name', '$comment')";
$res = mysqli_query($conn, 'SELECT * FROM guestbook where id = $id');

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

mysqli_close($conn);
?>