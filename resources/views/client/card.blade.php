<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Click Shtrix Kodi</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            text-align: center;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 400px;
            width: 90%;
        }

        .qr-code-container {
            margin: 20px 0;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 10px;
            display: inline-block;
        }

        .qr-code {
            width: 200px;
            height: 200px;
            object-fit: contain;
            border: 1px solid #eee;
        }

        .description {
            margin-top: 20px;
            color: #555;
            line-height: 1.6;
        }

        .title {
            color: rgb(0, 47, 255);
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .footer {
            margin-top: 25px;
            font-size: 14px;
            color: #888;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="title">Click qosımshası arqalı tóleń</div>

        <div class="qr-code-container">
            <!-- O'z rasmingizni shu joyga qo'yishingiz kerak -->
            <img src="/images/20250406_205707.jpg" alt="Click Shtrix Kodi" class="qr-code">
        </div>

        <div class="description">
            Joqarıdaǵı shtrix kodtı Click qosımshası arqalı skaner qılıp, tólemdi ámelge asırıń. Tólem summası {{ $summa }}
        </div>

        <div class="footer">
            Checkti <a href="https://t.me/dawrandev">dawrandev</a> qa jiberiń
        </div>
    </div>
</body>

</html>