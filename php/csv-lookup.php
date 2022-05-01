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

$filename      = './php/csv-lookup.csv';



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
    foreach ( $array as $day=>$dataForFeastDay ) {
        // process each column
        // $day = column number
        // $dataForFeastDay = array of rows
        if ( $day === 0 ) {} else { // working on column 2 or higher
            $lookup[$dataForFeastDay[0]] = array();
            foreach ( $array[0] as $day1=>$dataForFeastDay1 ) {
                if ($dataForFeastDay1 > 0) { // ignore the column heading
                    // Store the first column variable in as the key.
                    // Store the value associated with this item as the value.
                    // TODO: Explain exactly what this does, with an example.
                    $lookup[$dataForFeastDay[0]][$dataForFeastDay1] = $dataForFeastDay[$day1];
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
I spb
J emberogation
K bishop
L year
M rcl
N daily
*/

    $lookup = groupColumns(columnizeArray($csvarray));

//  CSV column A - Get today's date which is the lookup key for feast and colour
    // $todaysDate = date("d/m/Y");
    $d = new DateTime('', new DateTimeZone('Europe/London'));
    $todaysDate = $d->format('d/m/Y');

    // Today + 1 (Tomorrow)
    $dplusone   = new DateTime('+1 day');
    $dayTwoDate = $dplusone->format('d/m/Y');
    $dayTwoDay  = $dplusone->format('D d F');

    // Today + 2
    $dplustwo     = new DateTime('+2 day');
    $dayThreeDate = $dplustwo->format('d/m/Y');
    $dayThreeDay  = $dplustwo->format('D d F');

    // Today + 3
    $dplusthree  = new DateTime('+3 day');
    $dayFourDate = $dplusthree->format('d/m/Y');
    $dayFourDay  = $dplusthree->format('D d F');

    // Today + 4
    $dplusfour   = new DateTime('+4 day');
    $dayFiveDate = $dplusfour->format('d/m/Y');
    $dayFiveDay  = $dplusfour->format('D d F');

    // Today + 5
    $dplusfive  = new DateTime('+5 day');
    $daySixDate = $dplusfive->format('d/m/Y');
    $daySixDay  = $dplusfive->format('D d F');

    // Today + 6
    $dplussix     = new DateTime('+6 day');
    $daySevenDate = $dplussix->format('d/m/Y');
    $daySevenDay  = $dplussix->format('D d F');

    // Today + 7
    $dplusseven   = new DateTime('+7 day');
    $dayEightDate = $dplusseven->format('d/m/Y');    
    $dayEightDay  = $dplusseven->format('D d F');    


//  CSV column B - Look up today's colour (theme)
    $todayColor = $lookup['theme'][$todaysDate];
    $todayTheme = $lookup['theme'][$todaysDate];

//  CSV column C - Look up today's season
    $todaySeason = $lookup['season'][$todaysDate];

//  CSV column D - Look up today's feast day name
    $todayFeast = $lookup['feast'][$todaysDate];
    $dayTwoFeast = $lookup['feast'][$dayTwoDate];
    $dayThreeFeast = $lookup['feast'][$dayThreeDate];
    $dayFourFeast = $lookup['feast'][$dayFourDate];
    $dayFiveFeast = $lookup['feast'][$dayFiveDate];
    $daySixFeast = $lookup['feast'][$daySixDate];
    $daySevenFeast = $lookup['feast'][$daySevenDate];
    $dayEightFeast = $lookup['feast'][$dayEightDate];

//  CSV column E - Look up today's feast description
    $todayFeastDescription = $lookup['description'][$todaysDate];
    $dayTwoFeastDescription = $lookup['description'][$dayTwoDate];
    $dayThreeFeastDescription = $lookup['description'][$dayThreeDate];
    $dayFourFeastDescription = $lookup['description'][$dayFourDate];
    $dayFiveFeastDescription = $lookup['description'][$dayFiveDate];
    $daySixFeastDescription = $lookup['description'][$daySixDate];
    $daySevenFeastDescription = $lookup['description'][$daySevenDate];
    $dayEightFeastDescription = $lookup['description'][$dayEightDate];

//  CSV column F - Look up today's class
    $todayFeastClass = $lookup['class'][$todaysDate];
    $dayTwoFeastClass = $lookup['class'][$dayTwoDate];
    $dayThreeFeastClass = $lookup['class'][$dayThreeDate];
    $dayFourFeastClass = $lookup['class'][$dayFourDate];
    $dayFiveFeastClass = $lookup['class'][$dayFiveDate];
    $daySixFeastClass = $lookup['class'][$daySixDate];
    $daySevenFeastClass = $lookup['class'][$daySevenDate];
    $dayEightFeastClass = $lookup['class'][$dayEightDate];

//  CSV column G - Look up today's liturgical colour
    $todayLiturgicalColour = $lookup['liturgical-colour'][$todaysDate];
    $dayTwoLiturgicalColour = $lookup['liturgical-colour'][$dayTwoDate];
    $dayThreeLiturgicalColour = $lookup['liturgical-colour'][$dayThreeDate];
    $dayFourLiturgicalColour = $lookup['liturgical-colour'][$dayFourDate];
    $dayFiveLiturgicalColour = $lookup['liturgical-colour'][$dayFiveDate];
    $daySixLiturgicalColour = $lookup['liturgical-colour'][$daySixDate];
    $daySevenLiturgicalColour = $lookup['liturgical-colour'][$daySevenDate];
    $dayEightLiturgicalColour = $lookup['liturgical-colour'][$dayEightDate];

//  CSV column H - Look up today's translation
    $todayFeastTranslated = $lookup['translated'][$todaysDate];

//  CSV column I - Look up today's SPB
    $todayFeastSpb = $lookup['spb'][$todaysDate];

//  CSV column J - Look up today's Ember or Rogation day
    $todayEmberogation = $lookup['emberogation'][$todaysDate];

//  CSV column K - Look up today's Bishop ordination anniversary
    $todayBishop = $lookup['bishop'][$todaysDate];

//  CSV column L - Look up Year, e.g. 2018-2019
    $todayYearFrom = $lookup['year-from'][$todaysDate];

//  CSV column M - Look up Year, e.g. 2018-2019
    $todayYearTo = $lookup['year-to'][$todaysDate];

//  CSV column N - Look up RCL Sunday readings year
    $todayRcl = $lookup['rcl'][$todaysDate];

//  CSV column O - Lookup RCL Daily readings year
    $todayDaily = $lookup['daily'][$todaysDate];