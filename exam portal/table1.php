<?php include 'files.php';?>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "examportal";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
if (isset($_POST['year'])){
        // removes backslashes
$year = stripslashes($_REQUEST['year']);
        //escapes special characters in a string
$year= mysqli_real_escape_string($con,$year);
$branch= stripslashes($_REQUEST['branch']);
        //escapes special characters in a string
$branch= mysqli_real_escape_string($con,$branch);
$subject= stripslashes($_REQUEST['subject']);
        //escapes special characters in a string
$subject= mysqli_real_escape_string($con,$subject);
$sem = stripslashes($_REQUEST['sem']);
        //escapes special characters in a string
$sem= mysqli_real_escape_string($con,$sem);
$mid= stripslashes($_REQUEST['mid']);
        //escapes special characters in a string
$mid= mysqli_real_escape_string($con,$mid);
$sql = "SELECT sno,year,branch,subject,sem,mid FROM `student` where year='$year' and branch='$branch' and subject='$subject' and sem='$sem'and mid='$mid'";
$result = $con->query($sql);
if ($result->num_rows!=0) {
echo "<table width=100%><tr><th>sno</th><th>year</th><th>branch</th><th>subject</th><th>sem</th><th>mid</th><th>Download</th></tr>";
    echo " <style> table {
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
}
.button {
  background-color:black;
  border-radius:12px;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>";
    // output data of each row
    echo "<table>"
    while($row = $result->fetch_assoc()) {
?>
<tr>
    <td><?php echo $row["sno"]?></td>
    <td><?php echo $row["year"]?></td>
    <td><?php echo $row["branch"]?></td>
    <td><?php echo $row["subject"]?></td>
    <td><?php echo $row["sem"]?></td>
    <td><?php echo $row["mid"]?></td>
    <?php foreach ($files as $file): ?>
    <td><a href="table1.php?file_id=<?php echo $file['id'] ?>" class="button">questionpaper</a>&nbsp <a href="table1.php?file_id1=<?php echo $file['id'] ?>" class="button">key</a>&nbsp; <a href="table1.php?file_id2=<?php echo $file['id'] ?>" class="button">scheme</a></td>
</tr>
<?php endforeach;?>
<?php
    }
    echo "</table>";
}else{
  echo "0 results";
}
}
$con->close();
?>
<html>

<body bgcolor="#D3D3D3">
    <form method="post" action="student.php">
        <br><br><br><br>
        <button onclick="myFunction()">BACK</button>
</body>

</html>
