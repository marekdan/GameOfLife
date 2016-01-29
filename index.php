<head>
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
</head>

<body>

<?php

require_once("./src/gameoflife.php");

// schemat 1
$game = new GameOfLife(12);
$game->setCell(5, 4, true);
$game->setCell(5, 5, true);
$game->setCell(5, 6, true);

$game->setCell(4, 5, true);
$game->setCell(6, 5, true);

$n = 5; //ilość wyników jakie chcę zobaczyć
$game->printBoard();
for($i = 0; $i < $n; $i++){
    $game->computeNextStep();
    $game->printBoard();
}


echo "<hr>";
//schemat 2 pulsar
$game = new GameOfLife(16);
$game->setCell(2, 4, true);
$game->setCell(2, 5, true);
$game->setCell(2, 6, true);

$game->setCell(2, 10, true);
$game->setCell(2, 11, true);
$game->setCell(2, 12, true);


$game->setCell(7, 4, true);
$game->setCell(7, 5, true);
$game->setCell(7, 6, true);

$game->setCell(7, 10, true);
$game->setCell(7, 11, true);
$game->setCell(7, 12, true);


$game->setCell(9, 4, true);
$game->setCell(9, 5, true);
$game->setCell(9, 6, true);

$game->setCell(9, 10, true);
$game->setCell(9, 11, true);
$game->setCell(9, 12, true);


$game->setCell(14, 4, true);
$game->setCell(14, 5, true);
$game->setCell(14, 6, true);

$game->setCell(14, 10, true);
$game->setCell(14, 11, true);
$game->setCell(14, 12, true);

$game->setCell(4, 2, true);
$game->setCell(5, 2, true);
$game->setCell(6, 2, true);

$game->setCell(10, 2, true);
$game->setCell(11, 2, true);
$game->setCell(12, 2, true);

$game->setCell(4, 7, true);
$game->setCell(5, 7, true);
$game->setCell(6, 7, true);

$game->setCell(10, 7, true);
$game->setCell(11, 7, true);
$game->setCell(12, 7, true);

$game->setCell(4, 9, true);
$game->setCell(5, 9, true);
$game->setCell(6, 9, true);

$game->setCell(10, 9, true);
$game->setCell(11, 9, true);
$game->setCell(12, 9, true);

$game->setCell(4, 14, true);
$game->setCell(5, 14, true);
$game->setCell(6, 14, true);

$game->setCell(10, 14, true);
$game->setCell(11, 14, true);
$game->setCell(12, 14, true);

$n = 30; //ilość wyników jakie chcę zobaczyć
$game->printBoard();
for($i = 0; $i < $n; $i++){
    $game->computeNextStep();
    $game->printBoard();
}
?>

</body>
