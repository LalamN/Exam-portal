<?php session_start(); ?>
<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "exam";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    if(isset($_POST['submit'])){ 
$rollno = $_POST['rollno'];
$feedback = $_POST['feedback'];
$sql="SELECT sysdate() as b";
$res=mysqli_query($conn,$sql);
$id1=mysqli_fetch_object($res);
$b=$id1->b;

if($rollno !=''||$feedback !=''){

$query = mysqli_query($conn,"INSERT INTO user(rno,feedback,cdate)
VALUES ('$rollno', '$feedback','$b')");
}


if (mysqli_query($conn, $sql)) {
            	?>
            	<script type="text/javascript">
                alert("your response submitted successfully!"); 
                </script>
                <?php         
                 }

        } else {
        	?>
        	<script type="text/javascript">
            alert("your response is not submitted.");
            </script>
            <?php
        }

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>feedback</title>
    <style>
        @media print {
            .noprint {
                display: none;
            }
        }

        .list-group-item {
            margin-bottom: 20px;
            text-align: center;
            border-radius: 50px;
            font-family: cursive;
            font-size: 20px;
            font-style: italic;
            transition-duration: 0.4s;
        }

        .list-group-item:hover {
            background-color: white;
            color: aqua;
        }

        .list-group-item:focus {
            background-color: aqua;
            color: orange;
        }
        #one{
          display: block;
        }
        #rno{
          margin-bottom: 15px;
        }
        </style>

</head>
<body>
      <div class="container">
    <div class="">
      <img style="-webkit-user-select: none;margin:auto;cursor: default;" src="pics\anits.jpg" width="100%",height=auto>
      </div>
      </div>
        <div class="noprint">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1" style="  height: 500px;">
                    <div class="list-group" style="margin-top: 50px;">
                        
                    </div>
                </div>
                 <div class="col-md-9" style="height: 100%; padding: 20px;border-radius:8px;">
                    <div class="container" style="background-color: yellow;">
                        <div id="one">
                            <!-- Feedback-->
                            <p style="text-align: center;font-size: 35px; padding-top: 10px;font-family: cursive;">FEEDBACK FORM</p>
                            <hr class="my-4">

                            <form method="post" action="feedback.php">
                              <form class="form-horizontal">
                              <div id="rno">
                                <div class="form-group row">
                                    <div class="col-xs-2">
                                     <label for="rollno" style="font-size: 20px; padding-right: 40px;margin-left:20px; ">Rollno:</label>
                                     <input class="form-control" name="rollno" id="rollno" type="text"required>
                                      </div>
                                    </div>
                               <label for="feedback"style="font-size: 20px; padding-right: 40px;margin-left:20px;">Feedback:</label>
                               <textarea class="form-control" rows="3" name="feedback" id="feedback" required></textarea>
                             
                           </div>
                         </div>
                         &nbsp;&nbsp;
                         <button type="submit" class="btn btn-success" style="margin-left:40%;" name="submit" value="submit" onclick="feed(rollno)">Submit</button>
                       </div>
                     </form>
                     </form>
                  </form>
                </div>
              </div>
      <script>
      	if($rollno!="" || $feedback!="")
      	{
      	 alert("<?php echo $k ?> your response submitted succesfully");
      	}
      	else{
      		alert("<?php echo $k ?> your response is not  submitted ");
      	}
    function feed(inputtxt)
{
  var rno = /^[3]{1}[1]{1}[0-9]{10}$/;
  if(inputtxt.value.match(rno))
  {

      return true;
  }
  else
  {
     alert("Not a valid registered Number") ;
     return false;
  }
  }

</script>
</body>
</html>