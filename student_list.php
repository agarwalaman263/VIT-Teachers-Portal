<html>
<head>
<?php
 
if(isset($_POST["teacher"]) and isset($_POST["slot"]) and isset($_POST["nature"]))
{
  session_start();
  $teacher_name=$_POST["teacher"];
  $slot_name=$_POST["slot"];
  $nature_type=$_POST["nature"];
  
  if($nature_type=="lab")
  {
    header("Location:lab_form.php");
    $_SESSION["teacher"]=$teacher_name;
    $_SESSION["slot"]=$slot_name;
    $_SESSION["nature"]=$nature_type; 
    
   
  }
  if($nature_type=="theory")
 {
  header("Location:theory_form.php");
  $_SESSION["teacher"]=$teacher_name;
  $_SESSION["slot"]=$slot_name;
  $_SESSION["nature"]=$nature_type;
  
 }
  
}
?>
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
input
{
  margin: 15px !important;
}
</style>
</head>

<body>

<div id="home">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-2 col-md-8 col-sm-12">  
<form align="left" action="student_list.php" method="POST">
  <h2>Select The Teacher</h2>
  <input type="radio" name="teacher" value="Priya_G" required>Priya G 
  <input type="radio" name="teacher" value="Padmapriya" required>PadmaPRiy 
  <input type="radio" name="teacher" value="Gayatri_P" required>Gayatri P
  <input type="radio" name="teacher" value="Mohanasundaram" required>Mohanasundaram
   <h2>Select nature of the course</h2>
  <input type="radio" name="nature" value="lab" required>lab<br>
  <input type="radio" name="nature" value="theory" required>theory<br>

<script src="js/jquery.js"></script>

<script type="text/javascript">
function ajaxCheck(teacher,type)
{
  if(teacher!=null && type!=null)
  {
    // type=String(type);
     $.ajax({url:"database.json",success:function(data){
       console.log(data[type][teacher]);
     $(".slots").empty();
      var arr=(data[type][teacher]);
      console.log(JSON.stringify(data));
      var i=0;
       for(i=0;i<arr.length;i++)
        {
             console.log(arr[i]);
          document.getElementsByClassName("slots")[0].innerHTML+=("<input type='radio' name= 'slot' value="+arr[i]+" required>"+arr[i]+"<br>");
        }
       }});
   
  }
}
  var teacher=null;
  var type=null;
  $("input[name='teacher']").click(function(){
    teacher=this.value;
    console.log(teacher);
    ajaxCheck(teacher,type);
  });
  $("input[name='nature']").click(function(){
    type=this.value;
    console.log(type);
    ajaxCheck(teacher,type);
    //console.log(this.value);
  });

</script>
   <h2>Select The Slot</h2>
   <div class="slots">

</div>
<input align="center" type="submit" name="submit" class="btn btn-success">

</form>
<a href="logout.php"><button class="btn btn-success">Logout</button></a>
 
		</div>
	</div>		
</div>

<script src="js/bootstrap.min.js"></script>

<script src="js/vegas.min.js"></script>

<script src="js/wow.min.js"></script>

<script src="js/custom.js"></script>

</body>
</html>