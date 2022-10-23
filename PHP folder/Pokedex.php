<!DOCTYPE html>

<html lang="en">
    <header>
        <title>Pokemon Evolution Display</title>
        <meta charset="utf-8">


        <style>
            h3 {color: red;}
        </style>
    </header>

<body>

    <?php
        $servername = "localhost";
        $username = "root";
        $password = "password";
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
    
</body>
</html>
