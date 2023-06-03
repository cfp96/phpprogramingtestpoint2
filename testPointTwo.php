<?php

function repeatingSubstrings($string) {
    $substringCounts = [];

    // Iterate over the string given, considering substrings of length 4
    for ($i = 0; $i < strlen($string) - 3; $i++) {
        $substring = substr($string, $i, 4);

        if (isset($substringCounts[$substring])) {
            $substringCounts[$substring]++;
        } else {
            $substringCounts[$substring] = 1;
        }
    }

    // Filter substrings with occurrence count greater than 1
    $repeatingSubstrings = array_filter($substringCounts, function ($count) {
        return $count > 1;
    });

    return $repeatingSubstrings;
}

// Example usage
$string = "haaagagagagaghssja";
$result = repeatingSubstrings($string);

// Output the repeating substrings and their occurrence counts
foreach ($result as $substring => $count) {
    echo "$substring: $count\n";
}
?>