<?php 
/** 
 * Két függvény, a fájl írására és olvasására. Lehet használni magas szintű fájkezelő függvényeket.
 */

function kiir($jsonfile)
{
    $array = json_decode($jsonfile, true);

    echo "<table>";

    foreach ($array as $key => $value) 
    {
        if($key % 5 == 0) echo "<tr>";
        $elem = array_values($value);
        echo "<td><img src='$elem[0]' class='thumbnail' title='$elem[1]'></td>";
        if($key % 5 == 4) echo "</tr>";
    }

    echo "</table>";
}
?>