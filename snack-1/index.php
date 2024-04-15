<?php
$matches = [
    [
        'home_team' => [
            'name' =>'Olimpia Milano',
            'score' => 82
        ],

        'away_team' => [
            'name' =>'Virtus Bologna',
            'score' => 78
        ],
    ],
    [
        'home_team' => [
            'name' =>'Cremona',
            'score' => 76
        ],

        'away_team' => [
            'name' =>'Reggiana',
            'score' => 85
        ],
    ],
    [
        'home_team' => [
            'name' =>'Varese',
            'score' => 72
        ],

        'away_team' => [
            'name' =>'Dinamo Sassari',
            'score' => 68
        ],
    ]
    ];

    foreach ($matches as $match) {
        $homeTeam = $match['home_team'];
        $awayTeam = $match['away_team'];
        
        //var_dump($homeTeam['name']);
        echo $homeTeam['name'] .' - '. $awayTeam['name'] .' | '. $homeTeam['score'] .' - '. $awayTeam['score'] .'<br>';
    }

?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 1</title>
</head>
<body>
    <ul>
        <li></li>
    </ul>
</body>
</html> -->