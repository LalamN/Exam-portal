<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
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
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
  if (isset( $_FILES['Questionpaper']['name']))
  {
    $filename = $_FILES['Questionpaper']['name'];
    $type ="question";

   // echo "question paper sem1";
      // destination of the file on the server
    $destination = 'uploads/' . $filename;
echo $filename,$destination;
    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['Questionpaper']['tmp_name'];
    $size = $_FILES['Questionpaper']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx','jpg','jpeg','png'])) {
       // echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['Questionpaper']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $r=0;
            $sql = "INSERT INTO files (name, size, downloads,type) VALUES ('$filename', '$size', 0,'$type')";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully ";          
                 }

        } else {
            echo "Failed to upload file.";
        }
    }
}

  }




if (isset( $_FILES['key']['name']))
  {
    $filename = $_FILES['key']['name'];
    $type ="key";

    echo "question paper sem1";
      // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['key']['tmp_name'];
    $size = $_FILES['key']['size'];
    if (!in_array($extension, ['zip', 'pdf', 'docx','jpg','jpeg','png'])) {
       // echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['key']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (name, size, downloads,type) VALUES ('$filename', $size, 0,'$type')";
            if (mysqli_query($con, $sql)) {
                echo "File uploaded successfully            }";

        } else {
            echo "Failed to upload file.";
        }
    }
}

  }

if (isset( $_FILES['scheme']['name']))
  {
    $filename = $_FILES['scheme']['name'];
    $type ="scheme";

    echo "question paper sem1";
      // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['scheme']['tmp_name'];
    $size = $_FILES['scheme']['size'];
    if (!in_array($extension, ['zip', 'pdf', 'docx','jpg','jpeg','png'])) {
        //echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['scheme']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (name, size, downloads,type) VALUES ('$filename', $size, 0,'$type')";
            if (mysqli_query($con, $sql)) {
                echo "File uploaded successfully            }";

        } else {
            echo "Failed to upload file.";
        }
    }
}

  }












//     // destination of the file on the server
//     $destination = 'uploads/' . $filename;

//     // get the file extension
//     $extension = pathinfo($filename, PATHINFO_EXTENSION);

//     // the physical file on a temporary uploads directory on the server
//     $file = $_FILES['myfile']['tmp_name'];
//     $size = $_FILES['myfile']['size'];

//     if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
//         echo "You file extension must be .zip, .pdf or .docx";
//     } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
//         echo "File too large!";
//     } else {
//         // move the uploaded (temporary) file to the specified destination
//         if (move_uploaded_file($file, $destination)) {
//             $sql = "INSERT INTO files (name, size, downloads) VALUES ('$filename', $size, 0)";
//             if (mysqli_query($conn, $sql)) {
//                 echo "File uploaded successfully            }";

//         } else {
//             echo "Failed to upload file.";
//         }
//     }
// }
//}

?>
    <style>
        body {
            background-image: url(image4.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
        }

        .avatar {
            text-align: center;
            width: 70px;
            height: 70px;
            border: 1px solid black;
            border-radius: 50%;
        }

        .wrapper {
            border: 0px solid #fff;
            overflow: hidden;
        }

        .wrapper div {
            min-height: 200px;
            padding: 10px;
            margin-top: 10%;
        }

        #one {
            background-color: white;
            float: left;
            margin-right: 20px;
            width: 400px;
            min-height: 303px;
            border: 1px solid #000;
            opacity: 0.8;
            filter: alpha(opacity=60);
        }

        #two {
            background-color: white;
            overflow: hidden;
            margin: 10px;
            margin-top: 10%;
            min-height: 170px;
            border: 1px solid #000;
            text-align: center;
            opacity: 0.8;
            filter: alpha(opacity=60);
        }

        #one input[type="text"],
        select {

            margin: 20px auto;
            border: 2px solid black;
            padding: 10px 10px;
            outline: none;
            color: black;
            border-radius: 17px;
            transition: .25s;
        }

        .button {
            background-color: black;
            border-radius: 12px;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        h1 {
            color: black;
            text-align: center;
        }

        [hidden] {
            display: none !important;
        }


        @media screen and (max-width: 400px) {
            #one {
                float: none;
                margin-right: 0;
                width: auto;
                border: 0;
                border-bottom: 2px solid #000;
            }
        }

    </style>

    <body>
        <form action="student2.html">
            <div class="container">
                <div class="wrapper">
                    <div id="one">

                        <img src="pics\admin.jpg" alt="Avatar" class="avatar">

                        <label for="username"></label>
                        <input type="text" class="form-control" ariq-describedby="username" placeholder="Name">
                        <br>


                        <label for="class">Year:</label> <select>
                            <option value="1">1 </option>
                            <option value="2">2 </option>
                            <option value="3">3 </option>
                            <option value="4">4 </option>
                        </select>
                        &nbsp;&nbsp;
                        &nbsp;&nbsp;
                        &nbsp;&nbsp;
                        &nbsp;&nbsp;
                        <br>


                        <label for="class">Sem:</label> <select>
                            <option value="1">1 </option>
                            <option value="2">2 </option>
                        </select>
                        &nbsp;&nbsp;
                        &nbsp;&nbsp;

                        <br>

                        <label for="subject">Subject:</label><select>
                            <option value="1">DBMS</option>
                            <option value="2">CN</option>
                            <option value="3">CA</option>
                            <option value="4">WT</option>
                            <option value="5">CG</option>
                            <option value="6">CD</option>
                        </select>
                        &nbsp;
                        &nbsp;



                        <br>
                        <input type="button" class="button" value="Logout">





                    </div>
        </form>
        <form method="post" enctype="multipart/form-data">
            <div id="two">

                <h1>Teacher Upload</h1>
                <hr>

                <label class="btn btn-default">
                    Question paper <input type="file" name="Questionpaper" hidden>
                </label>

                <label class="btn btn-default">
                    key <input type="file" name="key" hidden>
                </label>
                <label class="btn btn-default">
                    Scheme <input type="file" name="scheme" hidden>
                </label>
                <!--<label class="btn btn-default">
    scheme <input type="file" hidden>
</label>-->
                <!-- <label class="dropdownMenuButton">


  <button class="btn btn-defalut" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
    scheme</button>

 
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <button class="btn btn-defalut" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
    question No
  </button>
 
    <a class="dropdown-item" href="#">1</a>
    <a class="dropdown-item" href="#">2</a>
    <a class="dropdown-item" href="#">3</a>
   
  </div>
</label>-->
                <div>
                    <button type="submit" name="save" class="btn btn-success">Submit</button>
                </div>

        </form>
        </div>
        </div>
        </div>

        <?php  ?>
    </body>

</html>
