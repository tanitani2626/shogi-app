<!DOCTYPE html>
<html>
<head>
    <title>将棋アプリ</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="board">
        <?php
        for ($c = 1; $c < 10; $c++) {
            echo '<div class="column column' . $c . '" id="column' . $c . '">';
            for ($r = 9; $r > 0; $r--) {
                $square = $r . $c;
                if ($square == $bKing['square']) {
                    // 王将
                    echo '<p class="piece row turnb square' . $square . '" id="square' . $square . '"><a style="text-decoration:none" href="' . action('App\Http\Controllers\ShogiController@select', $bKing['turn'] .  ':' . $bKing['piece'] . ':' . $r . ':' . $c) . '">王</a></p>';
                } elseif ($square == $wKing['square']) {
                    // 玉将
                    echo '<p class="piece row turnw square' . $square . '" id="square' . $square . '"><a style="text-decoration:none" href="' . action('App\Http\Controllers\ShogiController@select', $wKing['turn'] .  ':' . $wKing['piece'] . ':' . $r . ':' . $c) . '">玉</a></p>';
                } else {
                    echo '<p class="row square' . $square . '" id="square' . $square . '">' . $square . '</p>';
                }
            }
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
