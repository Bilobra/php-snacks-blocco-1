<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->


<?php
$games = [
    [
        'home' => 'Heat',
        'guest' => 'Bulls',
        'homeScore' => 50,
        'guestScore' => 48,
    ],
    [
        'home' => 'Cavaliers',
        'guest' => 'Sixers',
        'homeScore' => 70,
        'guestScore' => 38,
    ],
    [
        'home' => 'Raptors',
        'guest' => 'Celtics',
        'homeScore' => 50,
        'guestScore' => 88,
    ],
    [
        'home' => 'Dragons',
        'guest' => 'Minions',
        'homeScore' => 90,
        'guestScore' => 120,
    ],
];

?>

<ul>
    <?php
    for($i = 0; $i < count($games); $i++){
        $game = $games[$i];
        ?>
        <li>
            <?php 
                echo "{$game['home']} - {$game['guest']} | " ;
            ?>
            <span>
                <?php
                    echo "{$game['homeScore']}-{$game['guestScore']}";
                ?>
            </span>
        </li>
        <?php
    }
    ?>
</ul>