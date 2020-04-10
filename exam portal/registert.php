<html>
<title></title>

<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>
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

    .avatar {
        width: 100px;
        height: 100px;
        margin: 10px auto 30px;
        border-radius: 100%;
        border: 2px solid #aaa;
        background-size: cover;
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
    <a class="btn btn-primary" href="index.php" type="button">LogOut</a>
    <div class="container">
        <div class="login-container">
            <div id="output"></div>
            <div class="avatar"></div>
            <div class="form-box">
                <form action="" method="post">

                    <!-- 1. Text Input -->
                    <div class="form-group">
                        <label for="username">Enter Faculty Name</label>
                        <!--                        <input type="text" class="form-control" id="fname" aria-describedby="Faculty Name" placeholder="Enter Faculty name">-->
                        <select class="form-control" id="fname" name="fname">
                            <option value="joshua">joshua</option>
                            <option value="alex">alex</option>
                            <option value="ram">ram</option>
                        </select>
                    </div>
                    <br>
                    
                    <br><br>
                    <!-- 3. Single Select -->
                    <div class="form-group">
                        <label for="Qualification">Qualification</label>
                        <select class="form-control" name="Qualification">
                            <option value="MTech">MTech Phd.</option>
                            <option value="Btech">MTech</option>
                        </select>
                    </div>
                    <br>
                    <!--class field-->
                    <div class="form-group">
                        <label for="Class">Year</label>
                        <select class="form-control" name="year">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                    <br>
                    <!--subject field-->
                    section : 
                    <select name="section">
                        <option value="a">a</option>
                        <option value="b">b</option>
                        <option value="c">c</option>
                    </select>
                    <br><br>
                    semster : 
                    <select name="semster">
                        <option value="1">1</option>
                        <option vlaue="2">2</option>
                    </select>
                    <div class="form-group">
                        <label for="Suject">Subject</label>
                        <select class="form-control" name="subject">
                            <option value="dbms">DBMS</option>
                            <option value="os">Operating system</option>
                            <option value="cd">compiler design</option>
                            <option value="cn">comptuer Networks</option>
                            <option value="ds">Data structures</option>
                        </select>
                    </div>


                    <br>


                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<?php 
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password,"exam");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "hello";
  if(isset($_POST['fname']))
  {
      echo "hillo";
  	$year=$_POST['year'];
  	$section=$_POST['section'];
  	$semster=$_POST['semster'];
  	$name=$_POST['fname'];
    $subject=$_POST['subject'];
    $qual=$_POST['Qualification'];
    $query="INSERT INTO `classes`(`year`, `section`, `semster`, `subject`, `teacher`, `qual`) VALUES ('$year','$section','$semster','$name','$subject','$qual')";
    $result = mysqli_query($conn,$query);
      
  }
?>
