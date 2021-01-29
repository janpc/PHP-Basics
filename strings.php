<?php
    echo 'Print a text string: Hola';
    echo '<br><br>';

    $variable='variable';
    echo "Print a text string that interpret variables: $variable";
    echo '<br><br>';

    echo 'Concatenate a previously declared variable in a text string: ' . $variable;
    echo '<br><br>';

    echo 'Execute the function that allows you to replace text in a string: <br>';
    $text='Hello World of PHP';
    echo 'Initial text: ' . $text . '<br>';
    $replaced = str_replace('World', 'Replaced', $text);
    echo 'Replaced text: ' . $replaced;
    echo '<br><br>';

    echo 'Execute the function that allows you to replace text in a string (without taking into account upper / lower case): <br>';
    echo 'Initial text: ' . $text . '<br>';
    $replaced = str_ireplace("world", 'Replaced', $text);
    echo 'Replaced text: ' . $replaced;
    echo '<br><br>';

    echo 'Execute the function that allows you to write a text N times: <br>';
    echo str_repeat("Repeated Text.<br>", 3);
    echo '<br><br>';

    echo 'Execute the function that allows to obtain the length of a text string: <br>';
    echo "$text has " . strlen($text) . " characters.";
    echo '<br><br>';

    echo "Executes the function that allows to obtain the position of the first occurrence of a text within a text string: <br>";
    $l='o';
    $pos=strpos($text, $l);
    echo "The first $l is in the $pos position in $text";
    echo '<br><br>';
    
    echo "Execute the function that allows a text string to be capitalized: <br>";
    echo 'Initial text: ' . $text . '.<br>';
    echo 'Capitalized text: ' . strtoupper($text);
    echo '.<br><br>';

    echo "Execute the function that allows you to transform a text string to lowercase: <br>";
    echo 'Initial text: ' . $text . '.<br>';
    echo 'Lower text: ' . strtolower($text);
    echo '.<br><br>';

    echo "Execute the function that allows to obtain a text substring from the position: <br>";
    echo "The substring starting at $pos in $text is ".substr($text, $pos);
?>