<?php 
$heightofperson = $_POST['heightofperson'];
$weightofperson = $_POST['weightofperson'];
$conn = new mysqli('localhost', 'root', '', 'project1');

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
} else {
    $sql = "Select * from  hght_wght_cal where Height='$heightofperson' AND Weight='$weightofperson'";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die('Error in preparing statement: ' . $conn->error);
    }
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="project.css">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Bree+Serif&family=Caveat:wght@400;700&family=Lobster&family=Monoton&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display+SC:ital,wght@0,400;0,700;1,700&family=Playfair+Display:ital,wght@0,400;0,700;1,700&family=Roboto:ital,wght@0,400;0,700;1,400;1,700&family=Source+Sans+Pro:ital,wght@0,400;0,700;1,700&family=Work+Sans:ital,wght@0,400;0,700;1,700&display=swap');

body {
    margin: 0;
    font-family: 'Arial', sans-serif;
}

#bdy {
    display: flex;
    position: relative;
    padding: 50px;
    background-image: url('https://c8.alamy.com/comp/2CD0N1H/healthy-food-concept-close-up-of-open-lunch-box-with-rice-fresh-fruits-and-vegetables-on-the-grey-background-with-blank-space-for-text-top-view-fl-2CD0N1H.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    margin-top: 2px;
}
        #head{
            text-align: center;
            margin-left: 15%;
            color: black;
        }

        h1 {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size:x-large;
            color: black;
            position: absolute;
            top: 50px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 2;
        }
    
        #text-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            color: white; 
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); 
        }
        #topcont {
            display: flex;
            align-items: center;
            text-align: center;
            border-radius: 15px;
            border-color: rgb(15, 8, 4);
            padding: 50px;
        }

        #img {
            margin-left: 0;
            opacity: 0.8;
            margin-right: 20px; 
            flex: 1; 
            border-radius: 25px;
        }

        #info {
            flex: 2; 
            text-align: left;
        }

        #smallpara {
            font-size: 18px;
            font-style: italic;
        }

        #para {
            font-size: 20px;
            font-style: italic;
        }
        #dailyFoodItemsContainer {
            text-align: center;
        }
        
        #ijk {
            margin-bottom: 0; 
            background-color: burlywood;
            padding: 10px;
        }
        
        .center-buttons {
            text-align: center;
            margin-top: 10px;
        }
        
        .center-buttons button {
            width: 110px;
            margin: 5px;
        }

        #hght {
            margin: 10px;
            font-size: 30px;
            font-family: 'Roberto';
            text-align: center;
        }

        #wght {
            margin: 10px;
            font-size: 30px;
            font-family: 'Roberto';
            text-align: center;
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
            text-align: center;
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
            text-align: center;
        }

        #sbmt:hover {
            background-color: rgb(38, 65, 97);
            color: #ffd700;
            transform: scale(1.05);
        }

        h2 {
            text-align: center;
        }

        #para,
        #para1,
        #para2 {
            font-size: 25px;
            text-align: center;
            color: black;
        }
        #ijk{
            background-color: powderblue;
            text-align: center;
        }
        #dynamicButtons input {
            width: 300px; 
            height: 40px; 
        }
        #items button:hover{
            background-color: rgb(247, 222, 170);
        }
        .center-buttons {
            text-align: center;
        }
        .center-buttons button {
            width: 110px;
            margin: 5px; 
        }
        .submitbtn{
            text-align: center;
        }
input[type="button"]{
    background-color:rgb(237, 156, 156); 
    color: black ;
    border-radius: 10px;
    padding: 10px 15px;
    margin: 2px;
    cursor: pointer;
    transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, transform 0.2s ease-in-out;
}

input[type="button"]:hover {
    background-color: lightpink ;
    color: black; 
    transform: scale(1.05);
}
#dailyFoodItemsContainer {
    text-align: center;
    background-color: rgb(144, 169, 173); 
    padding: 20px; 
}
#dynamicButtons input {
    width: 300px;
    height: 40px;
    margin: 5px; 
    padding: 8px; 
    border: 1px solid #ccc; 
    border-radius: 5px; 
}
#dynamicButtons input:hover {
    border-color: black; 
}

#dynamicButtons br {
    margin: 2px; 
}
#dynamicButtons button {
    background-color: black;
    color: black;
    border: none;
    border-radius: 5px;
    padding: 10px 15px;
    margin: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out, transform 0.3s ease-in-out;
}

#dynamicButtons button:hover {
    background-color: black;
    color: #e2dec8;
    transform: scale(1.05);
}

</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Calorie counter</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Suggestions</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Contact us
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="https://www.linkedin.com/in/manaswini-matcha-112470270/" target="_blank"><p class="drpdwn">Manaswini</p></a>
                        <a class="dropdown-item" href="https://www.linkedin.com/in/srilaxmi-reddy-44299b272/" target="_blank"><p class="drpdwn">Srilaxmi</p></a>
                        <a class="dropdown-item" href="https://www.linkedin.com/in/preetham-sabasu-ba432225b/" target="_blank" ><p class="drpdwn">Preetham</p></a>
                        <a class="dropdown-item" href="https://www.linkedin.com/in/vivek-sai-sheelam-91a33925b/" target="_blank" ><p class="drpdwn">Vivek</p></a>
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
    <div id="bdy" class="xyz">
        <div id="topcont">
            <img id="img" class="abc" src="https://static.vecteezy.com/system/resources/previews/013/489/218/original/choosing-lifestyle-and-diet-concept-young-frustrated-man-standing-trying-to-choose-between-healthy-balanced-vegetarian-foods-and-fast-food-illustration-free-vector.jpg" width="300px" height="400px">
            <div id="info">
                <h1 id="head"><b><i>Harmony on Your Plate</i></b></h1>
                <h2><i>Symphony of Nutrients for a Happy Body.</i></h2>
                <p id="para"><i>🌿 Nourish & Thrive</i></p>
                <p id="para1"><i>Elevate your well-being with us! Explore vibrant, nutrient-packed meals that fuel your journey. Dive into fitness routines designed for joy. Craft a story of health and vitality. Welcome to a world where staying fit is an art—your masterpiece in the making.</i></p>
                <p id="para2"><i>--Your Wellness Companion 🌟💪</i></p>
                <center>
                <form method="post" action="connect.php">
                    <label id="hght" style="color:rgb(1, 1, 1);font-weight:bolder;">Enter your height (cm): </label><input id="hghtinpt" type="text" placeholder="Enter your height" name="heightofperson" style="background-color:rgb(221, 218, 203)"><br>
                    <label id="wght" style="color:rgb(0, 3, 10);font-weight:bolder;">Enter your weight (kg): </label><input id="hghtinpt" type="text" placeholder="Enter your weight" name="weightofperson" style="background-color:rgb(221, 218, 203)"><br><br>
                    <button id="sbmt" type="submit" style="font-style:serif;">Calculate</button>
                    <?php 
                            while ($row = $result->fetch_assoc()){
                            // $calres=$row['Calories'];                           
                            echo "<h2 class='res1'>Calories required per day: ". $row['Calories'] ."<br></h2>";
                            break; 
                        }
                    if ($stmt === false) {
                        die('Error in preparing statement: ' . $conn->error);
                    }
                ?>
                </form>
                </center>
            </div>
        </div>
    </div>
    <div id="dailyFoodItemsContainer">
        <h3 id="ijk">Add your Daily Food Items:</h3>
        <form action="getcal.php" method="post">
            <section id="dynamicContainer">
                <div id="dynamicButtons"></div>
            </section>
            <div class="center-buttons">
                <input type="button" onclick="addTextFields()"value ="+Add">
                <input type="button" onclick="removeLastTextFields()" value="-Remove">
            </div>
            <div id="submit">
                <input type="submit" style="background-color:rgb(36, 36, 225); color:white; border: none; border-radius: 5px; padding: 10px 15px; margin: 5px; cursor: pointer; transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out, transform 0.3s ease-in-out;" id="submitBtn" value="Submit">
            </div>
        </form>
    </div>
    <script>
        function addTextFields() {
            var dynamicButtonsDiv = document.getElementById("dynamicButtons");
            var textFields = dynamicButtonsDiv.getElementsByTagName("input");
            if(textFields.length < 10) {
                var itemNameField = document.createElement("input");
                itemNameField.name="reqr[]";
                itemNameField.type = "text";
                itemNameField.placeholder = "Enter Item Name";
                itemNameField.style.marginRight = "10px";
                itemNameField.style.marginBottom="10px";
                dynamicButtonsDiv.appendChild(itemNameField);
                var amountField = document.createElement("input");
                amountField.type = "text";
                amountField.placeholder = "Enter Amount (approx) in gms";
                dynamicButtonsDiv.appendChild(amountField);
                    dynamicButtonsDiv.appendChild(document.createElement("br"));
                console.log(textFields.length);
            } else {
                alert("You can add at most 5 food items.");
            }
        }    
        function removeLastTextFields() {
            var dynamicButtonsDiv = document.getElementById("dynamicButtons");
            var textFields = dynamicButtonsDiv.getElementsByTagName("input");
            var countToRemove = Math.min(textFields.length, 2);
            for (var i = 0; i < countToRemove; i++) {
                dynamicButtonsDiv.removeChild(textFields[textFields.length - 1]);
            }
            var lineBreaks = dynamicButtonsDiv.getElementsByTagName("br");
            if (lineBreaks.length > 0) {
                dynamicButtonsDiv.removeChild(lineBreaks[lineBreaks.length - 1]);
            }
            console.log(textFields.length);
        }
    </script>
</body>
</html>
