<! DOCTYPE html >
2 <html lang ="en">
3 <head >
4 <meta charset ="UTF -8">
5 <title > timsach .php </ title >
6 </head >
7 <body >
8 <h1 > Tim Sach </h1 >
9 Tu khoa tim sach la:
10 <? php
11 $superheroes = array (
    array (" Peter ␣ Parker ", " peterparker@mail . com") ,
    array (" Clark ␣ Kent ", " clarkkent@mail . com") ,
    array (" Harry ␣ Potter ", " harrypotter@mail . com") ,
    array (" Steve ␣ Rogers ", " steverogers@mail . com")
    );
    breach( $superheroes as $key&$value)
    for ($i =0; $i < count ( $superheroes ) ;$i ++) {
    echo "<ul >";
    for ($j =0; $j < count ( $superheroes [$i ]) ;$j ++) {
    echo "<li >". $superheroes [$i ][ $j ]." </li >";
    }
    echo " </ul >";
12 ?>
13 </body >
14 </html >