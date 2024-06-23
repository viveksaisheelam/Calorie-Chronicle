<?php 
$heightofperson = $_POST['heightofperson'];
$weightofperson = $_POST['weightofperson'];
$conn = new mysqli('localhost', 'root', '', 'project1');
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
} 
else {
  echo "conneccccting.....";
    $sql = "Select * from hght_wght_cal where Height='$heightofperson' AND Weight='$weightofperson'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    $conn->close();
}
 echo "connection succesffull";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet">
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Bree+Serif&family=Caveat:wght@400;700&family=Lobster&family=Monoton&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display+SC:ital,wght@0,400;0,700;1,700&family=Playfair+Display:ital,wght@0,400;0,700;1,700&family=Roboto:ital,wght@0,400;0,700;1,400;1,700&family=Source+Sans+Pro:ital,wght@0,400;0,700;1,700&family=Work+Sans:ital,wght@0,400;0,700;1,700&display=swap');
    </style>
</head>
<style>
  #bdy {
    position: relative;
    padding: 50px;
    height: 100vh;
    background-image: url('https://c8.alamy.com/comp/2CD0N1H/healthy-food-concept-close-up-of-open-lunch-box-with-rice-fresh-fruits-and-vegetables-on-the-grey-background-with-blank-space-for-text-top-view-fl-2CD0N1H.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}
#bdy h1 {
    color: rgb(211, 192, 215);
}

    .tagline{
        font-weight: bold;
        font-style: italic;
    }
    #t1{
            margin: 0px;
            margin-left: 25%;
            margin-top:10px;
            padding:0px;
            font-size: 70px;
    }
    #t2{
        padding:0px;
        margin-bottom: 0px;
        font-size: 35px;
    }
    #img{
        margin-left: 23px;
        border-radius: 40px;
        opacity: 0.8;
    }
    #para{
        font-size: 20px;
        font-style: italic;
    }
    #topcont{
        border-style: solid dotted solid dotted;
        border-radius: 15px;
        border-color:rgb(15, 8, 4);
        padding:50px;
    }
    #smallpara{
        font-size: 18px;
        font-style: italic;
    }
    #hght{
        margin:0px;
        font-size: 30px;
        font-family: 'Roberto';
    }
    #wght{
        margin:5px;
        font-size:30px;
        font-family: 'Roberto';
    }
    #hghtinpt {
      padding: 10px;
      font-size: 16px;
      border-left: black;
      border-top: black;
      border-right: black;
      border-bottom: 3px solid black;
      border-radius: 17px;
      width: 200px;
      height: 40px;
      margin: 10px;
      transition: border-color 0.3s ease-in-out;
  }
  #hghtinput:focus{
    border: none;
  }
    #sbmt {
      background-color: rgb(53, 90, 133);
      border: none;
      border-radius: 5px;
      color: #fff;
      font-style: italic;
      margin: 10px;
      font-size: 20px;
      height: 40px;
      width: 120px;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out, transform 0.3s ease-in-out;
  }
  .res{
    font-size: 40px;
    color: black;
    font-family: 'serif';
    font-style: italic;
  }
  #sbmt:hover {
      background-color: rgb(38, 65, 97); /* Darker shade on hover */
      color: #ffd700; /* Change text color on hover */
      transform: scale(1.05); /* Scale up slightly on hover */
  }
  
</style>
<body >
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
    <a class="navbar-brand" href="#">PRO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home less<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Suggestions</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Contact us
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">M</a>
            <a class="dropdown-item" href="#">S</a>
            <a class="dropdown-item" href="#">p</a>
            <a class="dropdown-item" href="#">V</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Talk to Doctor ?</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <div id="bdy">
    <div  class="d-flex flex-row" id="topcont">
        <div class="d-flex flex-column"> 
        <p class="tagline" id="t1" style="color:rgb(64, 133, 160)">Harmony on Your Plate:</p><p class="tagline" id="t2">Symphony of Nutrients for a Happy Body.</p>
        <p id="smallpara">🌿 Nourish & Thrive</p>
        <p id="smallpara">Elevate your well-being with us! Explore vibrant, nutrient-packed meals that fuel your journey. Dive into fitness routines designed for joy. Craft a story of health and vitality. Welcome to a world where staying fit is an art—your masterpiece in the making.</p>
        <p id="smallpara">--Your Wellness Companion 🌟💪</p>
        </div>
        <img id="img"src="https://static.vecteezy.com/system/resources/previews/013/489/218/original/choosing-lifestyle-and-diet-concept-young-frustrated-man-standing-trying-to-choose-between-healthy-balanced-vegetarian-foods-and-fast-food-illustration-free-vector.jpg" width="200px">       
    </div>
    <hr>
    <center>
      <form method="post" action="connect.php" >
    <label id="hght" style="color:rgb(1, 1, 1);font-weight:bolder;">Enter your height (cm): </label><input id="hghtinpt" type="text" placeholder="Enter your height" name="heightofperson" style="background-color:rgb(221, 218, 203)"><br>
    <label id="wght" style="color:rgb(0, 3, 10);font-weight:bolder;">Enter your weight (kg): </label><input id="hghtinpt" type="text" placeholder="Enter your weight" name="weightofperson" style="background-color:rgb(221, 218, 203)"><br><br>
    <button  id="sbmt" type="submit" style="font-style:serif;">Calculate</button>
    </form>
    <?php 
    while ($row = $result->fetch_assoc()) {
        echo "<p class='res'>Calories required per day: " . $row['Calories'] ."<br></p>";
        break;
    }
    if ($stmt === false) {
        die('Error in preparing statement: ' . $conn->error);
    }
    ?>
     </center>
    </div>
  </div>
</body>
</html>


 ?>
