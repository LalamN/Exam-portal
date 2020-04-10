<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>seating plan</title>
    <style>
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

        .container {
            border-radius: 8px;
        }

        .radio-inline {
            margin-left: 20px;
        }

        #rooms1 {
            margin-bottom: 30px;
        }

        #ram {
            /* seatingplan*/
            display: block;
        }

        #ram1 {
            /*Time Table*/
            display: none;
        }

        #ram2 {
            /*seating arrangement*/
            display: none;
        }

        #rooms {
            display: none;
        }

        #students {
            display: none;
        }

    </style>
    <script>
        function logsheet() {
            location.replace("../vinay/logsheet.php");
        }

        function absentees() {
            location.replace("../vinay/absentees.php");
        }

        function seatingplan() {
            var a = 5;
            var b = 6;
            var c = a + b;
            console.log(c);
            var seatingplan = document.getElementById("ram");
            var timetable = document.getElementById("ram1");
            var seatingarrangement = document.getElementById("ram2");
            var rooms = document.getElementById("rooms");
            var students = document.getElementById("students");
            if (seatingplan.style.display === "none") {
                seatingplan.style.display = "block";
                timetable.style.display = "none";
                seatingarrangement.style.display = "none";
                rooms.style.display = "none";
                students.style.display = "none";
            } else {
                timetable.style.display = "none";
                seatingarrangement.style.display = "none";
                rooms.style.display = "none";
                students.style.display = "none";
            }
        }

        function timetable() {
            var seatingplan = document.getElementById("ram");
            var timetable = document.getElementById("ram1");
            var seatingarrangement = document.getElementById("ram2");
            var rooms = document.getElementById("rooms");
            var students = document.getElementById("students");
            if (timetable.style.display === "none") {
                timetable.style.display = "block";
                console.log(timetable.style.display);
                seatingplan.style.display = "none";
                seatingarrangement.style.display = "none";
                rooms.style.display = "none";
                students.style.display = "none";
            } else {
                seatingplan.style.display = "none";
                seatingarrangement.style.display = "none";
                rooms.style.display = "none";
                students.style.display = "none";
            }
            timetable.style.display = "block";
        }

        function seatingarrangement() {
            var seatingplan = document.getElementById("ram");
            var timetable = document.getElementById("ram1");
            var seatingarrangement = document.getElementById("ram2");
            var rooms = document.getElementById("rooms");
            var students = document.getElementById("students");
            if (seatingarrangement.style.display === "none") {
                seatingarrangement.style.display = "block";
                timetable.style.display = "none";
                seatingplan.style.display = "none";
                rooms.style.display = "none";
                students.style.display = "none";
            } else {
                timetable.style.display = "none";
                seatingplan.style.display = "none";
                rooms.style.display = "none";
                students.style.display = "none";
            }
            seatingarrangement.style.display = "block";
        }

        function addrooms() {
            var seatingplan = document.getElementById("ram");
            var timetable = document.getElementById("ram1");
            var seatingarrangement = document.getElementById("ram2");
            var rooms = document.getElementById("rooms");
            var students = document.getElementById("students");
            if (rooms.style.display === "none") {
                rooms.style.display = "block";
                seatingarrangement.style.display = "none";
                timetable.style.display = "none";
                seatingplan.style.display = "none";

                students.style.display = "none";
            } else {
                seatingarrangement.style.display = "none";
                timetable.style.display = "none";
                seatingplan.style.display = "none";

                students.style.display = "none";
            }
            rooms.style.display = "block";
        }

        function addstudent() {
            var seatingplan = document.getElementById("ram");
            var timetable = document.getElementById("ram1");
            var seatingarrangement = document.getElementById("ram2");
            var rooms = document.getElementById("rooms");
            var students = document.getElementById("students");
            if (students.style.display === "none") {
                seatingarrangement.style.display = "none";
                timetable.style.display = "none";
                seatingplan.style.display = "none";
                rooms.style.display = "none";
                students.style.display = "block";
            } else {
                seatingarrangement.style.display = "none";
                timetable.style.display = "none";
                seatingplan.style.display = "none";
                rooms.style.display = "none";
            }
            students.style.display = "block";
        }
        function addfaculty() {
            location.replace("http://localhost/project/addfaculty/add/addfaculty.php");
        }
        function viewfacultydetails() {
            location.replace("http://localhost/project/viewfacdetails.php");
        }
        function deletefaculty() {
            location.replace("http://localhost/project/deletefaculty/delete/deletefaculty.php");
        }
        function viewfacsublist() {
            location.replace("http://localhost/project/viewfacsubjectlist.php");
        }
        function deletefacultymapping() {
            location.replace("http://localhost/project/delete.php");
        }
        function logout() {
            location.replace("http://localhost/project/adminlogin/login/adminlogin.php");
        }

        window.history.pushState(null, "", window.location.href);
        window.onpopstate = function() {
            window.history.pushState(null, "", window.location.href);
        };

    </script>
</head>

<body>
    <div class="noprint">
        <image src=pics/anits.jpg height=250px width=100%> </image>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3" style="  height: 500px;">
                    <div class="list-group" style="margin-top: 50px;">
                        <div style="margin-bottom:   10px;"></div>
                        <button class="list-group-item list-group-item-action" onclick="seatingplan();">Seating Arrangement</button>
                        <button class="list-group-item list-group-item-action" onclick="timetable();">Time Table</button>
                        <button class="list-group-item list-group-item-action" onclick="seatingarrangement();">Seating Plan</button>
                        <button class="list-group-item list-group-item-action" onclick="addrooms();">Add Rooms</button>
                        <button class="list-group-item list-group-item-action" onclick="addstudent();">Add students</button>
                        <button class="list-group-item list-group-item-action" onclick="logsheet();">LogSheet</button>
                        <button class="list-group-item list-group-item-action" onclick="absentees();">Absent LogSheet</button>
                        <button class="list-group-item list-group-item-action" onclick="addfaculty();">AddFaculty</button>
                        <button class="list-group-item list-group-item-action" onclick="viewfacultydetails();">View Faculty details</button>
                        <button class="list-group-item list-group-item-action" onclick="deletefaculty();">DeleteFaculty</button>
                        <button class="list-group-item list-group-item-action" onclick="viewfacsublist();">view Facultysubject list</button>
                        <button class="list-group-item list-group-item-action" onclick="deletefacultymapping();">Delete Faculty mapping</button>
                        <button class="list-group-item list-group-item-action" onclick="logout();">LogOut</button>
                        <div style="margin-top: 10px;"></div>
                    </div>
                </div>
                <div class="col-md-9" style="height: 100%; padding: 20px;border-radius:8px;">
                    <div class="container" style="background-color: yellow;">
                        <div id="ram">
                            <!-- seating plan-->
                            <p style="text-align: center;font-size: 35px; padding-top: 10px;font-family: cursive;">Seating Arrangement</p>
                            <hr class="my-4">

                            <form method="post" action="">
                                <label style="font-size: 20px; padding-right: 40px;margin-left:20px;">Seating Arrangement for :</label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="check_list[]" value="1" disabled>1st
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="check_list[]" value="2" checked>2nd
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="check_list[]" value="3">3rd
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="check_list[]" value="4" disabled>4th
                                </label>
                                <br><br>
                                <label>seating type : </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optradio" value="1" >1
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optradio" value="2" checked>2
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optradio" value="3" disabled>3
                                </label>
                                <br>
                                <button type="submit" class="btn btn-success" style="margin-left:50%;" name="submit">Submit</button>
                            </form>
                            <?php
                            require('db.php');
                            if ($conn->connect_error)
                            {
                                die("Connection failed: " . $conn->connect_error);
                            }
                            $selectedyears=array();
                            if(isset($_POST['submit'])){
                                if(!empty($_POST['check_list'])){
                                    foreach($_POST['check_list'] as $selected){
                                        array_push($selectedyears,$selected);
                                    }
                                }
                                if(isset($_POST['optradio']))
                                {
                                    $seating=$_POST['optradio'];
                                }
                            
                            $years=array();
                            echo "selected years  : ";
                            foreach($selectedyears as $i){
                                array_push($years,$i);
                                echo $i."  ";
                            }
                            echo"<br>";
                            $query="SELECT * FROM `studentdetails`";
                            $result=mysqli_query($conn,$query);
                            $second=array();
                            while($row=mysqli_fetch_assoc($result))
                            {
                                array_push($second,$row['id']);
                            }
                            $query="SELECT * FROM `studentdetails3`";
                            $result=mysqli_query($conn,$query);
                            $third=array();
                            $fourth=array();
                            while($row=mysqli_fetch_assoc($result))
                            {
                                array_push($third,$row['id']);
                            }
                            $query="SELECT * FROM `rooms`";
                            $result=mysqli_query($conn,$query);
                            $capacity=array();
                            $rooms=array();
                            $total_capacity=0;
                            while($row=mysqli_fetch_assoc($result))
                            {
                                array_push($capacity,$row['capacity']);
                                array_push($rooms,$row['roomsid']);
                            }
                                if($seating==2)
                                {
                                    for($i=0;$i<3;$i++)
                                    {
                                        echo "
                                        <style>
                                        table, th, td {
                                                          border: 1px solid black;
                                                          border-collapse: collapse;
                                                          margin-left:15%;
                                                          margin-top:25px;
                                                          padding:inherit;
                                                        }
                                                        th,td {
                                                            padding :25px;
                                                            text-align:center;
                                                        }

                                                    </style><table style='float:left;'>";
                                        for($j=$i*16;$j<(($i*16)+8);$j++)
                                        {
                                            echo "<tr><td>$second[$j]</td>";
                                            $temp=$j+8;
                                            echo "<td>$second[$temp]</td></tr>";
                                        }
                                        echo "</table>";
                                    }
                                }
                                else if($seating==1)
                                {
                                    for($i=0;$i<3;$i++)
                                    {
                                        echo "
                                        <style>
                                        table, th, td {
                                                          border: 1px solid black;
                                                          border-collapse: collapse;
                                                          margin-left:15%;
                                                          margin-top:25px;
                                                          padding:inherit;
                                                        }
                                                        th,td {
                                                            padding :25px;
                                                            text-align:center;
                                                        }

                                                    </style><table style='float:left;'>";
                                        for($j=$i*8;$j<(($i*8)+8);$j++)
                                        {
                                            echo "<tr><td>$second[$j]</td>";
                                        }
                                        echo "</table>";
                                    }
                                }
                               
                            }
                        ?>
                        </div>
                        <!--seating plan-->
                        <div id="ram1">
                            <script>
                                function second() {
                                    var second = [" Data structures and algorithms", " Digital logic design", "Discrete mathematical structures", "OOP with JAVA", "Probability statistics&queuing theory", "Data communications", "Microprocessors and interfacing", "Operating system", " computer organization ", " Formal languages and automata theory"];
                                    document.getElementById('second').style.display = 'block';
                                    var size = second.length;
                                    var text = "";
                                    for (var i = 0; i < size; i++) {
                                        text += "<option value='" + second[i] + "'>" + second[i] + "</option>";
                                    }
                                    document.getElementById("subjects").innerHTML = text;
                                    document.getElementById("subjects1").innerHTML = text;
                                    document.getElementById("subjects2").innerHTML = text;
                                    document.getElementById("subjects3").innerHTML = text;
                                    document.getElementById("subjects4").innerHTML = text;
                                    document.getElementById("subjects5").innerHTML = text;
                                }

                                function third() {
                                    var third = ["computer architecture ", " compiler design ", "web technologies ", "software engineering ", "digital image processing", "Database management system", "computer graphics", "computer networks", "Design and analysis of algorithms"];
                                    document.getElementById('second').style.display = 'block';
                                    var size = third.length;
                                    var text = "";
                                    for (var i = 0; i < size; i++) {
                                        text += "<option value='" + third[i] + "'>" + third[i] + "</option>";
                                    }
                                    document.getElementById("subjects").innerHTML = text;
                                    document.getElementById("subjects1").innerHTML = text;
                                    document.getElementById("subjects2").innerHTML = text;
                                    document.getElementById("subjects3").innerHTML = text;
                                    document.getElementById("subjects4").innerHTML = text;
                                    document.getElementById("subjects5").innerHTML = text;
                                }

                                function fourth() {
                                    var fourth = ["Cryptography and network security", "object oriented analysis and design", "Professional elective"];
                                    document.getElementById('second').style.display = 'block';
                                    var size = fourth.length;
                                    var text = "";
                                    for (var i = 0; i < size; i++) {
                                        text += "<option value='" + fourth[i] + "'>" + fourth[i] + "</option>";
                                    }
                                    document.getElementById("subjects").innerHTML = text;
                                    document.getElementById("subjects1").innerHTML = text;
                                    document.getElementById("subjects2").innerHTML = text;
                                    document.getElementById("subjects3").innerHTML = text;
                                    document.getElementById("subjects4").innerHTML = text;
                                    document.getElementById("subjects5").innerHTML = text;
                                }

                            </script>
                            <p style="text-align: center;font-size: 35px; padding-top: 10px;font-family: cursive;">Time Table</p>
                            <hr class="my-4">
                            <form method="post">
                                <label style="font-size: 20px; padding-right: 40px;margin-left:20px;">Year : </label>
                                <label class="radio-inline"><input type="radio" name="optradio" checked onclick="second();">2nd year</label>
                                <label class="radio-inline"><input type="radio" name="optradio" onclick="third();">3rd year </label>
                                <label class="radio-inline"><input type="radio" name="optradio" onclick="fourth();">4th year</label>
                                <div id="second" style="display:none;">
                                    <table>
                                        <style>
                                            #sub1 table,
                                            #sub1 th,
                                            #sub1 td {
                                                border: 1px solid black;
                                                border-collapse: collapse;
                                                margin-left: 20%;
                                                margin-top: 25px;
                                                padding: 50px;
                                                margin-bottom: 50px;
                                            }

                                            #sub1 th,
                                            #sub1 td {
                                                padding: 25px;
                                                text-align: center;
                                            }

                                            #bt1 {
                                                margin-left: 40%;
                                            }

                                        </style>
                                        <tr>
                                            <th>date</th>
                                            <th>forenoon</th>
                                            <th>afternoon</th>
                                        </tr>
                                        <tr>
                                            <td><input type="date" value="2000-09-10" name="date1"></td>
                                            <td>
                                                <select name="sub10" id="subjects">
                                                </select>
                                            </td>
                                            <td>
                                                <select name="sub2" id="subjects1">
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="date" value="2000-09-10" name="date2"></td>
                                            <td>
                                                <select name="sub3" id="subjects2">
                                                </select>
                                            </td>
                                            <td>
                                                <select name="sub6" id="subjects3">
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="date" value="2000-09-10" name="date3"></td>
                                            <td>
                                                <select name="sub4" id="subjects4">
                                                </select>
                                            </td>
                                            <td>
                                                <select name="sub5" id="subjects5">
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                                    <button id="bt1" type="submit" class="btn btn-success" name="submit1">submit</button>
                                </div>
                            </form>
                            <?php
                            if(isset($_POST['submit1']))
                            {
                                $date1=$_POST['date1'];
                                $date2=$_POST['date2'];
                                $date3=$_POST['date3'];
                                $sub1=$_POST['sub10'];
                                $sub2=$_POST['sub2'];
                                $sub3=$_POST['sub3'];
                                $sub4=$_POST['sub4'];
                                $sub5=$_POST['sub5'];
                                $sub6=$_POST['sub6'];
                                $html="
                                <style>
                                                table, th, td {
                                                  border: 1px solid black;
                                                  border-collapse: collapse;
                                                  margin-left:20%;
                                                  margin-top:25px;
                                                  padding:inherit;
                                                }
                                                th,td {
                                                    padding :25px;
                                                    text-align:center;
                                                }
                                            </style>
                                                            <table>
                                <tr>
                                    <th>date</th>
                                    <th>forenoon</th>
                                    <th>afternoon</th>
                                </tr>
                                <tr>
                                    <td>$date1</td>
                                    <td>$sub1</td>
                                    <td>$sub2</td>
                                </tr>
                                 <tr>
                                    <td>$date2</td>
                                    <td>$sub3</td>
                                    <td>$sub4</td>
                                </tr>
                                 <tr>
                                    <td>$date3</td>
                                    <td>$sub5</td>
                                    <td>$sub6</td>
                                </tr>
                            </table>
                            <br><br>
                                ";
                                echo $html;
                                echo '<a href="http://localhost/project/pdf.php" style="margin-left:50%">get Pdf</a><br><br>';
                                
                                $_SESSION['data']=$html."<style>table, th, td{margin-left: 0;}</style>";
                            }
                            ?>
                        </div>
                        <!--time table -->
                        <div id="ram2">
                            <p style="text-align: center;font-size: 35px; padding-top: 10px;font-family: cursive;">Seating Plan</p>
                            <hr class="my-4">

                            <form method="post" action="#">
                                <label>Choose Year : </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="check_list[]" value="1" disabled>1st
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="check_list[]" value="2" checked>2nd
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="check_list[]" value="3">3rd
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="check_list[]" value="4" disabled>4th
                                </label>
                                <br><br>
                                <label>seating type : </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optradio" value="1" checked>1
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optradio" value="2">2
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optradio" value="3" disabled>3
                                </label>
                                <br>
                                <input type="submit" name="submityear" value="Submit">
                            </form>
                            <?php
//                            $servername = "localhost";
//                            $username = "root";
//                            $password = "root";
//                            $conn = new mysqli($servername, $username, $password, "exam");
                            require('db.php');
                            if ($conn->connect_error)
                            {
                                die("Connection failed: " . $conn->connect_error);
                            }
                            $selectedyears=array();
                            if(isset($_POST['submityear'])){
                                
                                $seating=$_POST['optradio'];
                                if(!empty($_POST['check_list'])){
                                    foreach($_POST['check_list'] as $selected){
                                        array_push($selectedyears,$selected);
                                    }
                                }
                                if(isset($_POST['optradio'])){
                                    $seatingtype=$_POST['optradio'];
                                }
                            }
                            $years=array();
                            echo "selected years  : ";
                            foreach($selectedyears as $i){
                                array_push($years,$i);
                                echo $i."  ";
                            }
                            echo"<br>";
                            $query="SELECT * FROM `studentdetails`";
                            $result=mysqli_query($conn,$query);
                            $second=array();
                            while($row=mysqli_fetch_assoc($result))
                            {
                                array_push($second,$row['id']);
                            }
                            $query="SELECT * FROM `studentdetails3`";
                            $result=mysqli_query($conn,$query);
                            $third=array();
                            $fourth=array();
                            while($row=mysqli_fetch_assoc($result))
                            {
                                array_push($third,$row['id']);
                            }
                            $count=0;
                            $yearsnew=array();
                            foreach($selectedyears as $i){
                                if($i==2)
                                {
                                    array_push($yearsnew,$second);
                                }
                                else if($i==3)
                                {
                                   array_push($yearsnew,$third); 
                                }
                            }
                            foreach($selectedyears as $i){
                                if($i==2)
                                {
                                    $count+=sizeof($second);
                                }
                                else if($i==3)
                                {
                                    $count+=sizeof($third);
                                }
                                else if($i==4)
                                {
                                    $count+=size($fouth);
                                }
                            }
                            echo "Total no of sudents : ".$count."<br>";
                            $query="SELECT * FROM `rooms`";
                            $result=mysqli_query($conn,$query);
                            $capacity=array();
                            $rooms=array();
                            $total_capacity=0;
                            while($row=mysqli_fetch_assoc($result))
                            {
                                array_push($capacity,$row['capacity']);
                                array_push($rooms,$row['roomsid']);
                            }
                            foreach($capacity as $i)
                            {
                                $total_capacity+=$i;
                            }
                            $total_count=$count;
                            $count=0;
                            if(sizeof($years)==1){
                            $html="<style>
                                                table, th, td {
                                                  border: 1px solid black;
                                                  border-collapse: collapse;
                                                  margin-left:20%;
                                                  margin-top:25px;
                                                  padding:inherit;
                                                }
                                                th,td {
                                                    padding :25px;
                                                    text-align:center;
                                                }
                                            </style> <table >
                                <tr>
                                    <th>rooms </th>
                                    <th>Year</th>
                                    <th>Roll no</th>
                                    <th>students</th>
                                </tr>";
                            for($i=0;$i<sizeof($rooms);$i++)
                            {
                                if($total_count<$count) break;   
                                $html.="<tr><td>$rooms[$i]</td>";
                                for($j=0;$j<sizeof($years);$j++)
                                {
                                    $html.="<td>$years[$j]</td>";
                                    $temp=$capacity[$i]/$seating;
                                    $temp1=$temp+$count;
                                    $html.="<td>$second[$count]";
                                    $html.="-";
                                    if($temp1>sizeof($second))
                                    {
                                        $size=sizeof($second)-1;
                                    $html.="$second[$size]</td>";
                                    }
                                    else
                                    {
                                         $html.="$second[$temp1]</td>";
                                    }
                                    $html.="<td>$temp</td>";
                                    $count+=$temp;
                                }
                                $html.="</tr>";
                            }
                            $html.="</table>";
                            echo $html;
                            }
                            else if(sizeof($years)==2){
                                $roomscapacity=$total_capacity;
                                $numberofstudents=$count;
                                $count01=sizeof($second);
                                $count02=sizeof($third);
                                echo $count01." ".$count02."<br>";
                                $count1=0;
                                $count2=0;
                                $html="
                                <style>
                                                table, th, td {
                                                  border: 1px solid black;
                                                  border-collapse: collapse;
                                                  margin-left:20%;
                                                  margin-top:25px;
                                                  padding:inherit;
                                                }
                                                th,td {
                                                    padding :25px;
                                                    text-align:center;
                                                }
                                            </style>
                                <table>
                                <tr>
                                    <th>Rooms</th>
                                    <th>Year</th>
                                    <th>rollnumbers</th>
                                    <th>students</th>
                                </tr>";
                                for($i=0;$i<sizeof($rooms);$i++)
                                {
//                                    echo "room :".$rooms[$i]." ";
                                    $html.="<tr><td rowspan='2'>$rooms[$i]</td>";
                                    for($j=0;$j<sizeof($years);$j++)
                                    {
                                        $year=$years[$j];
                                        $temp=$capacity[$i]/$seating;
                                        if($j%2==0){
                                            $next=$count1+$temp;
//                                            echo $next."<br>";
                                            if($count01<$next)
                                            {
//                                                echo $count01;
                                                $next=$count01-1;
                                            }
//                                            echo $year." ".$yearsnew[$j][$count1]." - ".$yearsnew[$j][$next];
                                            $html.="<td>$year</td>";
                                            $dummy=$yearsnew[$j][$count1];
                                            $html.="<td>$dummy";
                                            $html.="-";
                                            $dummy=$yearsnew[$j][$next];
                                            $html.="$dummy</td>";
                                            $html.="<td>$temp</td>";
                                            $count1+=$temp;
                                            $html.="</tr>";
                                        }
                                        else
                                        {
                                            $html.="<tr>";
                                            $next=$count2+$temp;
                                            if($count02<$next)
                                            {
                                                $next=$count02-1;
                                            }
//                                            echo $year." ".$yearsnew[$j][$count2]." - ".$yearsnew[$j][$next];
                                            $html.="<td>$year</td>";
                                            $dummy=$yearsnew[$j][$count2];
                                            $html.="<td>$dummy";
                                            $html.="-";
                                            $dummy=$yearsnew[$j][$next];
                                            $html.="$dummy</td>";
                                             $html.="<td>$temp</td>";
                                            $count2+=$temp;
                                            $html.="</tr>";
                                        }
                                    }
                                    
                                }
                                $html.="</table>";
                                echo $html;
                            }
                            ?>

                        </div> <!-- seating arrangement -->
                        <!--rooms -->
                        <div id="rooms">
                            <script>
                               // var=document.getElemtnbyId()
                               function add() {



                               var text = document.getElementById("roomsnum").value;
                               var k = '<form method="post" >';
                               var v = '<form method="post" >';

                               var i = 0;
                               for (i = 0; i < text; i++) {
                               k += "</br><label>room " + i + "</label><input type='text' name='text" + i + "'></br>";
                               v += "</br><label>capacity" + i + "</label><input type='text' name='texte" + i + "'></br>";
                               }
                               k =k+v+"<button type='submit'  name='submitroom' value=" + text + ">submit11</button></form>";
                               document.getElementById("rooms").innerHTML = document.getElementById("rooms").innerHTML + k;
                               // document.getElementById("rooms").innerHTML = document.getElementById("rooms").innerHTML + v;
                               }
                               function delroom() {



                               var tex = document.getElementById("delnum").value;
                               var k = '<form method="post" >';
                               var i = 0;
                               console.log(tex);
                               for (i = 0; i < tex; i++) {
                               k += "</br><label >room " + i + "</label><input type='text' name='texts" + i + "'></br>";
                               console.log(k);
                               }

                               k+="<button type='submit' name='deleteroom' value=" + tex + ">Delete</button></form>";
                               document.getElementById("rooms").innerHTML = document.getElementById("rooms").innerHTML + k;
                               // document.getElementById("rooms").innerHTML = document.getElementById("rooms").innerHTML + v;
                               }

                            </script>
                            <p style="text-align: center;font-size: 35px; padding-top: 10px;font-family: cursive;">Add rooms</p>
                            <hr class="my-4">
                            <script>
                                function getdata(){
                                    return false;
                                }
                            </script>
                            <form method="post">
                            <button type="submit" class="btn btn-info" name="showrooms" onclick="getdata();">Show rooms</button>
                            </form>
                            <button type="submit" class="btn btn-info" name="submitroom" onclick="add()">Add rooms</button>
                            <label >rooms Required:</label>
                            <input style="
                               margin: 20px auto;
                               border: 2px solid black;
                               padding: 10px 10px;
                               outline: none;
                               color:black;
                               border-radius: 17px;
                               transition: .25s;" type="text" id="roomsnum" value="">
                            <button type="submit" class="btn btn-info" name="delroom1" onclick="delroom()">Delete rooms</button>
                            <label>rooms to be deleted:</label>
                            <input style="
                               margin: 20px auto;
                               border: 2px solid black;
                               padding: 10px 10px;
                               outline: none;
                               color:black;
                               border-radius: 17px;
                               transition: .25s;"type="text" id="delnum" name="delnum" value="">
                            &nbsp;
                            &nbsp;
                            &nbsp;
                            <div>
                               <!--<button type="submit" class="btn btn-success" style="margin-left:40%;" name="submit" value="submit" onclick="add()">Submit</button>-->
                            </div>
                            <?php
                               require('db.php');

                               // Check connection
                               if ($conn->connect_error) {
                                  die("Connection failed: " . $conn->connect_error);
                               }



                               if (isset($_POST['showrooms'])) {
                                   echo "hi";
                                $query="SELECT * FROM `rooms` ";
                                      $result=mysqli_query($conn,$query);
                               ?>
                            <?php
                               if ($result->num_rows!=0) {
                               echo "<table><tr><th>rooms</th><th>capacity</th></tr>";
                                echo " <style> table {
                                   border-collapse: collapse;
                                    margin-left:35%;
                                    margin-top:25px;
                                     }

                                   table, td, th {
                                   border: 1.5px solid black;


                                   margin-top:25px;
                                   padding:inherit;
                                   }
                                   th,td {
                                   padding :15px;
                                   text-align:center;
                                   }
                                 </style>";
                               }else{
                               echo "0 results";
                                }

                                while ( $rows=mysqli_fetch_assoc($result)) {
                                   ?> 
                            <table>
                               <tr>
                                  <td><?php echo $rows['roomsid']; ?></td>
                                  <td><?php echo $rows['capacity']; ?></td>
                               </tr>
                            </table>
                            <?php
                               }

                               }

                               ?>
                            <?php
//                               $servername = "localhost";
//                               $username = "root";
//                               $password = 'root';
//
//                               // Create connection
//                               $conn = new mysqli($servername, $username, $password,"exam");
                             require('db.php');
                               // Check connection
                               if ($conn->connect_error) {
                                   die("Connection failed: " . $conn->connect_error);
                               }
                                   if(isset($_POST["submitroom"]))
                                   {
                                       /*$query="delete from `rooms`";
                                       mysqli_query($conn,$query);*/
                                       $k=$_POST["submitroom"];
                                       ?>
                            <script>
                               alert("<?php echo $k ?> rows added succesfully");
                            </script>
                            <?php
                               for( $i=0;$i < $k ;$i++)
                               {
                                   $l="text".$i;
                                   $m="texte".$i;

                                   $le=$_POST["$l"];
                                   $me=$_POST["$m"];
                                  $query="INSERT INTO `rooms`(`roomsid`,`capacity`) VALUES ('$le','$me')";
                                   mysqli_query($conn,$query);
                               }

                               }
                               ?>
                            <?php
//                               $servername = "localhost";
//                               $username = "root";
//                               $password = 'root';
//
//                               // Create connection
//                               $conn = new mysqli($servername, $username, $password,"exam");

                             require('db.php');
                               // Check connection
                               if ($conn->connect_error) {
                                   die("Connection failed: " . $conn->connect_error);
                               }
                                   if(isset($_POST["deleteroom"]))
                                   {
                                       /*$query="delete from `rooms`";
                                       mysqli_query($conn,$query);*/
                                       $k=$_POST["deleteroom"];
                                       ?>
                            <script>
                               alert("<?php echo $k ?> rows deleted succesfully");
                            </script>
                            <?php
                               for( $i=0;$i < $k ;$i++)
                               {
                                   $l="texts".$i;


                                   $ls=$_POST["$l"];

                                   $query="DELETE from `rooms` where `roomsid`='$ls' ";
                                   mysqli_query($conn,$query);
                               }

                               }


                               ?>
                        </div>
                        <div id="students">
                            <form method="post" enctype="multipart/form-data">
                                <label>Enter number of rooms :</label>
                                <label class="radio-inline" style="padding: 20px;">
                                    <input type="radio" name="optradio" value="2"> 2nd year
                                </label>
                                <label class="radio-inline" style="padding: 20px;">
                                    <input type="radio" name="optradio" value="3">3rd year
                                </label>
                                <div>
                                    <input type="file" name="file" required>
                                    <button type="submit" id="submit" name="submitfile">Upload</button>
                                </div>
                            </form>
                            <?php
//                            $servername = "localhost";
//                            $username = "root";
//                            $password = "root";
//                            $conn = new mysqli($servername, $username, $password, "exam");
                             require('db.php');
                            if ($conn->connect_error)
                            {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            if (isset($_POST['submitfile']))
                            {
                                if(!isset($_FILES["file"]["tmp_name"]))
                                {
                                    echo '<script>
                                        alert("select the file to be uploaded");
                                        </script>';
                                }
                                if(!isset($_POST['optradio'])){
                                    echo '<script>
                                        alert("please enter the year ");
                                        </script>';
                                }
                                elseif($_POST['optradio']==2){
                                $query = "delete from `studentdetails`";
                                mysqli_query($conn, $query);
                                include ("php/Classes/PHPExcel/IOFactory.php");
                                $filename = $_FILES["file"]["tmp_name"];
                                $objPHPExcel = PHPExcel_IOFactory::load($filename);
                                $output = "<label class='text-success'>Data Inserted</label><br /><table class='table table-bordered'>";
                                foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
                                {
                                    $highestRow = $worksheet->getHighestRow();
                                    for ($row = 2;$row <= $highestRow;$row++)
                                    {
                                        $output .= "<tr>";
                                        $id = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
                                        $name = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
                                        $query = "INSERT INTO studentdetails(id, name) VALUES ('" . $id . "', '" . $name . "')";
                                        mysqli_query($conn, $query);
                                        $output .= '<td>' . $id . '</td>';
                                        $output .= '<td>' . $name . '</td>';
                                        $output .= '</tr>';
                                    }
                                }
                                $output .= '</table>';
                                }
                                elseif($_POST['optradio']==3){
                                $query = "delete from `studentdetails3`";
                                mysqli_query($conn, $query);
                                include ("php/Classes/PHPExcel/IOFactory.php");
                                $filename = $_FILES["file"]["tmp_name"];
                                echo $filename;
                                $objPHPExcel = PHPExcel_IOFactory::load($filename);
                                $output = "<label class='text-success'>Data Inserted</label><br /><table class='table table-bordered'>";
                                foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
                                {
                                    $highestRow = $worksheet->getHighestRow();
                                    for ($row = 2;$row <= $highestRow;$row++)
                                    {
                                        $output .= "<tr>";
                                        $id = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
                                        $name = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
                                        $query = "INSERT INTO studentdetails3(id, name) VALUES ('" . $id . "', '" . $name . "')";
                                        mysqli_query($conn, $query);
                                        $output .= '<td>' . $id . '</td>';
                                        $output .= '<td>' . $name . '</td>';
                                        $output .= '</tr>';
                                    }
                                }
                                $output .= '</table>';
                                }
                                else {
                                    echo '<script>
                                        alert("please enter the year ");
                                        </script>';
                                }
                            }

                            ?>
                        </div>
                        <!--student xl entry -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
