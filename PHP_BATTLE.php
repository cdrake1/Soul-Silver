<!DOCTYPE html>

<html lang="en">
    <header>
        <title>Pokemon Battler</title>
        <meta charset="utf-8">


        <style>

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

        $sql = "SELECT poke_name, poke_move_name, poke_type1, poke_type2, poke_move_type, poke_move_dmg FROM dex_kanto ORDER BY RAND()";
        $result = $conn->query($sql);


        // output data of each row
        for($i = 0 ; $i < 1 ; $i++) {
            if ($result->num_rows > 0) {
                ($row = $result->fetch_assoc());
                    echo "id: " . $row["poke_name"]. "<br>";
                    $P1 = $row["poke_name"];
                    $P1Type1 = $row["poke_type1"];
                    $P1Type2 = $row["poke_type2"];
                    $P1MoveType = $row["poke_move_type"];
                    $P1MoveDmg = $row["poke_move_dmg"];
            }
            else {
                echo "0 results";
            }
            $conn->close();
        }

        $sql = "SELECT poke_name, poke_move_name, poke_type1, poke_type2, poke_move_type, poke_move_dmg FROM dex_kanto ORDER BY RAND()";
        $result = $conn->query($sql);

        for($i = 0 ; $i < 1 ; $i++) {
            if ($result->num_rows > 0) {
                ($row = $result->fetch_assoc());
                    echo "id: " . $row["poke_name"]. "<br>";
                    $P2 = $row["poke_name"];
                    $P2Type1 = $row["poke_type1"];
                    $P2Type2 = $row["poke_type2"];
                    $P2MoveType = $row["poke_move_type"];
                    $P2MoveDmg = $row["poke_move_dmg"];
            }
            else {
                echo "0 results";
            }
            $conn->close();
        }
        
    ?>
    
</body>
</html>
