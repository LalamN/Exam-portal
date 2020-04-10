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
    $tid=$_POST['tid'];
    $query="DELETE FROM `map` where teacherid='$tid'";
    $result=mysqli_query($con,$query);
    if ($result) {
                ?>
                <script type="text/javascript">
                alert("deleted successfully"); 
                </script>
                <?php         
                 }

        else {
            ?>
            <script type="text/javascript">
            alert("Failed to delete");
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
    <div>
    <image src=pics/anits.jpg height=250px width=100%> </image>
</div>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li class="active"><a href="">EXAM PORTAL</a></li>  
      <li class="active"><a href="http://localhost/project/seatingplan.php">Home</a></li>
      <li><a href="http://localhost/project/seatingplan.php">BACK</a></li>
      
    </ul>
  </div>
</nav>
  
    <!--    <a class="btn btn-primary" href="index.php" type="button">LogOut</a>-->
    <div class="container">
        <div class="login-container">
            <div id="output"></div>
            <div class="avatar">
                <image></image>
            </div>
            <div class="form-box">
                <form action=" " method="post">
                    <div class="form-group">
                        <label for="username">Enter Faculty id</label>
                        <input type="text" name="tid">
                    </div>
                    
                    <br>
                    <button type="submit" class="btn btn-success" name="submit">Submit</button>
                
                </form>
            </div>
        </div>
    </div>
</body>

</html>