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

        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            animation: fadeIn 0.3s ease;
        }

        .modal-btn,
        .send-btn {
            padding: 10px 20px;
            margin-top: 15px;
            border: none;
            background-color: rgb(0, 47, 255);
            color: white;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
        }

        .modal-btn:hover,
        .send-btn:hover {
            background-color: rgb(0, 38, 204);
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 24px;
            cursor: pointer;
        }

        .close:hover {
            color: black;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.8);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="title">Click qosımshası arqalı tóleń</div>

        <div class="qr-code-container">
            <img src="{{ asset('storage/images/20250406_205707.jpg') }}" alt="Click Shtrix Kodi" class="qr-code">
        </div>

        <div class="description">
            Joqarıdaǵı shtrix kodtı Click qosımshası arqalı skaner qılıp, tólemdi ámelge asırıń. Tólem summası {{ $summa }}
        </div>

        <div class="footer">
            <button onclick="openModal()" class="modal-btn">Chekti jiberiw</button>
        </div>
    </div>
    <div id="checkModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <p>Chekti jiberiw</p>
            <form action="{{ route('send_check') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" name="check_image" value="Jiberiw" id="">
                <input type="submit" name="send_check" class="send-btn" value="Jiberiw" id="">
            </form>
        </div>
    </div>
</body>
<script>
    function openModal() {
        document.getElementById("checkModal").style.display = "flex";
    }

    function closeModal() {
        document.getElementById("checkModal").style.display = "none";
    }

    window.onclick = function(event) {
        const modal = document.getElementById("checkModal");
        if (event.target === modal) {
            closeModal();
        }
    }
</script>

</html>