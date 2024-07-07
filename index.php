<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIA-TEST</title>
</head>
<body>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
         $firstname = $_POST['firstname'];
         $foods = $_POST['foods'];
         $greeting = "Hej $firstname, här är din lista på dina maträtter:";
         $food_array = explode(",",$foods);
         $food_array_length = count($food_array);

         echo "<h3>$greeting</h3>";
         foreach($food_array as $food) {echo "<li>$food</li>";}
         echo "<br>Antal maträtter: $food_array_length st";
    }else  
    {
        ?>
        <form action="" method="POST">
            Förnamn: <input type="text" id="firstname" name="firstname"><br>
            Maträtter: <input type="text" id="foods" name="foods"><br>
        <input type="submit">
        </form>
        <?php
    }
    ?>
</body>
</html>