
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
* { box-sizing: border-box; }
body {
font-family: "HelveticaNeue-Light","Helvetica Neue Light","Helvetica Neue",Helvetica,Arial,"Lucida Grande",sans-serif;
color:white;
font-size:12px;
background:#AAB7B8 url(/images/classy_fabric.png);
}
form {
background:#111;
width:500px;
margin:30px auto;
border-radius:0.4em;
border:1px solid #191919;
overflow:hidden;
position:relative;
box-shadow: 0 5px 10px 5px rgba(0,0,0,0.2);
top:10px;
}
form:after {
content:"";
display:block;
position:absolute;
height:1px;
width:100px;
left:20%;
background:linear-gradient(left, #111,#444 ,#b6b6b8, #ff5722, #ff9800);
top:0;
}
form:before {
content:"";
display:block;
position:absolute;
width:8px;
height:5px;
border-radius:50%;
left:34%;
top:-15px;
box-shadow: 0 0 6px 4px #fff;
}
.inset {
padding:20px;
border-top:1px solid #19191a;
}
form h1 {
font-size:18px;
text-shadow:0 1px 0 black;
text-align:center;
padding:15px 0;
border-bottom:1px solid rgba(0,0,0,1);
position:relative;
}
form h1:after {
content:"";
display:block;
width:250px;
height:100px;
position:absolute;
top:0;
left:50px;
pointer-events:none;
transform:rotate(70deg);
background:linear-gradient(50deg, rgba(255,255,255,0.15), rgba(0,0,0,0));
}
/*.avatar {
  text-align: center;
  float:50%;
  width: 70px;
  height: 70px;
  border:1px solid black;
  border-radius: 50%;
}*/
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 20%;
  border-radius: 50%;
}

label {
color:#666;
display:block;
padding-bottom:9px;
}
input[type=text],
input[type=password],
input[type=number],
input[type=file],
select {
width:100%;
padding:8px 5px;
background:linear-gradient(#1f2124, #27292c);
border:1px solid #222;
box-shadow:
0 1px 0 rgba(255,255,255,0.1);
border-radius:0.3em;
margin-bottom:20px;
}
label[for=remember]{
color:white;
display:inline-block;
padding-bottom:0;
padding-top:5px;
}
input[type=checkbox] {
display:inline-block;
vertical-align:top;
}
.p-container {
padding:0 20px 20px 20px;
}
.p-container:after {
clear:both;
display:table;
content:"";
}
.p-container span {
display:block;
float:left;
color:#0d93ff;
padding-top:8px;
}
input[type=submit] {
padding:5px 20px;
border:1px solid rgba(0,0,0,0.4);
text-shadow:0 -1px 0 rgba(0,0,0,0.4);
box-shadow:
inset 0 1px 0 rgba(255,255,255,0.3),
inset 0 10px 10px rgba(255,255,255,0.1);
border-radius:0.3em;
background:#0184ff;
color:white;
float:right;
font-weight:bold;
cursor:pointer;
font-size:13px;
}
input[type=submit]:hover {
box-shadow:
inset 0 1px 0 rgba(255,255,255,0.3),
inset 0 -10px 10px rgba(255,255,255,0.1);
}
input[type=text]:hover,
input[type=password]:hover,
input[type=number]:hover,
input[type=file]:hover,
swlect:hover,
label:hover ~ input[type=text],
label:hover ~ input[type=password],
label:hover ~ input[type=number],
label:hover ~ input[type=file],
label:hover ~ select {
background:#27292c;
}
.button {
  background-color:black;
  border-radius:12px;
  color: white;
  padding: 5px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>
<body>
<?php
session_start();
  $servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password,"exam");
if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}
$teacherid= $_SESSION['teacherid'];
?>	
<?php
$b=array();
$d=array();
$e=array();
$f=array();
$sql1="SELECT * from `map` where teacherid='$teacherid'";
$result = mysqli_query($conn,$sql1);
while($row = mysqli_fetch_assoc($result)) {
   array_push($b,$row["year"]);
  array_push($d,$row["semester"]);
  array_push($e,$row["section"]);
}
?>
<div align="center">
<img src="anil.jpg" width="1200"px height="150"px>
</div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <h3>EXAMPORTAL</h3>
    </div>
    
    <!--<div class="navbar-header">
      <a class="navbar-brand">EXAMPORTAL</a>
    </div>-->
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Home</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-user"></span>Logout</a></li>
    </ul>
  </div>
</nav>
<form action="" method="post" enctype="multipart/form-data" >
<h1>FACULTY</h1>
<div class="inset">
<!-- <p>
<label for="Faculty Name">FACULTY NAME</label>
<input type="text" name="fname" id="fname">
</p> -->
<!--<img src="img-avatar2.png" alt="Avatar" class="avatar">-->
<div class="imgcontainer">
    <img src="img-avatar2.png" alt="Avatar" class="avatar">
  </div>
<br>
<br>
<p>
<label style="color:#fff">TEACHERID</label>
<input type="text"  style="color:#fff" class="form-control" ariq-describedby="username" placeholder="Name" name="teacherid" value="<?php echo $teacherid;?>">
</p>
<!-- <label>Year and Semester</label>
<select name="year" style="width:40%">
<option value="1">I</option>
<option value="2">II</option>
<option value="3">III</option>
<option value="4">IV</option>
</select> -->
<label style="color:#fff">YEAR</label>
<select name="year" style="color:#fff">
<?php
foreach($b as $item){
?>
<option value="<?php echo $item; ?>" style="color:#000" ><?php echo $item; ?></option>
<?php
}
?>
</select>
<script type="text/javascript">
  document.getElementById('year').value = "<?php echo $_POST['year'];?>";
</script>
<label style="color:#fff">SEMESTER</label>
<select name="semester" style="color:#fff">
<?php
foreach($d as $item2){
?>
<option value="<?php echo $item2; ?>" style="color:#000"><?php echo $item2; ?></option>
<?php
}
?>
</select>
<script type="text/javascript">
  document.getElementById('semester').value = "<?php echo $_POST['semester'];?>";
</script>
<button type="submit" name="sub" class="button">Search</button>
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username,$password,"exam");
if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}
$c=array();
if(isset($_POST['sub'])){
$year=$_POST['year'];
$semester=$_POST['semester'];
$sql1="SELECT * from map where year='$year' and semester='$semester' and teacherid='$teacherid'";
$result = mysqli_query($conn,$sql1);
while($rows = mysqli_fetch_assoc($result)) {
   array_push($c,$rows["subject"]);
}
}
?>
<br>
<label style="color:#fff">SUBJECT</label>
<select name="subject" style="color:#fff">
<?php
foreach($c as $item1){
?>
<option value="<?php echo $item1; ?>" style="color:#000"><?php echo $item1; ?></option>
<?php
}
?>
</select>
<label style="color:#fff">SECTION</label>
<select name="section" style="color:#fff">
<?php
foreach($e as $item3){
?>
<option value="<?php echo $item3; ?>" style="color:#000"><?php echo $item3; ?></option>
<?php
}
?>
</select>
<label style="color:#fff">MID</label>
<select name="mid" style="color:#fff">
  <option value="1" style="color:#000">1</option>
  <option value="2" style="color:#000">2</option>  
</select>
<label style="color:#fff">Type</label>
<select name="type" style="color:#fff">
<option value="question" style="color:#000">Question paper</option>
<option value="key" style="color:#000">key</option>
<option value="scheme" style="color:#000">Scheme</option>
</select>
<label style="color:#fff">upload:</label>
<input type="file" name="myfile" required>
</p>
<p>
<input type="submit" name="save" id="go" value="submit" required>
</p>
</div>
</form>
<?php
/*$sql1="select * from map where teacherid='$teacherid'";
$result = mysqli_query($conn,$sql1);
$rows=mysqli_num_rows($result);
if ($rows !=0) {
while($row1 = $result->fetch_assoc()) {*/
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
  $subject=$_POST['subject'];
$semester=$_POST['semester'];
$year=$_POST['year'];
$section=$_POST['section'];
$mid=$_POST['mid'];
$type=$_POST['type'];
$filename =$_FILES['myfile']['name'];
   // echo "question paper sem1";
      // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx','jpg','jpeg','png'])) {
       // echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {

            $sql = "INSERT INTO f1(id,subject,semester,year,section,name,type,mid) VALUES ('$teacherid','$subject','$semester','$year','$section','$filename','$type','$mid')";
            if (mysqli_query($conn, $sql)) {
            	?>
            	<script type="text/javascript">
                alert("File uploaded successfully"); 
                </script>
                <?php         
                 }

        } else {
        	?>
        	<script type="text/javascript">
            alert("Failed to upload file.");
            </script>
            <?php
        }
}
}
?>
</body>
</html>
