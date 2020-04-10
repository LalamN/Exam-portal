<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
            background-image: url(stu.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
        }

        .avatar {
            text-align: middle;
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
            min-height: 313px;
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

        #two input[type="text"],
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
</head>

<body>

    <div class="container">
        <div class="wrapper">
            <div id="one">

                <img src="img-avatar2.png" alt="Avatar" class="avatar">
                <h5 style="font-family:sans-serif;">Name:</h5>
                <h5 style="font-family:sans-serif;">Reisterno:</h5>

            </div>
            <div id="two">
                <form action="table1.php" method="post">
                    <h1>Question Papers</h1>
                    <hr>
                    <label for="year">Year:</label> <select name="year">
                        <option value="1">1 </option>
                        <option value="2">2 </option>
                        <option value="3">3 </option>
                        <option value="4">4 </option>
                    </select>
                    &nbsp;&nbsp;
                    &nbsp;&nbsp;
                    &nbsp;&nbsp;
                    &nbsp;&nbsp;

                    <label for="year">Branch:</label> <select name="branch">
                        <option value="cse">CSE</option>
                        <option value="it">IT</option>
                        <option value="ece">ECE</option>
                        <option value="eee">EEE</option>
                        <option value="chem">CHEM</option>
                        <option value="mech">MECH</option>
                        <option value="civil">CIVIL</option>
                    </select>
                    <br>
                    &nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;

                    <label for="subject">Subject:</label><select name="subject">
                        <option value="dbms">DBMS</option>
                        <option value="cn">CN</option>
                        <option value="cs">CA</option>
                        <option value="wt">WT</option>
                        <option value="cg">CG</option>
                        <option value="cd">CD</option>
                    </select>
                    &nbsp;
                    &nbsp;
                    <label for="sem">Sem:</label><select name="sem">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                    &nbsp;
                    &nbsp;
                    <label for="mid">Mid:</label><select name="mid">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>

                    <br>
                    <button onclick="myFunction()" class="button">SEARCH</button>

                </form>
            </div>
        </div>

    </div>
</body>

</html>
