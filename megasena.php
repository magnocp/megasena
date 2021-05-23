<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>mega sena</title>
    <style>
        h1{
            text-align: center;
            text-transform: uppercase;
            margin: 6px 0 -5px 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container div {
            margin-left: 15px;
        }

        p {
            display: flex;
            text-align: center;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            border: 1px solid #808080;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            font-weight: bold;
            box-shadow: inset 0 0 12px rgba(0, 0, 0, 0.3);
        }

        span {
            display: block;
            height: 2px;
            width: 30px;
            background-color: rgba(0, 0, 0, 0.6);
            margin-left: 11.5px;
            margin-top: -15px;
        }
    </style>
</head>

<body>
    <?php
    $megasena = array();
    $contador = 1;

    while ($contador < 7) {
        $sorteio = rand(1, 60);

        if (!in_array($sorteio, $megasena)) {
            $megasena[] = $sorteio;
            $contador++;
        }
    }

    sort($megasena);

    ?>

    <h1>Números Sorteados</h1>

    <div class="container">       

        <?php
        foreach ($megasena as $value) {
            if ($value < 10) {
                echo "<div>" . "<p>0$value</p>" . "<span></span>" . "</div>";
            } else {
                echo "<div>" . "<p>$value</p>" . "<span></span>" . "</div>";
            }
        }
        ?>
    </div>

</body>

</html>
