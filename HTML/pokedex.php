<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        
        <title>Document</title>

        <link rel="stylesheet" href="assets/SS.css">

        <link rel="shortcut icon" href="assets/img/Poké_Ball_icon.svg.png" type="image/png">
    </head>
    <body>
        <div id = "header">
            <div class="topnav">
                <a class= "active" href="pokemon.html"> Home</a>
                <a href="pokedex.html"> Pokedex</a>
                <a href="BattleSim.html"> Battle Simulator</a>
            </div>
        </div>
        <?php
        $servername = "localhost";
        $username = "xperiencedbum";
        $password = "CollinDrake";
        $dbname = "pokedex_db";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT dex_num, poke_name, poke_move_name, poke_type1, poke_type2, poke_move_name, poke_move_type, poke_move_dmg FROM dex_kanto ORDER BY dex_num";
        $result = $conn->query($sql);
        
        

            // output data of each row
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  echo "<h3>"."Dex Number: " . $row["dex_num"]. " | Pokemon Name: " . $row["poke_name"]. " | Pokemon Type 1: " . $row["poke_type1"] . " | Pokemon Type 2: " . $row["poke_type2"] . " | Pokemon Move Name: " . $row["poke_move_name"]. " | Pokemon Move type: " . $row["poke_move_type"]. " | Pokemon Move Damage: " . $row["poke_move_dmg"]. "<h3>" . "<br>";
                  echo "<hr>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();

    ?>


        <footer data-role="footer">
        
            <div id = "footer">
                <img src="assets/img/pokemon-logo-black-transparent.png" alt="x">
                <br>
                <p> (C) Pokemon.html is property of its respected owners and collaborators. </p>
                <p> Headquarters are in Marist College Poughkeepsie </p>
                <div class="bottomnav">
                    <a href="mailto: Collin.Drake1@marist.edu"> Contact Us</a>
                    <a href="Feedback.html"> Feedback</a>
                    <a href="Disclaimer.html"> Disclaimer </a>
                </div>
            </div>
        </footer>
    </body>
    
</html>