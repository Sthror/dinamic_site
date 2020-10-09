<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container-flex {
            display: flex;
            flex-direction: column;
            max-width: 768px;
            margin: auto;
        }

        .oval {
            border-radius: 50px;
        }

        .block {
            padding: 20px;
            text-align: center;
            background-color: rgba(0, 0, 0, .1);
            font-size: 2rem;
            font-weight: bold;
            position: relative;
            margin-bottom: 80px;
        }

        .block:not(:last-child):after,
        .row:after {
            content: ">>>";
            display: flex;
            align-items: center;
            position: absolute;
            width: 60px;
            height: 60px;
            transform: rotate(90deg);
            bottom: -70px;
            left: calc(50% - 30px);
        }

        .row:after {
            bottom: 10px;
            font-size: 2rem;
        }

        .row {
            display: flex;
            position: relative;
        }

        .row .block {
            margin: 0 10px 70px;
        }
    </style>
</head>

<body>
    <div class="container-flex">
        <div class="oval block">Начало</div>
        <div class="pryamougolnik block">если вторая цифра pass1 более 5, то шифр р1.р2.р3</div>
        <div class="pryamougolnik block">если вторая цифра pass1 менее 5, то шифр р2.р3.р1</div>        
        <div class="oval block">Конец</div>
    </div>
</body>

</html>