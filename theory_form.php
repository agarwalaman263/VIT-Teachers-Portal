<html>
<head>

  <title>VIT REview SYstem</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/vegas.min.css">
  <link href='https://fonts.googleapis.com/css?family=Rajdhani:400,500,700' rel='stylesheet' type='text/css'>
<!-- //the basic background slideshow -->
<?php
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

if(isset($_POST['1']) and isset($_POST['2']) and isset($_POST['3']) and isset($_POST['4']) and isset($_POST['5']))
{
  $a=$_POST['1'];
  $b=$_POST['2'];
  $c=$_POST['3'];
  $d=$_POST['4'];
  $e=$_POST['5'];
  session_start();
  $sql="insert into records_theory values('".$_SESSION["teacher"]."','".$_SESSION["reg"]."','".$_SESSION["slot"]."',".$a.",".$b.",".$c.",".$d.",".$e.");";
  
  if(mysqli_query($conn,$sql))
  {
    
  echo '<script>alert('."Feedback successfully recorded".');</script>';

  }
  else
  {
     echo '<script>alert('.mysqli_error().');</script>';

 
  }
  header("Location:student_list.php");
  unset($a);
  unset($b);
  unset($c);
  unset($d);
  unset($e);
  unset($_SESSION["teacher"]);
  unset($_SESSION["slot"]);
  unset($_SESSION["nature"]);
  mysqli_close($conn);
}
?>
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
      #slideshow {
        top: 0;
        left: 0;
        z-index: -10;
        width: 100vw;
        backface-visibility: hidden;
      }
    </style>
    <!-- main css -->
  <style type="text/css">
        h1,h2,h3,h4,h5,h6
        {
          margin:0;        
        } 
        p{
          margin:0;
        }
        ul{
          margin:0;
          padding:0;
        }
             label{
           margin:0;
       }
  
            .wrap {
                width: 34%;
                margin: 2em auto 0;
            }
            /*--profile start here--*/
            h1 {
               font-size: 3em;
                color: #ffffff;
                text-align: center;
              font-weight: 300;
                text-transform: uppercase;
           }
                 ::-webkit-input-placeholder{
                   color:#FFFFFF !important;
                 }
                 .w3ls-subscribe{
                   
                           background-size: cover;
                       }
                       .agileits-border{
                     border: solid 15px rgba(1, 1, 1, 0.37);
                     padding: 3em;
                        }
                  .agileits-border1{
                      min-height: 484px;  
                  }
                  
                  .w3ls-subscribe h3{
                      color: #FFFFFF;
                      font-size: 2em;
                      margin: 0 0 1em 0;
                      text-transform: uppercase;
                      font-weight: 700;
                        letter-spacing: 2px;
                   }
                    .w3ls-subscribe input[type="email"],.w3ls-subscribe input[type="text"],.w3ls-subscribe input[type="password"] {
                        outline: none;
                       padding: 1em;
                       background: none;
                       border: none;
                         border-bottom: 1px solid #ffffff;
                       color: #FFFFFF;
                        font-size: .9em;
                        margin: 0 0 1.5em 0;
                        width: 93%;
                        }
                     .w3ls-subscribe input[type="submit"] {
                        color: #000000;
                        font-size: .9em;
                        text-decoration: none;
                        padding: 1em 2em;
                        cursor: pointer;
                        background: #FFFFFF;
                              text-transform: uppercase;
                              font-weight: 600;
                                    text-align: center;
                                            border: solid 1px #ffffff;
                                            transition: 0.5s all;
                                            -webkit-transition: 0.5s all;
                                    -o-transition: 0.5s all;
                                    -moz-transition: 0.5s all;
                                    -ms-transition: 0.5s all;
                                }
                                .w3ls-subscribe input[type="submit"]:hover{
                                    background: #0d8cc6;
                                    border: solid 1px #0d8cc6;
                              color: #ffffff;
                    }
                    form
                    {
                      color: white;
                    }
           /*         .hover-class:hover
                    {
                      font-weight: bold;
                      padding: 25px;
                      background-color: rgba)_;
                      color:black;
                    }
*/
            </style>
  
</head>
<body>
<div class="wthree-dot">

  <h1>Student Feedback Form</h1>
  <div class="profile">
    <div class="wrap">
      <div class="w3layouts-top-grids">
          <div class="callbacks_container">
                <div class="w3ls-subscribe">
                  <div class="agileits-border">
                    <form action="theory_form.php" method="POST">
                      <div class="hover-class"> 
                      <br>
                      Subject knowledge of the teacher.
                      <input type="range" value="10" min="0" max="10" name="1" required>
                      <br>
                      Communication skills of the teacher.
                      <input type="range" value="10" min="0" max="10" name="2" required>
                      <br>
                      Use of right mix of board, OHP, LCD, etc. creatively by the teacher to make the class
                        interesting and effective.
                      <input type="range" value="10" min="0" max="10" name="3" required>
                      <br>
                      Use of relevant practical/industrial examples in the class.
                      <input type="range" value="10" min="0" max="10" name="4" required>
                      <br>
                      What is your satisfaction level on the infrastructural  
                              facilities at VIT?
                      <input type="range" value="10" min="0" max="10" name="5" required>
                      
                      <input type="submit" value="Submit">
                      </div>
                    </form>
                  </div>
                </div>
            
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

</body>
</html>
 