<?php

/**
 * CSV Lookup
 * This script reads in the csv-lookup-calendar.csv file and parses
 * it for useful information for the website homepage (only).
 *
 * @package     SEC digital calendar
 * @subpackage  CSV lookup
 * @version     1.3.0 2018-11-23
 * @author      Gareth J M Saunders <gjms1@st-andrews.ac.uk>
 * @license     http://opensource.org/licenses/gpl-license.php, GNU Public License
 * @since       1.0.0
 */



/**
 * Initiate variables.
 *
 * @version     1.3.0 2019-11-21
 * @author      Gareth J M Saunders <gjms1@st-andrews.ac.uk>
 * @license     http://opensource.org/licenses/gpl-license.php, GNU Public License
 * @since       1.0.0
 */

$updateDate    = 'Thursday 21 November 2019';
$updateVersion = '2.4.0';
$filename      = './php/csv-lookup-redesign.csv';

// OLD 2018-2019 iCalendar feed
$showOldIcalendar = 'https://calendar.google.com/calendar/ical/if7dt6qt198hg42jrve3upe5bs%40group.calendar.google.com/public/basic.ics';

// NEW 2019-2020 iCalendar feed
$showNewIcalendar = 'https://calendar.google.com/calendar/ical/cbo88e250n8pdaok06jqafd98c%40group.calendar.google.com/public/basic.ics';




/**
 * Open the CSV file, if it exists.
 *
 * @version     1.0.0 2013-12-04
 * @author      Gareth J M Saunders <gjms1@st-andrews.ac.uk>
 * @license     http://opensource.org/licenses/gpl-license.php, GNU Public License
 * @since       1.0.0
 */

if (($handle = fopen("$filename", "r")) !== FALSE)
{
    // Set the parent multidimensional array key to 0.
    $nn = 0;
    while (($data = fgetcsv($handle, 0, ",")) !== FALSE) {
        // Count the total keys in the row.
        $c = count($data);
        // Populate the multidimensional array.
        for ($x=0;$x<$c;$x++)
        {
            $csvarray[$nn][$x] = $data[$x];
        }
        $nn++;
    }

    // Close the file.
    fclose($handle);
} else {
    echo('CANNOT OPEN FILE');
}




/**
 * FUNCTION: Take the row-ified data and columnize the array.
 *
 * @version     1.0.0 2013-12-04
 * @author      Gareth J M Saunders <gjms1@st-andrews.ac.uk>
 * @license     http://opensource.org/licenses/gpl-license.php, GNU Public License
 * @since       0.1.0
 */

function columnizeArray( $csvarray )
{
    $array = array();
    foreach ( $csvarray as $key=>$value )
    {
        // Re-parse into useful array data.
        if ( $key === 0 )
        {
            foreach ( $value as $key2=>$value2 )
            {
                $array[$key2] = array();
                $array[$key2][] = $value2;
            }
        }
        else if ( $key > 0 )
        {
            foreach ( $value as $key3=>$value3 )
            {
                $array[$key3][] = $value3;
            }
        }
        else
        {
            // nothing
        }
    }
    return $array;
}




/**
 * FUNCTION: Look up information in the CSV array.
 * Create a multidimensional array using date as the key.
 * Columns: date,feast,colour,year,rcl,daily,showold,nextyear
 *
 * @version     1.0.0 2013-12-04
 * @author      Gareth J M Saunders <gjms1@st-andrews.ac.uk>
 * @license     http://opensource.org/licenses/gpl-license.php, GNU Public License
 * @since       1.0.0
*/

// TODO: Change the variable names to make the code easier to read.

function groupColumns( $array = null ) {
    $lookup = array();
    foreach ( $array as $k=>$v ) {
        // process each column
        // $k = column number
        // $v = array of rows
        if ( $k === 0 ) {} else { // working on column 2 or higher
            $lookup[$v[0]] = array();
            foreach ( $array[0] as $k1=>$v1 ) {
                if ($v1 > 0) { // ignore the column heading
                    // Store the first column variable in as the key.
                    // Store the value associated with this item as the value.
                    // TODO: Explain exactly what this does, with an example.
                    $lookup[$v[0]][$v1] = $v[$k1];
                }
            }
        }
    }
    return $lookup;
}



/**
 * Look up today's date, feast, colour, and church years from the CSV file.
 *
 * @version     1.0.0 2013-12-04
 * @author      Gareth J M Saunders <gjms1@st-andrews.ac.uk>
 * @license     http://opensource.org/licenses/gpl-license.php, GNU Public License
 * @since       1.0.0
 */

/*
csv-lookup-redesign.csv columns

A date
B theme
C season
D feast
E description
F class
G liturgical-colour
H translated
I SPB
J emberogation
K bishop
L year
M rcl
N daily
*/

// function secDisplay($x) {
//     $lookup = groupColumns( columnizeArray( $csvarray ) );
//     $d = new DateTime('', new DateTimeZone('Europe/London'));
//     $todaysDate = $d->format('d/m/Y');
//     $y = $lookup['season'][$todaysDate];
//     echo($y);
// }



    $lookup = groupColumns( columnizeArray( $csvarray ) );

//  CSV column A - Get today's date which is the lookup key for feast and colour
    // $todaysDate = date("d/m/Y");
    $d = new DateTime('', new DateTimeZone('Europe/London'));
    $todaysDate = $d->format('d/m/Y');


//  CSV column B - Lookup today's colour (theme)
    $todayColor = $lookup['theme'][$todaysDate];

    switch( $todayColor ) {
        case 'green'  : $todayColorHex = '#3aa30b'; break;
        case 'red'    : $todayColorHex = '#a30b3a'; break;
        case 'violet' : $todayColorHex = '#750ba3'; break;
        case 'white'  : $todayColorHex = '#f5af11'; break;
        default       : $todayColorHex = '#e71686'; // pink
    }


//  CSV column C - Look up today's season
    $todaySeason = $lookup['season'][$todaysDate];

//  CSV column D - Lookup today's feast day name
    $todayFeast = $lookup['feast'][$todaysDate];




//  CSV column L - Lookup Year, e.g. 2018-2019
    $currentYear = $lookup['year'][$todaysDate];

//  CSV column M - Lookup RCL Sunday readings year
    $currentRcl = $lookup['rcl'][$todaysDate];

//  CSV column N - Lookup RCL Daily readings year
    $currentDaily = $lookup['daily'][$todaysDate];

// -----------------------------------------------------------------------------
// DEPRECATED

//  CSV column ??? - Lookup next year, e.g. 2016-2017
    $showNextYear = $lookup['nextyear'][$todaysDate];

//  CSV column ??? - Lookup whether to show last year's downloads
    $showLastYear = $lookup['showold'][$todaysDate];