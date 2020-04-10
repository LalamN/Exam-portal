<html>
<title></title>

<head>
    <title>mapping</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
//$servername = "localhost";
//$password = " ";

// Create connection
//$conn = new mysqli($servername, $username, $password,"exam");

// Check connection
//if ($conn->connect_error) {
    //die("Connection failed: " . $conn->connect_error);
//}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exam";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
  if(isset($_POST['submit']))
  {
    $year=$_POST['year'];
    $section=$_POST['section'];
    $semster=$_POST['semster'];
    $name=$_POST['fname'];
    $subject=$_POST['subject'];
    $query="INSERT INTO `map`(`year`, `section`, `subject`, `teacherid`,`semester`) VALUES ('$year','$section','$subject','$name','$semster')";
    if (mysqli_query($con, $query)) {
                ?>
                <script type="text/javascript">
                alert("File uploaded successfully"); 
                </script>
                <?php         
                 }

        else {
            ?>
            <script type="text/javascript">
            alert("Failed to upload file.");
            </script>
            <?php
        }
  }
?>
</body>
<style>
    body {

        background-color: coral;

        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        height: 100%;
    }


    .login-container {
        position: relative;
        width: 300px;
        margin: 80px auto;
        padding: 20px 40px 40px;
        text-align: center;
        background: #fff;
        border: 1px solid #ccc;
    }

    #output {
        position: absolute;
        width: 300px;
        top: -75px;
        left: 0;
        color: #fff;
    }

    #output.alert-success {
        background: rgb(25, 204, 25);
    }

    #output.alert-danger {
        background: rgb(228, 105, 105);
    }


    .login-container::before,
    .login-container::after {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        top: 3.5px;
        left: 0;
        background: #fff;
        z-index: -1;
        -webkit-transform: rotateZ(4deg);
        -moz-transform: rotateZ(4deg);
        -ms-transform: rotateZ(4deg);
        border: 1px solid #ccc;

    }

    .login-container::after {
        top: 5px;
        z-index: -2;
        -webkit-transform: rotateZ(-2deg);
        -moz-transform: rotateZ(-2deg);
        -ms-transform: rotateZ(-2deg);

    }

    .imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 30%;
  border-radius: 50%;
  border:1px solid #000;
}

    .form-box input {
        width: 100%;
        padding: 20px;
        text-align: center;
        height: 10px;
        border: 1px solid #ccc;
        ;
        background: #fafafa;
        transition: 0.2s ease-in-out;

    }

    .form-box input:focus {
        outline: 0;
        background: #eee;
    }

    .form-box input[type="text"] {
        border-radius: 5px 5px 0 0;
        text-transform: lowercase;
    }

    .form-box input[type="password"] {
        border-radius: 0 0 5px 5px;
        border-top: 0;
    }

    .form-box button.login {
        margin-top: 15px;
        padding: 10px 20px;
    }

    .animated {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }

    @-webkit-keyframes fadeInUp {
        0% {
            opacity: 0;
            -webkit-transform: translateY(20px);
            transform: translateY(20px);
        }

        100% {
            opacity: 1;
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }
    }

    @keyframes fadeInUp {
        0% {
            opacity: 0;
            -webkit-transform: translateY(20px);
            -ms-transform: translateY(20px);
            transform: translateY(20px);
        }

        100% {
            opacity: 1;
            -webkit-transform: translateY(0);
            -ms-transform: translateY(0);
            transform: translateY(0);
        }
    }

    .fadeInUp {
        -webkit-animation-name: fadeInUp;
        animation-name: fadeInUp;
    }

</style>

<body>
    <div>
    <image src=pics/anits.jpg height=250px width=100%> </image>
</div>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Exam portal</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="http://localhost/project/index.php">Home</a></li>
      <li><a href="http://localhost/project/seatingplan.php">BACK</a></li>
      
    </ul>
  </div>
</nav>
  
    <!--    <a class="btn btn-primary" href="index.php" type="button">LogOut</a>-->
    <div class="container">
        <div class="login-container">
            <div id="output"></div>
            <div class="imgcontainer">
    <img src="img-avatar2.png" alt="Avatar" class="avatar">
  </div>
            <div class="form-box">
                <form action=" " method="post">
                    <div class="form-group">
                        <?php
                    $a=array();
$sql1="SELECT * from `login`";
$result = mysqli_query($con,$sql1);
while($rows = mysqli_fetch_assoc($result)) {
   array_push($a,$rows["teacherid"]);
}

?>
                        <label for="username">Enter Faculty id</label>
                        <select class="form-control" name="fname">
                                <?php
foreach($a as $item){
?>
<option value="<?php echo $item; ?>" style="color:#000" ><?php echo $item;?></option>
<?php
}
?>
                            </select>
                        <script type="text/javascript">
  document.getElementById('name').value = "<?php echo $_POST['fname'];?>";
</script>
                    </div>
                    <br><br>
                    <div class="form-row">
                        <label for="Class">Year : </label>
                        <div class="col">
                            <select class="form-control" name="year" id="year">
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                            <script type="text/javascript">
  document.getElementById('year').value = "<?php echo $_POST['year'];?>";
</script>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        section :
                        <div class="col">
                            <select name="section" class="form-control">
                                <option value="a">a</option>
                                <option value="b">b</option>
                                <option value="c">c</option>
                            </select>
                        </div>
                    </div>
                    <br><br>
                    <div class="form-row">
                        <label>Semster :</label>
                        <div class="col">
                            <select name="semster" id="semester">
                                <option value="1">1</option>
                                <option vlaue="2">2</option>
                            </select>
                            <script type="text/javascript">
  document.getElementById('semester').value = "<?php echo $_POST['semster'];?>";
</script>
                        </div>
                    </div>
                    <br>
                    <button type="submit" name="sub">Search</button>
                    <?php
                    $b=array();
if(isset($_POST['sub'])){
$year=$_POST['year'];
$semester=$_POST['semster'];
$sql1="SELECT * from `subjects` where year='$year' and semester='$semester'";
$result = mysqli_query($con,$sql1);
while($rows = mysqli_fetch_assoc($result)) {
   array_push($b,$rows["subject"]);
}
}
?>
                    <div class="form-row">
                        <label for="Suject">Subject</label>
                        <div class="col">
                            <select class="form-control" name="subject">
                                <?php
foreach($b as $item){
?>
<option value="<?php echo $item; ?>" style="color:#000" ><?php echo $item;?></option>
<?php
}
?>
                            </select>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
