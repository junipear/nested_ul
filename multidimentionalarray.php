<?php
$wines = [
    'Red' => [
        'Burgundy' => [
                'Pinot noir', 'Gamay'
             ],
         'California' => [
                  'Merlot', 'Zin'
            ],
        'South Austrailia' => [
             'Shiraz', 'Grenache'
             ]
], 'White' => [
        'Burgundy' => [
            'Chardonnay', 'Pinot blanc'
        ],
        'California' => [
            'Chardonnay', 'Pinot blanc'
        ],
        'South Australia' => [
            'Reisling', 'Semillon'
        ],
    ]
    ];
    require './ListBuilder.php';
    $ul = new ListBuilder($wines);
    echo $ul;
?>
