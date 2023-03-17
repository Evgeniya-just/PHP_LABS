<!DOCTYPE html>
<html lnag="en">

<head>
    <meta charset="UTF-8">

</head>

<body>
    <form action="" method="POST" class="form-calculator">
        <div class="forg-group">
            <input type="text" name="text" id="name" class="form-control">
        </div>
        <div>
            <input type="submit" value="решить" class="btn btn-prinary">
        </div>
        <div>
            <?php
            if (!empty($_POST['text'])) {
                $finish = $_POST['text'][0];
                for ($i = 1; $i <= strlen($_POST['text']) - 1; $i++) {
                    if ($_POST['text'][$i] === "+" && ($i === 2 || $i === 6 || $i === 10 || $i === 14)) {
                        $finish = $finish + $_POST['text'][$i + 2];
                    }
                    if ($_POST['text'][$i] === "/" && ($i === 2 || $i === 6 || $i === 10 || $i === 14)) {
                        if ((int)$_POST['text'][$i + 2] !== 0) {
                            $finish = $finish / $_POST['text'][$i + 2];
                        } else {
                            echo ("Ошибка, деление на ноль");
                            break;
                        }
                    }
                    if ($_POST['text'][$i] === "*" && ($i === 2 || $i === 6 || $i === 10 || $i === 14)) {
                        $finish = $finish * $_POST['text'][$i + 2];
                    }
                    if ($_POST['text'][$i] === "-" && ($i === 2 || $i === 6 || $i === 10 || $i === 14)) {
                        $finish = $finish - $_POST['text'][$i + 2];
                    }
                    if ($_POST['text'][$i] === "^" && ($i === 2 || $i === 6 || $i === 10 || $i === 14)) {
                        $finish = $finish ** $_POST['text'][$i + 2];
                    }
                }
                $calculating = strpos($_POST['text'], '=') + 2;
                if ((int)substr($_POST['text'], $calculating) === $finish) {
                    echo "равенство верно";
                }
            }
            ?>
        </div>
    </form>
</body>

</html>