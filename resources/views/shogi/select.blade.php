<!DOCTYPE html>
<html>
<head>
    <title>将棋アプリ</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script type="text/javascript" src="{{ asset('js/shogi.js') }}"></script>
</head>
<body>
    <div class="board">
        <form action="/shogi" method="POST" name="moveform">
            {{ csrf_field() }}
            <?php
            for ($c = 1; $c < 10; $c++) {
                echo '<div class="column column' . $c . '" id="column' . $c . '">';
                for ($r = 9; $r > 0; $r--) {
                    $square = $r . $c;
                    if ($square == $bKing['square']) {
                        // 駒マス「王将」
                        echo '<p class="piece row turnb square' . $square . ' selected" id="square' . $square . '">王</p>';
                        echo '<input type="hidden" value="' . $bKing['turn'] . '" name="turn" id="data' . $square . '"></input>';
                    } elseif ($square == $wKing['square']) {
                        // 駒マス「玉将」
                        echo '<p class="piece turnw row square' . $square . ' selected" id="square' . $square . '">玉</p>';
                        echo '<input type="hidden" value="' . $bKing['turn'] . '" name="turn" id="data' . $square . '"></input>';
                    } elseif (in_array($square, $way)) {
                        // 移動可能マス 送信されるデータはここにしかない
                        echo '<input type="hidden" value="' . $square . '" name="square" id="data' . $square . '"></input>';
                        echo '<p class="row square' . $square . ' way" id="square' . $square . '"><input type="button" value="go" onclick="movePiece(' . $square . ')"/></p>';
                    } else {
                        // それ以外のマス
                        echo '<p class="row square' . $square . '" id="square' . $square . '">' . $square . '</p>';
                    }
                }
                echo '</div>';
            }
            ?>
        </form>
    </div>
</body>
</html>
