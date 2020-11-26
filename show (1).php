<html>
<head>
<title>ITF Lab</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itfserver.mysql.database.azure.com', 'chotiphat@itfserver', '038397207Mill', 'worklab3', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table width="600" border="1">
  <tr>
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">Action </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
    <td><?php echo '<a href=“insert_new.php?id='.$Result['id'].'">Update</a>'?>
    <?php echo '<a href="delete.php?id='.$Result['id'].'">Delete</a>'?></td>
  </tr>
<?php
}
?>
</table>
<td><?php echo '<a href="from.html?id='.$Result['id'].'">Add</a>'?></td>
<?php
mysqli_close($conn);
?>
</body>
</html>