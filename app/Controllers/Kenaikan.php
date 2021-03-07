<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AC</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            border-box
        }

        .container {
            /* background-color: red; */
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .button {
            background-color: #4CAF50;
            /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 15px;

        }
    </style>
</head>

<body>
    <div class="container">
        <a class="button" href="<?= base_url('home/ac') ?>">Ganti Oli</a>
        <a class="button" href="<?= base_url('home/Perawatan') ?>">Ganti</a>
        <a class="button" href="">Ganti</a>
        <a class="button" href="">Service</a>
    </div>
</body>

</html>