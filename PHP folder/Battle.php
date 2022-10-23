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
        $P1S=0
        $P2S=0
        if($P1MoveType = 1){
            if($P2Type1=1||$P2Type1=2||$P2Type1=3||$P2Type1=4||$P2Type1=5||$P2Type1=6||$P2Type1=7||$P2Type1=8||$P2Type1=9||$P2Type1=10||$P2Type1=11||$P2Type1=12||$P2Type1=15||$P2Type1=16||$P2Type1=18){
                break;
            }
            elseif($P2Type1=13||$P2Type1=17){
                $P1S=$P1S-1
            }
            else{
                $P1S=$P1S-5
            }
            if($P2Type2=null||$P2Type2 =1|| $P2Type2 =2||$P2Type2=3||$P2Type2=4||$P2Type2=5||$P2Type2=6||$P2Type2=7||$P2Type2=8||$P2Type2=9||$P2Type2=10||$P2Type2=11||$P2Type2=12||$P2Type2=15||$P2Type2=16||$P2Type2=18){
                break;
            }
            elseif($P2Type2=13||$P2Type2=17){
                $P1S=$P1S-1
            }
            else{
                $P1S=$P1S-5
            }
        }
        elseif($P1MoveType = 2){
            if($P2Type1=1||$P2Type1=4||$P2Type1=7||$P2Type1=8||$P2Type1=9||$P2Type1=10||$P2Type1=11||$P2Type1=14||$P2Type1=16||$P2Type1=18){
                break;
            }
            elseif($P2Type1=2||$P2Type1=3||$P2Type1=13||$P2Type1=15){
                $P1S=$P1S-1
            }
            else{
                $P1S=$P1S+1 
            }
            if($P2Type2=null||$P2Type2=1||$P2Type2=4||$P2Type2=7||$P2Type2=8||$P2Type2=9||$P2Type2=10||$P2Type2=11||$P2Type2=14||$P2Type2=16||$P2Type2=18){
                break;
            }
            elseif($P2Type2=2||$P2Type2=3||$P2Type2=13||$P2Type2=15){
                $P1S=$P1S-1
            }
            else{
                $P1S=$P1S+1 
            }
        }
        elseif($P1MoveType = 3){
            if($P2Type1=1||$P2Type1=4||$P2Type1=6||$P2Type1=7||$P2Type1=8||$P2Type1=10||$P2Type1=11||$P2Type1=12||$P2Type1=14||$P2Type1=16||$P2Type1=17||$P2Type1=18){
                break;
            }
            elseif($P2Type1=3||$P2Type1=5||$P2Type1=15){
                $P1S=$P1S-1
            }
            else{
                $P1S=$P1S+1
            }
            if($P2Type2=null||$P2Type2=1||$P2Type2=4||$P2Type2=6||$P2Type2=7||$P2Type2=8||$P2Type2=10||$P2Type2=11||$P2Type2=12||$P2Type2=14||$P2Type2=16||$P2Type2=17||$P2Type2=18){
                break;
            }
            elseif($P2Type2=3||$P2Type2=5||$P2Type2=15){
                $P1S=$P1S-1
            }
            else{
                $P1S=$P1S+1
            }
        }
        elseif($P1MoveType = 4){
            if($P2Type1=1||$P2Type1=2||$P2Type1=6||$P2Type1=7||$P2Type1=8||$P2Type1=11||$P2Type1=12||$P2Type1=13||$P2Type1=14||$P2Type1=16||$P2Type1=17||$P2Type1=18){
                break;
            }
            elseif($P2Type1=4||$P2Type1=5||$P2Type1=15){
                $P1S=$P1S-1
            }
            elseif($P2Type1=9){
                $P1S=$P1S-5
            }
            else{
                $P1S=$P1S+1
            }
            if($P2Type2=null$P2Type2=1||$P2Type2=2||$P2Type2=6||$P2Type2=7||$P2Type2=8||$P2Type2=11||$P2Type2=12||$P2Type2=13||$P2Type2=14||$P2Type2=16||$P2Type2=17||$P2Type2=18){
                break;
            }
            elseif($P2Type2=4||$P2Type2=5||$P2Type2=15){
                $P1S=$P1S-1
            }
            elseif($P2Type2=9){
                $P1S=$P1S-5
            }
            else{
                $P1S=$P1S+1
            }
        }
        elseif($P1MoveType = 5){
            if($P2Type1=2||$P2Type1=5||$P2Type1=8||$P2Type1=10||$P2Type1=12||$P2Type1=15||$P2Type1=17){
                $P1S=$P1S-1
            }
            elseif($P2Type1=3||$P2Type1=||$P2Type1=13){
                $P1S=$P1S+1
            }
            if($P2Type2=null){
                break
            }
            elseif($P2Type2 =2||$P2Type2=5||$P2Type2=8||$P2Type2=10||$P2Type2=12||$P2Type2=15||$P2Type2=17){
                $P1S=$P1S-1
            }
            elseif($P2Type2=3||$P2Type2=||$P2Type2=13){
                $P1S=$P1S+1
            }
        }
        elseif($P1MoveType= 6){
            if($P2Type1=2||$P2Type1=3||$P2Type1=6||$P2Type1=17){
                $P1S=$P1S-1
            }
            elseif($P2Type1=5||$P2Type1=9||$P2Type1=10||$P2Type1=15){
                $P1S=$P1S+1
            }
            if($P2Type2=null){
                break;
            }
            elseif($P2Type2 =2||$P2Type2=3||$P2Type2=6||$P2Type2=17){
                $P1S=$P1S-1
            }
            elseif($P2Type2=5||$P2Type2=9||$P2Type2=10||$P2Type2=15){
                $P1S=$P1S+1
            }
        }
        elseif($P1MoveType= 7){
            if($P2Type1=18||$P2Type1=12||$P2Type1=11||$P2Type1=10||$P2Type1=8){
                $P1S=$P1S-1
            }
            elseif($P2Type1=1||$P2Type1=6||$P2Type1=13||$P2Type1=16||$P2Type1=17){
                $P1S=$P1S+1
            }
            elseif($P2Type1=14){
                $P1S=$P1S-5
            }
            if($P2Type2=null){
                break;
            }
            elseif($P2Type2=18||$P2Type2=12||$P2Type2=11||$P2Type2=10||$P2Type2=8){
                $P1S=$P1S-1
            }
            elseif($P2Type2=1||$P2Type2=6||$P2Type2=13||$P2Type2=16||$P2Type2=17){
                $P1S=$P1S+1
            }
            elseif($P2Type2=14){
                $P1S=$P1S-5
            }
        }
        elseif($P1MoveType= 8){
            if($P2Type1=7||$P2Type1=8||$P2Type1=12||$P2Type1=13){
                $P1S=$P1S-1
            }
            elseif($P2Type1=5||$P2Type1=18){
                $P1S=$P1S+1
            }
            elseif($P2Type1=10){
                $P1S=$P1S-5
            }
            if($P2Type2=null){
                break;
            }
            elseif($P2Type2=7||$P2Type2=8||$P2Type2=12||$P2Type2=13){
                $P1S=$P1S-1
            }
            elseif($P2Type2=5||$P2Type2=18){
                $P1S=$P1S+1
            }
            elseif($P2Type2=10){
                $P1S=$P1S-5
            }
        }
        elseif($P1MoveType= 9){
            if($P2Type1=5||$P2Type1=12){
                $P1S=$P1S-1
            }
            elseif($P2Type1=2||$P2Type1=4||$P2Type1=8||$P2Type1=13||$P2Type1=17){
                $P1S=$P1S+1
            }
            elseif($P2Type1=10){
                $P1S=$P1S-5
            }
            if($P2Type2=null){
                break;
            }
            elseif($P2Type2=5||$P2Type2=12){
                $P1S=$P1S-1
            }
            elseif($P2Type2=2||$P2Type2=4||$P2Type2=8||$P2Type2=13||$P2Type2=17){
                $P1S=$P1S+1
            }
            elseif($P2Type2=10){
                $P1S=$P1S-5
            }
        }
        elseif($P1MoveType= 10){
            if($P2Type1=4||$P2Type1=13||$P2Type1=17){
                $P1S=$P1S-1
            }
            elseif($P2Type1=5||$P2Type1=7||$P2Type1=12){
                $P1S=$P1S+1
            }
            if($P2Type2=null){
                break;
            }
            elseif($P2Type2=4||$P2Type2=13||$P2Type2=17){
                $P1S=$P1S-1
            }
            elseif($P2Type2=5||$P2Type2=7||$P2Type2=12){
                $P1S=$P1S+1
            }
        }
        elseif($P1MoveType= 11){
            if($P2Type1=11||$P2Type1=17){
                $P1S=$P1S-1
            }
            elseif($P2Type1=7||$P2Type1=8){
                $P1S=$P1S+1
            }
            elseif($P2Type1=16){
                $P1S=$P1S-5
            }
            if($P2Type2=null){
                break;
            }
            elseif($P2Type2=11||$P2Type2=17){
                $P1S=$P1S-1
            }
            elseif($P2Type2=7||$P2Type2=8){
                $P1S=$P1S+1
            }
            elseif($P2Type2=16){
                $P1S=$P1S-5
            }
        }
        elseif($P1MoveType= 12){
            if($P2Type1=2||$P2Type1=7||$P2Type1=8||$P2Type1=10||$P2Type1=14||$P2Type1=17||$P2Type1=18){
                $P1S=$P1S-1
            }
            elseif($P2Type1=5||$P2Type1=11||$P2Type1=16){
                $P1S=$P1S+1
            }
            if($P2Type2=null){
                break;
            }
            elseif($P2Type2=2||$P2Type2=7||$P2Type2=8||$P2Type2=10||$P2Type2=14||$P2Type2=17||$P2Type2=18){
                $P1S=$P1S-1
            }
            elseif($P2Type2=5||$P2Type2=11||$P2Type2=16){
                $P1S=$P1S+1
            }
        }
        elseif($P1MoveType= 13){
            if($P2Type1=9||$P2Type1=7||$P2Type1=17){
                $P1S=$P1S-1
            }
            elseif($P2Type1=2||$P2Type1=6||$P2Type1=10||$P2Type1=12){
                $P1S=$P1S+1
            }
            if($P2Type2=null){
                break;
            }
            elseif($P2Type2=9||$P2Type2=7||$P2Type2=17){
                $P1S=$P1S-1
            }
            elseif($P2Type2=2||$P2Type2=6||$P2Type2=10||$P2Type2=12){
                $P1S=$P1S+1
            }
        }
        elseif($P1MoveType= 14){
            if($P2Type1=16){
                $P1S=$P1S-1
            }
            elseif($P2Type1=11||$P2Type1=14){
                $P1S=$P1S+1
            }
            elseif($P2Type1=1){
                $P1S=$P1S-5
            }
            if($P2Type2=null){
                break;
            }
            elseif($P2Type2=16){
                $P1S=$P1S-1
            }
            elseif($P2Type2=11||$P2Type2=14){
                $P1S=$P1S+1
            }
            elseif($P2Type2=1){
                $P1S=$P1S-5
            }
        }
        elseif($P1MoveType= 15){
            if($P2Type1=17){
                $P1S=$P1S-1
            }
            elseif($P2Type1=15){
                $P1S=$P1S+1
            }
            elseif($P2Type1=18){
                $P1S=$P1S-5
            }
            if($P2Type2=null){
                break;
            }
            elseif($P2Type2=17){
                $P1S=$P1S-1
            }
            elseif($P2Type2=15){
                $P1S=$P1S+1
            }
            elseif($P2Type2=18){
                $P1S=$P1S-5
            }
        }
        elseif($P1MoveType= 16){
            if($P2Type1=18||$P2Type1=16||$P2Type1=7){
                $P1S=$P1S-1
            }
            elseif($P2Type1=11||$P2Type1=14){
                $P1S=$P1S+1
            }
            if($P2Type2=null){
                break;
            }
            elseif($P2Type2=18||$P2Type2=16||$P2Type2=7){
                $P1S=$P1S-1
            }
            elseif($P2Type2=11||$P2Type2=14){
                $P1S=$P1S+1
            }
        }
        elseif($P1MoveType= 17){
            if($P2Type1=2||$P2Type1=3||$P2Type1=4||$P2Type1=17){
                $P1S=$P1S-1
            }
            elseif($P2Type1=6||$P2Type1=13||$P2Type1=18){
                $P1S=$P1S+1
            }
            if($P2Type2=null){
                break;
            }
            elseif($P2Type2=2||$P2Type2=3||$P2Type2=4||$P2Type2=17){
                $P1S=$P1S-1
            }
            elseif($P2Type2=6||$P2Type2=13||$P2Type2=18){
                $P1S=$P1S+1
            }
        }
        elseif($P1MoveType= 18){
            if($P2Type1=2||$P2Type1=8||$P2Type1=17){
                $P1S=$P1S-1
            }
            elseif($P2Type1=7||$P2Type1=14||$P2Type1=15){
                $P1S=$P1S+1
            }
            if($P2Type2=null){
                break;
            }
            elseif($P2Type2=2||$P2Type2=8||$P2Type2=17){
                $P1S=$P1S-1
            }
            elseif($P2Type2=7||$P2Type2=14||$P2Type2=15){
                $P1S=$P1S+1
            }

        }

        if( $P2MoveType = 1){
            if($P1Type1=1||$P1Type1=2||$P1Type1=3||$P1Type1=4||$P1Type1=5||$P1Type1=6||$P1Type1=7||$P1Type1=8||$P1Type1=9||$P1Type1=10||$P1Type1=11||$P1Type1=12||$P1Type1=15||$P1Type1=16||$P1Type1=18){
                break;
            }
            elseif($P1Type=13||$P1Type1=17){
                $P2S=$P2S-1
            }
            else{
                $P2S=$P2S-5
            }
            if($P1Type2=null||$P1Type2 =1|| $P1Type2 =2||$P1Type2=3||$P1Type2=4||$P1Type2=5||$P1Type2=6||$P1Type2=7||$P1Type2=8||$P1Type2=9||$P1Type2=10||$P1Type2=11||$P1Type2=12||$P1Type2=15||$P1Type2=16||$P1Type2=18){
                break;
            }
            elseif($P1Type2=13||$P1Type2=17){
                $P2S=$P2S-1
            }
            else{
                $P2S=$P2S-5
            }
        }
        elseif($P2MoveType = 2){
            if($P1Type1=1||$P1Type1=4||$P1Type1=7||$P1Type1=8||$P1Type1=9||$P1Type1=10||$P1Type1=11||$P1Type1=14||$P1Type1=16||$P1Type1=18){
                break;
            }
            elseif($P1Type1=2||$P1Type1=3||$P1Type1=13||$P1Type1=15){
                $P2S=$P2S-1
            }
            else{
                $P2S=$P2S+1 
            }
            if($P1Type2=null||$P1Type2=1||$P1Type2=4||$P1Type2=7||$P1Type2=8||$P1Type2=9||$P1Type2=10||$P1Type2=11||$P1Type2=14||$P1Type2=16||$P1Type2=18){
                break;
            }
            elseif($P1Type2=2||$P1Type2=3||$P1Type2=13||$P1Type2=15){
                $P2S=$P2S-1
            }
            else{
                $P2S=$P2S+1 
            }
        }
        elseif($P2MoveType = 3){
            if($P1Type1=1||$P1Type1=4||$P1Type1=6||$P1Type1=7||$P1Type1=8||$P1Type1=10||$P1Type1=11||$P1Type1=12||$P1Type1=14||$P1Type1=16||$P1Type1=17||$P1Type1=18){
                break;
            }
            elseif($P1Type1=3||$P1Type1=5||$P1Type1=15){
                $P2S=$P2S-1
            }
            else{
                $P2S=$P2S+1
            }
            if($P1Type2=null||$P1Type2=1||$P1Type2=4||$P1Type2=6||$P1Type2=7||$P1Type2=8||$P1Type2=10||$P1Type2=11||$P1Type2=12||$P1Type2=14||$P1Type2=16||$P1Type2=17||$P1Type2=18){
                break;
            }
            elseif($P1Type2=3||$P1Type2=5||$P1Type2=15){
                $P2S=$P2S-1
            }
            else{
                $P2S=$P2S+1
            }
        }
        elseif($P2MoveType = 4){
            if($P1Type1=1||$P1Type1=2||$P1Type1=6||$P1Type1=7||$P1Type1=8||$P1Type1=11||$P1Type1=12||$P1Type1=13||$P1Type1=14||$P1Type1=16||$P1Type1=17||$P1Type1=18){
                break;
            }
            elseif($P1Type1=4||$P1Type1=5||$P1Type1=15){
                $P2S=$P2S-1
            }
            elseif($P1Type1=9){
                $P2S=$P2S-5
            }
            else{
                $P2S=$P2S+1
            }
            if($P1Type2=null$P1Type2=1||$P1Type2=2||$P1Type2=6||$P1Type2=7||$P1Type2=8||$P1Type2=11||$P1Type2=12||$P1Type2=13||$P1Type2=14||$P1Type2=16||$P1Type2=17||$P1Type2=18){
                break;
            }
            elseif($P1Type2=4||$P1Type2=5||$P1Type2=15){
                $P2S=$P2S-1
            }
            elseif($P1Type2=9){
                $P2S=$P2S-5
            }
            else{
                $P2S=$P2S+1
            }
        }
        elseif($P2MoveType = 5){
            if($P1Type1=2||$P1Type1=5||$P1Type1=8||$P1Type1=10||$P1Type1=12||$P1Type1=15||$P1Type1=17){
                $P2S=$P2S-1
            }
            elseif($P1Type1=3||$P1Type1=||$P1Type1=13){
                $P2S=$P2S+1
            }
            if($P1Type2=null){
                break
            }
            elseif($P1Type2 =2||$P1Type2=5||$P1Type2=8||$P1Type2=10||$P1Type2=12||$P1Type2=15||$P1Type2=17){
                $P2S=$P2S-1
            }
            elseif($P1Type2=3||$P1Type2=||$P1Type2=13){
                $P2S=$P2S+1
            }
        }
        elseif($P2MoveType= 6){
            if($P1Type1=2||$P1Type1=3||$P1Type1=6||$P1Type1=17){
                $P2S=$P2S-1
            }
            elseif($P1Type1=5||$P1Type1=9||$P1Type1=10||$P1Type1=15){
                $P2S=$P2S+1
            }
            if($P1Type2=null){
                break;
            }
            elseif($P1Type2 =2||$P1Type2=3||$P1Type2=6||$P1Type2=17){
                $P2S=$P2S-1
            }
            elseif($P1Type2=5||$P1Type2=9||$P1Type2=10||$P1Type2=15){
                $P2S=$P2S+1
            }
        }
        elseif($P2MoveType= 7){
            if($P1Type1=18||$P1Type1=12||$P1Type1=11||$P1Type1=10||$P1Type1=8){
                $P2S=$P2S-1
            }
            elseif($P1Type1=1||$P1Type1=6||$P1Type1=13||$P1Type1=16||$P1Type1=17){
                $P2S=$P2S+1
            }
            elseif($P1Type1=14){
                $P2S=$P2S-5
            }
            if($P1Type2=null){
                break;
            }
            elseif($P1Type2=18||$P1Type2=12||$P1Type2=11||$P1Type2=10||$P1Type2=8){
                $P2S=$P2S-1
            }
            elseif($P1Type2=1||$P1Type2=6||$P1Type2=13||$P1Type2=16||$P1Type2=17){
                $P2S=$P2S+1
            }
            elseif($P1Type2=14){
                $P2S=$P2S-5
            }
        }
        elseif($P2MoveType= 8){
            if($P1Type1=7||$P1Type1=8||$P1Type1=12||$P1Type1=13){
                $P2S=$P2S-1
            }
            elseif($P1Type1=5||$P1Type1=18){
                $P2S=$P2S+1
            }
            elseif($P1Type1=10){
                $P2S=$P2S-5
            }
            if($P1Type2=null){
                break;
            }
            elseif($P1Type2=7||$P1Type2=8||$P1Type2=12||$P1Type2=13){
                $P2S=$P2S-1
            }
            elseif($P1Type2=5||$P1Type2=18){
                $P2S=$P2S+1
            }
            elseif($P1Type2=10){
                $P2S=$P2S-5
            }
        }
        elseif($P2MoveType= 9){
            if($P1Type1=5||$P1Type1=12){
                $P2S=$P2S-1
            }
            elseif($P1Type1=2||$P1Type1=4||$P1Type1=8||$P1Type1=13||$P1Type1=17){
                $P2S=$P2S+1
            }
            elseif($P1Type1=10){
                $P2S=$P2S-5
            }
            if($P1Type2=null){
                break;
            }
            elseif($P1Type2=5||$P1Type2=12){
                $P2S=$P2S-1
            }
            elseif($P1Type2=2||$P1Type2=4||$P1Type2=8||$P1Type2=13||$P1Type2=17){
                $P2S=$P2S+1
            }
            elseif($P1Type2=10){
                $P2S=$P2S-5
            }
        }
        elseif($P2MoveType= 10){
            if($P1Type1=4||$P1Type1=13||$P1Type1=17){
                $P2S=$P2S-1
            }
            elseif($P1Type1=5||$P1Type1=7||$P1Type1=12){
                $P2S=$P2S+1
            }
            if($P1Type2=null){
                break;
            }
            elseif($P1Type2=4||$P1Type2=13||$P1Type2=17){
                $P2S=$P2S-1
            }
            elseif($P1Type2=5||$P1Type2=7||$P1Type2=12){
                $P2S=$P2S+1
            }
        }
        elseif($P2MoveType= 11){
            if($P1Type1=11||$P1Type1=17){
                $P2S=$P2S-1
            }
            elseif($P1Type1=7||$P1Type1=8){
                $P2S=$P2S+1
            }
            elseif($P1Type1=16){
                $P2S=$P2S-5
            }
            if($P1Type2=null){
                break;
            }
            elseif($P1Type2=11||$P1Type2=17){
                $P2S=$P2S-1
            }
            elseif($P1Type2=7||$P1Type2=8){
                $P2S=$P2S+1
            }
            elseif($P1Type2=16){
                $P2S=$P2S-5
            }
        }
        elseif($P2MoveType= 12){
            if($P1Type1=2||$P1Type1=7||$P1Type1=8||$P1Type1=10||$P1Type1=14||$P1Type1=17||$P1Type1=18){
                $P2S=$P2S-1
            }
            elseif($P1Type1=5||$P1Type1=11||$P1Type1=16){
                $P2S=$P2S+1
            }
            if($P1Type2=null){
                break;
            }
            elseif($P1Type2=2||$P1Type2=7||$P1Type2=8||$P1Type2=10||$P1Type2=14||$P1Type2=17||$P1Type2=18){
                $P2S=$P2S-1
            }
            elseif($P1Type2=5||$P1Type2=11||$P1Type2=16){
                $P2S=$P2S+1
            }
        }
        elseif($P2MoveType= 13){
            if($P1Type1=9||$P1Type1=7||$P1Type1=17){
                $P2S=$P2S-1
            }
            elseif($P1Type1=2||$P1Type1=6||$P1Type1=10||$P1Type1=12){
                $P2S=$P2S+1
            }
            if($P1Type2=null){
                break;
            }
            elseif($P1Type2=9||$P1Type2=7||$P1Type2=17){
                $P2S=$P2S-1
            }
            elseif($P1Type2=2||$P1Type2=6||$P1Type2=10||$P1Type2=12){
                $P2S=$P2S+1
            }
        }
        elseif($P2MoveType= 14){
            if($P1Type1=16){
                $P2S=$P2S-1
            }
            elseif($P1Type1=11||$P1Type1=14){
                $P2S=$P2S+1
            }
            elseif($P1Type1=1){
                $P2S=$P2S-5
            }
            if($P1Type2=null){
                break;
            }
            elseif($P1Type2=16){
                $P2S=$P2S-1
            }
            elseif($P1Type2=11||$P1Type2=14){
                $P2S=$P2S+1
            }
            elseif($P1Type2=1){
                $P2S=$P2S-5
            }
        }
        elseif($P2MoveType= 15){
            if($P1Type1=17){
                $P2S=$P2S-1
            }
            elseif($P1Type1=15){
                $P2S=$P2S+1
            }
            elseif($P1Type1=18){
                $P2S=$P2S-5
            }
            if($P1Type2=null){
                break;
            }
            elseif($P1Type2=17){
                $P2S=$P2S-1
            }
            elseif($P1Type2=15){
                $P2S=$P2S+1
            }
            elseif($P1Type2=18){
                $P2S=$P2S-5
            }
        }
        elseif($P2MoveType= 16){
            if($P1Type1=18||$P1Type1=16||$P1Type1=7){
                $P2S=$P2S-1
            }
            elseif($P1Type1=11||$P1Type1=14){
                $P2S=$P2S+1
            }
            if($P1Type2=null){
                break;
            }
            elseif($P1Type2=18||$P1Type2=16||$P1Type2=7){
                $P2S=$P2S-1
            }
            elseif($P1Type2=11||$P1Type2=14){
                $P2S=$P2S+1
            }
        }
        elseif($P2MoveType= 17){
            if($P1Type1=2||$P1Type1=3||$P1Type1=4||$P1Type1=17){
                $P2S=$P2S-1
            }
            elseif($P1Type1=6||$P1Type1=13||$P1Type1=18){
                $P2S=$P2S+1
            }
            if($P1Type2=null){
                break;
            }
            elseif($P1Type2=2||$P1Type2=3||$P1Type2=4||$P1Type2=17){
                $P2S=$P2S-1
            }
            elseif($P1Type2=6||$P1Type2=13||$P1Type2=18){
                $P2S=$P2S+1
            }
        }
        elseif($P2MoveType= 18){
            if($P1Type1=2||$P1Type1=8||$P1Type1=17){
                $P2S=$P2S-1
            }
            elseif($P1Type1=7||$P1Type1=14||$P1Type1=15){
                $P2S=$P2S+1
            }
            if($P1Type2=null){
                break;
            }
            elseif($P1Type2=2||$P1Type2=8||$P1Type2=17){
                $P2S=$P2S-1
            }
            elseif($P1Type2=7||$P1Type2=14||$P1Type2=15){
                $P2S=$P2S+1
            }

        }
        if($P2S>$P1S){
            $win=$P1
        }
        elseif($P2S=$P1S){
            if($P1MoveDmg>$P2MoveDmg){
                $win=$P1
            }
            elseif($P1MoveDmg>$P2MoveDmg){
                $win='Tie'
            }
            else{
                $win=$P2 
            }
        }
        else{
            $win=$P2 
        }
    ?>
    
</body>
</html>