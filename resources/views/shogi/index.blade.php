<!DOCTYPE html>
<html>
<head>
    <title>将棋アプリ</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <p>{{ $appName }}</p>
    <div class="board">
        <?php 
        for ($c = 1; $c < 10; $c++) {
            echo '<div class="column column' . $c . '" id="column' . $c . '">';
            for ($r = 9; $r > 0; $r--) {
                if ($r . $c == $MyKing) {
                    echo '<p class="row square' . $r . $c . '" id="square' . $r . $c . '"><button><img src="image/my_king_50.png" alt="自分の王将"></button></p>';
                } else {
                    echo '<p class="row square' . $r . $c . '" id="square' . $r . $c . '">' . $r . $c . '</p>';
                }
            }
            echo '</div>';
        } 
        ?>
    </div>
</body>
</html>
