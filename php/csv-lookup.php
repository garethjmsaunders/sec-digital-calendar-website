<?php

/**
 * CSV Lookup
 * This script reads in the csv-lookup-calendar.csv file and parses
 * it for useful information for the website homepage (only).
 *
 * @package     SEC digital calendar
 * @subpackage  CSV lookup
 * @version     2.1.0 2022-05-02
 * @author      Gareth J M Saunders <garethjmsaunders@gmail.com>
 * @license     http://opensource.org/licenses/gpl-license.php, GNU Public License
 * @since       1.0.0
 *
 * ------------------------------------------
 * 
 * TABLE OF CONTENTS
 * 
 * 1. CSV DATA TO ARRAY
 *    Open the CSV file (if it exists, otherwise throw an error),
 *    then copy data from CSV file into a multidimensional array as rows of data.
 * 
 * 2. FUNCTION: transform_data_to_columns()
 *    Transform data in array from rows to columns
 * 
 * 3. FUNCTION: transform_data_to_column_by_label
 * 
 */


// Report all PHP errors
// error_reporting(E_ALL);


/**
 * 1. CSV DATA TO ARRAY
 * 
 * @version     1.2.0 2022-05-02
 * @author      Gareth J M Saunders <garethjmsaunders@gmail.com>
 * @license     http://opensource.org/licenses/gpl-license.php, GNU Public License
 * @since       1.0.0
 * 
 * Open the CSV file (if it exists, otherwise throw an error),
 * then copy data from CSV file into a multidimensional array as rows of data.
 * The primary key is the row number, starting at zero.
 * This basically recreates the CSV file but in an array with each row being a different day/feast.
 * 
 * OUTPUT
 * print_r($csv_data_array_as_rows);
 * 
    Array
    (
        [1] => Array
            (
                [0] => 18/11/2021
                [1] => white
                [2] => Pentecost
                [3] => St Fergus
                [4] => Bishop, c.750
                [5] => 6
                [6] => White
                [7] => etc...
            )
        [2] => Array
            (
                [0] => 19/11/2021
                [1] => white
                [2] => Pentecost
                [3] => St Hilda of Whitby
                [4] => Abbess, 680
                [5] => 6
                [6] => White
                [7] => etc...
            )
 */


function load_csv_file ( $file_path )
{

    # $filename = './php/csv-lookup.csv';

    if (( $handle = fopen( "$file_path", "r" )) !== FALSE )
    {
        // Set the parent multidimensional array key to 0.
        $array_key = 0;

        // Loop through CSV file rows and copy data into multidimensional array
        // Each row's index is the row number (starting at 0).
        while (($data_rows = fgetcsv($handle, 0, ",")) !== FALSE) {

            // Count the total keys in the row.
            $total_rows_in_csv_file = count($data_rows);
            
            // Populate the multidimensional array.
            for ( $current_data_row = 0; $current_data_row < $total_rows_in_csv_file; $current_data_row++ )
            {
                $csv_data_array_as_rows [ $array_key ][ $current_data_row ] = $data_rows[ $current_data_row ];
            }

            $array_key++;
        }

        // Close the file.
        return $csv_data_array_as_rows;
        fclose($handle);

        /* DEBUG */
        // echo("<h1>Read CSV file</h1><pre style='color:white; text-align: left;'>"); print_r($csv_data_array_as_rows); echo("</pre>");

    } else {
        echo("<h1 style='color:red'>CANNOT OPEN FILE</h1>");
    }
}

/**
 * 2. FUNCTION: transform_data_to_columns()
 *    Transform data in array from rows to columns
 *
 * @version     1.1.0 2022-05-01
 * @author      Gareth J M Saunders <garethjmsaunders@gmail.com>
 * @license     http://opensource.org/licenses/gpl-license.php, GNU Public License
 * @since       0.1.0
 * @todo        Should I not just do this once rather than every time I need to look up something?
 * 
 * Next, we need to take the CSV data with each row as a different day 
 * and instead transform the array so that we're now looking at columns of data
 * by type of data e.g. date, theme, feast, etc. with the column header as the first item
 * in each array
 * 
 * OUTPUT
 * print_r($columnized_array);
 * 
   Array
   (
       [0] => Array
           (
               [0] => date
               [1] => 18/11/2021
               [2] => 19/11/2021
               [3] => 20/11/2021
               [4] => 21/11/2021
               [5] => 22/11/2021
               [6] => 23/11/2021
               [7] etc...
            )
        [1] => Array
            (
                [0] => theme
                [1] => white
                [2] => white
                [3] => green
                [4] => white
                [5] => white
                [6] => red
                [7] etc...
 */

function transform_data_to_columns ( $csv_data_array_as_rows ) 
{
    $columnized_array = array();

    foreach ( $csv_data_array_as_rows as $row=>$row_data )
    {

        // This is the top row of data, the column labels
        if ( $row === 0 )
        {
            foreach ( $row_data as $column=>$column_name_label )
            {
                $columnized_array[$column] = array();
                $columnized_array[$column][] = $column_name_label;
            }
        }
        // Now read the rest of the rows of the file into an array 
        else if ( $row > 0 )
        {
            foreach ( $row_data as $column=>$data_value )
            {
                $columnized_array[$column][] = $data_value;
            }
        }
        else
        {
            // nothing
        }
    }
    
    /* DEBUG */
    # echo("<h1>Columnized array</h1><pre style='color:white;'>"); print_r($columnized_array); echo("</pre>");

    return $columnized_array;
}



/**
 * 3. FUNCTION: transform_data_to_column_by_label
 *
 * @version     1.0.1 2022-05-01
 * @author      Gareth J M Saunders <garethjmsaunders@gmail.com>
 * @license     http://opensource.org/licenses/gpl-license.php, GNU Public License
 * @since       1.0.0
 * 
 * Look up information in the CSV array.
 * Create a multidimensional array using date as the primary key.
 *
 * OUTPUT
 * print_r($csv_data_array_grouped_by_labels);
 
   Array
   (
       [date] => Array
           (
               [18/11/2021] => 18/11/2021
               [19/11/2021] => 19/11/2021
               [20/11/2021] => 20/11/2021
               [21/11/2021] => 21/11/2021
               etc.
            )
        [theme] => Array
            (
                [18/11/2021] => white
                [19/11/2021] => white
                [20/11/2021] => green
                [21/11/2021] => white
                etc.
            )
        [season] => Array
            (
                [18/11/2021] => Pentecost
                [19/11/2021] => Pentecost
                [20/11/2021] => Pentecost
                [21/11/2021] => Pentecost
                etc.
            )
*/

function transform_data_to_column_by_label( $csv_data_array_as_columns ) {
    
    $transformed_data = array();
    foreach ( $csv_data_array_as_columns as $column=>$data_for_each_feast_day ) {
        
        // $column = column number
        // $data_for_each_feast_day = array of rows

        // Create a new array for each column label, e.g. [date][], [theme][], [season][], etc.
        $transformed_data[$data_for_each_feast_day[0]] = array();

        // Loop through the rest of the data...
        // Store the first column data (the date) as the key.
        // Store the value associated with this item as the value.
        // e.g. [theme][18/11/2021] => white; [season][18/11/2021] => Pentecost; etc.
        foreach ( $csv_data_array_as_columns[0] as $day_as_key=>$feast_day_data ) {
            if ($feast_day_data > 0) { // ignore the column heading
                $transformed_data[$data_for_each_feast_day[0]][$feast_day_data] = $data_for_each_feast_day[$day_as_key];
            }
        }

    }
    return $transformed_data;
}



/* ACTION -- DO THE THING */

// 1. Load CSV file
$csv_data_array_as_rows = load_csv_file('./php/csv-lookup.csv');

// 2. Transform data into columns
$csv_data_array_as_columns = transform_data_to_columns($csv_data_array_as_rows);

// 3. Transform data from columns to grouped by column label
$csv_data_array_grouped_by_labels = transform_data_to_column_by_label($csv_data_array_as_columns);

// Give this array a more user-friendly 
$lookup = $csv_data_array_grouped_by_labels;

/* DEBUGGING */
$debug = 0;

$debug_function_number = array(
    null,
    $csv_data_array_as_rows,
    $csv_data_array_as_columns,
    $csv_data_array_grouped_by_labels
);
if ($debug === 0){/*OFF*/} else {
    echo("<pre style='color:white; text-align:left;'><h3>Function $debug</h3>"); print_r($debug_function_number[$debug]); echo("</pre>");
}


/**
 * Look up today's date, feast, colour, and church years from the CSV file.
 *
 * @version     1.0.1 2022-05-01
 * @author      Gareth J M Saunders <garethjmsaunders@gmail.com>
 * @license     http://opensource.org/licenses/gpl-license.php, GNU Public License
 * @since       1.0.0
 * @source      csv-lookup-redesign.csv
*/

/* Today */
date_default_timezone_set('Europe/London');
$today = new DateTime();
$date_key = $today->format('d/m/Y');                                    // CSV column A
$today_theme                = $lookup['theme'][$date_key];              // CSV column B
$today_season               = $lookup['season'][$date_key];             // CSV column C
$today_feast                = $lookup['feast'][$date_key];              // CSV column D
$today_description          = $lookup['description'][$date_key];        // CSV column E
$today_class                = $lookup['class'][$date_key];              // CSV column F
$today_liturgical_colour    = $lookup['liturgical-colour'][$date_key];  // CSV column G
$today_translated           = $lookup['translated'][$date_key];         // CSV column H
$today_spb                  = $lookup['spb'][$date_key];                // CSV column I
$today_emberogation         = $lookup['emberogation'][$date_key];       // CSV column J
$today_bishop               = $lookup['bishop'][$date_key];             // CSV column K
$today_year_from            = $lookup['year-from'][$date_key];          // CSV column L
$today_year_to              = $lookup['year-to'][$date_key];            // CSV column M
$today_rcl                  = $lookup['rcl'][$date_key];                // CSV column N
$today_daily                = $lookup['daily'][$date_key];              // CSV column O
$today_readings_collect     = $lookup['readings-collect'][$date_key];   // CSV column P

/* Show next n days... */
$max_days_to_show = 14;
$max_days_to_show++;

// Top of tables
$table_data = '<table class="homepage-next-feast-table"><tbody>';

// Table data
for ( $counter = 1; $counter < $max_days_to_show; $counter++ )
{
    $date = new DateTime("+$counter day");
    $next_date = $date->format('d/m/Y');
    
    $check_day = $date->format('l');

    if ($check_day == 'Sunday') {
        $is_it_sunday = "sunday";
    } else {
        $is_it_sunday = "mtwtfs";
    }

    $next_day_text = $date->format('l j F');

    $next_feast = $lookup['feast'][$next_date];

    /* If feast is not blank show the data... */
    if ($next_feast != '') {

        $next_description = $lookup['description'][$next_date];
        $next_class = $lookup['class'][$next_date];
            if ($next_class !=='')
            {
                $next_class = ', (' . $next_class . ')';
            } else {
                $next_class = ', ';
            };
        $next_liturgical_colour = $lookup['liturgical-colour'][$next_date];
        $next_readings_collect = nl2br($lookup['readings-collect'][$next_date]);

        $table_data = $table_data . "<tr class='next-date-feast-row $is_it_sunday' title='Toggle row for readings and collect'>";
        $table_data = $table_data . "    <td class='next-date-cell'>$next_day_text</td>";
        $table_data = $table_data . "    <td class='next-feast-cell'>$next_feast, $next_description$next_class $next_liturgical_colour</td>";
        $table_data = $table_data . "</tr>";
        $table_data = $table_data . "<tr class='next-readings-row'>";
        $table_data = $table_data . "    <td colspan='2' class='next-readings-cell''><div class='next-readings-div next-readings-div-hide'>$next_readings_collect</div></td>";
        $table_data = $table_data . "</tr>";

    } else {
        // nothing
    }
}


// Bottom of table
$table_data = $table_data . "<tr><td><a href='calendar/' class='view-more'>View more…</a></td></tr>";
$table_data = $table_data . "</tbody></table>";
