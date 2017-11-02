<!DOCTYPE html>
<head>
	<title>VIT REview SYstem</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
 	<link rel="stylesheet" href="css/vegas.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link href='https://fonts.googleapis.com/css?family=Rajdhani:400,500,700' rel='stylesheet' type='text/css'>
	<style type="text/css">
		body
			{
				background: #ffffff;
   				font-family: 'Rajdhani', sans-serif;
    			font-weight: 400;
			}

		html,body 
			{
 				width: 100%;
  				overflow-x: hidden;
			}
		html 	
			{
  				font-size: 100%;
			}
      tr:hover
      {
        background-color: white;
        color:black;
        font-weight: bold;
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
a:active
{
  color:white;
}
a:visited
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
<table class="table " style="text-align: center;">
      <thead> 
            <tr>  
                  <td>SLot</td>
                  <td>Teacher ID</td>
                  <td>Question 1</td>
                  <td>Question 2</td>
                  <td>Question 3</td>
                  <td>Question 4</td>
                  <td>Question 5</td>

                  <td>NAture Of COurse</td>
            </tr>
        
    </thead>
    <tbody> 
        
       
              <?php 
              session_start();
   
if(isset($_SESSION["teachername"]))
{
  $t=$_SESSION['teachername'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";
$flag=0;

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) 
{
  echo '<script>alert("'.mysqli_connect_error().'")</script>';
   
    die();
}
 else{
$result = mysqli_query($conn,"SELECT slot, t_id, AVG(`1`),AVG(`2`),AVG(`3`),AVG(`4`),AVG(`5`) FROM records_lab where t_id='$t' GROUP BY slot");
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    
    
    while($row = mysqli_fetch_assoc($result)) 
    {

    echo "<tr>"."<td>".$row["slot"]."</td>
          <td>".$row["t_id"]."</td>
          <td>".$row["AVG(`1`)"]."</td>
          <td>".$row["AVG(`2`)"]."</td>
          <td>".$row["AVG(`3`)"]."</td>
          <td>".$row["AVG(`4`)"]."</td>
          <td>".$row["AVG(`5`)"]."</td>
          <td>Labs</td>"."</tr>";
    }
    

 } 
 else
 {
  echo "<script>console.log('aman')</script>";
 }




 }


$result = mysqli_query($conn,"SELECT slot, t_id, AVG(`1`),AVG(`2`),AVG(`3`),AVG(`4`),AVG(`5`) FROM records_theory where t_id='$t' GROUP BY slot");
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    
    
    while($row = mysqli_fetch_assoc($result)) 
    {

    echo "<tr>"."<td>".$row["slot"]."</td>
          <td>".$row["t_id"]."</td>
          <td>".$row["AVG(`1`)"]."</td>
          <td>".$row["AVG(`2`)"]."</td>
          <td>".$row["AVG(`3`)"]."</td>
          <td>".$row["AVG(`4`)"]."</td>
          <td>".$row["AVG(`5`)"]."</td>
          <td>Theory</td>"."</tr>";
    }
    

 } 
 else
 {
  echo "<script>console.log('aman')</script>";
 }

mysqli_close($conn);


 } 


?>

      
    </tbody>
  </table>			
 <a href="logout.php"><button class="btn btn-success">Logout</button></a>
		</div>
	</div>		
</div>



<script src="js/jquery.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/vegas.min.js"></script>

<script src="js/wow.min.js"></script>

<script src="js/custom.js"></script>

</body>
</html>