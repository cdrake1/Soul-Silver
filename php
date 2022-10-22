
<?php
require('../connect_dbCopy.php');
$P1=rand(1,151);
$P2=rand(1,151);

#get type for pok1

$query='SELECT poke_type1 FROM dex_kanto where dex_num==$P1'
$P1type1=mysqli_query($dbc,$query)
$query='SELECT poke_type2 FROM dex_kanto where dex_num==$P1'
$P1TYPE2=mysqli_query($dbc,$query)

#get type for pok2
$query='SELECT poke_type1 FROM dex_kanto where dex_num==$P2'
$P2type1=mysqli_query($dbc,$query)
$query='SELECT poke_type2 FROM dex_kanto where dex_num==$P2'
$P2type2=mysqli_query($dbc,$query)

#get move for p1
$query='SELECT pok_move_name FROM dex_kanto where dex_num==$P1'
$P1moveName=mysqli_query($dbc,$query)
$query='SELECT pok_move_type FROM dex_kanto where dex_num==$P1'
$P1movetype=mysqli_query($dbc,$query)
$query='SELECT pok_move_dam FROM dex_kanto where dex_num==$P1'
echo('p1 move  '.$P1moveName)

$P1Score=0
$P2Score=0
?>
</html>
