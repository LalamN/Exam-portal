                        <div id="ram2">
                            <p style="text-align: center;font-size: 35px; padding-top: 10px;font-family: cursive;">Seating Arrangement</p>
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
                                    <input type="radio" name="optradio" value="2" disabled>2
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optradio" value="3" disabled>3
                                </label>
                                <br>
                                <input type="submit" name="submityear" value="Submit">
                            </form>
                            <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "root";
                            $conn = new mysqli($servername, $username, $password, "exam");
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
                            $query="SELECT * FROM `studentdetails` ORDER BY `id`";
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
                                
                            }
                            ?>
                        </div> <!-- seating arrangement -->http://localhost/project/
