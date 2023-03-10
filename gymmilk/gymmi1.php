<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial -scale=1.0">
    <meta http-equiv="x-UA-compatible" content="ie=edge">
    <title>GYMMI</title>
    <link rel="stylesheet" href="gymmi1.css">
    <script src="https://kit.fontawesome.com/91fc080129.js" crossorigin="anonymous"></script>
    <div>
            
</head>

<!-- Databse -->
<div>
        <?php
        // connecting to databse
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "gymmi";

        //creating a connection
        $conn = mysqli_connect($servername,$username,$password,$database);

        //checking if connection is success or not
        if(!$conn)
        {
        die("Sorry we failed to connect: ".mysqli_connect_error());
        }
        // else{
        //   echo "Connection is successfull<br>";
        // }


        ?>
</div>


<!-- php backend code here -->
<div>
            <?php
                    if(isset($_POST['submitemail']) && $_POST['submitemail'] === 'add')
                    {

                            if(isset($_POST['Email'])){
                            $Email = $_REQUEST['Email'];}

                            
                            
                            $sql = "INSERT INTO visitor_details(email)   
                            VALUES ('$Email')";
              
                        
                            if(mysqli_query($conn, $sql)){
                                ?>
                                <script>alert('Email Submitted successfully');</script>
                                <?php header('Refresh:1');
                            } 
                                
                            else{
                                echo "ERROR: Hush! Sorry $sql. "
                                . mysqli_error($conn);    
                            }
                    }
                
                ?>
            </div>
</div>


<!-- Style code -->
<style>
            
        body{
            background-color: white;
            
        }
        *{
            margin: 0;
            padding: 0;
            /* box-sizing: border-box; */
            font-family: popins , sans-serif;
        }
        .btn{
            width: 200px;
            height: 30px;
            color: white;
            background-color: red;
            border: 2px solid red;
            border-radius: 10px;
            text-align: center;
        }
        .btn:hover{
            background-color: rgb(246, 101, 101);
            color: red;
        }
        .container{
            z-index: 5;
            position: absolute;
            color: white;
            display: block;
            margin-top: 200px;
            margin-left: 1050px;
        }

        .wrap{
        position: absolute;
        padding-top: 78px;
        padding-left: 100px;
        transform: translate(-50% , -50%);
        }

        .menu{
            width: 25px;
            height: 3px;
            background-color: red;
            margin: 6px 0;
        }

        .left img{
            display: inline-block;
            width: 80px;
            padding-left: 47%;
            padding-top: 5px;
        }
            #img{
                z-index: 2;
                filter: brightness(40%);
            border: solid white 2px;
            display:  inline-block;
            width: 498px;
            height: 660px;
            margin-left: 0;
            margin-right: 0;

        }
        .firstimg{
            background-image: url(gymmifront1.jpg);
            position: sticky;
            box-sizing: border-box;
            background-position: center;
                background-size: 500px;
        }
        .secondimg{
            background-image: url(gymmifront2.jpg);
            position: sticky;
            box-sizing: border-box;
            background-position: center;
                background-size: 500px;
        }
        .thirdimg{
            background-image: url(gymmifront3.jpg);
            position: sticky;
            box-sizing: border-box;
            background-position: center;
                background-size: 500px;
        }
        .thirdimg h1{
            margin-top: 200px;
        }
        .right {
            position: absolute;
            right: 34px;
            top: 20px;
            display: inline-block;

        }
        .navbar1 {
            display: inline-block;
            
        }

        .navbar1 li {
            display: inline-block;
            font-size: 20px;
        }

        .navbar1 li a {
            font-family: 'Times New Roman', Times, serif;
            color: red;
            text-decoration: none;
            padding: 4px 30px;
            border-radius: 5px;
        }

        .navbar1 li a:hover {
            background-color:rgb(246, 101, 101);
        }

        .follow{
            color: red;
            padding-left: 47%;
            padding-top: 10px;
        }

        .socialicon
        {
        display: grid;
        height: 100%;
        width: 100%;
        place-items: center;
        background: linear-gradient(315deg, #ffffff 0%, #d7e1ec 74%);
        }
        .socialicon  {
        display: inline-block;
        height: 60px;
        width: 60px;
        /* float: left; */
        margin: 0 5px;
        overflow: hidden;
        background: #fff;
        border-radius: 50px;
        cursor: pointer;
        box-shadow: 0px 10px 10px white(0, 0, 0, 0.1);
        transition: all 0.3s ease-out;
        }
        .socialicon :hover {
        width: 200px;
        }
        .socialicon  .icon {
        display: inline-block;
        height: 60px;
        width: 60px;
        text-align: center;
        border-radius: 50px;
        box-sizing: border-box;
        line-height: 60px;
        transition: all 0.3s ease-out;
        }
        .socialicon :nth-child(1):hover .icon {
        background: #4267b2;
        }
        .socialicon :nth-child(2):hover .icon {
        background: #1da1f2;
        }
        .socialicon :nth-child(3):hover .icon {
        background: #e1306c;
        }

        .socialicon  .icon i {
        font-size: 25px;
        line-height: 60px;
        transition: all 0.3s ease-out;
        }
        .socialicon :hover .icon i {
        color: #fff;
        }
        .socialicon  span {
        font-size: 20px;
        font-weight: 500;
        line-height: 60px;
        margin-left: 10px;
        transition: all 0.3s ease-out;
        }
        .socialicon :nth-child(1) span {
        color: #4267b2;
        }
        .socialicon :nth-child(2) span {
        color: #1da1f2;
        }
        .socialicon :nth-child(3) span {
        color: #e1306c;
        }
</style>


<body>

    
<!-- lakshay's frontend code -->
    <header>
        <div class="wrap">
            <div class="menu"></div>
            <div class="menu"></div>
            <div class="menu"></div>
        </div>
        <div class="left">
            <img src="GYMMILOGO.png" alt="">
        </div>
        <div class="right" id="bar">
            <ul class="navbar1">
                <li><a href="#">About</a></li>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Blog</a></li>
                <!-- <li><a href="#">Events</a></li>
                <li><a href="#">Gallery</a></li> -->

            </ul>
        </div>
    </header>
   
    <header>
<!-- lakshay's frontend code -->
<div>
            <div class="container">
                <h1>Coming Soon</h1>
                <!-- <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur iusto eveniet doloribus reiciendis
                    error inventore?</h3>
                <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed, sequi praesentium temporibus nostrum sint
                    illo.</h3> -->
                <button class="btn">weight list</button>
            </div>
            <div class="firstimg" id="img">
                <!-- <h1>GYMMI</h1> -->
            </div>
            <div class="secondimg" id="img">
                <!-- <h1>GYMMI</h1> -->
            </div>
            <div class="thirdimg" id="img">
                <div class="conatin">
                </div>
                <!-- <h1>GYMMI</h1> -->
            </div>
            <div class="follow">
                <h1>Follow Us</h1>
            </div>
            <div class="socialicon">
                <div class="ico">
                    <a href="#" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                    <span>Facebook</span>
                </div>
                <div class="icon">
                    <a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <span>Instagram</span>
                </div>
                <div class="icon">
                    <a href="#" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    <span>LinkedIn</span>
                </div>
            </div>
</div>
       

<!-- form code is here -->
<div>
            <form id="form1"  action="" method="POST">
                <label for="Email">Email:</label>
                <input type="email" name = "Email" value = "<?php echo @$_POST['Email'];?>"  required>
                    <br />
                    <br />
                <button type="submit" name="submitemail" value="add" >Submit</button>
                <br />
                    <br />
            <div class="spacer"></div>
           
            </form>
</div>

    
</header>
</body>
</html>
