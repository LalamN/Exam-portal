<html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>user login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style type="text/css">
    body {
    margin: 0;
    padding: 0;
}

body {
    background: url(bg3.jpg);
    background-repeat: no-repeat;
    background: linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)), url(bg3.jpg);
    background-size: cover;
    /*background: rgba(0,0,0,0.9);*/
}

.container {
    width: 100vw;
    height: 100vh;
    display: flex;  
    overflow: hidden;
    justify-content: center;
    align-items: center;
}

.wrapper {
    width: 900px;
    /*flex: 1;*/
    position: relative;
    background: rgba(0, 0, 0, 0.7);
    height: 300px;
    border-radius: 30px;
}

.logo {
    position: absolute;
    top: -50%;
    left: 50%;
    transform: translate(-50%, 90%);
}

.select-wrapper {
    margin-top: 100px;
    display: flex;
    width: 100%;
    justify-content: space-around;
}

.user {
    padding: 20px;
    display: flex;
    flex-direction: column;
    background: white;
    flex: 1 0 300px;
    margin: 0 50px;
    border-radius: 20px;
    cursor: pointer;
    filter: grayscale(100%);
    background-color: rgba(255,255,255,0.7);
}

.user .label {
    flex: 1;
    font-size: 2em;
    align-self: center;
}

.user:hover {
    filter: drop-shadow(1px 2px 10px white) grayscale(0%);
}

::-webkit-input-placeholder {
    color: orange;
    font-size: 20px;
}
.head {
    padding: 20px;
    display: flex;
    flex-direction: column;
    background: white;
    flex: 1 0 300px;
    margin: -200px 200px 250px 200px;
    border-radius: 20px;
    filter: grayscale(100%);

}
.head .label {
    flex: 1;
    font-size: 2em;
    align-self: center;
    font-style: italic;
}

</style>

<body>
    
    <div class="container">
    <div class="wrapper">
        <div class="head">
                
                <div class="label">Exam Portal </div>
            </div>
        <div class="logo">
        </div>

        <div class="select-wrapper">

            <div class="user admin" data-user="admin" onclick="window.location.href='exam/faclogin/faclogin/login.php'">
                <div class="label">Questions Papers </div>
            </div>
            <div class="user faculty" data-user="faculty" onclick="window.location.href='exam/student.php'">
                
                <div class="label">Key and Scheme </div>
            </div>
             <div class="user faculty" data-user="faculty" onclick="window.location.href='adminlogin/login/adminlogin.php'">
                
                <div class="label">Admin </div>
            </div>
        </div>
    </div>
    </div>

</body></html>