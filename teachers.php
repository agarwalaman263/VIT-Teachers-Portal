<!DOCTYPE html>
<html>
<head>
	<title>
		Teachers Review portal
	</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

 	<link rel="stylesheet" href="css/vegas.min.css">

	<link href='https://fonts.googleapis.com/css?family=Rajdhani:400,500,700' rel='stylesheet' type='text/css'>

  <style type="text/css">
	body
	{
		background: #ffffff;
   font-family: 'Rajdhani', sans-serif;
    font-weight: 400;
	}

html,body {
  width: 100%;
  overflow-x: hidden;
}

html {
  font-size: 100%;
}

h1,h2,h3 {
  font-weight: 500;
  letter-spacing: 0.3rem;
  text-transform: uppercase;
}

h1 {
  font-size: 2.8rem;
  font-weight: 700;
}

h2 {
  color: #ffffff;
  padding-bottom: 10px;
}

h3 {
  font-size: 1rem;
  line-height: 2rem;
}

p {
  color: #828282;
  letter-spacing: 0.8px;
  line-height: 28px;
}

strong {
  color: #f1c11a;
  font-weight: 700;
}


#slideshow {
  top: 0;
  left: 0;
  z-index: -10;
  width: 100vw;
  backface-visibility: hidden;
}


/* home section */
#home {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
        align-items: center;
  text-align: center;
  height: 100vh;
  color: #ffffff;
}

#home .home-thumb {
  text-align: center;
}

#home .btn {
    background: transparent;
    border: 3px solid #ffffff;
    border-radius: 0px;
    color: #ffffff;
    font-weight: 700;
    letter-spacing: 1px;
    padding: 14px 36px;
    margin-top: 42px;
    margin-right: 16px;
    -webkit-transition: all 0.4s ease-in-out;
    transition: all 0.4s ease-in-out;
}

#home .btn:hover {
  background: #f1c11a;
  color: #ffffff;
  border-color: transparent;
}

#home .btn-success {
    background: #ffffff;
    color: #242424;
    border-color: transparent;
}

input	
{
	padding:5px;
	margin: 5px;
	/*border-radius: 5px;*/ 	
	outline-offset: -10px white solid inset;
	background-color: transparent;
	outline: none;
	box-shadow: none;
}       
input::placeholder
{   
	color:white;
}

	</style>
</head>
<body>
<div id="home">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-2 col-md-8 col-sm-12">
				<div class="home-thumb">
					<h1 class="wow fadeInUp">Teachers  Login</h1>
          			<form action="teachers.php" method="POST">
          				 	<input type="text" name="user_id" placeholder="Teachers Name"><br>
          				 	<input type="password" name="password" placeholder ="Password"><br>
          				 	<input type="submit" name="submit" value="Submit" style="font-size: 20px;font-weight: bold;"><br>
          			</form>
                

				</div>
			</div>

		</div>
	</div>		
</div>

<script src="js/jquery.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/vegas.min.js"></script>

<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";
$flag=0;
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
session_start();
$r=($_POST["user_id"]);
$p=($_POST["password"]);
$result = mysqli_query($conn,"select * from teachers");
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) 
    {
        if($row["user_id"]==$r && $row["password"]==$p)
        {
          $_SESSION["teachername"]=$r;
          header("Location:teacher_list.php");
          $flag=1;
          echo $r;
        }
    }


 } 

mysqli_close($conn);
?>
</body>
</html>