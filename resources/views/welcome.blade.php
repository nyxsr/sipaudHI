<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beginning of Time</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<style>
    body {
        background: rgb(255, 255, 255);
        background: linear-gradient(90deg, rgba(255, 255, 255, 1) 0%, rgba(221, 14, 255, 1) 60%, rgba(124, 0, 255, 1) 100%);
    }

    p.upper {
        font-family: 'Open Sans', sans-serif;
        font-size: 50px;
        color: white;
        font-weight: 700;
        position: absolute;
        left: 50%;
        top: 40%;
        transform: translate(-50%, -50%);
        animation: fadeIn 2s;

    }

    p.under {
        font-family: 'Open Sans', sans-serif;
        font-size: 20px;
        color: white;
        font-weight: 700;
        font-style: italic;
        position: absolute;
        left: 50%;
        top: 48%;
        transform: translate(-50%, -50%);
        animation: fadeIn 2s;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }
</style>

<body>
    <p class="upper">Welcome to SI PAUD-HI</p>
    <p class="under">Coming Soon</p>
</body>

</html>
