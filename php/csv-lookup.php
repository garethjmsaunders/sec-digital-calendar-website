<?php
    $updateDate             = 'Saturday 19 November 2016';
    $updateVersion          = '2.1';
    $filename               = './php/csv-lookup-calendar.csv';

// Open the CSV file, if it exists.
if (($handle = fopen("$filename", "r")) !== FALSE)
{
    // Set the parent multidimensional array key to 0.
    $nn = 0;
    while (($data = fgetcsv($handle, 0, ",")) !== FALSE) {
        # Count the total keys in the row.
        $c = count($data);
        # Populate the multidimensional array.
        for ($x=0;$x<$c;$x++)
        {
            $csvarray[$nn][$x] = $data[$x];
        }
        $nn++;
    }

    // Close the File.
    fclose($handle);
} else {
    echo('CANNOT OPEN FILE');
}

// Take the row-ified data and columnize the array.
function columnizeArray($csvarray)
{
    $array = array();
    foreach ($csvarray as $key=>$value)
    {
        // Re-parse into useful array data.
        if ($key == 0)
        {
            foreach ($value AS $key2=>$value2)
            {
                $array[$key2] = array();
                $array[$key2][] = $value2;
            }
        }
        else if ($key > 0)
        {
            foreach ($value as $key3=>$value3)
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

function groupColumns($array = null) {
    $lookup = array();
    foreach ($array as $k=>$v) {
        // process each column
        // $k = column number
        // $v = array of rows
        if ($k == 0) {} else{ // working on column 2 or higher
            $lookup[$v[0]] = array();
            foreach ($array[0] as $k1=>$v1) {
                if ($v1 > 0) { // ignore the column heading
                    // store the first column variable in as the key.
                    // Store the value associated with this item as the value.
                    $lookup[$v[0]][$v1] = $v[$k1];
                }
            }
     }
    }
    return $lookup;
}

    $lookup = groupColumns(columnizeArray($csvarray));

//  Get today's date which is the lookup key for feast and colour
    $todaysDate = date("d/m/Y");

//  Lookup today's feast day (column 2 of the CSV file)
    $todayFeast = $lookup['feast'][$todaysDate];

//  Lookup today's colour (column 3 of the CSV file)
    $todayColor = $lookup['colour'][$todaysDate];

//  Lookup Year, e.g. 2013-2014 (column 4 of the CSV file)
    $currentYear = $lookup['year'][$todaysDate];

//  Lookup RCL Sunday readings year (column 5 of the CSV file)
    $currentRcl = $lookup['rcl'][$todaysDate];

//  Lookup RCL Sunday readings year (column 6 of the CSV file)
    $currentDaily = $lookup['daily'][$todaysDate];

// Lookup whether to show last year's downloads
    $showLastYear = $lookup['showold'][$todaysDate];

//  Get hex code for colour

    switch($todayColor)
    {
        case 'green':
            $todayColorHex = '#3aa30b';
            break;

        case 'red':
            $todayColorHex = '#a30b3a';
            break;

        case 'violet':
            $todayColorHex = '#750ba3';
            break;

        case 'white':
            $todayColorHex = '#f5af11';
            break;

        default:
            $todayColorHex = '#e71686'; // pink
    }

?>