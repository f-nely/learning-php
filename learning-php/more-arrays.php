<?php

    // Indexable array
    $colors = ['red', 'blue', 'green'];

    $colors[] = 'yellow';

    echo '<pre>';

    print_r($colors);

    echo '<p>' . $colors[1] . '</p>';

    // Associative arrays
    $home_town = array(
        'Joe' => 'Middletown, NY',
        'Erin' => 'West Chester, PA',
        'Dave' => 'Exton, PA',
        'Brian' => 'Grand Rapids, MI',
    );

    foreach ($home_town as $key => $value) {
        echo "{$key}: {$value} <br>";
    }

    echo '<p>' . $home_town['Dave'] . '</p>';

    // Multidimensional arrays
    $brothers = [
        'Joe' => [
            'age' => 34,
            'job' => 'techer',
            'state' => 'PA',
        ],
        'Phil' => [
            'age' => 33,
            'job' => 'photographer',
            'state' => 'NY',
        ],
        'Mike' => [
            'age' => 32,
            'job' => 'logistics',
            'state' => 'NY',
        ],
        'Rob' => [
            'age' => 29,
            'job' => 'manager',
            'state' => 'FL',
        ]
    ];

    var_dump($brothers);

    echo '<p>' . $brothers['Rob']['state'] . '</p>';