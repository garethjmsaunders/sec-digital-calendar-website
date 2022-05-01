<?php

/**
 * CSV Lookup
 * This script reads in the csv-lookup-calendar.csv file and parses
 * it for useful information for the website homepage (only).
 *
 * @package     SEC digital calendar
 * @subpackage  CSV lookup
 * @version     1.3.1 2022-05-01
 * @author      Gareth J M Saunders <garethjmsaunders@gmail.com>
 * @license     http://opensource.org/licenses/gpl-license.php, GNU Public License
 * @since       1.0.0
 */



/**
 * Initiate variables.
 *
 * @version     1.3.1 2022-05-01
 * @author      Gareth J M Saunders <garethjmsaunders@gmail.com>
 * @license     http://opensource.org/licenses/gpl-license.php, GNU Public License
 * @since       1.0.0
 */

$filename      = './php/csv-lookup.csv';


/**
 * Open the CSV file, if it exists 
 * and read in all the data to a multidimensional array.
 *
 * @version     1.1.0 2022-05-01
 * @author      Gareth J M Saunders <garethjmsaunders@gmail.com>
 * @license     http://opensource.org/licenses/gpl-license.php, GNU Public License
 * @since       1.0.0
 */

if (($handle = fopen("$filename", "r")) !== FALSE)
{
    // Set the parent multidimensional array key to 0.
    $array_key = 0;
    while (($data_rows = fgetcsv($handle, 0, ",")) !== FALSE) {
        // Count the total keys in the row.
        $total_keys_in_row = count($data_rows);
        // Populate the multidimensional array.
        for ($current_data_row = 0; $current_data_row < $total_keys_in_row; $current_data_row++)
        {
            $csv_multidimensional_array[$array_key][$current_data_row] = $data_rows[$current_data_row];
        }
        $array_key++;
    }

    // Close the file.
    echo("<h1>Read CSV file</h1><pre style='color:white;'>"); print_r($csv_multidimensional_array); echo("</pre>");
    fclose($handle);
} else {
    echo("<h1 style='color:red'>CANNOT OPEN FILE</h1>");
}


/**
 * FUNCTION: Take the row-ified data and columnize the array
 *
 * @version     1.1.0 2022-05-01
 * @author      Gareth J M Saunders <garethjmsaunders@gmail.com>
 * @license     http://opensource.org/licenses/gpl-license.php, GNU Public License
 * @since       0.1.0
 */

function columnize_array ( $csv_multidimensional_array )
{
    $array = array();
    foreach ( $csv_multidimensional_array as $row=>$row_data )
    {

        // This is the top row of data, the column labels
        if ( $row === 0 )
        {
            foreach ( $row_data as $column=>$column_name_label )
            {
                $array[$column] = array();
                $array[$column][] = $column_name_label;
            }
        }
        // Now read the rest of the rows of the file into an array 
        else if ( $row > 0 )
        {
            foreach ( $row_data as $column=>$data_value )
            {
                $array[$column][] = $data_value;
            }
        }
        else
        {
            // nothing
        }
    }
    # echo("<h1>columnize_array</h1><pre style='color:white;'>"); print_r($array); echo("</pre>");
    return $array;
}



/**
 * FUNCTION: Look up information in the CSV array.
 * Create a multidimensional array using date as the key.
 * Columns: date,feast,colour,year,rcl,daily,showold,nextyear
 *
 * @version     1.0.1 2022-05-01
 * @author      Gareth J M Saunders <garethjmsaunders@gmail.com>
 * @license     http://opensource.org/licenses/gpl-license.php, GNU Public License
 * @since       1.0.0
*/

// TODO: Change the variable names to make the code easier to read.

function group_columns( $array = null ) {
    $lookup = array();
    foreach ( $array as $column=>$data_for_each_feast_day ) {
        // process each column
        // $column = column number
        // $data_for_each_feast_day = array of rows
        if ( $column === 0 ) {
            // DO NOTHING -- Ignore the date
            // The first column is now the date, we don't need [18/11/2021][18/11/2021], etc !!
        } else {
            // Create a new array for each column label, e.g. [theme][], [season][], etc.
            $lookup[$data_for_each_feast_day[0]] = array();

            // Loop through the rest of the data...
            // Store the first column data (the date) as the key.
            // Store the value associated with this item as the value.
            // e.g. [theme][18/11/2021] => white; [season][18/11/2021] => Pentecost; etc.
            foreach ( $array[0] as $day_as_key=>$feast_day_data ) {
                if ($feast_day_data > 0) { // ignore the column heading
                    $lookup[$data_for_each_feast_day[0]][$feast_day_data] = $data_for_each_feast_day[$day_as_key];
                }
            }
        }
    }
    # echo("<h1>Group columns</h1><pre style='color:white;'>"); print_r($lookup); echo("</pre>");
    return $lookup;
}




/**
 * Look up today's date, feast, colour, and church years from the CSV file.
 *
 * @version     1.0.1 2022-05-01
 * @author      Gareth J M Saunders <garethjmsaunders@gmail.com>
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

    $lookup = group_columns(columnize_array($csv_multidimensional_array));

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