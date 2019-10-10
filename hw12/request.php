<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Переданные данные</title>
</head>
<body style="font-size: 18px;">
    <h1>Переданные данные из формы:</h1>
    <pre><?php
        foreach($_REQUEST as $key => $value) {
            if (is_array($value))
                echo "$key -> [".implode(",", $value)."]\n";
            else
                echo "$key -> $value\n";
        }
    ?></pre>
</body>
</html>