<?php
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'examportal');
$sql = "SELECT * FROM files";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];
    $filename1 = $_FILES['myfile1']['name'];
    $filename2 = $_FILES['myfile2']['name'];
    // destination of the file on the server
    $destination = 'uploads/' . $filename;
    $destination1 = 'uploads/' . $filename1;
    $destination2 = 'uploads/' . $filename2;
    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
$extension1 = pathinfo($filename1, PATHINFO_EXTENSION);
$extension2 = pathinfo($filename2, PATHINFO_EXTENSION);
    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];
    $file1 = $_FILES['myfile1']['tmp_name'];
    $size1 = $_FILES['myfile1']['size'];
$file2 = $_FILES['myfile2']['tmp_name'];
    $size2= $_FILES['myfile2']['size'];
    if ((!in_array($extension, ['zip', 'pdf', 'docx']))and (!in_array($extension1, ['zip', 'pdf', 'docx'])) and (!in_array($extension2, ['zip', 'pdf', 'docx']))){
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif (($_FILES['myfile']['size'] > 1000000) and ($_FILES['myfile1']['size'] > 1000000) and ($_FILES['myfile2']['size'] > 1000000)) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if((move_uploaded_file($file,$destination)) and (move_uploaded_file($file1,$destination1)) and (move_uploaded_file($file2,$destination2)) )
          {            
              $sql = "INSERT INTO files (name,name1,name2) VALUES ('$filename','$filename1','$filename2')";
               if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }

}else {
            echo "Failed to upload file.";
        }
    }
}
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM files WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['name']));
        readfile('uploads/' . $file['name']);

        // Now update downloads count
        //$newCount = $file['downloads'] + 1;
        //$updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
        //mysqli_query($conn, $updateQuery);
        //exit;
    }

}
if (isset($_GET['file_id1'])) {
    $id = $_GET['file_id1'];

    // fetch file to download from database
    $sql = "SELECT * FROM files WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath1 = 'uploads/' . $file['name1'];

    if (file_exists($filepath1)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath1));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['name1']));
        readfile('uploads/' . $file['name1']);

        // Now update downloads count
        //$newCount = $file['downloads'] + 1;
        //$updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
        //mysqli_query($conn, $updateQuery);
        //exit;
    }

}
if (isset($_GET['file_id2'])) {
    $id = $_GET['file_id2'];

    // fetch file to download from database
    $sql = "SELECT * FROM files WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath2 = 'uploads/' . $file['name2'];

    if (file_exists($filepath2)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath2));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['name2']));
        readfile('uploads/' . $file['name2']);

        // Now update downloads count
        //$newCount = $file['downloads'] + 1;
        //$updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
        //mysqli_query($conn, $updateQuery);
        //exit;
    }

}