

<?php


$lines = explode( "\n", file_get_contents( 'csv-lookup.csv' ) );
# $headers = str_getcsv( array_shift( $lines ) );
$data = array();
foreach ( $lines as $line ) {
    $row = array();
    foreach ( str_getcsv( $line ) as $key => $field )
        #$row[ $headers[ $key ] ] = $field;
        $row[$key] = $field;
    $row = array_filter( $row );
    $data[] = $row;
}


echo("<pre>");
print_r($data);
echo("</pre>");




/*
$csv_file = explode( "\n", file_get_contents( './php/csv-lookup.csv' ) );
$data = str_getcsv($csv_file);
var_dump($data);
*/

/*
OUTPUT

Array
(
    [0] => Array
        (
            [date] => 18/11/2021
            [theme] => white
            [season] => Pentecost
            [feast] => St Fergus
            [description] => Bishop, c.750
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2020
            [year-to] => 2021
            [rcl] => B
            [daily] => 1
        )

    [1] => Array
        (
            [date] => 19/11/2021
            [theme] => white
            [season] => Pentecost
            [feast] => St Hilda of Whitby
            [description] => Abbess, 680
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2020
            [year-to] => 2021
            [rcl] => B
            [daily] => 1
        )

    [2] => Array
        (
            [date] => 20/11/2021
            [theme] => green
            [season] => Pentecost
            [feast] => Saturday after Pentecost 25
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2020
            [year-to] => 2021
            [rcl] => B
            [daily] => 1
        )

    [3] => Array
        (
            [date] => 21/11/2021
            [theme] => white
            [season] => Pentecost
            [feast] => The Last Sunday after Pentecost
            [description] => Christ the King
            [class] => 3
            [liturgical-colour] => White or Red
            [spb] => SPB Sunday next before Advent
            [year-from] => 2020
            [year-to] => 2021
            [rcl] => B
            [daily] => 1
        )

    [4] => Array
        (
            [date] => 22/11/2021
            [theme] => white
            [season] => Pentecost
            [feast] => St Cecilia
            [description] => Martyr, c.230
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2020
            [year-to] => 2021
            [rcl] => B
            [daily] => 1
        )

    [5] => Array
        (
            [date] => 23/11/2021
            [theme] => red
            [season] => Pentecost
            [feast] => St Clement of Rome
            [description] => Bishop and Martyr, c.100
            [class] => 6
            [liturgical-colour] => Red
            [year-from] => 2020
            [year-to] => 2021
            [rcl] => B
            [daily] => 1
        )

    [6] => Array
        (
            [date] => 24/11/2021
            [theme] => white
            [season] => Pentecost
            [feast] => Lucy Menzies
            [description] => Scholar and Mystic, 1954
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2020
            [year-to] => 2021
            [rcl] => B
            [daily] => 1
        )

    [7] => Array
        (
            [date] => 25/11/2021
            [theme] => white
            [season] => Pentecost
            [feast] => St Columban
            [description] => Bishop, 615
            [class] => 6
            [liturgical-colour] => White
            [translated] => Translated from 21 November
            [year-from] => 2020
            [year-to] => 2021
            [rcl] => B
            [daily] => 1
        )

    [8] => Array
        (
            [date] => 26/11/2021
            [theme] => green
            [season] => Pentecost
            [feast] => Friday after the Last Sunday after Pentecost
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2020
            [year-to] => 2021
            [rcl] => B
            [daily] => 1
        )

    [9] => Array
        (
            [date] => 27/11/2021
            [theme] => green
            [season] => Pentecost
            [feast] => Saturday after the Last Sunday after Pentecost
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2020
            [year-to] => 2021
            [rcl] => B
            [daily] => 1
        )

    [10] => Array
        (
            [date] => 28/11/2021
            [theme] => violet
            [season] => Advent
            [feast] => First Sunday of Advent
            [description] => Advent 1
            [class] => 1
            [liturgical-colour] => Violet
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [11] => Array
        (
            [date] => 29/11/2021
            [theme] => violet
            [season] => Advent
            [feast] => Monday after First Sunday of Advent
            [description] => Feria
            [liturgical-colour] => Violet
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [12] => Array
        (
            [date] => 30/11/2021
            [theme] => red
            [season] => Advent
            [feast] => St Andrew
            [description] => Apostle and Patron of Scotland
            [class] => 4
            [liturgical-colour] => Red
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [13] => Array
        (
            [date] => 01/12/2021
            [theme] => white
            [season] => Advent
            [feast] => Charles de Foucauld
            [description] => Priest and Hermit, 1916
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [14] => Array
        (
            [date] => 02/12/2021
            [theme] => white
            [season] => Advent
            [feast] => Nicholas Ferrar
            [description] => Deacon, 1637
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [15] => Array
        (
            [date] => 03/12/2021
            [theme] => white
            [season] => Advent
            [feast] => Francis Xavier
            [description] => Priest and Missionary, 1552
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [16] => Array
        (
            [date] => 04/12/2021
            [theme] => white
            [season] => Advent
            [feast] => St Clement of Alexandria
            [description] => Teacher of the Faith, c.214
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [17] => Array
        (
            [date] => 05/12/2021
            [theme] => violet
            [season] => Advent
            [feast] => Second Sunday of Advent
            [description] => Advent 2
            [class] => 1
            [liturgical-colour] => Violet
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [18] => Array
        (
            [date] => 06/12/2021
            [theme] => white
            [season] => Advent
            [feast] => St Nicholas of Myra
            [description] => Bishop, 4th century
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [19] => Array
        (
            [date] => 07/12/2021
            [theme] => white
            [season] => Advent
            [feast] => St Ambrose of Milan
            [description] => Bishop and Teacher of the Faith, 397
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [20] => Array
        (
            [date] => 08/12/2021
            [theme] => white
            [season] => Advent
            [feast] => The Conception of St Mary
            [description] => Mother of the Lord
            [class] => 5
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [21] => Array
        (
            [date] => 09/12/2021
            [theme] => violet
            [season] => Advent
            [feast] => Thursday after Second Sunday of Advent
            [description] => Feria
            [liturgical-colour] => Violet
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [22] => Array
        (
            [date] => 10/12/2021
            [theme] => violet
            [season] => Advent
            [feast] => Friday after Second Sunday of Advent
            [description] => Feria
            [liturgical-colour] => Violet
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [23] => Array
        (
            [date] => 11/12/2021
            [theme] => violet
            [season] => Advent
            [feast] => Saturday after Second Sunday of Advent
            [description] => Feria
            [liturgical-colour] => Violet
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [24] => Array
        (
            [date] => 12/12/2021
            [theme] => violet
            [season] => Advent
            [feast] => Third Sunday of Advent
            [description] => Advent 3
            [class] => 1
            [liturgical-colour] => Violet
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [25] => Array
        (
            [date] => 13/12/2021
            [theme] => violet
            [season] => Advent
            [feast] => Monday after Third Sunday of Advent
            [description] => Feria
            [liturgical-colour] => Violet
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [26] => Array
        (
            [date] => 14/12/2021
            [theme] => white
            [season] => Advent
            [feast] => St John of the Cross
            [description] => Priest and Teacher of the Faith, 1591
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [27] => Array
        (
            [date] => 15/12/2021
            [theme] => violet
            [season] => Advent
            [feast] => Wednesday after Third Sunday of Advent
            [description] => Feria
            [liturgical-colour] => Violet
            [emberogation] => Ember Day
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [28] => Array
        (
            [date] => 16/12/2021
            [theme] => violet
            [season] => Advent
            [feast] => Thursday after Third Sunday of Advent
            [description] => Feria
            [liturgical-colour] => Violet
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [29] => Array
        (
            [date] => 17/12/2021
            [theme] => violet
            [season] => Advent
            [feast] => Friday after Third Sunday of Advent
            [description] => Feria
            [liturgical-colour] => Violet
            [emberogation] => Ember Day
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [30] => Array
        (
            [date] => 18/12/2021
            [theme] => violet
            [season] => Advent
            [feast] => Saturday after Third Sunday of Advent
            [description] => Feria
            [liturgical-colour] => Violet
            [emberogation] => Ember Day
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [31] => Array
        (
            [date] => 19/12/2021
            [theme] => violet
            [season] => Advent
            [feast] => Fourth Sunday of Advent
            [description] => Advent 4
            [class] => 1
            [liturgical-colour] => Violet
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [32] => Array
        (
            [date] => 20/12/2021
            [theme] => violet
            [season] => Advent
            [feast] => Monday after Fourth Sunday of Advent
            [description] => Feria
            [liturgical-colour] => Violet
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [33] => Array
        (
            [date] => 21/12/2021
            [theme] => red
            [season] => Advent
            [feast] => St Thomas
            [description] => Apostle
            [class] => 4
            [liturgical-colour] => Red
            [translated] => If not kept on 3 July
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [34] => Array
        (
            [date] => 22/12/2021
            [theme] => violet
            [season] => Advent
            [feast] => Wednesday after Fourth Sunday of Advent
            [description] => Feria
            [liturgical-colour] => Violet
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [35] => Array
        (
            [date] => 23/12/2021
            [theme] => violet
            [season] => Advent
            [feast] => Thursday after Fourth Sunday of Advent
            [description] => Feria
            [liturgical-colour] => Violet
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [36] => Array
        (
            [date] => 24/12/2021
            [theme] => violet
            [season] => Advent
            [feast] => Christmas Eve
            [description] => Christmas Vigil
            [class] => 2
            [liturgical-colour] => Violet
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [37] => Array
        (
            [date] => 25/12/2021
            [theme] => white
            [season] => Christmas
            [feast] => Christmas Day
            [description] => The birth of Jesus Christ
            [class] => 1
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [38] => Array
        (
            [date] => 26/12/2021
            [theme] => white
            [season] => Christmas
            [feast] => First Sunday after Christmas
            [description] => Christmas 1
            [class] => 2
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [39] => Array
        (
            [date] => 27/12/2021
            [theme] => white
            [season] => Christmas
            [feast] => St John
            [description] => Apostle and Evangelist
            [class] => 4
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [40] => Array
        (
            [date] => 28/12/2021
            [theme] => white
            [season] => Christmas
            [feast] => The Holy Innocents
            [description] => The massacre of male children under two years in Bethlehem by King Herod the Great
            [class] => 4
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [41] => Array
        (
            [date] => 29/12/2021
            [theme] => red
            [season] => Christmas
            [feast] => St Stephen
            [description] => Deacon and Martyr
            [class] => 4
            [liturgical-colour] => Red
            [translated] => Translated from 26 December
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [42] => Array
        (
            [date] => 30/12/2021
            [theme] => white
            [season] => Christmas
            [feast] => Josephine Butler
            [description] => Social reformer, 1906
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [43] => Array
        (
            [date] => 31/12/2021
            [theme] => white
            [season] => Christmas
            [feast] => John Wycliffe
            [description] => Priest, 1384
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [44] => Array
        (
            [date] => 01/01/2022
            [theme] => white
            [season] => Christmas
            [feast] => The Naming of Jesus
            [description] => New Year's Day
            [class] => 2
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [45] => Array
        (
            [date] => 02/01/2022
            [theme] => white
            [season] => Christmas
            [feast] => Second Sunday after Christmas
            [description] => Christmas 2
            [class] => 3
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [46] => Array
        (
            [date] => 03/01/2022
            [theme] => white
            [season] => Christmas
            [feast] => Monday after Second Sunday after Christmas
            [description] => Feria
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [47] => Array
        (
            [date] => 04/01/2022
            [theme] => white
            [season] => Christmas
            [feast] => Tuesday after Second Sunday after Christmas
            [description] => Feria
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [48] => Array
        (
            [date] => 05/01/2022
            [theme] => white
            [season] => Christmas
            [feast] => Wednesday after Second Sunday after Christmas
            [description] => Feria
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [49] => Array
        (
            [date] => 06/01/2022
            [theme] => white
            [season] => Epiphany
            [feast] => The Epiphany
            [description] => The manifestation of Jesus Christ to the Gentiles
            [class] => 1
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [50] => Array
        (
            [date] => 07/01/2022
            [theme] => white
            [season] => Epiphany
            [feast] => Friday after the Epiphany
            [description] => Feria
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [51] => Array
        (
            [date] => 08/01/2022
            [theme] => white
            [season] => Epiphany
            [feast] => Saturday after the Epiphany
            [description] => Feria
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [52] => Array
        (
            [date] => 09/01/2022
            [theme] => white
            [season] => Epiphany
            [feast] => First Sunday after Epiphany
            [description] => The Baptism of the Lord
            [class] => 2
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [53] => Array
        (
            [date] => 10/01/2022
            [theme] => red
            [season] => Epiphany
            [feast] => William Laud
            [description] => Bishop, 1645
            [class] => 6
            [liturgical-colour] => Red
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [54] => Array
        (
            [date] => 11/01/2022
            [theme] => red
            [season] => Epiphany
            [feast] => St David
            [description] => King of Scots, 1153
            [class] => 6
            [liturgical-colour] => Red
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [55] => Array
        (
            [date] => 12/01/2022
            [theme] => green
            [season] => Epiphany
            [feast] => Wednesday after First Sunday after Epiphany
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [56] => Array
        (
            [date] => 13/01/2022
            [theme] => white
            [season] => Epiphany
            [feast] => St Kentigern (or St Mungo)
            [description] => Bishop c.603
            [class] => 4
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [57] => Array
        (
            [date] => 14/01/2022
            [theme] => white
            [season] => Epiphany
            [feast] => St Hilary of Poitiers
            [description] => Bishop and Teacher of the Faith, c.367
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [58] => Array
        (
            [date] => 15/01/2022
            [theme] => green
            [season] => Epiphany
            [feast] => Saturday after First Sunday after Epiphany
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [59] => Array
        (
            [date] => 16/01/2022
            [theme] => green
            [season] => Epiphany
            [feast] => Second Sunday after Epiphany
            [description] => Epiphany 2
            [class] => 3
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [60] => Array
        (
            [date] => 17/01/2022
            [theme] => white
            [season] => Epiphany
            [feast] => St Antony of Egypt
            [description] => Abbot, 356
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [61] => Array
        (
            [date] => 18/01/2022
            [theme] => white
            [season] => Epiphany
            [feast] => The Confession of St Peter
            [description] => St Peter proclaims Jesus to be the Christ
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [62] => Array
        (
            [date] => 19/01/2022
            [theme] => green
            [season] => Epiphany
            [feast] => Wednesday after Second Sunday after Epiphany
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [63] => Array
        (
            [date] => 20/01/2022
            [theme] => green
            [season] => Epiphany
            [feast] => Thursday after Second Sunday after Epiphany
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [64] => Array
        (
            [date] => 21/01/2022
            [theme] => red
            [season] => Epiphany
            [feast] => St Agnes
            [description] => Martyr, c.304
            [class] => 6
            [liturgical-colour] => Red
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [65] => Array
        (
            [date] => 22/01/2022
            [theme] => green
            [season] => Epiphany
            [feast] => Saturday after Second Sunday after Epiphany
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [66] => Array
        (
            [date] => 23/01/2022
            [theme] => green
            [season] => Epiphany
            [feast] => Third Sunday after Epiphany
            [description] => Epiphany 3
            [class] => 3
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [67] => Array
        (
            [date] => 24/01/2022
            [theme] => white
            [season] => Epiphany
            [feast] => Francis de Sales
            [description] => Bishop, 1622
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [68] => Array
        (
            [date] => 25/01/2022
            [theme] => white
            [season] => Epiphany
            [feast] => The Conversion of St Paul
            [description] => Apostle
            [class] => 4
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [69] => Array
        (
            [date] => 26/01/2022
            [theme] => white
            [season] => Epiphany
            [feast] => St Timothy and St Titus
            [description] => Bishops
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [70] => Array
        (
            [date] => 27/01/2022
            [theme] => white
            [season] => Epiphany
            [feast] => St John Chrysostom
            [description] => Bishop and Teacher of the Faith, 407
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [71] => Array
        (
            [date] => 28/01/2022
            [theme] => white
            [season] => Epiphany
            [feast] => St Thomas Aquinas
            [description] => Teacher of the Faith, 1274
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [72] => Array
        (
            [date] => 29/01/2022
            [theme] => green
            [season] => Epiphany
            [feast] => Saturday after Third Sunday after Epiphany
            [description] => Feria
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [73] => Array
        (
            [date] => 30/01/2022
            [theme] => green
            [season] => Epiphany
            [feast] => Fourth Sunday after Epiphany
            [description] => Epiphany 4
            [class] => 3
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [74] => Array
        (
            [date] => 31/01/2022
            [theme] => red
            [season] => Epiphany
            [feast] => Charles Mackenzie of Central Africa
            [description] => Bishop, Missionary and Martyr, 1862
            [class] => 6
            [liturgical-colour] => Red
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [75] => Array
        (
            [date] => 01/02/2022
            [theme] => white
            [season] => Epiphany
            [feast] => St Bride of Kildare
            [description] => Abbess, c.525
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [76] => Array
        (
            [date] => 02/02/2022
            [theme] => white
            [season] => Epiphany
            [feast] => The Presentation of the Lord
            [description] => Candlemas
            [class] => 2
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [77] => Array
        (
            [date] => 03/02/2022
            [theme] => red
            [season] => Epiphany
            [feast] => Saints and Martyrs of Europe
            [class] => 6
            [liturgical-colour] => Red
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [78] => Array
        (
            [date] => 04/02/2022
            [theme] => green
            [season] => Epiphany
            [feast] => Friday after Fourth Sunday after Epiphany
            [description] => Feria
            [liturgical-colour] => Green
            [bishop] => Ordination of the Rt Revd Kevin Pearson as Bishop of Glasgow and Galloway 2011—translated from Argyll and the Isles, 1 July 2020
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [79] => Array
        (
            [date] => 05/02/2022
            [theme] => green
            [season] => Epiphany
            [feast] => Saturday after Fourth Sunday after Epiphany
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [80] => Array
        (
            [date] => 06/02/2022
            [theme] => green
            [season] => Epiphany
            [feast] => Fifth Sunday after Epiphany
            [description] => Epiphany 5
            [class] => 3
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [81] => Array
        (
            [date] => 07/02/2022
            [theme] => red
            [season] => Epiphany
            [feast] => Paul Miki and the Martyrs of Japan
            [description] => Priest and Martyrs, 1597
            [class] => 6
            [liturgical-colour] => Red
            [translated] => Translated from 6 February
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [82] => Array
        (
            [date] => 08/02/2022
            [theme] => green
            [season] => Epiphany
            [feast] => Tuesday after Fifth Sunday after Epiphany
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [83] => Array
        (
            [date] => 09/02/2022
            [theme] => green
            [season] => Epiphany
            [feast] => Wednesday after Fifth Sunday after Epiphany
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [84] => Array
        (
            [date] => 10/02/2022
            [theme] => white
            [season] => Epiphany
            [feast] => St Scholastica
            [description] => Religious, 543
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [85] => Array
        (
            [date] => 11/02/2022
            [theme] => green
            [season] => Epiphany
            [feast] => Friday after Fifth Sunday after Epiphany
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [86] => Array
        (
            [date] => 12/02/2022
            [theme] => green
            [season] => Epiphany
            [feast] => Saturday after Fifth Sunday after Epiphany
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [87] => Array
        (
            [date] => 13/02/2022
            [theme] => green
            [season] => Epiphany
            [feast] => Sixth Sunday after Epiphany
            [description] => Epiphany 6
            [class] => 3
            [liturgical-colour] => Green
            [spb] => SPB Septuagesima (Violet)
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [88] => Array
        (
            [date] => 14/02/2022
            [theme] => white
            [season] => Epiphany
            [feast] => St Cyril and St Methodius
            [description] => Monk, 869 and Bishop, 885, Apostles of the Slavs
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [89] => Array
        (
            [date] => 15/02/2022
            [theme] => white
            [season] => Epiphany
            [feast] => Thomas Bray
            [description] => Priest and Missionary, 1730
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [90] => Array
        (
            [date] => 16/02/2022
            [theme] => green
            [season] => Epiphany
            [feast] => Wednesday after Sixth Sunday after Epiphany
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [91] => Array
        (
            [date] => 17/02/2022
            [theme] => white
            [season] => Epiphany
            [feast] => St Finan of Lindisfarne
            [description] => Bishop, 661
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [92] => Array
        (
            [date] => 18/02/2022
            [theme] => white
            [season] => Epiphany
            [feast] => St Colman of Lindisfarne
            [description] => Bishop, 676
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [93] => Array
        (
            [date] => 19/02/2022
            [theme] => white
            [season] => Epiphany
            [feast] => Martin Luther
            [description] => Priest and Reformer, 1546
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [94] => Array
        (
            [date] => 20/02/2022
            [theme] => green
            [season] => Epiphany
            [feast] => Seventh Sunday after Epiphany
            [description] => Epiphany 7
            [class] => 3
            [liturgical-colour] => Green
            [spb] => SPB Sexagesima (Violet)
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [95] => Array
        (
            [date] => 21/02/2022
            [theme] => green
            [season] => Epiphany
            [feast] => Monday after Seventh Sunday after Epiphany
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [96] => Array
        (
            [date] => 22/02/2022
            [theme] => green
            [season] => Epiphany
            [feast] => Tuesday after Seventh Sunday after Epiphany
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [97] => Array
        (
            [date] => 23/02/2022
            [theme] => red
            [season] => Epiphany
            [feast] => St Polycarp of Smyrna
            [description] => Bishop and Martyr, c.156
            [class] => 6
            [liturgical-colour] => Red
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [98] => Array
        (
            [date] => 24/02/2022
            [theme] => green
            [season] => Epiphany
            [feast] => Thursday after Seventh Sunday after Epiphany
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [99] => Array
        (
            [date] => 25/02/2022
            [theme] => green
            [season] => Epiphany
            [feast] => Friday after Seventh Sunday after Epiphany
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [100] => Array
        (
            [date] => 26/02/2022
            [theme] => green
            [season] => Epiphany
            [feast] => Saturday after Seventh Sunday after Epiphany
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [101] => Array
        (
            [date] => 27/02/2022
            [theme] => green
            [season] => Epiphany
            [feast] => Sunday before Lent
            [description] => Transfiguration
            [class] => 3
            [liturgical-colour] => Green
            [spb] => SPB Quinquagesima (Violet)
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [102] => Array
        (
            [date] => 28/02/2022
            [theme] => green
            [season] => Epiphany
            [feast] => Monday after Sunday before Lent
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [103] => Array
        (
            [date] => 01/03/2022
            [theme] => white
            [season] => Epiphany
            [feast] => St David
            [description] => Bishop and Patron of Wales, c.601
            [class] => 6
            [liturgical-colour] => White
            [bishop] => Ordination of the Rt Revd Anne Dyer as Bishop of Aberdeen and Orkney, 2018
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [104] => Array
        (
            [date] => 02/03/2022
            [theme] => violet
            [season] => Lent
            [feast] => Ash Wednesday
            [description] => The beginning of Lent
            [class] => 1
            [liturgical-colour] => Violet or Lenten Array
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [105] => Array
        (
            [date] => 03/03/2022
            [theme] => white
            [season] => Lent
            [feast] => John and Charles Wesley
            [description] => Priests, 1791 and 1788
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [106] => Array
        (
            [date] => 04/03/2022
            [theme] => red
            [season] => Lent
            [feast] => St Adrian of May Island and Companions
            [description] => Abbot and Martyrs, 875
            [class] => 6
            [liturgical-colour] => Red
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [107] => Array
        (
            [date] => 05/03/2022
            [theme] => white
            [season] => Lent
            [feast] => St Chad of Lichfield
            [description] => Bishop, 672
            [class] => 6
            [liturgical-colour] => White
            [translated] => Translated from 2 March
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [108] => Array
        (
            [date] => 06/03/2022
            [theme] => violet
            [season] => Lent
            [feast] => First Sunday of Lent
            [description] => Lent 1
            [class] => 1
            [liturgical-colour] => Violet or Lenten Array
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [109] => Array
        (
            [date] => 07/03/2022
            [theme] => red
            [season] => Lent
            [feast] => St Perpetua and her Companions
            [description] => Martyrs, 203
            [class] => 6
            [liturgical-colour] => Red
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [110] => Array
        (
            [date] => 08/03/2022
            [theme] => white
            [season] => Lent
            [feast] => St Duthac
            [description] => Bishop, 1068
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [111] => Array
        (
            [date] => 09/03/2022
            [theme] => white
            [season] => Lent
            [feast] => St Baldred
            [description] => Bishop, 608 [6] White
            [class] => 6
            [liturgical-colour] => White
            [translated] => Translated from 6 March
            [emberogation] => Ember Day
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [112] => Array
        (
            [date] => 10/03/2022
            [theme] => red
            [season] => Lent
            [feast] => St Kessog
            [description] => Bishop, c.700
            [class] => 6
            [liturgical-colour] => Red
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [113] => Array
        (
            [date] => 11/03/2022
            [theme] => violet
            [season] => Lent
            [feast] => Friday after First Sunday of Lent
            [description] => Feria
            [liturgical-colour] => Violet or Lenten Array
            [emberogation] => Ember Day
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [114] => Array
        (
            [date] => 12/03/2022
            [theme] => violet
            [season] => Lent
            [feast] => Saturday after First Sunday of Lent
            [description] => Feria
            [liturgical-colour] => Violet or Lenten Array
            [emberogation] => Ember Day
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [115] => Array
        (
            [date] => 13/03/2022
            [theme] => violet
            [season] => Lent
            [feast] => Second Sunday of Lent
            [description] => Lent 2
            [class] => 1
            [liturgical-colour] => Violet or Lenten Array
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [116] => Array
        (
            [date] => 14/03/2022
            [theme] => violet
            [season] => Lent
            [feast] => Monday after Second Sunday of Lent
            [description] => Feria
            [liturgical-colour] => Violet or Lenten Array
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [117] => Array
        (
            [date] => 15/03/2022
            [theme] => violet
            [season] => Lent
            [feast] => Tuesday after Second Sunday of Lent
            [description] => Feria
            [liturgical-colour] => Violet or Lenten Array
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [118] => Array
        (
            [date] => 16/03/2022
            [theme] => white
            [season] => Lent
            [feast] => St Boniface of Ross
            [description] => Bishop, 8th century
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [119] => Array
        (
            [date] => 17/03/2022
            [theme] => white
            [season] => Lent
            [feast] => St Patrick
            [description] => Bishop and Patron of Ireland, c.461
            [class] => 4
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [120] => Array
        (
            [date] => 18/03/2022
            [theme] => white
            [season] => Lent
            [feast] => St Cyril of Jerusalem
            [description] => Bishop and Teacher of the Faith, 386
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [121] => Array
        (
            [date] => 19/03/2022
            [theme] => white
            [season] => Lent
            [feast] => St Joseph of Nazareth
            [description] => Husband of St Mary
            [class] => 4
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [122] => Array
        (
            [date] => 20/03/2022
            [theme] => violet
            [season] => Lent
            [feast] => Third Sunday of Lent
            [description] => Lent 3
            [class] => 1
            [liturgical-colour] => Violet or Lenten Array
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [123] => Array
        (
            [date] => 21/03/2022
            [theme] => red
            [season] => Lent
            [feast] => Thomas Cranmer
            [description] => Bishop, 1556
            [class] => 6
            [liturgical-colour] => Red
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [124] => Array
        (
            [date] => 22/03/2022
            [theme] => white
            [season] => Lent
            [feast] => Thomas Ken
            [description] => Bishop, 1711
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [125] => Array
        (
            [date] => 23/03/2022
            [theme] => white
            [season] => Lent
            [feast] => St Cuthbert
            [description] => Bishop, 687
            [class] => 6
            [liturgical-colour] => White
            [translated] => Translated from 20 March
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [126] => Array
        (
            [date] => 24/03/2022
            [theme] => white
            [season] => Lent
            [feast] => Paul Couturier
            [description] => Priest, 1953
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [127] => Array
        (
            [date] => 25/03/2022
            [theme] => white
            [season] => Lent
            [feast] => The Annunciation of the Lord
            [class] => 2
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [128] => Array
        (
            [date] => 26/03/2022
            [theme] => violet
            [season] => Lent
            [feast] => Saturday after Third Sunday of Lent
            [description] => Feria
            [liturgical-colour] => Violet or Lenten Array
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [129] => Array
        (
            [date] => 27/03/2022
            [theme] => violet
            [season] => Lent
            [feast] => Fourth Sunday of Lent
            [description] => Lent 4 (Mothering Sunday)
            [class] => 1
            [liturgical-colour] => Violet or Lenten Array
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [130] => Array
        (
            [date] => 28/03/2022
            [theme] => white
            [season] => Lent
            [feast] => Patrick Forbes and the Aberdeen Doctors
            [description] => Bishop, 1635 and Teachers of the Faith
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [131] => Array
        (
            [date] => 29/03/2022
            [theme] => white
            [season] => Lent
            [feast] => John Keble
            [description] => Priest, 1866
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [132] => Array
        (
            [date] => 30/03/2022
            [theme] => violet
            [season] => Lent
            [feast] => Wednesday after Fourth Sunday of Lent
            [description] => Feria
            [liturgical-colour] => Violet or Lenten Array
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [133] => Array
        (
            [date] => 31/03/2022
            [theme] => violet
            [season] => Lent
            [feast] => Thursday after Fourth Sunday of Lent
            [description] => Feria
            [liturgical-colour] => Violet or Lenten Array
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [134] => Array
        (
            [date] => 01/04/2022
            [theme] => white
            [season] => Lent
            [feast] => St Gilbert of Caithness
            [description] => Bishop, 1245
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [135] => Array
        (
            [date] => 02/04/2022
            [theme] => violet
            [season] => Lent
            [feast] => Saturday after Fourth Sunday of Lent
            [description] => Feria
            [liturgical-colour] => Violet or Lenten Array
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [136] => Array
        (
            [date] => 03/04/2022
            [theme] => violet
            [season] => Passiontide
            [feast] => Fifth Sunday of Lent
            [description] => Passion Sunday: The beginning of Passiontide
            [class] => 1
            [liturgical-colour] => Violet or Lenten Array
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [137] => Array
        (
            [date] => 04/04/2022
            [theme] => violet
            [season] => Passiontide
            [feast] => Monday after Fifth Sunday of Lent
            [description] => Feria
            [liturgical-colour] => Violet or Lenten Array
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [138] => Array
        (
            [date] => 05/04/2022
            [theme] => violet
            [season] => Passiontide
            [feast] => Tuesday after Fifth Sunday of Lent
            [description] => Feria
            [liturgical-colour] => Violet or Lenten Array
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [139] => Array
        (
            [date] => 06/04/2022
            [theme] => violet
            [season] => Passiontide
            [feast] => Wednesday after Fifth Sunday of Lent
            [description] => Feria
            [liturgical-colour] => Violet or Lenten Array
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [140] => Array
        (
            [date] => 07/04/2022
            [theme] => violet
            [season] => Passiontide
            [feast] => Thursday after Fifth Sunday of Lent
            [description] => Feria
            [liturgical-colour] => Violet or Lenten Array
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [141] => Array
        (
            [date] => 08/04/2022
            [theme] => violet
            [season] => Passiontide
            [feast] => Friday after Fifth Sunday of Lent
            [description] => Feria
            [liturgical-colour] => Violet or Lenten Array
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [142] => Array
        (
            [date] => 09/04/2022
            [theme] => red
            [season] => Passiontide
            [feast] => Dietrich Bonhoeffer
            [description] => Theologian and Martyr, 1945
            [class] => 6
            [liturgical-colour] => Red
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [143] => Array
        (
            [date] => 10/04/2022
            [theme] => red
            [season] => Holy Week
            [feast] => The Sunday of the Passion
            [description] => Palm Sunday: The beginning of Holy Week
            [class] => 1
            [liturgical-colour] => Red or Violet
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [144] => Array
        (
            [date] => 11/04/2022
            [theme] => red
            [season] => Holy Week
            [feast] => Monday of Holy Week
            [class] => 1
            [liturgical-colour] => Red or Violet
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [145] => Array
        (
            [date] => 12/04/2022
            [theme] => red
            [season] => Holy Week
            [feast] => Tuesday of Holy Week
            [class] => 1
            [liturgical-colour] => Red or Violet
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [146] => Array
        (
            [date] => 13/04/2022
            [theme] => red
            [season] => Holy Week
            [feast] => Wednesday of Holy Week
            [class] => 1
            [liturgical-colour] => Red or Violet
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [147] => Array
        (
            [date] => 14/04/2022
            [theme] => white
            [season] => Holy Week
            [feast] => Maundy Thursday
            [description] => Paschal Triduum
            [class] => 1
            [liturgical-colour] => White at the Eucharist
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [148] => Array
        (
            [date] => 15/04/2022
            [theme] => red
            [season] => Holy Week
            [feast] => Good Friday
            [description] => Paschal Triduum
            [class] => 1
            [liturgical-colour] => Red for the Liturgy; Hangings removed
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [149] => Array
        (
            [date] => 16/04/2022
            [theme] => white
            [season] => Holy Week
            [feast] => Holy Saturday
            [description] => Paschal Triduum: Easter Eve
            [class] => 1
            [liturgical-colour] => Hangings removed; White at the Easter Vigil
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [150] => Array
        (
            [date] => 17/04/2022
            [theme] => white
            [season] => Easter
            [feast] => Easter Day
            [description] => Alleluia! Christ is risen!
            [class] => 1
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [151] => Array
        (
            [date] => 18/04/2022
            [theme] => white
            [season] => Easter
            [feast] => Monday of Easter week
            [description] => Easter week
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [152] => Array
        (
            [date] => 19/04/2022
            [theme] => white
            [season] => Easter
            [feast] => Tuesday of Easter week
            [description] => Easter week
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [153] => Array
        (
            [date] => 20/04/2022
            [theme] => white
            [season] => Easter
            [feast] => Wednesday of Easter week
            [description] => Easter week
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [154] => Array
        (
            [date] => 21/04/2022
            [theme] => white
            [season] => Easter
            [feast] => Thursday of Easter week
            [description] => Easter week
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [155] => Array
        (
            [date] => 22/04/2022
            [theme] => white
            [season] => Easter
            [feast] => Friday of Easter week
            [description] => Easter week
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [156] => Array
        (
            [date] => 23/04/2022
            [theme] => white
            [season] => Easter
            [feast] => Saturday of Easter week
            [description] => Easter week
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [157] => Array
        (
            [date] => 24/04/2022
            [theme] => white
            [season] => Easter
            [feast] => Second Sunday of Easter
            [description] => Easter 2
            [class] => 1
            [liturgical-colour] => White
            [spb] => SPB First Sunday after Easter
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [158] => Array
        (
            [date] => 25/04/2022
            [theme] => white
            [season] => Easter
            [feast] => St Mark
            [description] => Evangelist
            [class] => 4
            [liturgical-colour] => Red
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [159] => Array
        (
            [date] => 26/04/2022
            [theme] => white
            [season] => Easter
            [feast] => Albert Ernest Laurie
            [description] => Priest, 1937
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [160] => Array
        (
            [date] => 27/04/2022
            [theme] => white
            [season] => Easter
            [feast] => Wednesday after Second Sunday of Easter
            [description] => Feria
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [161] => Array
        (
            [date] => 28/04/2022
            [theme] => white
            [season] => Easter
            [feast] => Thursday after Second Sunday of Easter
            [description] => Feria
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [162] => Array
        (
            [date] => 29/04/2022
            [theme] => white
            [season] => Easter
            [feast] => St Catherine of Siena
            [description] => Mystic and Teacher of the Faith, 1380
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [163] => Array
        (
            [date] => 30/04/2022
            [theme] => white
            [season] => Easter
            [feast] => Saturday after Second Sunday of Easter
            [description] => Feria
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [164] => Array
        (
            [date] => 01/05/2022
            [theme] => white
            [season] => Easter
            [feast] => Third Sunday of Easter
            [description] => Easter 3
            [class] => 1
            [liturgical-colour] => White
            [spb] => SPB Second Sunday after Easter
            [bishop] => Consecretion of the Rt Rev Dr Keith Riglin as the Bishop of Argyll and the Isles, 2021
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [165] => Array
        (
            [date] => 02/05/2022
            [theme] => red
            [season] => Easter
            [feast] => St Philip and St James
            [description] => Apostles
            [class] => 4
            [liturgical-colour] => Red
            [translated] => Translated from 1 May
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [166] => Array
        (
            [date] => 03/05/2022
            [theme] => white
            [season] => Easter
            [feast] => St Athanasius
            [description] => Bishop and Teacher of the Faith, 373
            [class] => 6
            [liturgical-colour] => White
            [translated] => Translated from 2 May
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [167] => Array
        (
            [date] => 04/05/2022
            [theme] => white
            [season] => Easter
            [feast] => Wednesday after Third Sunday of Easter
            [description] => Feria
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [168] => Array
        (
            [date] => 05/05/2022
            [theme] => white
            [season] => Easter
            [feast] => Thursday after Third Sunday of Easter
            [description] => Feria
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [169] => Array
        (
            [date] => 06/05/2022
            [theme] => white
            [season] => Easter
            [feast] => Friday after Third Sunday of Easter
            [description] => Feria
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [170] => Array
        (
            [date] => 07/05/2022
            [theme] => white
            [season] => Easter
            [feast] => Saturday after Third Sunday of Easter
            [description] => Feria
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [171] => Array
        (
            [date] => 08/05/2022
            [theme] => white
            [season] => Easter
            [feast] => Fourth Sunday of Easter
            [description] => Easter 4 (Vocations Sunday)
            [class] => 1
            [liturgical-colour] => White
            [spb] => SPB Third Sunday after Easter
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [172] => Array
        (
            [date] => 09/05/2022
            [theme] => white
            [season] => Easter
            [feast] => St Julian of Norwich
            [description] => Theologian, Anchoress and Mystic, c.1417
            [class] => 6
            [liturgical-colour] => White
            [translated] => Translated from 8 May
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [173] => Array
        (
            [date] => 10/05/2022
            [theme] => white
            [season] => Easter
            [feast] => Tuesday after Fourth Sunday of Easter
            [description] => Feria
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [174] => Array
        (
            [date] => 11/05/2022
            [theme] => white
            [season] => Easter
            [feast] => Wednesday after Fourth Sunday of Easter
            [description] => Feria
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [175] => Array
        (
            [date] => 12/05/2022
            [theme] => white
            [season] => Easter
            [feast] => Thomas Rattray
            [description] => Bishop, 1743
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [176] => Array
        (
            [date] => 13/05/2022
            [theme] => white
            [season] => Easter
            [feast] => Friday after Fourth Sunday of Easter
            [description] => Feria
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [177] => Array
        (
            [date] => 14/05/2022
            [theme] => red
            [season] => Easter
            [feast] => St Matthias
            [description] => Apostle
            [class] => 4
            [liturgical-colour] => Red
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [178] => Array
        (
            [date] => 15/05/2022
            [theme] => white
            [season] => Easter
            [feast] => Fifth Sunday of Easter
            [description] => Easter 5
            [class] => 1
            [liturgical-colour] => White
            [spb] => SPB Fourth Sunday after Easter
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [179] => Array
        (
            [date] => 16/05/2022
            [theme] => white
            [season] => Easter
            [feast] => Monday after Fifth Sunday of Easter
            [description] => Feria
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [180] => Array
        (
            [date] => 17/05/2022
            [theme] => white
            [season] => Easter
            [feast] => Tuesday after Fifth Sunday of Easter
            [description] => Feria
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [181] => Array
        (
            [date] => 18/05/2022
            [theme] => white
            [season] => Easter
            [feast] => Wednesday after Fifth Sunday of Easter
            [description] => Feria
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [182] => Array
        (
            [date] => 19/05/2022
            [theme] => white
            [season] => Easter
            [feast] => Thursday after Fifth Sunday of Easter
            [description] => Feria
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [183] => Array
        (
            [date] => 20/05/2022
            [theme] => white
            [season] => Easter
            [feast] => Friday after Fifth Sunday of Easter
            [description] => Feria
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [184] => Array
        (
            [date] => 21/05/2022
            [theme] => white
            [season] => Easter
            [feast] => St Helena
            [description] => Mother of Constantine the Great, c.330
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [185] => Array
        (
            [date] => 22/05/2022
            [theme] => white
            [season] => Easter
            [feast] => Sixth Sunday of Easter
            [description] => Easter 6
            [class] => 1
            [liturgical-colour] => White
            [spb] => SPB Fifth Sunday after Easter
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [186] => Array
        (
            [date] => 23/05/2022
            [theme] => red
            [season] => Easter
            [feast] => St William of Perth (or Rochester)
            [description] => Martyr, 1201
            [class] => 6
            [liturgical-colour] => Red
            [emberogation] => Rogation Day
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [187] => Array
        (
            [date] => 24/05/2022
            [theme] => white
            [season] => Easter
            [feast] => Tuesday after Sixth Sunday of Easter
            [description] => Feria
            [liturgical-colour] => White
            [emberogation] => Rogation Day
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [188] => Array
        (
            [date] => 25/05/2022
            [theme] => white
            [season] => Easter
            [feast] => St Bede the Venerable, of Jarrow
            [description] => Teacher of the Faith, 735
            [class] => 6
            [liturgical-colour] => White
            [emberogation] => Rogation Day
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [189] => Array
        (
            [date] => 26/05/2022
            [theme] => white
            [season] => Easter
            [feast] => Ascension Day
            [description] => Feast of the Ascension of Jesus Christ
            [class] => 1
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [190] => Array
        (
            [date] => 27/05/2022
            [theme] => white
            [season] => Easter
            [feast] => St Augustine of Canterbury
            [description] => Bishop, c.604
            [class] => 6
            [liturgical-colour] => White
            [translated] => Translated from 26 May
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [191] => Array
        (
            [date] => 28/05/2022
            [theme] => white
            [season] => Easter
            [feast] => Saturday after Sixth Sunday of Easter
            [description] => Feria
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [192] => Array
        (
            [date] => 29/05/2022
            [theme] => white
            [season] => Easter
            [feast] => Seventh Sunday of Easter
            [description] => Easter 7
            [class] => 1
            [liturgical-colour] => White
            [spb] => SPB Sunday after Ascension Day
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [193] => Array
        (
            [date] => 30/05/2022
            [theme] => white
            [season] => Easter
            [feast] => Monday after Seventh Sunday of Easter
            [description] => Feria
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [194] => Array
        (
            [date] => 31/05/2022
            [theme] => white
            [season] => Easter
            [feast] => The Visit of St Mary to St Elizabeth
            [class] => 4
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [195] => Array
        (
            [date] => 01/06/2022
            [theme] => red
            [season] => Easter
            [feast] => St Justin of Rome
            [description] => Martyr, c.165
            [class] => 6
            [liturgical-colour] => Red
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [196] => Array
        (
            [date] => 02/06/2022
            [theme] => white
            [season] => Easter
            [feast] => Thursday after Seventh Sunday of Easter
            [description] => Feria
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [197] => Array
        (
            [date] => 03/06/2022
            [theme] => red
            [season] => Easter
            [feast] => Charles Lwanga and his companions, 1886; Janani Luwum, Bishop, 1977
            [description] => Martyrs of Uganda
            [class] => 6
            [liturgical-colour] => Red
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [198] => Array
        (
            [date] => 04/06/2022
            [theme] => white
            [season] => Easter
            [feast] => Pope John XXIII
            [description] => Bishop of Rome, Reformer, 1963
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [199] => Array
        (
            [date] => 05/06/2022
            [theme] => red
            [season] => Pentecost
            [feast] => The Day of Pentecost
            [description] => Whitsunday
            [class] => 1
            [liturgical-colour] => Red
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [200] => Array
        (
            [date] => 06/06/2022
            [theme] => red
            [season] => Pentecost
            [feast] => St Boniface of Mainz
            [description] => Bishop, Missionary and Martyr, 754
            [class] => 6
            [liturgical-colour] => Red
            [translated] => Translated from 5 June
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [201] => Array
        (
            [date] => 07/06/2022
            [theme] => white
            [season] => Pentecost
            [feast] => Tuesday after the Day of Pentecost (Whitsunday)
            [description] => Feria
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [202] => Array
        (
            [date] => 08/06/2022
            [theme] => white
            [season] => Pentecost
            [feast] => St Ephrem the Syrian
            [description] => Deacon and Teacher of the Faith, 373
            [class] => 6
            [liturgical-colour] => White
            [emberogation] => Ember Day
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [203] => Array
        (
            [date] => 09/06/2022
            [theme] => white
            [season] => Pentecost
            [feast] => St Columba of Iona
            [description] => Abbot, 597
            [class] => 4
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [204] => Array
        (
            [date] => 10/06/2022
            [theme] => white
            [season] => Pentecost
            [feast] => Friday after the Day of Pentecost (Whitsunday)
            [description] => Feria
            [liturgical-colour] => White
            [emberogation] => Ember Day
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [205] => Array
        (
            [date] => 11/06/2022
            [theme] => red
            [season] => Pentecost
            [feast] => St Barnabus
            [description] => Apostle
            [class] => 4
            [liturgical-colour] => Red
            [emberogation] => Ember Day
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [206] => Array
        (
            [date] => 12/06/2022
            [theme] => white
            [season] => Pentecost
            [feast] => Trinity Sunday
            [description] => Pentecost 1
            [class] => 2
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [207] => Array
        (
            [date] => 13/06/2022
            [theme] => white
            [season] => Pentecost
            [feast] => John Skinner and John Skinner, 
            [description] => Priest, 1807 and Bishop, 1816
            [class] => 6
            [liturgical-colour] => White
            [translated] => Translated from 12 June
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [208] => Array
        (
            [date] => 14/06/2022
            [theme] => white
            [season] => Pentecost
            [feast] => St Basil of Caesarea, 379; St Gregory of Nazianzus, c.390; St Gregory of Nyssa, 394
            [description] => Bishops and Teachers of the Faith
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [209] => Array
        (
            [date] => 15/06/2022
            [theme] => white
            [season] => Pentecost
            [feast] => Wednesday after Trinity Sunday
            [description] => Feria
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [210] => Array
        (
            [date] => 16/06/2022
            [theme] => white
            [season] => Pentecost
            [feast] => Corpus Christi
            [description] => Thanksgiving for Holy Communion
            [class] => 5
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [211] => Array
        (
            [date] => 17/06/2022
            [theme] => white
            [season] => Pentecost
            [feast] => Friday after Trinity Sunday
            [description] => Feria
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [212] => Array
        (
            [date] => 18/06/2022
            [theme] => red
            [season] => Pentecost
            [feast] => Bernard Mizeki
            [description] => Martyr, 1896
            [class] => 6
            [liturgical-colour] => Red
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [213] => Array
        (
            [date] => 19/06/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Second Sunday after Pentecost
            [description] => Pentecost 2
            [class] => 3
            [liturgical-colour] => Green
            [spb] => SPB Trinity 1
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [214] => Array
        (
            [date] => 20/06/2022
            [theme] => red
            [season] => Pentecost
            [feast] => St Fillan
            [description] => Abbot, c.750
            [class] => 6
            [liturgical-colour] => Red
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [215] => Array
        (
            [date] => 21/06/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Tuesday after Pentecost 2
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [216] => Array
        (
            [date] => 22/06/2022
            [theme] => red
            [season] => Pentecost
            [feast] => St Alban
            [description] => Martyr, c.303
            [class] => 6
            [liturgical-colour] => Red
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [217] => Array
        (
            [date] => 23/06/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Thursday after Pentecost 2
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [218] => Array
        (
            [date] => 24/06/2022
            [theme] => white
            [season] => Pentecost
            [feast] => The Birth of St John the Baptist
            [description] => Preacher, 1st century BC
            [class] => 4
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [219] => Array
        (
            [date] => 25/06/2022
            [theme] => white
            [season] => Pentecost
            [feast] => St Moluag of Lismore
            [description] => Bishop, 592
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [220] => Array
        (
            [date] => 26/06/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Third Sunday after Pentecost
            [description] => Pentecost 3
            [class] => 3
            [liturgical-colour] => Green
            [spb] => SPB Trinity 2
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [221] => Array
        (
            [date] => 27/06/2022
            [theme] => white
            [season] => Pentecost
            [feast] => Alexander Jolly
            [description] => Bishop, 1838
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [222] => Array
        (
            [date] => 28/06/2022
            [theme] => white
            [season] => Pentecost
            [feast] => St Irenaeus of Lyons
            [description] => Bishop and Teacher of the Faith, c.202
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [223] => Array
        (
            [date] => 29/06/2022
            [theme] => red
            [season] => Pentecost
            [feast] => St Peter (or St Peter and St Paul)
            [description] => Apostles
            [class] => 4
            [liturgical-colour] => Red
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [224] => Array
        (
            [date] => 30/06/2022
            [theme] => white
            [season] => Pentecost
            [feast] => Robert Leighton
            [description] => Bishop, 1684
            [class] => 6
            [liturgical-colour] => White
            [translated] => Translated from 26 June
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [225] => Array
        (
            [date] => 01/07/2022
            [theme] => white
            [season] => Pentecost
            [feast] => St Serf
            [description] => Bishop, c.500
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [226] => Array
        (
            [date] => 02/07/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Saturday after Pentecost 3
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [227] => Array
        (
            [date] => 03/07/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Fourth Sunday after Pentecost
            [description] => Pentecost 4
            [class] => 3
            [liturgical-colour] => Green
            [spb] => SPB Trinity 3
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [228] => Array
        (
            [date] => 04/07/2022
            [theme] => red
            [season] => Pentecost
            [feast] => St Thomas
            [description] => Apostle
            [class] => 4
            [liturgical-colour] => Red
            [translated] => Translated from 3 July (if not kept on 21 December)
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [229] => Array
        (
            [date] => 05/07/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Tuesday after Pentecost 4
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [230] => Array
        (
            [date] => 06/07/2022
            [theme] => white
            [season] => Pentecost
            [feast] => St Palladius
            [description] => Bishop, c.450
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [231] => Array
        (
            [date] => 07/07/2022
            [theme] => white
            [season] => Pentecost
            [feast] => St Boisil
            [description] => Prior of Melrose, c.642
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [232] => Array
        (
            [date] => 08/07/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Friday after Pentecost 4
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [233] => Array
        (
            [date] => 09/07/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Saturday after Pentecost 4
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [234] => Array
        (
            [date] => 10/07/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Fifth Sunday after Pentecost
            [description] => Pentecost 5
            [class] => 3
            [liturgical-colour] => Green
            [spb] => SPB Trinity 4
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [235] => Array
        (
            [date] => 11/07/2022
            [theme] => white
            [season] => Pentecost
            [feast] => St Benedict of Nursia
            [description] => Abbot, c.550
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [236] => Array
        (
            [date] => 12/07/2022
            [theme] => white
            [season] => Pentecost
            [feast] => St Drostan of Deer
            [description] => Abbot, c.600
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [237] => Array
        (
            [date] => 13/07/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Wednesday after Pentecost 5
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [238] => Array
        (
            [date] => 14/07/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Thursday after Pentecost 5
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [239] => Array
        (
            [date] => 15/07/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Friday after Pentecost 5
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [240] => Array
        (
            [date] => 16/07/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Saturday after Pentecost 5
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [241] => Array
        (
            [date] => 17/07/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Sixth Sunday after Pentecost
            [description] => Pentecost 6
            [class] => 3
            [liturgical-colour] => Green
            [spb] => SPB Trinity 5
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [242] => Array
        (
            [date] => 18/07/2022
            [theme] => red
            [season] => Pentecost
            [feast] => Jane Haining
            [description] => Missionary and Martyr, 1944
            [class] => 6
            [liturgical-colour] => Red
            [translated] => Translated from 17 July
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [243] => Array
        (
            [date] => 19/07/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Tuesday after Pentecost 6
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [244] => Array
        (
            [date] => 20/07/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Wednesday after Pentecost 6
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [245] => Array
        (
            [date] => 21/07/2022
            [theme] => white
            [season] => Pentecost
            [feast] => William Wilberforce
            [description] => Politician and Philanthropist, 1833
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [246] => Array
        (
            [date] => 22/07/2022
            [theme] => white
            [season] => Pentecost
            [feast] => St Mary Magdalene
            [description] => Disciple of Jesus and witness of the crucifixion
            [class] => 4
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [247] => Array
        (
            [date] => 23/07/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Saturday after Pentecost 6
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [248] => Array
        (
            [date] => 24/07/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Seventh Sunday after Pentecost
            [description] => Pentecost 7
            [class] => 3
            [liturgical-colour] => Green
            [spb] => SPB Trinity 6
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [249] => Array
        (
            [date] => 25/07/2022
            [theme] => red
            [season] => Pentecost
            [feast] => St James
            [description] => Apostle
            [class] => 4
            [liturgical-colour] => Red
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [250] => Array
        (
            [date] => 26/07/2022
            [theme] => white
            [season] => Pentecost
            [feast] => St Anne and St Joachim
            [description] => Parents of Mary, Mother of the Lord
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [251] => Array
        (
            [date] => 27/07/2022
            [theme] => white
            [season] => Pentecost
            [feast] => John Comper
            [description] => Priest, 1903
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [252] => Array
        (
            [date] => 28/07/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Thursday after Pentecost 7
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [253] => Array
        (
            [date] => 29/07/2022
            [theme] => white
            [season] => Pentecost
            [feast] => St Martha and St Mary of Bethany
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [254] => Array
        (
            [date] => 30/07/2022
            [theme] => white
            [season] => Pentecost
            [feast] => St Silas
            [description] => Companion of Saint Paul
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [255] => Array
        (
            [date] => 31/07/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Eighth Sunday after Pentecost
            [description] => Pentecost 8
            [class] => 3
            [liturgical-colour] => Green
            [spb] => SPB Trinity 7
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [256] => Array
        (
            [date] => 01/08/2022
            [theme] => white
            [season] => Pentecost
            [feast] => St Ignatius Loyola
            [description] => Priest and Religious, 1556
            [class] => 6
            [liturgical-colour] => White
            [translated] => Translated from 31 July
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [257] => Array
        (
            [date] => 02/08/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Tuesday after Pentecost 8
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [258] => Array
        (
            [date] => 03/08/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Wednesday after Pentecost 8
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [259] => Array
        (
            [date] => 04/08/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Thursday after Pentecost 8
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [260] => Array
        (
            [date] => 05/08/2022
            [theme] => red
            [season] => Pentecost
            [feast] => St Oswald of Northumbria
            [description] => Martyr, 642
            [class] => 6
            [liturgical-colour] => Red
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [261] => Array
        (
            [date] => 06/08/2022
            [theme] => white
            [season] => Pentecost
            [feast] => The Transfiguration of the Lord
            [class] => 2
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [262] => Array
        (
            [date] => 07/08/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Ninth Sunday after Pentecost
            [description] => Pentecost 9
            [class] => 3
            [liturgical-colour] => Green
            [spb] => SPB Trinity 8
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [263] => Array
        (
            [date] => 08/08/2022
            [theme] => white
            [season] => Pentecost
            [feast] => St Dominic
            [description] => Priest and Friar, 1221
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [264] => Array
        (
            [date] => 09/08/2022
            [theme] => white
            [season] => Pentecost
            [feast] => John Mason Neale
            [description] => Priest, 1866
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [265] => Array
        (
            [date] => 10/08/2022
            [theme] => red
            [season] => Pentecost
            [feast] => St Lawrence
            [description] => Deacon and Martyr, 258
            [class] => 6
            [liturgical-colour] => Red
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [266] => Array
        (
            [date] => 11/08/2022
            [theme] => white
            [season] => Pentecost
            [feast] => St Clare of Assisi
            [description] => Religious, 1253
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [267] => Array
        (
            [date] => 12/08/2022
            [theme] => white
            [season] => Pentecost
            [feast] => St Blane
            [description] => Missionary, c.590
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [268] => Array
        (
            [date] => 13/08/2022
            [theme] => white
            [season] => Pentecost
            [feast] => Jeremy Taylor
            [description] => Bishop, 1667
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [269] => Array
        (
            [date] => 14/08/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Tenth Sunday after Pentecost
            [description] => Pentecost 10
            [class] => 3
            [liturgical-colour] => Green
            [spb] => SPB Trinity 9
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [270] => Array
        (
            [date] => 15/08/2022
            [theme] => white
            [season] => Pentecost
            [feast] => St Mary the Virgin
            [description] => Mother of the Lord
            [class] => 4
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [271] => Array
        (
            [date] => 16/08/2022
            [theme] => red
            [season] => Pentecost
            [feast] => Maximilian Kolbe
            [description] => Priest and Martyr, 1941
            [class] => 6
            [liturgical-colour] => Red
            [translated] => Translated from 14 August
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [272] => Array
        (
            [date] => 17/08/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Wednesday after Pentecost 10
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [273] => Array
        (
            [date] => 18/08/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Thursday after Pentecost 10
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [274] => Array
        (
            [date] => 19/08/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Friday after Pentecost 10
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [275] => Array
        (
            [date] => 20/08/2022
            [theme] => white
            [season] => Pentecost
            [feast] => St Bernard of Clairvaux
            [description] => Abbot and Teacher of the Faith, 1153
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [276] => Array
        (
            [date] => 21/08/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Eleventh Sunday after Pentecost
            [description] => Pentecost 11
            [class] => 3
            [liturgical-colour] => Green
            [spb] => SPB Trinity 10
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [277] => Array
        (
            [date] => 22/08/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Monday after Pentecost 11
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [278] => Array
        (
            [date] => 23/08/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Tuesday after Pentecost 11
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [279] => Array
        (
            [date] => 24/08/2022
            [theme] => red
            [season] => Pentecost
            [feast] => St Bartholomew
            [description] => Apostle
            [class] => 4
            [liturgical-colour] => Red
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [280] => Array
        (
            [date] => 25/08/2022
            [theme] => white
            [season] => Pentecost
            [feast] => St Ebba of Coldingham
            [description] => Abbess, 683
            [class] => 6
            [liturgical-colour] => White
            [bishop] => Ordination of the Rt Revd Andrew Swift as Bishop of Brechin, 2018
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [281] => Array
        (
            [date] => 26/08/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Friday after Pentecost 11
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [282] => Array
        (
            [date] => 27/08/2022
            [theme] => white
            [season] => Pentecost
            [feast] => St Monnica
            [description] => Mother of Augustine of Hippo, 387
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [283] => Array
        (
            [date] => 28/08/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Twelfth Sunday after Pentecost
            [description] => Pentecost 12
            [class] => 3
            [liturgical-colour] => Green
            [spb] => SPB Trinity 11
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [284] => Array
        (
            [date] => 29/08/2022
            [theme] => red
            [season] => Pentecost
            [feast] => The Beheading of St John the Baptist
            [class] => 4
            [liturgical-colour] => Red
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [285] => Array
        (
            [date] => 30/08/2022
            [theme] => white
            [season] => Pentecost
            [feast] => St Augustine of Hippo
            [description] => Bishop and Teacher of the Faith, 430
            [class] => 6
            [liturgical-colour] => White
            [translated] => Translated from 28 August
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [286] => Array
        (
            [date] => 31/08/2022
            [theme] => white
            [season] => Pentecost
            [feast] => St Aidan of Lindisfarne
            [description] => Bishop, 651
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [287] => Array
        (
            [date] => 01/09/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Thursday after Pentecost 12
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [288] => Array
        (
            [date] => 02/09/2022
            [theme] => red
            [season] => Pentecost
            [feast] => The Martyrs of New Guinea
            [description] => Martyrs, 1942
            [class] => 6
            [liturgical-colour] => Red
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [289] => Array
        (
            [date] => 03/09/2022
            [theme] => white
            [season] => Pentecost
            [feast] => St Gregory the Great
            [description] => Bishop and Teacher of the Faith, 604
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [290] => Array
        (
            [date] => 04/09/2022
            [theme] => green
            [season] => Creation
            [feast] => Thirteenth Sunday after Pentecost
            [description] => Pentecost 13
            [class] => 3
            [liturgical-colour] => Green
            [spb] => SPB Trinity 12
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [291] => Array
        (
            [date] => 05/09/2022
            [theme] => green
            [season] => Creation
            [feast] => Monday after Pentecost 13
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [292] => Array
        (
            [date] => 06/09/2022
            [theme] => green
            [season] => Creation
            [feast] => Tuesday after Pentecost 13
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [293] => Array
        (
            [date] => 07/09/2022
            [theme] => green
            [season] => Creation
            [feast] => Wednesday after Pentecost 13
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [294] => Array
        (
            [date] => 08/09/2022
            [theme] => white
            [season] => Creation
            [feast] => The Birth of St Mary
            [description] => Mother of the Lord
            [class] => 5
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [295] => Array
        (
            [date] => 09/09/2022
            [theme] => green
            [season] => Creation
            [feast] => Friday after Pentecost 13
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [296] => Array
        (
            [date] => 10/09/2022
            [theme] => green
            [season] => Creation
            [feast] => Saturday after Pentecost 13
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [297] => Array
        (
            [date] => 11/09/2022
            [theme] => green
            [season] => Creation
            [feast] => Fourteenth Sunday after Pentecost
            [description] => Pentecost 14
            [class] => 3
            [liturgical-colour] => Green
            [spb] => SPB Trinity 13
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [298] => Array
        (
            [date] => 12/09/2022
            [theme] => green
            [season] => Creation
            [feast] => Monday after Pentecost 14
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [299] => Array
        (
            [date] => 13/09/2022
            [theme] => red
            [season] => Creation
            [feast] => St Cyprian of Carthage
            [description] => Bishop and Martyr, 258
            [class] => 6
            [liturgical-colour] => Red
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [300] => Array
        (
            [date] => 14/09/2022
            [theme] => white
            [season] => Creation
            [feast] => Holy Cross Day
            [class] => 5
            [liturgical-colour] => White or Red
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [301] => Array
        (
            [date] => 15/09/2022
            [theme] => green
            [season] => Creation
            [feast] => Thursday after Pentecost 14
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [302] => Array
        (
            [date] => 16/09/2022
            [theme] => white
            [season] => Creation
            [feast] => St Ninian of Whithorn
            [description] => Bishop, 432
            [class] => 4
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [303] => Array
        (
            [date] => 17/09/2022
            [theme] => white
            [season] => Creation
            [feast] => St Hildegard of Bingen
            [description] => Abbess, 1179
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [304] => Array
        (
            [date] => 18/09/2022
            [theme] => green
            [season] => Creation
            [feast] => Fifteenth Sunday after Pentecost
            [description] => Pentecost 15
            [class] => 3
            [liturgical-colour] => Green
            [spb] => SPB Trinity 14
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [305] => Array
        (
            [date] => 19/09/2022
            [theme] => green
            [season] => Creation
            [feast] => Monday after Pentecost 15
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [306] => Array
        (
            [date] => 20/09/2022
            [theme] => red
            [season] => Creation
            [feast] => John Coleridge Patteson
            [description] => Bishop and Martyr, 1871
            [class] => 6
            [liturgical-colour] => Red
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [307] => Array
        (
            [date] => 21/09/2022
            [theme] => red
            [season] => Creation
            [feast] => St Matthew
            [description] => Apostle and Evangelist
            [class] => 4
            [liturgical-colour] => Red
            [emberogation] => Ember Day
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [308] => Array
        (
            [date] => 22/09/2022
            [theme] => green
            [season] => Creation
            [feast] => Thursday after Pentecost 15
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [309] => Array
        (
            [date] => 23/09/2022
            [theme] => white
            [season] => Creation
            [feast] => St Adamnan of Iona
            [description] => Abbot, 704
            [class] => 6
            [liturgical-colour] => White
            [emberogation] => Ember Day
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [310] => Array
        (
            [date] => 24/09/2022
            [theme] => green
            [season] => Creation
            [feast] => Saturday after Pentecost 15
            [description] => Feria
            [liturgical-colour] => Green
            [emberogation] => Ember Day
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [311] => Array
        (
            [date] => 25/09/2022
            [theme] => green
            [season] => Creation
            [feast] => Sixteenth Sunday after Pentecost
            [description] => Pentecost 16
            [class] => 3
            [liturgical-colour] => Green
            [spb] => SPB Trinity 15
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [312] => Array
        (
            [date] => 26/09/2022
            [theme] => white
            [season] => Creation
            [feast] => St Finnbar of Caithness
            [description] => Bishop, c.610
            [class] => 6
            [liturgical-colour] => White
            [translated] => Translated from 25 September
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [313] => Array
        (
            [date] => 27/09/2022
            [theme] => white
            [season] => Creation
            [feast] => Vincent de Paul
            [description] => Priest, 1660
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [314] => Array
        (
            [date] => 28/09/2022
            [theme] => green
            [season] => Creation
            [feast] => Wednesday after Pentecost 16
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [315] => Array
        (
            [date] => 29/09/2022
            [theme] => white
            [season] => Creation
            [feast] => St Michael and All Angels
            [class] => 4
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [316] => Array
        (
            [date] => 30/09/2022
            [theme] => white
            [season] => Creation
            [feast] => St Jerome
            [description] => Priest and Teacher of the Faith, 420
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [317] => Array
        (
            [date] => 01/10/2022
            [theme] => white
            [season] => Creation
            [feast] => St Gregory the Enlightener
            [description] => Bishop, 'Apostle of Armenia', c.332
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [318] => Array
        (
            [date] => 02/10/2022
            [theme] => green
            [season] => Creation
            [feast] => Seventeenth Sunday after Pentecost
            [description] => Pentecost 17 (Harvest Thanksgiving)
            [class] => 3
            [liturgical-colour] => Green
            [spb] => SPB Trinity 16
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [319] => Array
        (
            [date] => 03/10/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Monday after Pentecost 17
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [320] => Array
        (
            [date] => 04/10/2022
            [theme] => white
            [season] => Pentecost
            [feast] => St Francis of Assisi
            [description] => Deacon and Friar, 1226
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [321] => Array
        (
            [date] => 05/10/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Wednesday after Pentecost 17
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [322] => Array
        (
            [date] => 06/10/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Thursday after Pentecost 17
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [323] => Array
        (
            [date] => 07/10/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Friday after Pentecost 17
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [324] => Array
        (
            [date] => 08/10/2022
            [theme] => white
            [season] => Pentecost
            [feast] => Alexander Penrose Forbes
            [description] => Bishop, 1875
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [325] => Array
        (
            [date] => 09/10/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Eighteenth Sunday after Pentecost
            [description] => Pentecost 18
            [class] => 3
            [liturgical-colour] => Green
            [spb] => SPB Trinity 17
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [326] => Array
        (
            [date] => 10/10/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Monday after Pentecost 18
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [327] => Array
        (
            [date] => 11/10/2022
            [theme] => white
            [season] => Pentecost
            [feast] => St Kenneth
            [description] => Abbot, 600
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [328] => Array
        (
            [date] => 12/10/2022
            [theme] => white
            [season] => Pentecost
            [feast] => Elizabeth Fry
            [description] => Social reformer and philanthropist, 1845
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [329] => Array
        (
            [date] => 13/10/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Thursday after Pentecost 18
            [description] => Feria
            [liturgical-colour] => Green
            [bishop] => Ordination of the Rt Revd Mark Strange, Primus, as Bishop of Moray, Ross and Caithness, 2007
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [330] => Array
        (
            [date] => 14/10/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Friday after Pentecost 18
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [331] => Array
        (
            [date] => 15/10/2022
            [theme] => white
            [season] => Pentecost
            [feast] => St Teresa of Avila
            [description] => Teacher of the Faith, 1582
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [332] => Array
        (
            [date] => 16/10/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Nineteenth Sunday after Pentecost
            [description] => Pentecost 19
            [class] => 3
            [liturgical-colour] => Green
            [spb] => SPB Trinity 18
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [333] => Array
        (
            [date] => 17/10/2022
            [theme] => red
            [season] => Pentecost
            [feast] => St Ignatius of Antioch
            [description] => Bishop and Martyr, c.115
            [class] => 6
            [liturgical-colour] => Red
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [334] => Array
        (
            [date] => 18/10/2022
            [theme] => red
            [season] => Pentecost
            [feast] => St Luke
            [description] => Evangelist
            [class] => 4
            [liturgical-colour] => Red
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [335] => Array
        (
            [date] => 19/10/2022
            [theme] => white
            [season] => Pentecost
            [feast] => Henry Martyn
            [description] => Priest and Missionary, 1812
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [336] => Array
        (
            [date] => 20/10/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Thursday after Pentecost 19
            [description] => Feria
            [liturgical-colour] => Green
            [bishop] => Ordination of the Rt Revd Ian Paton as Bishop of St Andrews, Dunkeld and Dunblane, 2018
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [337] => Array
        (
            [date] => 21/10/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Friday after Pentecost 19
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [338] => Array
        (
            [date] => 22/10/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Saturday after Pentecost 19
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [339] => Array
        (
            [date] => 23/10/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Twentieth Sunday after Pentecost
            [description] => Pentecost 20
            [class] => 3
            [liturgical-colour] => Green
            [spb] => SPB Trinity 19
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [340] => Array
        (
            [date] => 24/10/2022
            [theme] => red
            [season] => Pentecost
            [feast] => St James of Jerusalem
            [description] => Martyr, c.62
            [class] => 4
            [liturgical-colour] => Red
            [translated] => Translated from 23 October
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [341] => Array
        (
            [date] => 25/10/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Tuesday after Pentecost 20
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [342] => Array
        (
            [date] => 26/10/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Wednesday after Pentecost 20
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [343] => Array
        (
            [date] => 27/10/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Thursday after Pentecost 20
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [344] => Array
        (
            [date] => 28/10/2022
            [theme] => red
            [season] => Pentecost
            [feast] => St Simon and St Jude
            [description] => Apostles
            [class] => 4
            [liturgical-colour] => Red
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [345] => Array
        (
            [date] => 29/10/2022
            [theme] => red
            [season] => Pentecost
            [feast] => James Hannington
            [description] => Bishop, and Companions, Martyrs, 1885
            [class] => 6
            [liturgical-colour] => Red
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [346] => Array
        (
            [date] => 30/10/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Twenty-first Sunday after Pentecost
            [description] => Pentecost 21
            [class] => 3
            [liturgical-colour] => Green
            [spb] => SPB Trinity 20
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [347] => Array
        (
            [date] => 31/10/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Monday after Pentecost 21
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [348] => Array
        (
            [date] => 01/11/2022
            [theme] => white
            [season] => Pentecost
            [feast] => All Saints
            [description] => All Hallows' Day
            [class] => 2
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [349] => Array
        (
            [date] => 02/11/2022
            [theme] => violet
            [season] => Pentecost
            [feast] => All Souls
            [description] => Commemoration of All the Faithful Departed
            [class] => 5
            [liturgical-colour] => Violet or White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [350] => Array
        (
            [date] => 03/11/2022
            [theme] => white
            [season] => Pentecost
            [feast] => Richard Hooker
            [description] => Priest and Teacher of the Faith, 1660
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [351] => Array
        (
            [date] => 04/11/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Friday after Pentecost 21
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [352] => Array
        (
            [date] => 05/11/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Saturday after Pentecost 21
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [353] => Array
        (
            [date] => 06/11/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Twenty-second Sunday after Pentecost
            [description] => Pentecost 22
            [class] => 3
            [liturgical-colour] => Green
            [spb] => SPB Trinity 21
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [354] => Array
        (
            [date] => 07/11/2022
            [theme] => white
            [season] => Pentecost
            [feast] => St Willibrord
            [description] => Bishop and Missionary, 739
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [355] => Array
        (
            [date] => 08/11/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Tuesday after Pentecost 22
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [356] => Array
        (
            [date] => 09/11/2022
            [theme] => white
            [season] => Pentecost
            [feast] => George Hay Forbes
            [description] => Priest, 1875
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [357] => Array
        (
            [date] => 10/11/2022
            [theme] => white
            [season] => Pentecost
            [feast] => St Leo the Great
            [description] => Bishop and Teacher of the Faith, 461
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [358] => Array
        (
            [date] => 11/11/2022
            [theme] => white
            [season] => Pentecost
            [feast] => Martin of Tours
            [description] => Bishop, c.397
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [359] => Array
        (
            [date] => 12/11/2022
            [theme] => white
            [season] => Pentecost
            [feast] => St Machar
            [description] => Bishop, c.600
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [360] => Array
        (
            [date] => 13/11/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Twenty-third Sunday after Pentecost
            [description] => Pentecost 23 (Remembrance Sunday)
            [class] => 3
            [liturgical-colour] => Green
            [spb] => SPB Trinity 22
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [361] => Array
        (
            [date] => 14/11/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Monday after Pentecost 23
            [description] => Feria
            [liturgical-colour] => Green
            [bishop] => Ordination of Samuel Seabury, Bishop, 1784
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [362] => Array
        (
            [date] => 15/11/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Tuesday after Pentecost 23
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [363] => Array
        (
            [date] => 16/11/2022
            [theme] => white
            [season] => Pentecost
            [feast] => St Margaret of Scotland
            [description] => Queen of Scots, 1093
            [class] => 4
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [364] => Array
        (
            [date] => 17/11/2022
            [theme] => white
            [season] => Pentecost
            [feast] => St Hugh of Lincoln
            [description] => Bishop, 1200
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [365] => Array
        (
            [date] => 18/11/2022
            [theme] => white
            [season] => Pentecost
            [feast] => St Fergus
            [description] => Bishop, c.750
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [366] => Array
        (
            [date] => 19/11/2022
            [theme] => white
            [season] => Pentecost
            [feast] => St Hilda of Whitby
            [description] => Abbess, 680
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [367] => Array
        (
            [date] => 20/11/2022
            [theme] => white
            [season] => Pentecost
            [feast] => The Last Sunday after Pentecost
            [description] => Christ the King (The Sunday before Advent)
            [class] => 3
            [liturgical-colour] => White or Red
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [368] => Array
        (
            [date] => 21/11/2022
            [theme] => white
            [season] => Pentecost
            [feast] => St Columban
            [description] => Bishop, 615
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [369] => Array
        (
            [date] => 22/11/2022
            [theme] => white
            [season] => Pentecost
            [feast] => St Cecilia
            [description] => Martyr, c.230
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [370] => Array
        (
            [date] => 23/11/2022
            [theme] => red
            [season] => Pentecost
            [feast] => St Clement of Rome
            [description] => Bishop and Martyr, c.100
            [class] => 6
            [liturgical-colour] => Red
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [371] => Array
        (
            [date] => 24/11/2022
            [theme] => white
            [season] => Pentecost
            [feast] => Lucy Menzies
            [description] => Scholar and Mystic, 1954
            [class] => 6
            [liturgical-colour] => White
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [372] => Array
        (
            [date] => 25/11/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Friday after the Last Sunday after Pentecost
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [373] => Array
        (
            [date] => 26/11/2022
            [theme] => green
            [season] => Pentecost
            [feast] => Saturday after the Last Sunday after Pentecost
            [description] => Feria
            [liturgical-colour] => Green
            [year-from] => 2021
            [year-to] => 2022
            [rcl] => C
            [daily] => 2
        )

    [374] => Array
        (
        )

)

*/